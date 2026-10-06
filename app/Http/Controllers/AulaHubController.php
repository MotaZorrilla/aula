<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AulaHubController extends Controller
{
    /**
     * Muestra el portal central del Aula Virtual MotaZorrilla.
     */
    public function index(): View
    {
        return view('hub.index');
    }
}
