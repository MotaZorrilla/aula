<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AulaHubController;
use App\Http\Controllers\UgmaController;

/*
|--------------------------------------------------------------------------
| Web Routes - Aula Virtual MotaZorrilla
|--------------------------------------------------------------------------
*/

// Portal Central Aula Virtual MotaZorrilla
Route::get('/', [AulaHubController::class, 'index'])->name('hub.index');

// Diplomado en Gerencia de Obras (UGMA / Postgrado)
Route::prefix('ugma-gerencia-obras')->name('ugma.')->group(function () {
    Route::get('/', [UgmaController::class, 'index'])->name('index');
    Route::get('/masterclass-bim', [UgmaController::class, 'masterclassBim'])->name('masterclass-bim');
    Route::get('/cde-iso19650', [UgmaController::class, 'cdeIso19650'])->name('cde-iso19650');
    Route::get('/clash-detection', [UgmaController::class, 'clashDetection'])->name('clash-detection');
    Route::get('/planificacion-4d-5d', [UgmaController::class, 'planificacion4d5d'])->name('planificacion-4d-5d');
    Route::get('/ia-control-obra', [UgmaController::class, 'iaControlObra'])->name('ia-control-obra');
    Route::get('/energia-solar-sostenibilidad', [UgmaController::class, 'energiaSolarSostenibilidad'])->name('energia-solar-sostenibilidad');
    Route::get('/taller-integrador', [UgmaController::class, 'tallerIntegrador'])->name('taller-integrador');
});

// Alias amigables
Route::redirect('/bim', '/ugma-gerencia-obras/masterclass-bim');
Route::redirect('/ugma', '/ugma-gerencia-obras');
