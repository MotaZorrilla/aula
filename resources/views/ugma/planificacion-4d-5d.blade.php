<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Día 3: Planificación 4D/5D, Curva S & Valor Ganado (EVM) · Diplomado UGMA</title>

    <meta name="title" content="Día 3: Planificación 4D/5D, Curva S & Valor Ganado (EVM) · Diplomado UGMA">
    <meta name="description" content="Estación académica de Planificación Cuatridimensional (4D) y Control Presupuestario (5D). Simulador interactivo de Curvas S, métricas EVM (PV, EV, AC, CPI, SPI, EAC, TCPI), visualizador de secuencia constructiva y marco legal de valuaciones. Facilitador: Ing. Héctor Mota.">
    <meta name="keywords" content="BIM 4D, BIM 5D, EVM, Valor Ganado, Curva S, Synchro Pro, Navisworks, UGMA, CPI, SPI, EAC, TCPI, Valuaciones de Obra, Héctor Mota">
    <meta name="author" content="Héctor Mota Zorrilla">
    <meta name="theme-color" content="#0f2942">

    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="shortcut icon" href="/favicon.ico">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- Chart.js for S-Curves -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        :root {
            --bg: #f8fafc;
            --surface: #ffffff;
            --surface-subtle: #f1f5f9;
            --border: #e2e8f0;
            --border-hover: #cbd5e1;
            --text-main: #0f172a;
            --text-muted: #475569;
            --text-light: #64748b;
            
            --navy-primary: #0f2942;
            --navy-dark: #0a192f;
            --blue-accent: #0284c7;
            --blue-light: #e0f2fe;
            --teal-accent: #0f766e;
            --teal-light: #ccfbf1;
            
            --emerald: #047857;
            --emerald-light: #d1fae5;
            --amber: #b45309;
            --amber-light: #fef3c7;
            --rose: #e11d48;
            --rose-light: #ffe4e6;
            --purple: #6d28d9;
            --purple-light: #ede9fe;

            --font-sans: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            --font-mono: 'JetBrains Mono', monospace;
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.07), 0 2px 4px -2px rgba(0, 0, 0, 0.05);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.08), 0 4px 6px -4px rgba(0, 0, 0, 0.04);
            --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.05);
        }

        * { margin:0; padding:0; box-sizing:border-box; font-family: var(--font-sans); }
        body { 
            background: var(--bg); 
            color: var(--text-main); 
            min-height: 100vh; 
            padding: 24px 16px 80px; 
            line-height: 1.65; 
            -webkit-font-smoothing: antialiased;
        }

        .container { max-width: 1160px; margin: 0 auto; }

        /* TOP NAVIGATION */
        .top-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
            padding-bottom: 16px;
            border-bottom: 1px solid var(--border);
            flex-wrap: wrap;
            gap: 12px;
        }
        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--navy-primary);
            text-decoration: none;
            font-size: 13.5px;
            font-weight: 700;
            transition: all 0.2s;
            background: #ffffff;
            padding: 8px 16px;
            border-radius: 9999px;
            border: 1px solid var(--border);
            box-shadow: var(--shadow-sm);
        }
        .back-link:hover {
            color: var(--blue-accent);
            border-color: var(--blue-accent);
            transform: translateX(-3px);
            box-shadow: var(--shadow-md);
        }
        .brand-logo-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 6px 18px;
            border-radius: 9999px;
            background: #ffffff;
            border: 1px solid rgba(15, 41, 66, 0.15);
            box-shadow: var(--shadow-sm);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            text-decoration: none;
        }
        .brand-logo-link:hover {
            transform: translateY(-2px) scale(1.02);
            box-shadow: var(--shadow-md);
            border-color: rgba(15, 41, 66, 0.35);
        }
        .brand-full-logo {
            height: 28px;
            width: auto;
            max-width: 100%;
            object-fit: contain;
            display: block;
        }
        .nav-lab-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #0369a1;
            background: #f0f9ff;
            border: 1px solid #bae6fd;
            padding: 7px 16px;
            border-radius: 9999px;
            font-size: 13px;
            font-weight: 700;
            text-decoration: none;
            box-shadow: var(--shadow-sm);
            transition: all 0.2s ease;
        }
        .nav-lab-link:hover {
            background: #0284c7;
            color: #ffffff;
            border-color: #0284c7;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(2, 132, 199, 0.25);
        }
        .live-pill {
            background: #10b981;
            color: #ffffff;
            font-size: 9px;
            font-weight: 800;
            padding: 2px 6px;
            border-radius: 9999px;
            letter-spacing: 0.05em;
        }

        /* HEADER ACADÉMICO */
        .page-header {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 36px 32px;
            margin-bottom: 28px;
            box-shadow: var(--shadow-md);
            background-image: radial-gradient(circle at 95% 15%, rgba(2, 132, 199, 0.08) 0%, rgba(15, 118, 110, 0.05) 50%, rgba(255, 255, 255, 1) 100%);
        }
        .badge-row {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 14px;
        }
        .badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: var(--blue-light);
            color: #0369a1;
            border: 1px solid #7dd3fc;
            font-size: 11.5px;
            font-weight: 800;
            padding: 4px 12px;
            border-radius: 9999px;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        .badge-academic {
            background: var(--emerald-light);
            color: var(--emerald);
            border-color: rgba(4, 120, 87, 0.3);
        }
        .badge-norma {
            background: var(--purple-light);
            color: var(--purple);
            border-color: #ddd6fe;
        }
        .page-title {
            font-size: clamp(24px, 3.8vw, 36px);
            font-weight: 800;
            color: var(--navy-primary);
            margin-bottom: 12px;
            line-height: 1.25;
            letter-spacing: -0.02em;
        }
        .page-subtitle {
            font-size: 15.5px;
            color: var(--text-muted);
            max-width: 1000px;
            margin-bottom: 20px;
            line-height: 1.7;
            text-indent: 2.2em;
            text-align: justify;
        }
        .speaker-bar {
            display: flex;
            align-items: center;
            gap: 14px;
            flex-wrap: wrap;
            padding-top: 16px;
            border-top: 1px solid var(--border);
            font-size: 13px;
            color: var(--text-muted);
        }
        .speaker-bar strong { color: var(--navy-primary); }

        /* STEPPER / PAGINADOR */
        .stepper-container {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 16px 20px;
            margin-bottom: 28px;
            box-shadow: var(--shadow-sm);
            position: sticky;
            top: 12px;
            z-index: 100;
            backdrop-filter: blur(8px);
        }
        .stepper-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
            flex-wrap: wrap;
            gap: 10px;
        }
        .stepper-title {
            font-size: 13px;
            font-weight: 800;
            color: var(--navy-primary);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .view-mode-toggle {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 12px;
            font-weight: 700;
            color: var(--text-muted);
            background: var(--surface-subtle);
            border: 1px solid var(--border);
            padding: 4px 10px;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.2s;
        }
        .view-mode-toggle:hover {
            color: var(--blue-accent);
            border-color: var(--blue-accent);
        }
        .stepper-track {
            display: flex;
            gap: 8px;
            overflow-x: auto;
            padding-bottom: 4px;
            scrollbar-width: thin;
        }
        .step-pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 14px;
            border-radius: 10px;
            border: 1px solid var(--border);
            background: var(--surface-subtle);
            color: var(--text-muted);
            font-size: 12.5px;
            font-weight: 700;
            text-decoration: none;
            white-space: nowrap;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        .step-pill:hover {
            border-color: var(--blue-accent);
            color: var(--blue-accent);
            background: #ffffff;
        }
        .step-pill.active {
            background: var(--navy-primary);
            color: #ffffff;
            border-color: var(--navy-primary);
            box-shadow: 0 4px 12px rgba(15, 41, 66, 0.25);
        }
        .step-pill.active .step-num {
            background: var(--teal-accent);
            color: #ffffff;
        }
        .step-num {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #cbd5e1;
            color: #0f172a;
            font-size: 11px;
            font-weight: 800;
        }
        .stepper-progress {
            width: 100%;
            height: 4px;
            background: #e2e8f0;
            border-radius: 9999px;
            margin-top: 10px;
            overflow: hidden;
        }
        .stepper-progress-bar {
            height: 100%;
            background: linear-gradient(90deg, var(--teal-accent), var(--blue-accent));
            width: 14.28%;
            transition: width 0.3s ease;
        }

        /* CONTENT CARDS */
        .content-card {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 34px;
            margin-bottom: 30px;
            box-shadow: var(--shadow-sm);
            transition: all 0.25s;
        }
        .content-card.highlight-focus {
            border-color: var(--blue-accent);
            box-shadow: 0 0 0 3px rgba(2, 132, 199, 0.15), var(--shadow-lg);
        }
        .section-title {
            font-size: 21px;
            font-weight: 800;
            color: var(--navy-primary);
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 12px;
            letter-spacing: -0.01em;
        }
        .academic-p {
            font-size: 15px;
            color: var(--text-muted);
            margin-bottom: 16px;
            line-height: 1.8;
            text-indent: 2.2em;
            text-align: justify;
        }
        .academic-p strong { color: var(--text-main); font-weight: 700; }

        /* GRID CARDS */
        .grid-2 { display: grid; grid-template-columns: 1fr; gap: 20px; margin: 20px 0; }
        .grid-3 { display: grid; grid-template-columns: 1fr; gap: 18px; margin: 20px 0; }
        .grid-4 { display: grid; grid-template-columns: 1fr; gap: 16px; margin: 20px 0; }
        @media (min-width: 768px) {
            .grid-2 { grid-template-columns: 1fr 1fr; }
            .grid-3 { grid-template-columns: repeat(3, 1fr); }
            .grid-4 { grid-template-columns: repeat(2, 1fr); }
        }
        @media (min-width: 992px) {
            .grid-4 { grid-template-columns: repeat(4, 1fr); }
        }

        .info-card {
            background: var(--surface-subtle);
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 22px;
            transition: all 0.2s;
        }
        .info-card:hover {
            border-color: var(--border-hover);
            transform: translateY(-2px);
            box-shadow: var(--shadow-sm);
        }
        .info-card h4 {
            font-size: 15px;
            font-weight: 800;
            color: var(--navy-primary);
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .info-card p {
            font-size: 13.5px;
            color: var(--text-muted);
            line-height: 1.6;
        }

        /* SIMULATOR LAYOUT */
        .evm-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 22px;
            margin: 22px 0;
        }
        @media (min-width: 992px) {
            .evm-grid { grid-template-columns: 4.5fr 7.5fr; }
        }
        .evm-inputs {
            background: var(--surface-subtle);
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 24px;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }
        .ctrl-group label {
            display: block;
            font-size: 13px;
            font-weight: 700;
            color: var(--navy-primary);
            margin-bottom: 6px;
        }
        .ctrl-group input[type="number"], .ctrl-group select {
            width: 100%;
            padding: 9px 12px;
            border-radius: 8px;
            border: 1px solid var(--border);
            font-family: var(--font-mono);
            font-size: 14px;
            background: #ffffff;
            color: var(--navy-primary);
            outline: none;
            transition: border-color 0.2s;
        }
        .ctrl-group input[type="range"] {
            width: 100%;
        }
        .ctrl-group input:focus { border-color: var(--blue-accent); }
        .slider-val {
            font-family: var(--font-mono);
            font-size: 12.5px;
            color: var(--blue-accent);
            font-weight: 700;
            display: inline-block;
            margin-top: 4px;
        }

        .chart-box {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 20px;
            position: relative;
            height: 420px;
            box-shadow: var(--shadow-sm);
        }

        /* KPI DISPLAY */
        .kpi-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(130px, 1fr));
            gap: 12px;
            margin-top: 18px;
        }
        .kpi-card {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 12px;
            text-align: center;
            box-shadow: var(--shadow-sm);
        }
        .kpi-label { font-size: 11px; font-weight: 700; color: var(--text-light); text-transform: uppercase; }
        .kpi-val { font-size: 19px; font-weight: 800; font-family: var(--font-mono); margin-top: 4px; }
        .kpi-sub { font-size: 11px; color: var(--text-muted); margin-top: 2px; }

        /* DIAGNOSIS BANNER */
        .diagnosis-box {
            padding: 16px 20px;
            border-radius: 12px;
            margin-top: 18px;
            display: flex;
            align-items: center;
            gap: 14px;
            transition: all 0.3s;
        }
        .diag-ok { background: var(--emerald-light); border: 1px solid #a7f3d0; color: #065f46; }
        .diag-warn { background: var(--amber-light); border: 1px solid #fde68a; color: #78350f; }
        .diag-bad { background: var(--rose-light); border: 1px solid #fecdd3; color: #9f1239; }

        /* 4D TIMELINE SIMULATOR */
        .timeline-container {
            background: var(--surface-subtle);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 24px;
            margin: 20px 0;
        }
        .timeline-controls {
            display: flex;
            align-items: center;
            gap: 14px;
            flex-wrap: wrap;
            margin-bottom: 18px;
            padding-bottom: 14px;
            border-bottom: 1px solid var(--border);
        }
        .btn-playback {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 8px 16px;
            border-radius: 8px;
            border: 1px solid var(--border);
            background: #ffffff;
            font-size: 13px;
            font-weight: 700;
            color: var(--navy-primary);
            cursor: pointer;
            transition: all 0.2s;
        }
        .btn-playback:hover {
            background: var(--blue-accent);
            color: #ffffff;
            border-color: var(--blue-accent);
        }
        .timeline-phases {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 8px;
            margin-bottom: 18px;
        }
        @media (max-width: 768px) {
            .timeline-phases { grid-template-columns: 1fr; }
        }
        .phase-card {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 12px;
            transition: all 0.2s;
            position: relative;
        }
        .phase-card.active {
            border-color: var(--blue-accent);
            background: #f0f9ff;
            box-shadow: 0 0 0 2px rgba(2, 132, 199, 0.2);
        }
        .phase-card.completed {
            border-color: var(--emerald);
            background: #f0fdf4;
        }
        .phase-title { font-size: 12px; font-weight: 800; color: var(--navy-primary); margin-bottom: 4px; }
        .phase-progress { font-size: 11px; font-family: var(--font-mono); color: var(--text-muted); }

        /* TABLES */
        .tech-table-container {
            overflow-x: auto;
            margin: 20px 0;
            border-radius: 12px;
            border: 1px solid var(--border);
            box-shadow: var(--shadow-sm);
        }
        .tech-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13.5px;
            text-align: left;
            background: #ffffff;
        }
        .tech-table th {
            background: var(--navy-primary);
            color: #ffffff;
            padding: 12px 16px;
            font-weight: 700;
            font-size: 12.5px;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        .tech-table td {
            padding: 12px 16px;
            border-bottom: 1px solid var(--border);
            color: var(--text-muted);
        }
        .tech-table tr:hover td {
            background: #f8fafc;
            color: var(--text-main);
        }

        /* CODE BLOCK */
        .code-container {
            background: #0f172a;
            color: #e2e8f0;
            padding: 20px;
            border-radius: 12px;
            font-family: var(--font-mono);
            font-size: 12.5px;
            line-height: 1.65;
            position: relative;
            overflow-x: auto;
            margin: 20px 0;
        }
        .code-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
            padding-bottom: 8px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.15);
            font-size: 12px;
            color: #94a3b8;
        }
        .btn-copy-code {
            background: rgba(255, 255, 255, 0.1);
            color: #ffffff;
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 11px;
            cursor: pointer;
            transition: all 0.2s;
        }
        .btn-copy-code:hover {
            background: rgba(255, 255, 255, 0.25);
            color: #38bdf8;
        }

        /* FOOTER */
        .page-footer-action {
            text-align: center;
            padding: 44px 24px;
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 20px;
            margin-top: 40px;
            box-shadow: var(--shadow-sm);
        }
        .btn-action-green {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 14px 28px;
            background: #25D366;
            color: #ffffff;
            font-weight: 700;
            font-size: 15px;
            border-radius: 12px;
            text-decoration: none;
            transition: all 0.2s;
            box-shadow: 0 4px 14px rgba(37, 211, 102, 0.35);
        }
        .btn-action-green:hover {
            background: #20ba59;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(37, 211, 102, 0.45);
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- TOP NAVIGATION -->
        <div class="top-nav">
            <a href="/ugma-gerencia-obras/" class="back-link">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 18 9 12 15 6"></polyline></svg>
                Volver al Hub Académico UGMA
            </a>
            <div style="display: flex; align-items: center; gap: 12px; flex-wrap: wrap;">
                <a href="https://lab.motazorrilla.com/bim/" target="_blank" rel="noopener noreferrer" class="nav-lab-link" title="Abrir Visor BIM 3D & CDE en vivo en el Laboratorio ConTech">
                    <span style="font-size:15px;">📐</span>
                    <span>Visor BIM 3D (Lab)</span>
                    <span class="live-pill">LIVE</span>
                </a>
                <a href="https://motazorrilla.com/" target="_blank" rel="noopener noreferrer" title="Volver al Portal Oficial motazorrilla.com" class="brand-logo-link">
                    <img src="/assets/img/logo-mota-zorrilla.jpg" alt="MotaZorrilla Logo Oficial" class="brand-full-logo">
                </a>
            </div>
        </div>

        <!-- HEADER ACADÉMICO -->
        <div class="page-header">
            <div class="badge-row">
                <span class="badge">Eje Temático 03 · 5 Horas</span>
                <span class="badge badge-academic">Control de Gestión &amp; EVM · Postgrado UGMA</span>
                <span class="badge badge-norma">ANSI/PMI 19-006 · COVENIN 2000-87</span>
            </div>
            <h1 class="page-title">Planificación Cuatridimensional (4D) y Control de Costos (5D)</h1>
            <p class="page-subtitle">
                La gerencia contemporánea de proyectos exige abandonar las planillas estáticas desvinculadas de la obra. La integración del modelo paramétrico 3D con la Estructura de Desglose de Trabajo (WBS/EDT) en el eje temporal 4D y la matriz presupuestaria unitaria en 5D habilita el control en tiempo real mediante la Metodología de Valor Ganado (Earned Value Management - EVM). Mediante el modelado matemático de Curvas S y el monitoreo de los índices de eficiencia CPI y SPI, el ingeniero residente y el inspector anticipan desviaciones financieras y deslindan responsabilidades contractuales frente a la Ley de Contrataciones Públicas.
            </p>
            <div class="speaker-bar">
                <span>👨‍🏫 Facilitador: <strong>Ing. Héctor Mota Zorrilla</strong> (Especialista BIM / ConTech)</span>
                <span>📚 Programa: <strong>Diplomado en Planificación y Gerencia de Obras</strong></span>
                <span>🏛️ Módulo VI: <strong>Tecnología y Sostenibilidad en Gerencia de Obras</strong></span>
            </div>
        </div>

        <!-- STEPPER / PAGINADOR SECUENCIAL -->
        <div class="stepper-container">
            <div class="stepper-header">
                <div class="stepper-title">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--blue-accent)" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    <span>Ruta de Aprendizaje Día 3</span>
                    <span id="stepIndicatorText" style="font-size:12px; color:var(--text-light); text-transform:none; margin-left:8px; font-weight:600;">Módulo 1 de 7</span>
                </div>
                <button type="button" class="view-mode-toggle" id="viewModeBtn" onclick="toggleFocusMode()">
                    <span>👁️ Modo Foco</span>
                </button>
            </div>
            <div class="stepper-track">
                <button type="button" class="step-pill active" id="pill-1" onclick="goToStep(1)">
                    <span class="step-num">1</span>
                    <span>Fundamentos 4D &amp; 5D</span>
                </button>
                <button type="button" class="step-pill" id="pill-2" onclick="goToStep(2)">
                    <span class="step-num">2</span>
                    <span>Modelo Curva S</span>
                </button>
                <button type="button" class="step-pill" id="pill-3" onclick="goToStep(3)">
                    <span class="step-num">3</span>
                    <span>Simulador EVM &amp; Chart</span>
                </button>
                <button type="button" class="step-pill" id="pill-4" onclick="goToStep(4)">
                    <span class="step-num">4</span>
                    <span>Línea de Tiempo 4D</span>
                </button>
                <button type="button" class="step-pill" id="pill-5" onclick="goToStep(5)">
                    <span class="step-num">5</span>
                    <span>Fast-Tracking &amp; Crashing</span>
                </button>
                <button type="button" class="step-pill" id="pill-6" onclick="goToStep(6)">
                    <span class="step-num">6</span>
                    <span>Script Python EVM</span>
                </button>
                <button type="button" class="step-pill" id="pill-7" onclick="goToStep(7)">
                    <span class="step-num">7</span>
                    <span>Marco Legal &amp; Valuaciones</span>
                </button>
            </div>
            <div class="stepper-progress">
                <div class="stepper-progress-bar" id="stepperProgressBar"></div>
            </div>
        </div>

        <!-- ======================================================== -->
        <!-- MÓDULO 1: FUNDAMENTOS DE LA GESTIÓN 4D Y 5D             -->
        <!-- ======================================================== -->
        <section class="content-card" id="step-1">
            <h2 class="section-title">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--blue-accent)" stroke-width="2.2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                Módulo 1: Fundamentos de la Planificación 4D (Tiempo) y Control 5D (Costo)
            </h2>

            <p class="academic-p">
                La gerencia tradicional de proyectos adolece de una desconexión estructural endémica entre los planos constructivos, la programación de actividades en diagramas de barras (Gantt) y el presupuesto contractual. En obra, esta desarticulación genera que las desviaciones de avance físico y financiero sólo se descubran cuando el flujo de caja entra en colapso o cuando las penalizaciones por mora se vuelven irreversibles.
            </p>

            <p class="academic-p">
                Bajo el estándar openBIM (ISO 16739), la dimensión **4D** enlaza cada objeto espacial tridimensional (`IfcBeam`, `IfcColumn`, `IfcSlab`) con los nodos de la Estructura de Desglose del Trabajo (WBS/EDT) mediante relaciones paramétricas de proceso (`IfcTask` e `IfcRelAssignsToProcess`). Simultáneamente, la dimensión **5D** vincula las mediciones geométricas extraídas de la maqueta (QTO - *Quantity Takeoff* bajo normas COVENIN 2000-87) con la estructura de Análisis de Precios Unitarios (APU). De esta manera, cada elemento construido representa automáticamente una valuación devengada certificable ante el comitente.
            </p>

            <div class="grid-2">
                <div class="info-card">
                    <h4>
                        <span style="color:var(--blue-accent);">⏱️</span> BIM 4D: Simulación Temporal y Logística
                    </h4>
                    <p>
                        Vinculación paramétrica entre la maqueta digital y el cronograma (Primavera P6, MS Project, Synchro Pro). Permite anticipar interferencias de grúas torre, áreas de acopio saturadas, traslapes de cuadrillas y cuellos de botella en la ruta crítica antes de verter el primer metro cúbico de concreto.
                    </p>
                </div>
                <div class="info-card">
                    <h4>
                        <span style="color:var(--emerald);">💰</span> BIM 5D: Extracción de Costos y Valuaciones
                    </h4>
                    <p>
                        Cómputos métricos enlazados a APU y partidas presupuestarias. Ante una modificación en el diseño (ej. cambio de espesor de losa de 20cm a 25cm), el modelo actualiza de inmediato el volumen de concreto, peso de acero de refuerzo y el impacto monetario contractual.
                    </p>
                </div>
            </div>

            <div style="background:var(--blue-light); border-left:4px solid var(--blue-accent); padding:16px 20px; border-radius:0 12px 12px 0; margin-top:20px;">
                <div style="font-weight:800; color:#0369a1; font-size:14px; margin-bottom:4px;">💡 Principio Fundamental del Control ConTech</div>
                <div style="font-size:13.5px; color:#0f172a; line-height:1.6;">
                    El control 4D/5D no es una presentación visual para juntas directivas; es un <strong>instrumento legal y pericial de control de gestión</strong>. Cuando una obra sufre retrasos, la simulación 4D desglosa de manera irrefutable si el atraso responde a demoras en los frentes del contratista o a interferencias espaciales no resueltas por el comitente.
                </div>
            </div>
        </section>

        <!-- ======================================================== -->
        <!-- MÓDULO 2: MODELO MATEMÁTICO DE LA CURVA S                -->
        <!-- ======================================================== -->
        <section class="content-card" id="step-2">
            <h2 class="section-title">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--teal-accent)" stroke-width="2.2"><path d="M3 3v18h18"></path><path d="M18.7 8l-5.1 5.2-2.8-2.7L7 14.3"></path></svg>
                Módulo 2: Modelo Matemático de la Curva S y Dinámica de Desembolsos
            </h2>

            <p class="academic-p">
                En ingeniería civil, el avance acumulado de una obra nunca sigue un comportamiento lineal (\(y = mx + b\)). Los proyectos de construcción obedecen intrínsecamente a funciones sigmoideas (*S-Curves*), caracterizadas por tres fases cinemáticas bien diferenciadas:
            </p>

            <div class="grid-3">
                <div class="info-card">
                    <h4>1. Fase de Arranque (0% a 20%)</h4>
                    <p>
                        Pendiente suave y bajo consumo financiero. Dominada por movilización de maquinaria, replanteo topográfico, permisología, excavaciones y obras preliminares.
                    </p>
                </div>
                <div class="info-card">
                    <h4>2. Régimen de Producción (20% a 80%)</h4>
                    <p>
                        Máxima pendiente (\(\frac{dy}{dt} = \text{máximo}\)). Frentes estructurales abiertos simultáneamente, vaciado continuo de concreto, cerramientos e instalaciones mecánicas pesadas.
                    </p>
                </div>
                <div class="info-card">
                    <h4>3. Remates y Cierre (80% a 100%)</h4>
                    <p>
                        Desaceleración asintótica. Actividades de alto detalle arquitectónico, pruebas hidrostáticas, calibración de tableros eléctricos y entrega de carpetas As-Built.
                    </p>
                </div>
            </div>

            <p class="academic-p">
                El modelo analítico formal de la Curva S logística normalizada responde a la función logística de Verhulst o a formulaciones polinómicas cúbicas sobre el tiempo normalizado \(t \in [0, 1]\):
            </p>

            <div style="background:var(--surface-subtle); border:1px solid var(--border); border-radius:12px; padding:20px; font-family:var(--font-mono); font-size:13.5px; margin:16px 0; text-align:center; color:var(--navy-primary);">
                Avance Acumulado Teórico: \(S(t) = \frac{1}{1 + e^{-k(t - t_0)}}\) &nbsp;&nbsp;ó&nbsp;&nbsp; \(P(t) = 3t^2 - 2t^3\)
            </div>

            <p class="academic-p">
                Cualquier desviación significativa entre la curva real ejecutada y la curva sigmoidea contractual planificada evidencia anomalías operativas: una pendiente inicial excesivamente pronunciada delata acopios sobredimensionados de materiales no instalados, mientras que una pendiente aplanada en el régimen medio predice una quiebra técnica inminente del cronograma.
            </p>
        </section>

        <!-- ======================================================== -->
        <!-- MÓDULO 3: SIMULADOR INTERACTIVO CURVA S & EVM DASHBOARD -->
        <!-- ======================================================== -->
        <section class="content-card" id="step-3">
            <h2 class="section-title">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--emerald)" stroke-width="2.2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                Módulo 3: Simulador Paramétrico de Curvas S y Cuadro de Mando EVM
            </h2>

            <p class="academic-p">
                Interactúa con las variables contractuales del proyecto para auditar la salud del contrato en tiempo real. El motor computa la curva sigmoidea acumulada semana a semana y calcula la telemetría del estándar internacional ANSI/PMI 19-006: **Valor Planificado (\(PV\))**, **Valor Ganado (\(EV\))**, **Costo Real (\(AC\))**, variaciones (\(CV, SV\)), índices de desempeño (\(CPI, SPI\)) y proyecciones al cierre (\(EAC, VAC, TCPI\)).
            </p>

            <div class="evm-grid">
                <!-- CONTROLES PARAMÉTRICOS -->
                <div class="evm-inputs">
                    <div style="font-size:14px; font-weight:800; color:var(--navy-primary); padding-bottom:8px; border-bottom:1px solid var(--border); display:flex; align-items:center; gap:8px;">
                        <span>🎛️</span> Variables Contractuales y de Campo
                    </div>

                    <div class="ctrl-group">
                        <label for="bacInput">Presupuesto al Cierre (BAC en USD $):</label>
                        <input type="number" id="bacInput" value="1500000" step="50000" oninput="updateEVM()">
                        <span class="slider-val" id="bacValText">$1,500,000.00 USD</span>
                    </div>

                    <div class="ctrl-group">
                        <label for="plannedProgress">Avance Físico Planificado a la Fecha (%):</label>
                        <input type="range" id="plannedProgress" min="10" max="90" value="50" oninput="updateEVM()">
                        <span class="slider-val" id="plannedProgVal">50% Planificado</span>
                    </div>

                    <div class="ctrl-group">
                        <label for="realProgress">Avance Físico Real Ejecutado (%):</label>
                        <input type="range" id="realProgress" min="10" max="90" value="44" oninput="updateEVM()">
                        <span class="slider-val" id="realProgVal" style="color:var(--emerald);">44% Ejecutado Real</span>
                    </div>

                    <div class="ctrl-group">
                        <label for="acInput">Costo Real Incurrido a la Fecha (AC en USD $):</label>
                        <input type="number" id="acInput" value="720000" step="20000" oninput="updateEVM()">
                        <span class="slider-val" id="acValText">$720,000.00 USD</span>
                    </div>
                </div>

                <!-- GRÁFICO CHART.JS -->
                <div class="chart-box">
                    <canvas id="evmCanvas"></canvas>
                </div>
            </div>

            <!-- KPIS EN TIEMPO REAL -->
            <div class="kpi-row">
                <div class="kpi-card">
                    <div class="kpi-label">Valor Planificado (PV)</div>
                    <div class="kpi-val" id="pvVal" style="color:var(--blue-accent);">$750,000</div>
                    <div class="kpi-sub">Trabajo programado</div>
                </div>
                <div class="kpi-card">
                    <div class="kpi-label">Valor Ganado (EV)</div>
                    <div class="kpi-val" id="evVal" style="color:var(--emerald);">$660,000</div>
                    <div class="kpi-sub">Trabajo certificado</div>
                </div>
                <div class="kpi-card">
                    <div class="kpi-label">Costo Real (AC)</div>
                    <div class="kpi-val" id="acDispVal" style="color:var(--rose);">$720,000</div>
                    <div class="kpi-sub">Facturado / Incurrido</div>
                </div>
                <div class="kpi-card">
                    <div class="kpi-label">Índice Costo (CPI)</div>
                    <div class="kpi-val" id="cpiVal" style="color:#b45309;">0.92</div>
                    <div class="kpi-sub">EV / AC (Eficiencia)</div>
                </div>
                <div class="kpi-card">
                    <div class="kpi-label">Índice Tiempo (SPI)</div>
                    <div class="kpi-val" id="spiVal" style="color:#e11d48;">0.88</div>
                    <div class="kpi-sub">EV / PV (Ritmo)</div>
                </div>
                <div class="kpi-card">
                    <div class="kpi-label">Costo Final (EAC)</div>
                    <div class="kpi-val" id="eacVal" style="color:var(--navy-primary);">$1,630,435</div>
                    <div class="kpi-sub">BAC / CPI</div>
                </div>
                <div class="kpi-card">
                    <div class="kpi-label">Desviación Final (VAC)</div>
                    <div class="kpi-val" id="vacVal" style="color:#e11d48;">-$130,435</div>
                    <div class="kpi-sub">BAC - EAC</div>
                </div>
            </div>

            <!-- BANNER DE DIAGNÓSTICO -->
            <div id="diagBox" class="diagnosis-box diag-bad">
                <div style="font-size:28px;" id="diagIcon">⚠️</div>
                <div>
                    <strong id="diagTitle" style="font-size:15px;">Alerta Gerencial: Proyecto con Retraso y Sobrecosto Crítico</strong>
                    <div style="font-size:13px; line-height:1.55; margin-top:2px;" id="diagDesc">
                        El proyecto se encuentra en zona de riesgo. Por cada dólar invertido se generan solo 0.92 USD de valor productivo (CPI &lt; 1.0) y el avance físico marcha al 88% del ritmo contractual (SPI &lt; 1.0). Se proyecta un sobrecosto final de $130,435 USD si no se implementan medidas correctivas de choque.
                    </div>
                </div>
            </div>
        </section>

        <!-- ======================================================== -->
        <!-- MÓDULO 4: SIMULADOR DE LÍNEA DE TIEMPO 4D                -->
        <!-- ======================================================== -->
        <section class="content-card" id="step-4">
            <h2 class="section-title">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--purple)" stroke-width="2.2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                Módulo 4: Simulador de Secuencia Constructiva 4D y Certificación de Fases
            </h2>

            <p class="academic-p">
                La planificación 4D divide el cronograma maestro en frentes de trabajo correlativos vinculados con las entidades físicas del gemelo digital. El siguiente simulador cinemático permite reproducir semana a semana las 24 semanas de ejecución de un edificio corporativo en Guayana, observando la activación secuencial de frentes, el porcentaje de avance físico acumulado y la valuación de obra devengada bajo norma COVENIN:
            </p>

            <div class="timeline-container">
                <div class="timeline-controls">
                    <button type="button" class="btn-playback" id="btnPlayPause" onclick="toggleTimelinePlay()">
                        <span>▶️</span> Reproducir Simulación 4D
                    </button>
                    <button type="button" class="btn-playback" onclick="resetTimeline()">
                        <span>🔄</span> Reiniciar
                    </button>
                    <div style="flex:1; display:flex; align-items:center; gap:10px; min-width:200px;">
                        <label for="timelineSlider" style="font-size:12.5px; font-weight:700; color:var(--navy-primary); white-space:nowrap;">Semana de Obra:</label>
                        <input type="range" id="timelineSlider" min="1" max="24" value="12" step="1" oninput="onTimelineSliderChange()" style="width:100%;">
                        <span id="timelineWeekText" style="font-family:var(--font-mono); font-size:13px; font-weight:800; color:var(--blue-accent); min-width:85px;">Semana 12</span>
                    </div>
                </div>

                <div class="timeline-phases">
                    <div class="phase-card completed" id="phase-1">
                        <div class="phase-title">Fase 1: Obras Preliminares &amp; Fundaciones</div>
                        <div class="phase-progress">Sem 1 - 5 · 100% Completo</div>
                        <div style="font-size:11px; color:#047857; margin-top:4px;">Zapatas y Muros de Contención</div>
                    </div>
                    <div class="phase-card completed" id="phase-2">
                        <div class="phase-title">Fase 2: Estructura Concreto PB a P4</div>
                        <div class="phase-progress">Sem 6 - 11 · 100% Completo</div>
                        <div style="font-size:11px; color:#047857; margin-top:4px;">Columnas, Vigas y Losas Vaciadas</div>
                    </div>
                    <div class="phase-card active" id="phase-3">
                        <div class="phase-title">Fase 3: Estructura P5 a P12 &amp; Cerramientos</div>
                        <div class="phase-progress" id="phase3Prog">Sem 12 - 17 · En Curso (20%)</div>
                        <div style="font-size:11px; color:#0284c7; margin-top:4px;">Frente Activo de Vaciado</div>
                    </div>
                    <div class="phase-card" id="phase-4">
                        <div class="phase-title">Fase 4: Instalaciones MEP &amp; Puntos Sanitarios</div>
                        <div class="phase-progress">Sem 16 - 21 · Programado</div>
                        <div style="font-size:11px; color:var(--text-light); margin-top:4px;">Climatización y Ductería</div>
                    </div>
                    <div class="phase-card" id="phase-5">
                        <div class="phase-title">Fase 5: Acabados, Vidrios &amp; Puesta en Marcha</div>
                        <div class="phase-progress">Sem 20 - 24 · Programado</div>
                        <div style="font-size:11px; color:var(--text-light); margin-top:4px;">Pruebas Finales y Entrega</div>
                    </div>
                </div>

                <div id="timelineDetailBox" style="background:#ffffff; border:1px solid var(--border); border-radius:10px; padding:16px; font-size:13px; color:var(--text-main); line-height:1.6;">
                    <!-- Dynamic status text -->
                </div>
            </div>
        </section>

        <!-- ======================================================== -->
        <!-- MÓDULO 5: MATRIZ DE DECISIÓN GERENCIAL                   -->
        <!-- ======================================================== -->
        <section class="content-card" id="step-5">
            <h2 class="section-title">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--amber)" stroke-width="2.2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                Módulo 5: Técnicas de Compresión: Fast-Tracking vs. Crashing
            </h2>

            <p class="academic-p">
                Cuando el Índice de Rendimiento del Cronograma (\(SPI < 1.0\)) confirma un retraso en la ruta crítica, el director de proyecto dispone de dos metodologías consagradas por el PMI para comprimir los plazos de entrega sin alterar el alcance contractual:
            </p>

            <div class="grid-2">
                <div class="info-card">
                    <h4>⚡ 1. Ejecución Rápida (Fast-Tracking)</h4>
                    <p>
                        Consiste en ejecutar en paralelo actividades que contractualmente estaban planificadas en secuencia fin-a-comienzo (ej. comenzar las particiones de mampostería en pisos inferiores mientras aún se encofran las vigas del nivel superior).
                    </p>
                    <div style="margin-top:10px; font-size:12px; color:var(--rose); font-weight:700;">
                        ⚠️ Riesgo Asociado: Alto potencial de retrabajos, interferencias no coordinadas y riesgos de seguridad industrial.
                    </div>
                </div>
                <div class="info-card">
                    <h4>💥 2. Intensificación de Recursos (Crashing)</h4>
                    <p>
                        Consiste en inyectar recursos económicos adicionales a las actividades de la ruta crítica (turnos dobles nocturnos, cuadrillas de refuerzo, alquiler de segunda grúa torre) para reducir su duración al costo marginal más bajo posible.
                    </p>
                    <div style="margin-top:10px; font-size:12px; color:var(--amber); font-weight:700;">
                        ⚠️ Riesgo Asociado: Deterioro del CPI debido a horas extras, fatiga laboral y la Ley de Rendimientos Decrecientes.
                    </div>
                </div>
            </div>

            <div class="tech-table-container">
                <table class="tech-table">
                    <thead>
                        <tr>
                            <th>Cuadrante CPI / SPI</th>
                            <th>Diagnóstico de la Obra</th>
                            <th>Acción Estratégica en Comité de Obra</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong style="color:var(--emerald);">CPI &ge; 1.0 &nbsp;|&nbsp; SPI &ge; 1.0</strong></td>
                            <td>Excelente salud financiera y avance superior al programa.</td>
                            <td>Mantener ritmo operativo. Analizar incentivos por cumplimiento anticipado de hitos contractuales.</td>
                        </tr>
                        <tr>
                            <td><strong style="color:var(--amber);">CPI &ge; 1.0 &nbsp;|&nbsp; SPI &lt; 1.0</strong></td>
                            <td>Ahorro económico pero retraso físico en cronograma.</td>
                            <td>Autorizar <i>Crashing</i>: utilizar parte del ahorro económico para contratar horas extras o cuadrillas adicionales.</td>
                        </tr>
                        <tr>
                            <td><strong style="color:var(--amber);">CPI &lt; 1.0 &nbsp;|&nbsp; SPI &ge; 1.0</strong></td>
                            <td>Cumpliendo fechas pero con sobrecosto peligroso.</td>
                            <td>Auditoría estricta de desperdicio de materiales (acero/cemento), control de rendimiento de mano de obra y renegociación de compras.</td>
                        </tr>
                        <tr>
                            <td><strong style="color:var(--rose);">CPI &lt; 1.0 &nbsp;|&nbsp; SPI &lt; 1.0</strong></td>
                            <td>Crisis crítica: retraso temporal y quiebra de presupuesto.</td>
                            <td>Comité de emergencia: reingeniería del WBS, negociación de prórrogas justificadas y reprogramación con línea base modificada.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- ======================================================== -->
        <!-- MÓDULO 6: SCRIPT PYTHON EVM ANALYTICS                    -->
        <!-- ======================================================== -->
        <section class="content-card" id="step-6">
            <h2 class="section-title">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--emerald)" stroke-width="2.2"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                Módulo 6: Script en Python: Motor Analítico EVM y Pronóstico EAC
            </h2>

            <p class="academic-p">
                El control de gestión moderno automatiza la auditoría de valuaciones mediante scripts analíticos. El siguiente código en **Python 3** ingesta los datos de avance semanal, calcula la totalidad de las fórmulas paramétricas del estándar ANSI/PMI 19-006 y emite un informe ejecutivo con semáforo gerencial:
            </p>

            <div class="code-container">
                <div class="code-header">
                    <span>🐍 evm_analytics_engine.py · Python 3.11 + Algoritmo de Diagnóstico de Obra</span>
                    <button type="button" class="btn-copy-code" onclick="copyPythonCode()">📋 Copiar Script al Portapapeles</button>
                </div>
                <pre id="pythonCodeSnippet" style="margin:0; font-family:var(--font-mono); color:#f8fafc;"><code>from dataclasses import dataclass
