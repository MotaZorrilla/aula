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
Route::prefix('ugma-gerencia-obras')->name('ugma.')->group(function () {
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
    Route::get('/admin', [UgmaController::class, 'admin'])->name('admin');

    // Rutas históricas (Compatibilidad con enlaces previos)
    Route::get('/masterclass-bim', [UgmaController::class, 'masterclassBim'])->name('masterclass-bim');
    Route::get('/cde-iso19650', [UgmaController::class, 'cdeIso19650'])->name('cde-iso19650');
    Route::get('/clash-detection', [UgmaController::class, 'clashDetection'])->name('clash-detection');
    Route::get('/planificacion-4d-5d', [UgmaController::class, 'planificacion4d5d'])->name('planificacion-4d-5d');
    Route::get('/ia-control-obra', [UgmaController::class, 'iaControlObra'])->name('ia-control-obra');
    Route::get('/energia-solar-sostenibilidad', [UgmaController::class, 'energiaSolarSostenibilidad'])->name('energia-solar-sostenibilidad');
    Route::get('/taller-integrador', [UgmaController::class, 'tallerIntegrador'])->name('taller-integrador');

    // API Endpoints (Clean Architecture Actions)
    Route::prefix('api')->name('api.')->group(function () {
        Route::post('/register', [UgmaController::class, 'apiRegister'])->name('register');
        Route::post('/war-room/decision', [UgmaController::class, 'apiWarRoomDecision'])->name('war-room.decision');
        Route::post('/admin/grade', [UgmaController::class, 'apiGrade'])->name('admin.grade');
        Route::post('/admin/toggle-lock', [UgmaController::class, 'apiToggleLock'])->name('admin.toggle-lock');
        Route::post('/admin/login', [UgmaController::class, 'apiAdminLogin'])->name('admin.login');
    });
});

// Redirecciones amigables
Route::redirect('/bim', '/ugma-gerencia-obras/unidad-1-bim');
Route::redirect('/ugma', '/ugma-gerencia-obras');
