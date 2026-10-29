<?php

namespace App\Http\Controllers;

use App\Actions\Ugma\AdmitStudentPresenceAction;
use App\Actions\Ugma\EvaluateStudentAction;
use App\Actions\Ugma\GetEvaluationSubmissionsAction;
use App\Actions\Ugma\GetLiveLeaderboardAction;
use App\Actions\Ugma\GetLiveQuizStateAction;
use App\Actions\Ugma\GradeEvaluationSubmissionAction;
use App\Actions\Ugma\PingLivePresenceAction;
use App\Actions\Ugma\RecordWarRoomDecisionAction;
use App\Actions\Ugma\RegisterStudentAction;
use App\Actions\Ugma\SubmitDayEvaluationAction;
use App\Actions\Ugma\SubmitQuizAnswerAction;
use App\Actions\Ugma\ToggleModuleLockAction;
use App\Actions\Ugma\TriggerLiveQuestionAction;
use App\Domain\Ugma\ModuleUnitEnum;
use App\Http\Requests\Ugma\AdminLoginRequest;
use App\Http\Requests\Ugma\GradeStudentRequest;
use App\Http\Requests\Ugma\RegisterStudentRequest;
use App\Http\Requests\Ugma\WarRoomDecisionRequest;
use App\Models\UgmaEvaluation;
use App\Models\UgmaLivePresence;
use App\Models\UgmaModuleLock;
use App\Models\UgmaQuizQuestion;
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
        return view('ugma.construcciones-sostenibles', [
            'unitNumber' => 3,
            'unitTitle' => 'UNIDAD 3: Construcciones sostenibles',
            'competency' => 'Comprender y aplicar los fundamentos, principios y normativas de las construcciones sostenibles en proyectos de edificación.',
        ]);
    }

    public function unidad4(): View
    {
        return view('ugma.eficiencia-energetica-materiales', [
            'unitNumber' => 4,
            'unitTitle' => 'UNIDAD 4: Eficiencia energética y materiales ecológicos',
            'competency' => 'Evaluar estrategias de eficiencia energética, selección de materiales ecológicos y tecnologías aplicadas para el ahorro energético.',
        ]);
    }

    public function construccionesSostenibles(): View
    {
        return $this->unidad3();
    }

    public function eficienciaEnergeticaMateriales(): View
    {
        return $this->unidad4();
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
        $quizQuestions = UgmaQuizQuestion::orderBy('unit_number')->get();
        $livePresences = UgmaLivePresence::active(60)->latest()->get();

        return view('ugma.admin', compact('students', 'locks', 'decisionsCount', 'quizQuestions', 'livePresences'));
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
        return view('ugma.energia-solar-sostenibilidad');
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

    // ==========================================
    // PRESENCIA EN VIVO Y QUIZ TIPO MENTIMETER
    // ==========================================

    public function apiLivePresencePing(Request $request, PingLivePresenceAction $action): JsonResponse
    {
        $validated = $request->validate([
            'session_token' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|email',
        ]);

        $result = $action->execute(
            $validated['session_token'],
            $validated['name'],
            $validated['email'],
            $request->ip()
        );

        return response()->json($result);
    }

    public function apiLivePresenceAdmit(Request $request, AdmitStudentPresenceAction $action): JsonResponse
    {
        $validated = $request->validate([
            'presence_id' => 'nullable|integer',
            'admit_all' => 'nullable|boolean',
            'status' => 'nullable|boolean',
        ]);

        $result = $action->execute(
            $validated['presence_id'] ?? null,
            $request->boolean('admit_all', false),
            $request->boolean('status', true)
        );

        return response()->json($result);
    }

    public function apiLivePresenceList(): JsonResponse
    {
        $activePresences = UgmaLivePresence::active(60)->latest()->get();

        return response()->json([
            'success' => true,
            'presences' => $activePresences,
            'total_online' => $activePresences->count(),
            'admitted_count' => $activePresences->where('is_admitted', true)->count(),
        ]);
    }

    public function apiLiveQuizTrigger(Request $request, TriggerLiveQuestionAction $action): JsonResponse
    {
        $validated = $request->validate([
            'question_id' => 'nullable|integer',
        ]);

        $result = $action->execute($validated['question_id'] ?? null);

        return response()->json($result);
    }

    public function apiLiveQuizState(Request $request, GetLiveQuizStateAction $action): JsonResponse
    {
        $result = $action->execute($request->input('email'), $request->input('name'));

        return response()->json($result);
    }

    public function apiLiveQuizAnswer(Request $request, SubmitQuizAnswerAction $action): JsonResponse
    {
        $validated = $request->validate([
            'question_id' => 'required|integer',
            'chosen_index' => 'required|integer|min:0|max:3',
            'name' => 'nullable|string',
            'email' => 'nullable|email',
            'response_time_ms' => 'nullable|integer',
        ]);

        $result = $action->execute(
            (int) $validated['question_id'],
            (int) $validated['chosen_index'],
            $validated['name'] ?? null,
            $validated['email'] ?? null,
            (int) ($validated['response_time_ms'] ?? 0)
        );

        return response()->json($result);
    }

    public function apiLiveQuizLeaderboard(GetLiveLeaderboardAction $action): JsonResponse
    {
        $result = $action->execute(10);

        return response()->json($result);
    }

    public function apiLiveQuizQuestions(): JsonResponse
    {
        $questions = UgmaQuizQuestion::orderBy('unit_number')->get();

        return response()->json([
            'success' => true,
            'questions' => $questions,
        ]);
    }

    public function evaluacionDia12(): View
    {
        return view('ugma.evaluacion-dia-1-2');
    }

    public function apiSubmitEvaluation(Request $request, SubmitDayEvaluationAction $action): JsonResponse
    {
        $validated = $request->validate([
            'student_name' => 'required|string',
            'student_email' => 'required|email',
            'session_token' => 'nullable|string',
            'time_spent_seconds' => 'nullable|integer',
            'answers' => 'required|array',
            'bcf_ticket_code' => 'nullable|string',
        ]);

        $result = $action->execute($validated);

        return response()->json($result);
    }

    public function apiGetEvaluations(Request $request, GetEvaluationSubmissionsAction $action): JsonResponse
    {
        $code = $request->input('code', 'EVAL-DIA-1-2');
        $result = $action->execute($code);

        return response()->json($result);
    }

    public function apiGradeEvaluation(Request $request, GradeEvaluationSubmissionAction $action): JsonResponse
    {
        $validated = $request->validate([
            'id' => 'required|integer',
            'score_day1' => 'nullable|numeric|min:0|max:10',
            'score_day2' => 'nullable|numeric|min:0|max:10',
            'total_score' => 'nullable|numeric|min:0|max:20',
            'status' => 'nullable|string',
            'instructor_feedback' => 'nullable|string',
            'feedback' => 'nullable|string',
        ]);

        if (! isset($validated['instructor_feedback']) && isset($validated['feedback'])) {
            $validated['instructor_feedback'] = $validated['feedback'];
        }

        $result = $action->execute((int) $validated['id'], $validated);

        return response()->json($result);
    }

    public function apiResetEvaluations(): JsonResponse
    {
        UgmaEvaluation::query()->delete();

        return response()->json([
            'success' => true,
            'message' => 'Entregas de examen reiniciadas exitosamente.',
            'total_submissions' => 0,
        ]);
    }

    public function apiResetStudents(): JsonResponse
    {
        UgmaLivePresence::query()->delete();
        UgmaStudent::query()->delete();

        $defaults = [
            ['cedula' => 'V-20.123.456', 'nombre' => 'Ing. Carlos Mendoza', 'email' => 'carlos.mendoza@alumnos.ugma.edu.ve', 'specialty' => 'Ing. Civil · Alumno UGMA'],
            ['cedula' => 'V-22.789.012', 'nombre' => 'Arq. Valentina Silva', 'email' => 'valentina.silva@alumnos.ugma.edu.ve', 'specialty' => 'Arquitecta · Alumna UGMA'],
            ['cedula' => 'V-18.456.789', 'nombre' => 'Ing. Roberto Briceño', 'email' => 'roberto.briceno@alumnos.ugma.edu.ve', 'specialty' => 'Ing. de Costos · Alumno UGMA'],
            ['cedula' => 'V-21.345.678', 'nombre' => 'Ing. María Elena Salazar', 'email' => 'maria.salazar@alumnos.ugma.edu.ve', 'specialty' => 'Ing. Inspector · Alumna UGMA'],
        ];

        foreach ($defaults as $s) {
            UgmaStudent::create($s);
        }

        return response()->json([
            'success' => true,
            'message' => 'Listado de alumnos reiniciado a los 4 estudiantes oficiales de cátedra.',
            'total_students' => count($defaults),
        ]);
    }

    public function apiToggleEvalCard(Request $request): JsonResponse
    {
        $lock = UgmaModuleLock::firstOrNew(['module_key' => 'evaluacion_dia_1_2']);

        if ($request->has('enabled')) {
            $lock->is_locked = ! $request->boolean('enabled');
        } elseif ($request->has('is_locked')) {
            $lock->is_locked = $request->boolean('is_locked');
        } else {
            $lock->is_locked = ! $lock->is_locked;
        }
        $lock->save();

        $isEnabled = ! $lock->is_locked;

        return response()->json([
            'success' => true,
            'enabled' => $isEnabled,
            'is_locked' => $lock->is_locked,
            'message' => $isEnabled
                ? 'Tarjeta de Evaluación Oficial habilitada exitosamente para estudiantes inscritos.'
                : 'Tarjeta de Evaluación Oficial inhabilitada para estudiantes.',
        ]);
    }

    public function apiGetEvalCardStatus(): JsonResponse
    {
        $lock = UgmaModuleLock::where('module_key', 'evaluacion_dia_1_2')->first();
        // Por defecto, habilitada a menos que esté explícitamente bloqueada
        $isEnabled = $lock ? ! $lock->is_locked : true;

        return response()->json([
            'success' => true,
            'enabled' => $isEnabled,
            'is_locked' => ! $isEnabled,
        ]);
    }
}