from typing import Dict, Any

@dataclass
class EVMProject:
    bac: float              # Presupuesto al Cierre (USD)
    planned_progress: float # Avance planificado porcentual (0 - 100)
    real_progress: float    # Avance físico real ejecutado porcentual (0 - 100)
    actual_cost: float      # Costo real incurrido acumulado (USD)

    def analyze(self) -> Dict[str, Any]:
        pv = self.bac * (self.planned_progress / 100.0)
        ev = self.bac * (self.real_progress / 100.0)
        ac = self.actual_cost

        # Variaciones de Costo y Cronograma
        cv = ev - ac
        sv = ev - pv

        # Índices de Eficiencia
        cpi = (ev / ac) if ac > 0 else 1.0
        spi = (ev / pv) if pv > 0 else 1.0

        # Pronósticos al Cierre
        eac = (self.bac / cpi) if cpi > 0 else self.bac
        vac = self.bac - eac
        
        # To-Complete Performance Index (TCPI para cumplir BAC)
        remaining_work = self.bac - ev
        remaining_funds = self.bac - ac
        tcpi = (remaining_work / remaining_funds) if remaining_funds > 0 else float('inf')

        # Diagnóstico Gerencial
        if cpi >= 1.0 and spi >= 1.0:
            health = "VERDE (Saludable: En tiempo y bajo presupuesto)"
        elif cpi >= 1.0 and spi < 1.0:
            health = "AMARILLO (Retraso en tiempo con ahorro en costo)"
        elif cpi < 1.0 and spi >= 1.0:
            health = "AMARILLO (En tiempo con sobrecosto económico)"
        else:
            health = "ROJO (Crítico: Retraso físico y sobrecosto financiero)"

        return {
            "PV": round(pv, 2), "EV": round(ev, 2), "AC": round(ac, 2),
            "CV": round(cv, 2), "SV": round(sv, 2),
            "CPI": round(cpi, 3), "SPI": round(spi, 3),
            "EAC": round(eac, 2), "VAC": round(vac, 2),
            "TCPI": round(tcpi, 3) if tcpi != float('inf') else "N/A",
            "Health": health
        }

