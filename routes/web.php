<?php

use App\Http\Controllers\AulaHubController;
use App\Http\Controllers\UgmaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Aula Virtual MotaZorrilla & Diplomado UGMA
|--------------------------------------------------------------------------
*/

// Portal Central Aula Virtual MotaZorrilla
Route::get('/', [AulaHubController::class, 'index'])->name('hub.index');

// Diplomado en Gerencia de Obras (UGMA / Postgrado)
$registerUgmaRoutes = function () {
    // Hub Principal
    Route::get('/', [UgmaController::class, 'index'])->name('index');

    // Las 6 Unidades Curriculares Oficiales (Excalidraw 2026)
    Route::get('/unidad-1-bim', [UgmaController::class, 'unidad1'])->name('unidad-1');
    Route::get('/unidad-2-digitalizacion-campo', [UgmaController::class, 'unidad2'])->name('unidad-2');
    Route::get('/unidad-3-construcciones-sostenibles', [UgmaController::class, 'unidad3'])->name('unidad-3');
    Route::get('/unidad-4-eficiencia-energetica-materiales', [UgmaController::class, 'unidad4'])->name('unidad-4');
    Route::get('/unidad-5-gestion-residuos-rcd', [UgmaController::class, 'unidad5'])->name('unidad-5');
    Route::get('/unidad-6-war-room-integrador', [UgmaController::class, 'unidad6'])->name('unidad-6');

    // Los 4 Cimientos del Diplomado (Módulos I al IV)
    Route::get('/modulo-1-organizacion', [UgmaController::class, 'modulo1'])->name('modulo-1');
    Route::get('/modulo-2-costos-evm', [UgmaController::class, 'modulo2'])->name('modulo-2');
    Route::get('/modulo-3-marco-legal', [UgmaController::class, 'modulo3'])->name('modulo-3');
    Route::get('/modulo-4-lean-calidad', [UgmaController::class, 'modulo4'])->name('modulo-4');

    // Bóveda de Descargas y Panel Administrativo Docente
    Route::get('/boveda', [UgmaController::class, 'boveda'])->name('boveda');
    Route::get('/boveda.html', [UgmaController::class, 'boveda']);
    Route::get('/admin', [UgmaController::class, 'admin'])->name('admin');
    Route::get('/admin.html', [UgmaController::class, 'admin']);

    // Aliases para compatibilidad con enlaces estáticos .html
    Route::get('/modulo-1-organizacion.html', [UgmaController::class, 'modulo1']);
    Route::get('/modulo-2-costos-evm.html', [UgmaController::class, 'modulo2']);
    Route::get('/modulo-3-marco-legal.html', [UgmaController::class, 'modulo3']);
    Route::get('/modulo-4-lean-calidad.html', [UgmaController::class, 'modulo4']);

    // Rutas históricas (Compatibilidad con enlaces previos)
    Route::get('/masterclass-bim', [UgmaController::class, 'masterclassBim'])->name('masterclass-bim');
    Route::get('/cde-iso19650', [UgmaController::class, 'cdeIso19650'])->name('cde-iso19650');
    Route::get('/clash-detection', [UgmaController::class, 'clashDetection'])->name('clash-detection');
    Route::get('/planificacion-4d-5d', [UgmaController::class, 'planificacion4d5d'])->name('planificacion-4d-5d');
    Route::get('/ia-control-obra', [UgmaController::class, 'iaControlObra'])->name('ia-control-obra');
    Route::get('/energia-solar-sostenibilidad', [UgmaController::class, 'energiaSolarSostenibilidad'])->name('energia-solar-sostenibilidad');
    Route::get('/taller-integrador', [UgmaController::class, 'tallerIntegrador'])->name('taller-integrador');

    // Módulo de Evaluación Interactiva (Semana 1: Día 1 y 2)
    Route::get('/evaluacion-dia-1-2', [UgmaController::class, 'evaluacionDia12'])->name('evaluacion-dia-1-2');
    Route::get('/evaluacion-dia-1-2.html', [UgmaController::class, 'evaluacionDia12']);

    // API Endpoints (Clean Architecture Actions)
    Route::prefix('api')->name('api.')->group(function () {
        Route::post('/register', [UgmaController::class, 'apiRegister'])->name('register');
        Route::post('/war-room/decision', [UgmaController::class, 'apiWarRoomDecision'])->name('war-room.decision');
        Route::post('/admin/grade', [UgmaController::class, 'apiGrade'])->name('admin.grade');
        Route::post('/admin/toggle-lock', [UgmaController::class, 'apiToggleLock'])->name('admin.toggle-lock');
        Route::post('/admin/login', [UgmaController::class, 'apiAdminLogin'])->name('admin.login');

        // Presencia en Vivo & Live Quiz (Tipo Mentimeter)
        Route::post('/live-presence/ping', [UgmaController::class, 'apiLivePresencePing'])->name('live-presence.ping');
        Route::post('/live-presence/admit', [UgmaController::class, 'apiLivePresenceAdmit'])->name('live-presence.admit');
        Route::get('/live-presence/list', [UgmaController::class, 'apiLivePresenceList'])->name('live-presence.list');
        Route::post('/live-quiz/trigger', [UgmaController::class, 'apiLiveQuizTrigger'])->name('live-quiz.trigger');
        Route::get('/live-quiz/state', [UgmaController::class, 'apiLiveQuizState'])->name('live-quiz.state');
        Route::post('/live-quiz/answer', [UgmaController::class, 'apiLiveQuizAnswer'])->name('live-quiz.answer');
        Route::get('/live-quiz/leaderboard', [UgmaController::class, 'apiLiveQuizLeaderboard'])->name('live-quiz.leaderboard');
        Route::get('/live-quiz/questions', [UgmaController::class, 'apiLiveQuizQuestions'])->name('live-quiz.questions');

        // Evaluación Día 1 y 2
        Route::post('/evaluacion/submit', [UgmaController::class, 'apiSubmitEvaluation'])->name('evaluacion.submit');
        Route::get('/evaluacion/submissions', [UgmaController::class, 'apiGetEvaluations'])->name('evaluacion.submissions');
        Route::post('/evaluacion/grade', [UgmaController::class, 'apiGradeEvaluation'])->name('evaluacion.grade');
        Route::post('/evaluacion/reset', [UgmaController::class, 'apiResetEvaluations'])->name('evaluacion.reset');
        Route::get('/evaluacion/card-status', [UgmaController::class, 'apiGetEvalCardStatus'])->name('evaluacion.card-status');
        Route::post('/admin/reset-students', [UgmaController::class, 'apiResetStudents'])->name('admin.reset-students');
        Route::post('/admin/toggle-eval-card', [UgmaController::class, 'apiToggleEvalCard'])->name('admin.toggle-eval-card');
    });
};

Route::prefix('ugma-gerencia-obras')->name('ugma.')->group($registerUgmaRoutes);
Route::name('ugma.direct.')->group($registerUgmaRoutes);

// Redirecciones amigables
Route::redirect('/bim', '/ugma-gerencia-obras/unidad-1-bim');
Route::redirect('/ugma', '/ugma-gerencia-obras');
