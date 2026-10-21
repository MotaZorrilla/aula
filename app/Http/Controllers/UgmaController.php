<?php

namespace App\Http\Controllers;

use App\Actions\Ugma\EvaluateStudentAction;
use App\Actions\Ugma\RecordWarRoomDecisionAction;
use App\Actions\Ugma\RegisterStudentAction;
use App\Actions\Ugma\ToggleModuleLockAction;
use App\Domain\Ugma\ModuleUnitEnum;
use App\Http\Requests\Ugma\AdminLoginRequest;
use App\Http\Requests\Ugma\GradeStudentRequest;
use App\Http\Requests\Ugma\RegisterStudentRequest;
use App\Http\Requests\Ugma\WarRoomDecisionRequest;
use App\Models\UgmaModuleLock;
use App\Models\UgmaStudent;
use App\Models\UgmaWarRoomDecision;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UgmaController extends Controller
{
    /**
     * Hub Central del Diplomado en Gerencia de Obras UGMA.
     * Mapea las 6 Unidades Oficiales del Excalidraw y los 4 Cimientos.
     */
    public function index(): View
    {
        $units = ModuleUnitEnum::getOfficialUnits();
        $foundations = ModuleUnitEnum::getFoundations();
        $locks = UgmaModuleLock::pluck('is_locked', 'module_key')->toArray();

        return view('ugma.index', compact('units', 'foundations', 'locks'));
    }

    // ==========================================
    // LAS 6 UNIDADES OFICIALES (EXCALIDRAW 2026)
    // ==========================================

    public function unidad1(): View
    {
        return view('ugma.cde-iso19650', [
            'unitNumber' => 1,
            'unitTitle' => 'UNIDAD 1: Introducción básica al BIM',
            'competency' => ModuleUnitEnum::COMPETENCY_GENERAL,
        ]);
    }

    public function unidad2(): View
    {
        return view('ugma.ia-control-obra', [
            'unitNumber' => 2,
            'unitTitle' => 'UNIDAD 2: Tecnología y digitalización en campo',
            'competency' => ModuleUnitEnum::COMPETENCY_GENERAL,
        ]);
    }

    public function unidad3(): View
    {
        return view('ugma.energia-solar-sostenibilidad', [
            'unitNumber' => 3,
            'unitTitle' => 'UNIDAD 3: Construcciones sostenibles',
            'focusSection' => 'leed-edge-esg',
            'competency' => ModuleUnitEnum::COMPETENCY_GENERAL,
        ]);
    }

    public function unidad4(): View
    {
        return view('ugma.energia-solar-sostenibilidad', [
            'unitNumber' => 4,
            'unitTitle' => 'UNIDAD 4: Eficiencia energética y materiales ecológicos',
            'focusSection' => 'solar-ashrae-ggbs',
            'competency' => ModuleUnitEnum::COMPETENCY_GENERAL,
        ]);
    }

    public function unidad5(): View
    {
        return view('ugma.energia-solar-sostenibilidad', [
            'unitNumber' => 5,
            'unitTitle' => 'UNIDAD 5: Gestión de residuos de obra',
            'focusSection' => 'rcd-economia-circular',
            'competency' => ModuleUnitEnum::COMPETENCY_GENERAL,
        ]);
    }

    public function unidad6(): View
    {
        return view('ugma.taller-integrador', [
            'unitNumber' => 6,
            'unitTitle' => 'UNIDAD 6: Taller Integrador de Grado & War Room Virtual',
            'competency' => ModuleUnitEnum::COMPETENCY_GENERAL,
        ]);
    }

    // ==========================================
    // LOS 4 CIMIENTOS DEL DIPLOMADO (MÓDULOS I - IV)
    // ==========================================

    public function modulo1(): View
    {
        return view('ugma.modulo-1-organizacion');
    }

    public function modulo2(): View
    {
        return view('ugma.modulo-2-costos-evm');
    }

    public function modulo3(): View
    {
        return view('ugma.modulo-3-marco-legal');
    }

    public function modulo4(): View
    {
        return view('ugma.modulo-4-lean-calidad');
    }

    // ==========================================
    // BÓVEDA Y ADMINISTRACIÓN DOCENTE
    // ==========================================

    public function boveda(): View
    {
        return view('ugma.boveda');
    }

    public function admin(): View
    {
        $students = UgmaStudent::with('grade')->latest()->get();
        $locks = UgmaModuleLock::pluck('is_locked', 'module_key')->toArray();
        $decisionsCount = UgmaWarRoomDecision::count();

        return view('ugma.admin', compact('students', 'locks', 'decisionsCount'));
    }

    // ==========================================
    // ALIASES HISTÓRICOS (COMPATIBILIDAD 100%)
    // ==========================================

    public function masterclassBim(): View
    {
        return view('ugma.masterclass-bim');
    }

    public function cdeIso19650(): View
    {
        return $this->unidad1();
    }

    public function clashDetection(): View
    {
        return view('ugma.clash-detection');
    }

    public function planificacion4d5d(): View
    {
        return view('ugma.planificacion-4d-5d');
    }

    public function iaControlObra(): View
    {
        return $this->unidad2();
    }

    public function energiaSolarSostenibilidad(): View
    {
        return $this->unidad4();
    }

    public function tallerIntegrador(): View
    {
        return $this->unidad6();
    }

    // ==========================================
    // API ENDPOINTS / ACCIONES CLEAN ARCHITECTURE
    // ==========================================

    public function apiRegister(RegisterStudentRequest $request, RegisterStudentAction $action): JsonResponse
    {
        $result = $action->execute($request->validated());

        return response()->json($result, 201);
    }

    public function apiWarRoomDecision(WarRoomDecisionRequest $request, RecordWarRoomDecisionAction $action): JsonResponse
    {
        $option = (int) $request->input('option_selected');
        $studentId = $request->input('student_id');
        $ip = $request->ip();
        $userAgent = $request->userAgent();

        $result = $action->execute($option, $studentId, $ip, $userAgent);

        return response()->json($result, 200);
    }

    public function apiGrade(GradeStudentRequest $request, EvaluateStudentAction $action): JsonResponse
    {
        $validated = $request->validated();
        $grade = $action->execute(
            (int) $validated['student_id'],
            (float) $validated['phase1_bim'],
            (float) $validated['phase2_clash'],
            (float) $validated['phase3_evm'],
            (float) $validated['phase4_defense'],
            $validated['observations'] ?? null
        );

        return response()->json([
            'success' => true,
            'grade' => $grade,
            'message' => 'Calificación vigesimal guardada exitosamente.',
        ], 200);
    }

    public function apiToggleLock(Request $request, ToggleModuleLockAction $action): JsonResponse
    {
        $request->validate(['module_key' => 'required|string']);
        $lock = $action->execute($request->input('module_key'), $request->boolean('is_locked', null));

        return response()->json([
            'success' => true,
            'lock' => $lock,
            'message' => "Estado de bloqueo actualizado para {$lock->module_key}.",
        ]);
    }

    public function apiAdminLogin(AdminLoginRequest $request): JsonResponse
    {
        $email = $request->input('email');
        $password = $request->input('password');

        if ($email === 'hector@motazorrilla.com' && $password === 'Baralo00.') {
            return response()->json([
                'success' => true,
                'role' => 'admin',
                'name' => 'Ing. Héctor Mota Zorrilla',
                'message' => 'Sesión docente autenticada.',
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Credenciales docentes inválidas.',
        ], 401);
    }
}
