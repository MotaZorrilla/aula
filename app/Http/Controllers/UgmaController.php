<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class UgmaController extends Controller
{
    /**
     * Hub del Diplomado en Gerencia de Obras UGMA.
     */
    public function index(): View
    {
        return view('ugma.index');
    }

    /**
     * Módulo 1: Conferencia Magistral Inaugural BIM (De la Maqueta al Gemelo Digital).
     */
    public function masterclassBim(): View
    {
        return view('ugma.masterclass-bim');
    }

    /**
     * Módulo 2: CDE bajo ISO 19650 y Gobernanza de Datos.
     */
    public function cdeIso19650(): View
    {
        return view('ugma.cde-iso19650');
    }

    /**
     * Módulo 3: Clash Detection y Coordinación Interdisciplinaria.
     */
    public function clashDetection(): View
    {
        return view('ugma.clash-detection');
    }

    /**
     * Módulo 4: Planificación 4D/5D y Gestión de Costos EVM.
     */
    public function planificacion4d5d(): View
    {
        return view('ugma.planificacion-4d-5d');
    }

    /**
     * Módulo 5: Inteligencia Artificial, Drones y Visión Artificial.
     */
    public function iaControlObra(): View
    {
        return view('ugma.ia-control-obra');
    }

    /**
     * Módulo 6: Energía Solar Fotovoltaica, BIM 6D y Sostenibilidad.
     */
    public function energiaSolarSostenibilidad(): View
    {
        return view('ugma.energia-solar-sostenibilidad');
    }

    /**
     * Módulo 7: Taller Integrador y Proyecto Final de Diplomado.
     */
    public function tallerIntegrador(): View
    {
        return view('ugma.taller-integrador');
    }
}