if __name__ == "__main__":
    # Simulación de Caso Real: Proyecto Edificio Guayana 12P (Semana 12)
    caso_guayana = EVMProject(bac=1500000.0, planned_progress=50.0, real_progress=44.0, actual_cost=720000.0)
    informe = caso_guayana.analyze()

    print("═════════════════════════════════════════════════════════")
    print(" 📊 INFORME TÉCNICO DE CONTROL DE VALOR GANADO (EVM)")
    print("═════════════════════════════════════════════════════════")
    for k, v in informe.items():
        print(f"  {k:10}: {v}")
    print("═════════════════════════════════════════════════════════")
</code></pre>
            </div>
        </section>

        <!-- ======================================================== -->
        <!-- MÓDULO 7: MARCO LEGAL & VALUACIONES DE OBRA              -->
        <!-- ======================================================== -->
        <section class="content-card" id="step-7">
            <h2 class="section-title">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--navy-primary)" stroke-width="2.2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                Módulo 7: Marco Legal, Valuaciones de Obra &amp; Reclamos Contractuales
            </h2>

            <p class="academic-p">
                En la práctica profesional venezolana, las métricas de planificación 4D/5D cobran fuerza vinculante a través de los instrumentos jurídicos y contractuales que rigen la construcción. La **Ley de Contrataciones Públicas** y la norma técnica **COVENIN 2000-87 (Mediciones y Codificación de Partidas para Estudios, Proyectos y Construcción)** establecen las reglas formales para la medición, certificación y pago de valuaciones periódicas de obra.
            </p>

            <p class="academic-p">
                Todo reclamo contractual (*Claim*) por paralizaciones imprevistas, demoras en el pago de valuaciones, escalatoria inflacionaria o alteraciones unilaterales del proyecto exige respaldo probatorio estricto. La combinación de la bitácora de obra del Ingeniero Inspector junto con la curva EVM y el modelo 4D constituye la prueba reina para demostrar ante tribunales o tribunales arbitrales si la demora provino de causas imputables al contratista o de retrasos en las aprobaciones y pagos del ente contratante.
            </p>

            <div class="grid-3" style="margin-top:24px;">
                <div class="info-card">
                    <h4>🏛️ Ley de Contrataciones Públicas</h4>
                    <p>
                        <strong>Régimen de Valuaciones &amp; Retenciones:</strong> Regula el procedimiento de presentación, revisión y firma de valuaciones quincenales o mensuales, retenciones laborales y de fiel cumplimiento.
                    </p>
                    <a href="http://www.snc.gob.ve/" target="_blank" rel="noopener noreferrer" style="font-size:12px; font-weight:700; color:var(--blue-accent); text-decoration:none; display:inline-block; margin-top:8px;">
                        Servicio Nacional de Contrataciones &rarr;
                    </a>
                </div>
                <div class="info-card">
                    <h4>📐 Norma COVENIN 2000-87</h4>
                    <p>
                        <strong>Criterios de Medición y QTO:</strong> Especifica las unidades de medición contractual (\(m^3, m^2, kg, pza\)) y prohíbe la inclusión de partidas globales no desglosadas en las valuaciones.
                    </p>
                    <a href="https://fondonorma.org.ve/" target="_blank" rel="noopener noreferrer" style="font-size:12px; font-weight:700; color:var(--blue-accent); text-decoration:none; display:inline-block; margin-top:8px;">
                        Catálogo FONDONORMA &rarr;
                    </a>
                </div>
                <div class="info-card">
                    <h4>⚖️ Código Civil Venezolano</h4>
                    <p>
                        <strong>Art. 1630 al 1648 (Del Contrato de Obra):</strong> Regula el ajuste de precios, la resolución del contrato por incumplimiento culposo y el pago de indemnizaciones por daños y perjuicios.
                    </p>
                    <a href="http://www.tsj.gob.ve/" target="_blank" rel="noopener noreferrer" style="font-size:12px; font-weight:700; color:var(--blue-accent); text-decoration:none; display:inline-block; margin-top:8px;">
                        Jurisprudencia TSJ &rarr;
                    </a>
                </div>
            </div>

            <div style="margin-top: 24px; padding: 20px 24px; background: #f0f9ff; border: 1.5px solid #bae6fd; border-radius: 14px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px;">
                <div style="max-width: 680px;">
                    <h4 style="font-size: 16px; font-weight: 800; color: #0369a1; margin-bottom: 4px; display: flex; align-items: center; gap: 8px;">
                        <span>⏱️</span> Simulación Temporal 4D &amp; CDE en el Laboratorio ConTech
                    </h4>
                    <p style="font-size: 13.5px; color: #475569; margin: 0; line-height: 1.6;">
                        Accede al módulo de control y seguimiento de obra en vivo en el <strong>BIM Hub</strong> oficial en <strong>lab.motazorrilla.com/bim</strong> para inspeccionar modelos federados en tiempo real.
                    </p>
                </div>
                <a href="https://lab.motazorrilla.com/bim/" target="_blank" rel="noopener noreferrer" style="display: inline-flex; align-items: center; gap: 8px; padding: 10px 20px; background: #0284c7; color: #ffffff; font-size: 13.5px; font-weight: 700; border-radius: 10px; text-decoration: none; box-shadow: 0 4px 12px rgba(2, 132, 199, 0.25); transition: all 0.2s;">
                    Abrir Visor en el Lab &rarr;
                </a>
            </div>
        </section>

        <!-- ======================================================== -->
        <!-- CTA FOOTER ACADÉMICO                                     -->
        <!-- ======================================================== -->
        <div class="page-footer-action">
            <h3 style="font-size:22px; font-weight:800; color:var(--navy-primary); margin-bottom:8px;">
                ¿Consultas sobre este Laboratorio o la Metodología 4D/5D EVM?
            </h3>
            <p style="font-size:14.5px; color:var(--text-muted); margin-bottom:22px; max-width:700px; margin-left:auto; margin-right:auto;">
                Contacta directamente al facilitador para acceder a las plantillas avanzadas en Synchro Pro, MS Project y hojas de cálculo EVM para el Diplomado UGMA.
            </p>
            <div style="display:flex; justify-content:center; gap:14px; flex-wrap:wrap;">
                <a href="https://wa.me/584148873615?text=Hola%20Ing.%20H%C3%A9ctor%20Mota,%20deseo%20m%C3%A1s%20detalles%20sobre%20el%20m%C3%B3dulo%204D/5D%20EVM%20del%20Diplomado%20UGMA..." target="_blank" rel="noopener noreferrer" class="btn-action-green">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    Contactar al Facilitador vía WhatsApp (0414-8873615)
                </a>
                <a href="/ugma-gerencia-obras/" class="back-link" style="padding:14px 24px; font-size:14px;">
                    Volver al Hub del Diplomado
                </a>
            </div>
        </div>

    </div>

    <!-- ======================================================== -->
    <!-- MOTOR JAVASCRIPT Y SIMULADORES EN TIEMPO REAL            -->
    <!-- ======================================================== -->
    <script>
        // --- 1. GESTIÓN DEL STEPPER Y MODO FOCO ---
        let currentStep = 1;
        const totalSteps = 7;
        let isFocusMode = false;

        function goToStep(step) {
            currentStep = step;
            updateStepperUI();
            const target = document.getElementById('step-' + step);
            if (target) {
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }

        function updateStepperUI() {
            for (let i = 1; i <= totalSteps; i++) {
                const pill = document.getElementById('pill-' + i);
                if (pill) {
                    if (i === currentStep) {
                        pill.classList.add('active');
                    } else {
                        pill.classList.remove('active');
                    }
                }
            }

            const pct = (currentStep / totalSteps) * 100;
            const bar = document.getElementById('stepperProgressBar');
            if (bar) bar.style.width = pct + '%';

            const ind = document.getElementById('stepIndicatorText');
            if (ind) ind.textContent = 'Módulo ' + currentStep + ' de ' + totalSteps;

            if (isFocusMode) {
                for (let i = 1; i <= totalSteps; i++) {
                    const sec = document.getElementById('step-' + i);
                    if (sec) {
                        if (i === currentStep) {
                            sec.style.display = 'block';
                            sec.classList.add('highlight-focus');
                        } else {
                            sec.style.display = 'none';
                            sec.classList.remove('highlight-focus');
                        }
                    }
                }
            } else {
                for (let i = 1; i <= totalSteps; i++) {
                    const sec = document.getElementById('step-' + i);
                    if (sec) {
                        sec.style.display = 'block';
                        if (i === currentStep) {
                            sec.classList.add('highlight-focus');
                        } else {
                            sec.classList.remove('highlight-focus');
                        }
                    }
                }
            }
        }

        function toggleFocusMode() {
            isFocusMode = !isFocusMode;
            const btn = document.getElementById('viewModeBtn');
            if (btn) {
                btn.innerHTML = isFocusMode ? '<span>👁️ Modo Foco</span>' : '<span>📜 Ver Todo</span>';
            }
            updateStepperUI();
        }

        // --- 2. SIMULADOR GRÁFICO CURVA S & EVM (CHART.JS) ---
        let evmChart = null;

        function initEVMChart() {
            const ctx = document.getElementById('evmCanvas').getContext('2d');
            const weeks = ['Sem 1', 'Sem 2', 'Sem 3', 'Sem 4', 'Sem 5', 'Sem 6', 'Sem 7', 'Sem 8', 'Sem 9', 'Sem 10', 'Sem 11', 'Sem 12'];

            evmChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: weeks,
                    datasets: [
                        {
                            label: 'Valor Planificado (PV)',
                            data: [30, 80, 160, 270, 420, 600, 750, 930, 1110, 1280, 1410, 1500],
                            borderColor: '#0284c7',
                            backgroundColor: 'transparent',
                            borderWidth: 2.5,
                            tension: 0.35,
                            pointRadius: 4
                        },
                        {
                            label: 'Valor Ganado (EV)',
                            data: [25, 70, 140, 240, 370, 520, 660, null, null, null, null, null],
                            borderColor: '#047857',
                            backgroundColor: 'rgba(4, 120, 87, 0.08)',
                            borderWidth: 3,
                            tension: 0.35,
                            pointRadius: 5,
                            fill: true
                        },
                        {
                            label: 'Costo Real (AC)',
                            data: [28, 85, 175, 290, 440, 610, 720, null, null, null, null, null],
                            borderColor: '#e11d48',
                            backgroundColor: 'transparent',
                            borderWidth: 2.5,
                            borderDash: [5, 5],
                            tension: 0.35,
                            pointRadius: 4
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        x: { grid: { color: '#e2e8f0' }, ticks: { color: '#475569' } },
                        y: {
                            grid: { color: '#e2e8f0' },
                            ticks: { color: '#475569' },
                            title: { display: true, text: 'Monto Acumulado (Miles USD $)', color: '#475569' }
                        }
                    },
                    plugins: {
                        legend: { position: 'top', labels: { color: '#0f172a', font: { weight: 'bold' } } }
                    }
                }
            });
        }

        function updateEVM() {
            const bac = parseFloat(document.getElementById('bacInput').value) || 0;
            const plannedProg = parseFloat(document.getElementById('plannedProgress').value) || 0;
            const realProg = parseFloat(document.getElementById('realProgress').value) || 0;
            const ac = parseFloat(document.getElementById('acInput').value) || 0;

            document.getElementById('bacValText').textContent = '$' + bac.toLocaleString('en-US', { minimumFractionDigits: 2 }) + ' USD';
            document.getElementById('plannedProgVal').innerText = plannedProg + '% Planificado';
            document.getElementById('realProgVal').innerText = realProg + '% Ejecutado Real';
            document.getElementById('acValText').textContent = '$' + ac.toLocaleString('en-US', { minimumFractionDigits: 2 }) + ' USD';

            const pv = bac * (plannedProg / 100);
            const ev = bac * (realProg / 100);

            const cv = ev - ac;
            const sv = ev - pv;

            const cpi = ac > 0 ? (ev / ac) : 1.0;
            const spi = pv > 0 ? (ev / pv) : 1.0;
            const eac = cpi > 0 ? (bac / cpi) : bac;
            const vac = bac - eac;

            document.getElementById('pvVal').innerText = '$' + Math.round(pv).toLocaleString('en-US');
            document.getElementById('evVal').innerText = '$' + Math.round(ev).toLocaleString('en-US');
            document.getElementById('acDispVal').innerText = '$' + Math.round(ac).toLocaleString('en-US');
            document.getElementById('cpiVal').innerText = cpi.toFixed(2);
            document.getElementById('spiVal').innerText = spi.toFixed(2);
            document.getElementById('eacVal').innerText = '$' + Math.round(eac).toLocaleString('en-US');
            
            const vacEl = document.getElementById('vacVal');
            vacEl.innerText = (vac >= 0 ? '+$' : '-$') + Math.abs(Math.round(vac)).toLocaleString('en-US');
            vacEl.style.color = vac >= 0 ? 'var(--emerald)' : 'var(--rose)';

            // Actualizar Chart
            if (evmChart) {
                const bacThousands = bac / 1000;
                // Generar curva sigmoidea teórica para 12 semanas
                const pvData = [];
                for (let i = 1; i <= 12; i++) {
                    const t = i / 12;
                    // S-curve polinómica: 3*t^2 - 2*t^3
                    const factor = 3 * Math.pow(t, 2) - 2 * Math.pow(t, 3);
                    pvData.push(Math.round(bacThousands * factor));
                }
                evmChart.data.datasets[0].data = pvData;

                // EV y AC hasta semana 7 proporcionalmente
                const currentWeekIdx = 6; // semana 7
                const evData = [];
                const acData = [];
                for (let i = 0; i <= 11; i++) {
                    if (i <= currentWeekIdx) {
                        const ratio = (i + 1) / (currentWeekIdx + 1);
                        evData.push(Math.round((ev / 1000) * ratio));
                        acData.push(Math.round((ac / 1000) * ratio));
                    } else {
                        evData.push(null);
                        acData.push(null);
                    }
                }
                evmChart.data.datasets[1].data = evData;
                evmChart.data.datasets[2].data = acData;
                evmChart.update();
            }

            const diagBox = document.getElementById('diagBox');
            const diagTitle = document.getElementById('diagTitle');
            const diagDesc = document.getElementById('diagDesc');
            const diagIcon = document.getElementById('diagIcon');

            if (cpi >= 1.0 && spi >= 1.0) {
                diagBox.className = 'diagnosis-box diag-ok';
                diagIcon.innerText = '✅';
                diagTitle.innerText = 'Proyecto Saludable: En Tiempo y Bajo Presupuesto';
                diagDesc.innerText = `Excelente desempeño: el proyecto avanza con eficiencia de costo (CPI: ${cpi.toFixed(2)} &ge; 1.0) y por delante del cronograma (SPI: ${spi.toFixed(2)} &ge; 1.0). Se proyecta un ahorro final de $${Math.abs(Math.round(vac)).toLocaleString('en-US')} USD.`;
            } else if (cpi >= 1.0 && spi < 1.0) {
                diagBox.className = 'diagnosis-box diag-warn';
                diagIcon.innerText = '⚠️';
                diagTitle.innerText = 'Precaución: Proyecto con Retraso pero con Ahorro de Costo';
                diagDesc.innerText = `El control financiero es positivo (CPI: ${cpi.toFixed(2)}), pero existe un desfase físico en el cronograma (SPI: ${spi.toFixed(2)}). Se recomienda autorizar intensificación de recursos (Crashing) usando parte del ahorro acumulado para acelerar la ruta crítica.`;
            } else if (cpi < 1.0 && spi >= 1.0) {
                diagBox.className = 'diagnosis-box diag-warn';
                diagIcon.innerText = '⚠️';
                diagTitle.innerText = 'Precaución: Proyecto en Tiempo pero con Sobrecosto';
                diagDesc.innerText = `El ritmo de obra cumple las fechas previstas (SPI: ${spi.toFixed(2)}), pero se están devengando costos por encima del presupuesto (CPI: ${cpi.toFixed(2)}). Se requiere auditar desperdicios de materiales y rendimientos de mano de obra.`;
            } else {
                diagBox.className = 'diagnosis-box diag-bad';
                diagIcon.innerText = '🚨';
                diagTitle.innerText = 'Alerta Gerencial Crítica: Retraso y Sobrecosto Simultáneo';
                diagDesc.innerText = `Zona roja: se gasta más de lo presupuestado (CPI: ${cpi.toFixed(2)}) y se avanza a un ritmo insuficiente (SPI: ${spi.toFixed(2)}). Se proyecta un sobrecosto al cierre de +$${Math.abs(Math.round(vac)).toLocaleString('en-US')} USD. Se exige reunión extraordinaria de reingeniería con el comitente.`;
            }
        }

        // --- 3. SIMULADOR DE LÍNEA DE TIEMPO 4D (MÓDULO 4) ---
        let timelineInterval = null;
        let isTimelinePlaying = false;

        function toggleTimelinePlay() {
            if (isTimelinePlaying) {
                pauseTimeline();
            } else {
                playTimeline();
            }
        }

        function playTimeline() {
            isTimelinePlaying = true;
            document.getElementById('btnPlayPause').innerHTML = '<span>⏸️</span> Pausar Simulación';
            timelineInterval = setInterval(() => {
                let val = parseInt(document.getElementById('timelineSlider').value);
                if (val >= 24) {
                    val = 1;
                } else {
                    val++;
                }
                document.getElementById('timelineSlider').value = val;
                updateTimelineDisplay(val);
            }, 1000);
        }

        function pauseTimeline() {
            isTimelinePlaying = false;
            document.getElementById('btnPlayPause').innerHTML = '<span>▶️</span> Reproducir Simulación 4D';
            if (timelineInterval) clearInterval(timelineInterval);
        }

        function resetTimeline() {
            pauseTimeline();
            document.getElementById('timelineSlider').value = 1;
            updateTimelineDisplay(1);
        }

        function onTimelineSliderChange() {
            const val = parseInt(document.getElementById('timelineSlider').value);
            updateTimelineDisplay(val);
        }

        function updateTimelineDisplay(week) {
            document.getElementById('timelineWeekText').textContent = 'Semana ' + week;

            const p1 = document.getElementById('phase-1');
            const p2 = document.getElementById('phase-2');
            const p3 = document.getElementById('phase-3');
            const p4 = document.getElementById('phase-4');
            const p5 = document.getElementById('phase-5');
            const detailBox = document.getElementById('timelineDetailBox');

            // Reset classes
            [p1, p2, p3, p4, p5].forEach(p => {
                p.className = 'phase-card';
            });

            let statusHtml = '';

            if (week <= 5) {
                p1.className = 'phase-card active';
                const pct = Math.round((week / 5) * 100);
                statusHtml = `<strong>🏗️ FASE 1 EN EJECUCIÓN (Semana ${week} de 24):</strong> Replanteo, excavación masiva y fundaciones superficiales/profundas. Avance de fase: ${pct}%. Equipos en sitio: 1 Retroexcavadora, 2 Camiones volteo. Valuación N° 1 en trámite ante el Ingeniero Inspector.`;
            } else if (week <= 11) {
                p1.className = 'phase-card completed';
                p2.className = 'phase-card active';
                const pct = Math.round(((week - 5) / 6) * 100);
                statusHtml = `<strong>🏢 FASE 2 EN EJECUCIÓN (Semana ${week} de 24):</strong> Estructura portante de concreto armado PB a Piso 4. Avance de fase: ${pct}%. Vaciado de losas nervadas y columnas. Ensayos de rotura a 28 días certificados conforme a COVENIN 1753.`;
            } else if (week <= 17) {
                p1.className = 'phase-card completed';
                p2.className = 'phase-card completed';
                p3.className = 'phase-card active';
                const pct = Math.round(((week - 11) / 6) * 100);
                statusHtml = `<strong>🧱 FASE 3 EN EJECUCIÓN (Semana ${week} de 24):</strong> Estructura superior Pisos 5 a 12 y cerramientos de mampostería. Avance de fase: ${pct}%. Se coordina el montaje de ductos hidrónicos principales antes de cerrar ductos técnicos de ventilación.`;
            } else if (week <= 21) {
                p1.className = 'phase-card completed';
                p2.className = 'phase-card completed';
                p3.className = 'phase-card completed';
                p4.className = 'phase-card active';
                const pct = Math.round(((week - 17) / 4) * 100);
                statusHtml = `<strong>🔌 FASE 4 EN EJECUCIÓN (Semana ${week} de 24):</strong> Redes MEP, bandejas portacables eléctricas, rociadores contra incendio y climatización HVAC. Avance de fase: ${pct}%. Pruebas de presión hidrostática y balance de caudales en conductos.`;
            } else {
                p1.className = 'phase-card completed';
                p2.className = 'phase-card completed';
                p3.className = 'phase-card completed';
                p4.className = 'phase-card completed';
                p5.className = 'phase-card active';
                const pct = Math.round(((week - 21) / 3) * 100);
                statusHtml = `<strong>🏁 FASE 5 EN EJECUCIÓN (Semana ${week} de 24):</strong> Acabados finos, carpintería metálica, pintura, puesta en marcha de ascensores y comisionamiento. Avance de fase: ${pct}%. Elaboración de planos As-Built e inventario de activos COBie para entrega formal.`;
            }

            detailBox.innerHTML = statusHtml;
        }

        // --- 4. SCRIPT PYTHON CLIPBOARD ---
        function copyPythonCode() {
            const code = document.getElementById('pythonCodeSnippet').innerText;
            navigator.clipboard.writeText(code).then(() => {
                alert('¡Script de Python EVM Analytics copiado al portapapeles!');
            });
        }

        // --- 5. INICIALIZACIÓN GLOBAL ---
        window.addEventListener('DOMContentLoaded', () => {
            updateStepperUI();
            initEVMChart();
            updateEVM();
            updateTimelineDisplay(12);
        });
    </script>
</body>
</html>
