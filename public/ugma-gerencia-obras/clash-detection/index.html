<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Día 2: Clash Detection 3D & Matriz de Tolerancias BCF 3.0 · Diplomado UGMA</title>

    <meta name="title" content="Día 2: Clash Detection 3D & Matriz de Tolerancias BCF 3.0 · Diplomado UGMA">
    <meta name="description" content="Laboratorio de Auditoría Espacial 3D, Detección de Colisiones (Hard/Soft/Clearance/4D), Matriz de Tolerancias Multidisciplinar, Generador BCF 3.0 (ISO 21597) y Calculadora del Costo de No-Calidad. Facilitador: Ing. Héctor Mota.">
    <meta name="keywords" content="Clash Detection, Detección de Interferencias, BIM 3D, Three.js, BCF 3.0, ISO 21597, MacLeamy, Tolerancias BIM, Navisworks, UGMA, ConTech, Héctor Mota">
    <meta name="author" content="Héctor Mota Zorrilla">
    <meta name="theme-color" content="#0f2942">

    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="shortcut icon" href="/favicon.ico">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- Three.js & OrbitControls -->
    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/build/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/controls/OrbitControls.js"></script>

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
            --rose: #e11d48;
            --rose-light: #ffe4e6;
            --amber: #b45309;
            --amber-light: #fef3c7;
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

        /* HEADER */
        .page-header {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 36px 32px;
            margin-bottom: 28px;
            box-shadow: var(--shadow-md);
            background-image: radial-gradient(circle at 95% 15%, rgba(225, 29, 72, 0.06) 0%, rgba(2, 132, 199, 0.04) 50%, rgba(255, 255, 255, 1) 100%);
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
            background: var(--rose-light);
            color: var(--rose);
            border: 1px solid #fecdd3;
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
            background: var(--rose);
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
            background: linear-gradient(90deg, var(--rose), var(--blue-accent));
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

        /* 3D WORKSPACE */
        .lab-workspace {
            display: grid;
            grid-template-columns: 1fr;
            gap: 22px;
            margin: 24px 0;
        }
        @media (min-width: 992px) {
            .lab-workspace { grid-template-columns: 7fr 5fr; }
        }
        .canvas-card {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 18px;
            box-shadow: var(--shadow-md);
            display: flex;
            flex-direction: column;
        }
        .canvas-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
            padding-bottom: 10px;
            border-bottom: 1px solid var(--border);
        }
        .canvas-title {
            font-size: 15px;
            font-weight: 800;
            color: var(--navy-primary);
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .canvas-container {
            width: 100%;
            height: 460px;
            background: #0f172a;
            border-radius: 12px;
            overflow: hidden;
            position: relative;
        }
        #webglCanvas {
            width: 100%;
            height: 100%;
            display: block;
        }
        .canvas-telemetry-overlay {
            position: absolute;
            top: 12px;
            left: 12px;
            background: rgba(15, 23, 42, 0.85);
            color: #e2e8f0;
            font-size: 11.5px;
            padding: 8px 12px;
            border-radius: 8px;
            font-family: var(--font-mono);
            backdrop-filter: blur(6px);
            border: 1px solid rgba(255, 255, 255, 0.12);
            line-height: 1.5;
            pointer-events: none;
        }
        .canvas-overlay-hint {
            position: absolute;
            bottom: 12px;
            left: 12px;
            background: rgba(15, 23, 42, 0.85);
            color: #94a3b8;
            font-size: 11.5px;
            padding: 5px 12px;
            border-radius: 6px;
            font-family: var(--font-mono);
            backdrop-filter: blur(4px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .controls-card {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 24px;
            box-shadow: var(--shadow-md);
            display: flex;
            flex-direction: column;
            gap: 18px;
        }
        .panel-heading {
            font-size: 17px;
            font-weight: 800;
            color: var(--navy-primary);
            padding-bottom: 10px;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .ctrl-group label {
            display: block;
            font-size: 13px;
            font-weight: 700;
            color: var(--navy-primary);
            margin-bottom: 6px;
        }
        .ctrl-group select, .ctrl-group input[type="range"], .ctrl-group input[type="text"], .ctrl-group input[type="number"] {
            width: 100%;
            padding: 8px 12px;
            border-radius: 8px;
            border: 1px solid var(--border);
            background: #ffffff;
            font-size: 13.5px;
            color: var(--text-main);
            outline: none;
            transition: border-color 0.2s;
        }
        .ctrl-group select:focus, .ctrl-group input:focus {
            border-color: var(--blue-accent);
        }
        .slider-val {
            font-family: var(--font-mono);
            font-size: 12.5px;
            color: var(--blue-accent);
            font-weight: 700;
            display: inline-block;
            margin-top: 4px;
        }

        .status-box {
            padding: 16px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            gap: 12px;
            transition: all 0.3s;
        }
        .status-box.clash-active {
            background: var(--rose-light);
            border: 1px solid #fda4af;
            color: #9f1239;
        }
        .status-box.clash-soft {
            background: var(--amber-light);
            border: 1px solid #fde68a;
            color: #78350f;
        }
        .status-box.clash-clear {
            background: var(--emerald-light);
            border: 1px solid #a7f3d0;
            color: #065f46;
        }
        .status-icon {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            font-weight: 900;
            flex-shrink: 0;
        }
        .status-box.clash-active .status-icon { background: var(--rose); color: #fff; }
        .status-box.clash-soft .status-icon { background: var(--amber); color: #fff; }
        .status-box.clash-clear .status-icon { background: var(--emerald); color: #fff; }

        .btn-action-primary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 12px 20px;
            background: var(--navy-primary);
            color: #ffffff;
            font-weight: 700;
            font-size: 13.5px;
            border-radius: 10px;
            border: none;
            cursor: pointer;
            transition: all 0.25s;
            box-shadow: 0 4px 12px rgba(15, 41, 66, 0.2);
            text-decoration: none;
            width: 100%;
        }
        .btn-action-primary:hover {
            background: #1e3a8a;
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(15, 41, 66, 0.3);
        }

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
                <span class="badge">Eje Temático 02 · 5 Horas</span>
                <span class="badge badge-academic">Laboratorio 3D WebGL · Postgrado UGMA</span>
                <span class="badge badge-norma">ISO 21597 BCF 3.0 · ISO 16739 IFC4</span>
            </div>
            <h1 class="page-title">Detección de Interferencias (Clash Detection) & Auditoría Espacial 3D</h1>
            <p class="page-subtitle">
                La coordinación multidisciplinaria y detección proactiva de colisiones espaciales representa el núcleo de la ingeniería de preconstrucción moderna. Al someter los modelos federados de arquitectura, estructuras y redes mecatrónicas (MEP) a matrices de tolerancia algorítmicas, la gerencia de obras mitiga demoliciones, sobrecostos y retrasos en la ruta crítica, blindando técnica y jurídicamente la ejecución ante la responsabilidad decenal tipificada en el Código Civil Venezolano.
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
                    <span>Ruta de Aprendizaje Día 2</span>
                    <span id="stepIndicatorText" style="font-size:12px; color:var(--text-light); text-transform:none; margin-left:8px; font-weight:600;">Módulo 1 de 7</span>
                </div>
                <button type="button" class="view-mode-toggle" id="viewModeBtn" onclick="toggleFocusMode()">
                    <span>👁️ Modo Foco</span>
                </button>
            </div>
            <div class="stepper-track">
                <button type="button" class="step-pill active" id="pill-1" onclick="goToStep(1)">
                    <span class="step-num">1</span>
                    <span>Fundamentos Ontológicos</span>
                </button>
                <button type="button" class="step-pill" id="pill-2" onclick="goToStep(2)">
                    <span class="step-num">2</span>
                    <span>Matriz de Tolerancias</span>
                </button>
                <button type="button" class="step-pill" id="pill-3" onclick="goToStep(3)">
                    <span class="step-num">3</span>
                    <span>Simulador 3D WebGL</span>
                </button>
                <button type="button" class="step-pill" id="pill-4" onclick="goToStep(4)">
                    <span class="step-num">4</span>
                    <span>Gestor BCF 3.0 / 2.1</span>
                </button>
                <button type="button" class="step-pill" id="pill-5" onclick="goToStep(5)">
                    <span class="step-num">5</span>
                    <span>Costo de No-Calidad</span>
                </button>
                <button type="button" class="step-pill" id="pill-6" onclick="goToStep(6)">
                    <span class="step-num">6</span>
                    <span>Script Python Headless</span>
                </button>
                <button type="button" class="step-pill" id="pill-7" onclick="goToStep(7)">
                    <span class="step-num">7</span>
                    <span>Marco Legal & Peritaje</span>
                </button>
            </div>
            <div class="stepper-progress">
                <div class="stepper-progress-bar" id="stepperProgressBar"></div>
            </div>
        </div>

        <!-- ======================================================== -->
        <!-- MÓDULO 1: FUNDAMENTOS ONTOLÓGICOS Y TIPOLOGÍA DE CHOQUES -->
        <!-- ======================================================== -->
        <section class="content-card" id="step-1">
            <h2 class="section-title">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--rose)" stroke-width="2.2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                Módulo 1: Fundamentos de Auditoría Espacial & Coordinación Federada
            </h2>

            <p class="academic-p">
                La detección de interferencias espaciales (*Clash Detection*) no consiste meramente en la inspección visual de maquetas tridimensionales, sino en un proceso analítico riguroso de auditoría geométrica e interoperable. En la metodología tradicional basada en planos bidimensionales superpuestos en papel o capas CAD disconexas, la incongruencia espacial entre las instalaciones mecánicas, eléctricas, sanitarias (MEP) y los elementos estructurales de soporte permanecía oculta hasta el momento crítico de la ejecución material en obra. Este desfase histórico forzaba la improvisación mediante roturas de vigas, perforaciones no calculadas en losas de concreto o el desvío forzado de trazados con codos innecesarios, degradando la eficiencia hidráulica y comprometiendo gravemente la capacidad portante de las estructuras.
            </p>

            <p class="academic-p">
                Bajo el paradigma del modelo federado (*Federated Information Model* conforme a la norma ISO 19650), cada disciplina vuelca su geometría y metadatos paramétricos en contenedores de información abiertos IFC4 (ISO 16739). La federación algorítmica permite que un motor de colisión computacional ejecute pruebas de intersección sobre volúmenes acotados en el espacio euclidiano (\(\mathbb{R}^3\)), evaluando las interferencias bajo cuatro tipologías técnicas estandarizadas internacionalmente:
            </p>

            <div class="grid-4">
                <div class="info-card">
                    <h4>
                        <span style="color:var(--rose);">●</span> 1. Hard Clash
                    </h4>
                    <p>
                        <strong>Interferencia Física Directa:</strong> Ocurre cuando dos sólidos geométricos comparten y reclaman el mismo volumen espacial en \(\mathbb{R}^3\). Ejemplo paradigmático: un conducto de ventilación forzada de \(600\times 350\text{ mm}\) intersectando el peralte de una viga de concreto armado sin pase pre-vaciado.
                    </p>
                </div>
                <div class="info-card">
                    <h4>
                        <span style="color:var(--amber);">●</span> 2. Soft Clash
                    </h4>
                    <p>
                        <strong>Violación de Holgura (Clearance):</strong> Los sólidos no se intersecan materialmente, pero invaden zonas de tolerancia o envolventes térmicas y operativas. Ejemplo: una bandeja de cables eléctricos a menos de \(150\text{ mm}\) de una tubería de agua caliente o vapor sin aislamiento.
                    </p>
                </div>
                <div class="info-card">
                    <h4>
                        <span style="color:var(--blue-accent);">●</span> 3. Maintenance Clash
                    </h4>
                    <p>
                        <strong>Invasión de Espacio de Mantenimiento:</strong> Bloqueo del área ergonómica necesaria para la operación humana o sustitución de equipos. Ejemplo: ausencia del espacio frontal mínimo (\(1.00\text{ m}\)) para la apertura de puertas en tableros eléctricos según Código Eléctrico Nacional / NFPA 70E.
                    </p>
                </div>
                <div class="info-card">
                    <h4>
                        <span style="color:var(--purple);">●</span> 4. 4D Time Clash
                    </h4>
                    <p>
                        <strong>Conflicto Constructivo en el Tiempo:</strong> Interferencia cinemática o temporal en la secuencia de ejecución. Ejemplo: el vaciado de una losa previsto en la semana 12 que bloquea el izaje e instalación de una caldera industrial de 5 toneladas programada para la semana 14.
                    </p>
                </div>
            </div>

            <div style="background:var(--blue-light); border-left:4px solid var(--blue-accent); padding:16px 20px; border-radius:0 12px 12px 0; margin-top:20px;">
                <div style="font-weight:800; color:#0369a1; font-size:14px; margin-bottom:4px;">💡 Principio Clave de la Auditoría BIM</div>
                <div style="font-size:13.5px; color:#0f172a; line-height:1.6;">
                    Una colisión resuelta en el modelo federado durante la fase de diseño insume entre <strong>2 y 4 Horas-Hombre</strong> de coordinación frente a la pantalla. Esa misma colisión descubierta durante el colado del concreto en la obra exige demoliciones, apuntalamiento provisional, ensayos de integridad, atraso de cuadrillas y órdenes de cambio que multiplican su costo hasta por <strong>60 veces</strong>.
                </div>
            </div>
        </section>

        <!-- ======================================================== -->
        <!-- MÓDULO 2: MATRIZ DE TOLERANCIAS MULTIDISCIPLINARIA      -->
        <!-- ======================================================== -->
        <section class="content-card" id="step-2">
            <h2 class="section-title">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--teal-accent)" stroke-width="2.2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="3" y1="15" x2="21" y2="15"></line><line x1="9" y1="3" x2="9" y2="21"></line><line x1="15" y1="3" x2="15" y2="21"></line></svg>
                Módulo 2: Matriz de Tolerancias Multidisciplinaria & Reglas de Coordinación
            </h2>

            <p class="academic-p">
                En proyectos de gran envergadura hospitalaria, residencial o industrial, someter todas las disciplinas contra todas sin criterios de filtrado genera miles de "falsos positivos" (ej. un tornillo rozando un perfil estructural o tuberías embebidas deliberadamente en una losa de piso). Para evitar la parálisis por análisis, el Plan de Ejecución BIM (BEP) debe consagrar una **Matriz de Tolerancias de Coordinación** (*Clash Rules Matrix*), en la que se definen umbrales cuantitativos milimétricos y protocolos de resolución para cada par disciplinario.
            </p>

            <div class="tech-table-container">
                <table class="tech-table">
                    <thead>
                        <tr>
                            <th>Cruce de Especialidades</th>
                            <th>Tipo de Colisión</th>
                            <th>Tolerancia Contractual</th>
                            <th>Severidad</th>
                            <th>Protocolo de Acción en War Room</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Estructura Concreto vs. HVAC Principal</strong></td>
                            <td>Hard Clash</td>
                            <td>\(0\text{ mm}\) (Cero invasión)</td>
                            <td><span style="background:#ffe4e6; color:#e11d48; padding:3px 8px; border-radius:6px; font-weight:800; font-size:11px;">CRÍTICA (P1)</span></td>
                            <td>Rediseño obligatorio de cota de cielo falso o cálculo formal de pasamuro encamisado por el calculista.</td>
                        </tr>
                        <tr>
                            <td><strong>Estructura vs. Drenajes Sanitarios (PVC)</strong></td>
                            <td>Hard Clash</td>
                            <td>\(0\text{ mm}\)</td>
                            <td><span style="background:#ffe4e6; color:#e11d48; padding:3px 8px; border-radius:6px; font-weight:800; font-size:11px;">CRÍTICA (P1)</span></td>
                            <td>La tubería por gravedad (\(1\%\text{ - }2\%\)) no puede desviarse arbitrariamente; requiere pase pre-encofrado.</td>
                        </tr>
                        <tr>
                            <td><strong>Bandeja Eléctrica vs. Tubería de Agua/Vapor</strong></td>
                            <td>Soft Clash</td>
                            <td>\(150\text{ mm}\) separación libre</td>
                            <td><span style="background:#fef3c7; color:#b45309; padding:3px 8px; border-radius:6px; font-weight:800; font-size:11px;">ALTA (P2)</span></td>
                            <td>Separación de seguridad dieléctrica y térmica obligatoria según Código Eléctrico Nacional FONDONORMA 200.</td>
                        </tr>
                        <tr>
                            <td><strong>Rociadores PCI vs. Luminarias / Techo Falso</strong></td>
                            <td>Clearance</td>
                            <td>\(300\text{ mm}\) deflector libre</td>
                            <td><span style="background:#fef3c7; color:#b45309; padding:3px 8px; border-radius:6px; font-weight:800; font-size:11px;">ALTA (P2)</span></td>
                            <td>Preservar cono de aspersión y descarga hidráulica bajo norma NFPA 13 y COVENIN 1376.</td>
                        </tr>
                        <tr>
                            <td><strong>Frente de Tableros Eléctricos Principales</strong></td>
                            <td>Clearance</td>
                            <td>\(1000\text{ mm}\) espacio libre frontal</td>
                            <td><span style="background:#e0f2fe; color:#0369a1; padding:3px 8px; border-radius:6px; font-weight:800; font-size:11px;">MEDIA (P3)</span></td>
                            <td>Reserva de espacio ergonómico para maniobra de operarios con EPP según NFPA 70E.</td>
                        </tr>
                        <tr>
                            <td><strong>Paredes de Bloque vs. Tubería Conduit Embebida</strong></td>
                            <td>Intersección Planificada</td>
                            <td>Tolerancia Permisible</td>
                            <td><span style="background:#d1fae5; color:#047857; padding:3px 8px; border-radius:6px; font-weight:800; font-size:11px;">IGNORAR (P4)</span></td>
                            <td>Regla de exclusión en Navisworks / Solibri: elementos concebidos para ser embutidos en mampostería.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- SIMULADOR INTERACTIVO DE MATRIZ DE REGLAS -->
            <div style="background:#ffffff; border:1px solid var(--border); border-radius:14px; padding:22px; margin-top:20px; box-shadow:var(--shadow-sm);">
                <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:14px; flex-wrap:wrap; gap:10px;">
                    <h3 style="font-size:16px; font-weight:800; color:var(--navy-primary); display:flex; align-items:center; gap:8px;">
                        <span>🔬</span> Simulador Interactivo de Matriz de Reglas de Interferencia
                    </h3>
                    <span style="font-size:11.5px; font-family:var(--font-mono); color:var(--text-light); background:var(--surface-subtle); padding:4px 8px; border-radius:6px;">
                        Algoritmo de Filtrado Booleano
                    </span>
                </div>

                <div class="grid-3">
                    <div class="ctrl-group">
                        <label for="matrixDisc1">Disciplina Primaria (Elemento Host):</label>
                        <select id="matrixDisc1" onchange="runMatrixRuleEvaluation()">
                            <option value="EST">Estructura de Concreto (Vigas/Columnas)</option>
                            <option value="ARQ">Arquitectura (Muros/Tabiquería)</option>
                            <option value="ELE">Electricidad (Bandejas/Tableros)</option>
                        </select>
                    </div>
                    <div class="ctrl-group">
                        <label for="matrixDisc2">Disciplina Secundaria (Instalación):</label>
                        <select id="matrixDisc2" onchange="runMatrixRuleEvaluation()">
                            <option value="HVAC">Mecánica HVAC (Conductos de Climatización)</option>
                            <option value="SAN">Sanitaria (Drenajes por Gravedad PVC)</option>
                            <option value="ELE">Electricidad (Bandejas Portacables)</option>
                            <option value="PCI">Protección Contra Incendios (Rociadores)</option>
                        </select>
                    </div>
                    <div class="ctrl-group">
                        <label for="matrixDistInput">Distancia Medida en Modelo (\(d\) en mm):</label>
                        <input type="number" id="matrixDistInput" value="0" min="-100" max="500" step="5" oninput="runMatrixRuleEvaluation()">
                        <span class="slider-val" id="matrixDistValText">0 mm (Contacto / Solapamiento)</span>
                    </div>
                </div>

                <div id="matrixEvaluationResult" style="margin-top:16px; padding:16px; border-radius:10px; background:#f8fafc; border:1px solid var(--border);">
                    <!-- Dynamic rule output -->
                </div>
            </div>
        </section>

        <!-- ======================================================== -->
        <!-- MÓDULO 3: LABORATORIO 3D WEBGL Y TELEMETRÍA ESPACIAL     -->
        <!-- ======================================================== -->
        <section class="content-card" id="step-3">
            <h2 class="section-title">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--blue-accent)" stroke-width="2.2"><circle cx="12" cy="12" r="10"></circle><polygon points="12 8 8 12 12 16 12 8"></polygon><polygon points="12 8 16 12 12 16 12 8"></polygon></svg>
                Módulo 3: Laboratorio 3D WebGL con Telemetría Espacial y Detección AABB/OBB
            </h2>

            <p class="academic-p">
                A continuación se presenta el laboratorio interactivo tridimensional con motor **Three.js WebGL**. Este gemelo digital simula en tiempo real la colisión entre el pórtico estructural de concreto armado y una red mecatrónica de distribución. El algoritmo calcula de manera continua la intersección entre las cajas envolventes de los objetos (*Axis-Aligned Bounding Box - AABB*) y evalúa la invasión volumétrica exacta, computando las coordenadas universales y el volumen de penetración en litros (\(dm^3\)).
            </p>

            <div class="lab-workspace">
                <div class="canvas-card">
                    <div class="canvas-top">
                        <span class="canvas-title">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--blue-accent)" stroke-width="2.5"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                            Visor Federado 3D (Estructura vs Red Mecatrónica)
                        </span>
                        <span style="font-size:12px; color:var(--text-light); font-family:var(--font-mono);">WebGL Shaders &amp; Raycasting</span>
                    </div>
                    <div class="canvas-container">
                        <canvas id="webglCanvas"></canvas>
                        <div class="canvas-telemetry-overlay" id="telemetryOverlay">
                            <strong>📊 TELEMETRÍA ESPACIAL:</strong><br>
                            Elevación \(Z\): <span id="telZ">2.55 m</span><br>
                            Desplazamiento \(X\): <span id="telX">0.00 m</span><br>
                            Volumen Invasión: <span id="telVol" style="color:#fda4af; font-weight:700;">18.5 dm³</span><br>
                            Estado: <span id="telStatus" style="color:#f43f5e; font-weight:700;">HARD CLASH</span>
                        </div>
                        <div class="canvas-overlay-hint">🖱️ Arrastrar para rotar · Rueda para zoom · Clic derecho para desplazar cámara</div>
                    </div>
                </div>

                <!-- PANEL DE CONTROL Y ESCENARIOS -->
                <div class="controls-card">
                    <h3 class="panel-heading">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--navy-primary)" stroke-width="2.5"><line x1="4" y1="21" x2="4" y2="14"></line><line x1="4" y1="10" x2="4" y2="3"></line><line x1="12" y1="21" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="3"></line><line x1="20" y1="21" x2="20" y2="16"></line><line x1="20" y1="12" x2="20" y2="3"></line><line x1="1" y1="14" x2="7" y2="14"></line><line x1="9" y1="8" x2="15" y2="8"></line><line x1="17" y1="16" x2="23" y2="16"></line></svg>
                        Parámetros de Auditoría Espacial
                    </h3>

                    <div class="ctrl-group">
                        <label for="scenarioSelect">Escenario de Conflicto Disciplinario:</label>
                        <select id="scenarioSelect" onchange="changeScenario()">
                            <option value="1">Escenario 1: Viga V-101 vs Ducto Climatización HVAC (600x350 mm)</option>
                            <option value="2">Escenario 2: Columna C-1 vs Tubería Sanitaria PVC 4" (Aguas Servidas)</option>
                            <option value="3">Escenario 3: Bandeja Eléctrica vs Tubería Agua Helada (Aislamiento 25mm)</option>
                        </select>
                    </div>

                    <div class="ctrl-group">
                        <label for="ductHeightSlider">Cota Vertical / Elevación (\(Z\) en mm):</label>
                        <input type="range" id="ductHeightSlider" min="2000" max="3200" value="2550" step="10" oninput="updateDuctElevation()">
                        <span class="slider-val" id="ductElevationText">2,550 mm (Nivel de Falso Plafón)</span>
                    </div>

                    <div class="ctrl-group">
                        <label for="ductXSlider">Desplazamiento Transversal (\(X\) en mm):</label>
                        <input type="range" id="ductXSlider" min="-1200" max="1200" value="0" step="20" oninput="updateDuctX()">
                        <span class="slider-val" id="ductXText">0 mm (Eje Central de Viga)</span>
                    </div>

                    <div class="ctrl-group">
                        <label for="toleranceSlider">Tolerancia Mínima de Holgura (Clearance):</label>
                        <input type="range" id="toleranceSlider" min="0" max="200" value="50" step="5" oninput="updateTolerance()">
                        <span class="slider-val" id="toleranceText">50 mm de aislamiento requerido</span>
                    </div>

                    <!-- DYNAMIC STATUS BOX -->
                    <div id="clashStatusBox" class="status-box clash-active">
                        <div class="status-icon" id="statusIcon">⚠️</div>
                        <div>
                            <strong id="statusTitle">¡Colisión Directa Detectada (Hard Clash)!</strong>
                            <div style="font-size:12.5px;" id="statusDesc">El elemento mecánico intersecta físicamente el volumen de la viga V-101.</div>
                        </div>
                    </div>

                    <button type="button" class="btn-action-primary" onclick="syncWithBcfGenerator()">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                        Generar Ticket BCF con Cámara Actual
                    </button>
                </div>
            </div>
        </section>

        <!-- ======================================================== -->
        <!-- MÓDULO 4: GESTOR DE INCIDENCIAS BCF 3.0 / 2.1 (ISO 21597) -->
        <!-- ======================================================== -->
        <section class="content-card" id="step-4">
            <h2 class="section-title">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--purple)" stroke-width="2.2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                Módulo 4: Protocolo de Incidencias BCF 3.0 &amp; BCF 2.1 (ISO 21597)
            </h2>

            <p class="academic-p">
                El envío de capturas de pantalla estáticas por correo electrónico o aplicaciones de mensajería instantánea es una de las prácticas más lesivas para la trazabilidad de un proyecto. El estándar abierto **BCF (BIM Collaboration Format)**, respaldado por buildingSMART y normalizado bajo **ISO 21597**, permite comunicar incidencias espaciales sin necesidad de intercambiar gigabytes de modelos completos. Un contenedor BCF transporta las coordenadas de cámara, la proyección de perspectiva, los identificadores unívocos universales (`IfcGuid`) de las entidades en conflicto, la persona responsable de la subsanación y el estado del ciclo de vida del ticket (*Open, In Progress, Resolved, Closed*).
            </p>

            <div class="grid-2">
                <!-- FORMULARIO DEL TICKET -->
                <div style="background:var(--surface-subtle); border:1px solid var(--border); border-radius:14px; padding:20px;">
                    <h3 style="font-size:16px; font-weight:800; color:var(--navy-primary); margin-bottom:14px; display:flex; align-items:center; gap:8px;">
                        <span>📝</span> Parámetros del Ticket de Coordinación BCF
                    </h3>

                    <div class="ctrl-group" style="margin-bottom:12px;">
                        <label for="bcfTitle">Título de la Incidencia (Topic Title):</label>
                        <input type="text" id="bcfTitle" value="COL-042: Interferencia Crítica Viga V-101 vs Ducto HVAC">
                    </div>

                    <div class="grid-2" style="margin:0 0 12px 0;">
                        <div class="ctrl-group">
                            <label for="bcfPriority">Prioridad:</label>
                            <select id="bcfPriority" onchange="renderBcfCode()">
                                <option value="Critical">Crítica (Ruta Crítica / Vaciado)</option>
                                <option value="Major">Alta (Rediseño de Tramo)</option>
                                <option value="Normal">Normal (Ajuste de Cota)</option>
                                <option value="Minor">Baja (Informativa)</option>
                            </select>
                        </div>
                        <div class="ctrl-group">
                            <label for="bcfStatus">Estado:</label>
                            <select id="bcfStatus" onchange="renderBcfCode()">
                                <option value="Active">Abierto (Active / Open)</option>
                                <option value="In_Review">En Revisión (In Review)</option>
                                <option value="Resolved">Resuelto (Resolved)</option>
                                <option value="Closed">Cerrado (Closed)</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid-2" style="margin:0 0 12px 0;">
                        <div class="ctrl-group">
                            <label for="bcfAssignee">Asignado a (Responsable):</label>
                            <select id="bcfAssignee" onchange="renderBcfCode()">
                                <option value="ing.calculista@proyecto.com">Ing. Calculista Estructural</option>
                                <option value="coordinador.hvac@proyecto.com">Proyectista Mecánico HVAC</option>
                                <option value="ing.sanitario@proyecto.com">Ingeniero Sanitario Hidráulico</option>
                                <option value="residente.obra@constructora.com">Ingeniero Residente de Obra</option>
                            </select>
                        </div>
                        <div class="ctrl-group">
                            <label for="bcfStage">Etapa del Proyecto:</label>
                            <select id="bcfStage" onchange="renderBcfCode()">
                                <option value="Preconstruction">Preconstrucción (War Room BIM)</option>
                                <option value="Shop_Drawings">Planos de Taller y Prefabricación</option>
                                <option value="Execution">Ejecución en Faena (Obra)</option>
                            </select>
                        </div>
                    </div>

                    <div class="ctrl-group" style="margin-bottom:14px;">
                        <label for="bcfComment">Comentario Técnico &amp; Solución Propuesta:</label>
                        <input type="text" id="bcfComment" value="Se solicita al proyectista HVAC bajar cota 150mm o evaluar pase encamisado con refuerzo en viga V-101.">
                    </div>

                    <div style="display:flex; gap:10px;">
                        <button type="button" class="btn-action-primary" onclick="downloadBcfFile()" style="flex:1;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                            Descargar Ticket BCF (.json)
                        </button>
                        <button type="button" class="view-mode-toggle" onclick="copyBcfCode()" style="padding:10px 14px; font-size:13px;" title="Copiar Payload BCF al Portapapeles">
                            📋 Copiar
                        </button>
                    </div>
                </div>

                <!-- VISOR DE CÓDIGO BCF (REST API / XML SCHEMA) -->
                <div>
                    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:8px;">
                        <span style="font-size:13px; font-weight:800; color:var(--navy-primary);">
                            Payload Estructurado BCF (ISO 21597):
                        </span>
                        <div style="display:flex; gap:6px;">
                            <button type="button" id="btnBcfFmtJson" class="view-mode-toggle" style="background:var(--navy-primary); color:#fff; border-color:var(--navy-primary);" onclick="setBcfFormat('json')">
                                BCF 3.0 (JSON API)
                            </button>
                            <button type="button" id="btnBcfFmtXml" class="view-mode-toggle" onclick="setBcfFormat('xml')">
                                BCF 2.1 (XML Schema)
                            </button>
                        </div>
                    </div>
                    <pre class="code-container" style="height:365px; margin:0; font-size:11.8px;" id="bcfCodeOutput"></pre>
                </div>
            </div>
        </section>

        <!-- ======================================================== -->
        <!-- MÓDULO 5: CALCULADORA DEL COSTO DE NO-CALIDAD            -->
        <!-- ======================================================== -->
        <section class="content-card" id="step-5">
            <h2 class="section-title">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--amber)" stroke-width="2.2"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                Módulo 5: Calculadora Paramétrica del Costo de No-Calidad &amp; Curva de MacLeamy
            </h2>

            <p class="academic-p">
                La curva de Patrick MacLeamy (*The Effort/Effect Curve*) demuestra matemáticamente que la capacidad de introducir cambios y reducir costos en un proyecto de edificación decrece exponencialmente a medida que avanza su ciclo de vida, mientras que el costo de implementar esos mismos cambios se incrementa de forma hiperbólica. La detección de interferencias en fase de preconstrucción digital transfiere el esfuerzo hacia etapas tempranas donde el impacto económico de una corrección equivale al costo de rediseño de un archivo CAD/BIM, mientras que resolver una colisión en faena implica demoliciones, retrasos de cuadrillas, penalizaciones por mora y litigios.
            </p>

            <div style="background:var(--surface-subtle); border:1px solid var(--border); border-radius:16px; padding:26px; margin:20px 0;">
                <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:18px; flex-wrap:wrap; gap:10px;">
                    <h3 style="font-size:17px; font-weight:800; color:var(--navy-primary); display:flex; align-items:center; gap:8px;">
                        <span>🧮</span> Simulador Paramétrico: Costo de Resolución Oficina BIM vs. Faena de Obra
                    </h3>
                    <span style="font-size:12px; font-weight:800; color:#0369a1; background:#e0f2fe; padding:4px 10px; border-radius:8px;">
                        Modelo Predictivo de Sobrecosto (Stanford CIFE / MacLeamy)
                    </span>
                </div>

                <div class="grid-4">
                    <div class="ctrl-group">
                        <label for="costPartida">Costo de la Partida Afectada ($ USD):</label>
                        <input type="number" id="costPartida" value="8500" min="500" max="100000" step="500" oninput="calculateReworkCost()">
                        <span class="slider-val" id="costPartidaText">$8,500.00</span>
                    </div>
                    <div class="ctrl-group">
                        <label for="costDemolition">Costo de Demolición y Resane ($ USD):</label>
                        <input type="number" id="costDemolition" value="1200" min="100" max="20000" step="100" oninput="calculateReworkCost()">
                        <span class="slider-val" id="costDemolitionText">$1,200.00</span>
                    </div>
                    <div class="ctrl-group">
                        <label for="costDaysDelay">Días de Atraso en Ruta Crítica (Días):</label>
                        <input type="number" id="costDaysDelay" value="3" min="0" max="30" step="1" oninput="calculateReworkCost()">
                        <span class="slider-val" id="costDaysDelayText">3 días laborables</span>
                    </div>
                    <div class="ctrl-group">
                        <label for="costDailyCrew">Costo Diario de Cuadrilla ($ USD/día):</label>
                        <input type="number" id="costDailyCrew" value="650" min="100" max="5000" step="50" oninput="calculateReworkCost()">
                        <span class="slider-val" id="costDailyCrewText">$650.00 / día</span>
                    </div>
                </div>

                <div style="margin-top:24px; padding:20px; background:#ffffff; border-radius:12px; border:1px solid var(--border); box-shadow:var(--shadow-sm);" id="reworkResultCard">
                    <!-- Dynamic calculations -->
                </div>
            </div>
        </section>

        <!-- ======================================================== -->
        <!-- MÓDULO 6: SCRIPT PYTHON HEADLESS CONTINUO               -->
        <!-- ======================================================== -->
        <section class="content-card" id="step-6">
            <h2 class="section-title">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--emerald)" stroke-width="2.2"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                Módulo 6: Script Headless en Python (IfcOpenShell &amp; BCF Automation)
            </h2>

            <p class="academic-p">
                En los consorcios de ingeniería avanzada, la detección de interferencias ya no depende de operadores abriendo maquetas pesadas manualmente todas las semanas. Se implementan canalizaciones de Integración Continua (CI/CD) donde servidores en la nube ejecutan scripts en **Python** utilizando la librería de código abierto **IfcOpenShell**. El script analiza los archivos IFC publicados en el CDE, genera jerarquías de árboles envolventes BVH (*Bounding Volume Hierarchy*), detecta colisiones de sólidos y emite los paquetes BCF de manera desatendida.
            </p>

            <div class="code-container">
                <div class="code-header">
                    <span>🐍 clash_detector_headless.py · Python 3.11 + IfcOpenShell + OpenBIM BCF Engine</span>
                    <button type="button" class="btn-copy-code" onclick="copyPythonCode()">📋 Copiar Script al Portapapeles</button>
                </div>
                <pre id="pythonCodeSnippet" style="margin:0; font-family:var(--font-mono); color:#f8fafc;"><code>import ifcopenshell
import ifcopenshell.geom
import uuid
import json
from datetime import datetime

def audit_federated_clashes(str_file_path, mep_file_path, clearance_tolerance_m=0.05):
    """
    Auditoría espacial automatizada entre modelo estructural y modelo MEP.
    Genera tópicos BCF 3.0 ante violaciones de envolventes o penetración física.
    """
    print(f"[CI/CD] Cargando modelo estructural: {str_file_path}")
    ifc_str = ifcopenshell.open(str_file_path)
    
    print(f"[CI/CD] Cargando modelo de instalaciones MEP: {mep_file_path}")
    ifc_mep = ifcopenshell.open(mep_file_path)
    
    settings = ifcopenshell.geom.settings()
    settings.set(settings.USE_WORLD_COORDS, True)
    
    beams = ifc_str.by_type("IfcBeam")
    ducts = ifc_mep.by_type("IfcDuctSegment")
    
    print(f"[AUDIT] Evaluando {len(beams)} vigas vs {len(ducts)} tramos de ductos...")
    clashes_detected = []
    
    for beam in beams:
        try:
            beam_shape = ifcopenshell.geom.create_shape(settings, beam)
            beam_box = beam_shape.geometry.bbox() # [xmin, ymin, zmin, xmax, ymax, zmax]
        except Exception:
            continue
            
        for duct in ducts:
            try:
                duct_shape = ifcopenshell.geom.create_shape(settings, duct)
                duct_box = duct_shape.geometry.bbox()
            except Exception:
                continue
                
            # Evaluación AABB con tolerancia de holgura (Clearance)
            overlaps_x = (beam_box[0] <= duct_box[3] + clearance_tolerance_m) and (beam_box[3] >= duct_box[0] - clearance_tolerance_m)
            overlaps_y = (beam_box[1] <= duct_box[4] + clearance_tolerance_m) and (beam_box[4] >= duct_box[1] - clearance_tolerance_m)
            overlaps_z = (beam_box[2] <= duct_box[5] + clearance_tolerance_m) and (beam_box[5] >= duct_box[2] - clearance_tolerance_m)
            
            if overlaps_x and overlaps_y and overlaps_z:
                topic_id = str(uuid.uuid4())
                clash_item = {
                    "topic_id": topic_id,
                    "title": f"Interferencia: Viga {beam.Name or beam.GlobalId} vs Ducto {duct.Name or duct.GlobalId}",
                    "priority": "Critical",
                    "creation_date": datetime.utcnow().isoformat() + "Z",
                    "assigned_to": "coordinador.bim@ugma.edu.ve",
                    "components": [
                        {"ifc_guid": beam.GlobalId, "type": "IfcBeam", "name": beam.Name},
                        {"ifc_guid": duct.GlobalId, "type": "IfcDuctSegment", "name": duct.Name}
                    ],
                    "tolerance_violation_m": clearance_tolerance_m,
                    "status": "Active"
                }
                clashes_detected.append(clash_item)
                print(f"  [!] Colisión detectada: GUID {beam.GlobalId} intersecta {duct.GlobalId}")
                
    # Emisión de Reporte BCF JSON
    report_filename = f"reporte_clashes_{datetime.now().strftime('%Y%m%d_%H%M%S')}.json"
    with open(report_filename, "w", encoding="utf-8") as f:
        json.dump(clashes_detected, f, indent=2, ensure_ascii=False)
        
    print(f"[CI/CD] Auditoría completada. Total colisiones: {len(clashes_detected)}. Archivo: {report_filename}")
    return clashes_detected

if __name__ == "__main__":
    # Ejecución de prueba
    audit_federated_clashes("UGMA_Estructuras.ifc", "UGMA_Climatizacion.ifc")
</code></pre>
            </div>
        </section>

        <!-- ======================================================== -->
        <!-- MÓDULO 7: MARCO LEGAL & PERITAJE JUDICIAL                -->
        <!-- ======================================================== -->
        <section class="content-card" id="step-7">
            <h2 class="section-title">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--navy-primary)" stroke-width="2.2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                Módulo 7: Marco Normativo, Responsabilidad Decenal &amp; Peritaje Judicial
            </h2>

            <p class="academic-p">
                En el ejercicio profesional de la ingeniería y la gerencia de proyectos en Venezuela, las interferencias espaciales no resueltas no son simples inconvenientes de cronograma; constituyen el detonante primario de vicios constructivos que acarrean graves responsabilidades civiles, administrativas y penales. El **Artículo 1637 del Código Civil Venezolano** consagra la **Responsabilidad Decenal**, estableciendo que si en el curso de diez años a contar desde el día en que se ha terminado la construcción de un edificio u otra obra importante, se arruina todo o en parte, o presenta evidente peligro de ruina por defecto de construcción o por vicio del suelo, el arquitecto y el empresario son responsables.
            </p>

            <p class="academic-p">
                Cuando una cuadrilla en obra rompe una viga de concreto o corta estribos sísmicos de confinamiento para abrir paso a una tubería sanitaria de 4 pulgadas sin la autorización y recálculo formal del Ingeniero Estructural, se configura una violación directa de las normas sismorresistentes **COVENIN 1756-1:2019** y de los Artículos 12 y 16 de la **Ley de Ejercicio de la Ingeniería, Arquitectura y Profesiones Afines**. Ante un eventual colapso o litigio contractual, el peritaje técnico forense apoyado en modelos federados con bitácora BCF inmutable constituye la prueba documental irrefutable para deslindar la responsabilidad entre el proyectista, el constructor y el inspector de obra.
            </p>

            <div class="grid-3" style="margin-top:24px;">
                <div class="info-card">
                    <h4>🏛️ Código Civil Venezolano</h4>
                    <p>
                        <strong>Artículo 1637 (Responsabilidad Decenal):</strong> Acción contractual de orden público. La perforación clandestina de elementos estructurales en obra destruye la garantía y compromete el patrimonio del ejecutor.
                    </p>
                    <a href="http://www.tsj.gob.ve/" target="_blank" rel="noopener noreferrer" style="font-size:12px; font-weight:700; color:var(--blue-accent); text-decoration:none; display:inline-block; margin-top:8px;">
                        Jurisprudencia TSJ &rarr;
                    </a>
                </div>
                <div class="info-card">
                    <h4>📐 Normas COVENIN Sísmicas</h4>
                    <p>
                        <strong>COVENIN 1756 &amp; COVENIN 2000-87:</strong> Prohibición expresa de perforaciones o canalizaciones en zonas de confinamiento plástico y nudos viga-columna sin estudio analítico de cortante y flexión.
                    </p>
                    <a href="https://fondonorma.org.ve/" target="_blank" rel="noopener noreferrer" style="font-size:12px; font-weight:700; color:var(--blue-accent); text-decoration:none; display:inline-block; margin-top:8px;">
                        Catálogo FONDONORMA &rarr;
                    </a>
                </div>
                <div class="info-card">
                    <h4>🌐 Estándares buildingSMART</h4>
                    <p>
                        <strong>ISO 21597 (BCF) &amp; ISO 16739 (IFC4):</strong> Especificaciones técnicas universales que dotan al proceso de auditoría de validez legal y trazabilidad de autoría con estampas cronológicas seguras.
                    </p>
                    <a href="https://technical.buildingsmart.org/standards/bcf/" target="_blank" rel="noopener noreferrer" style="font-size:12px; font-weight:700; color:var(--blue-accent); text-decoration:none; display:inline-block; margin-top:8px;">
                        buildingSMART BCF API &rarr;
                    </a>
                </div>
            </div>

            <div style="margin-top: 24px; padding: 20px 24px; background: #f0f9ff; border: 1.5px solid #bae6fd; border-radius: 14px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px;">
                <div style="max-width: 680px;">
                    <h4 style="font-size: 16px; font-weight: 800; color: #0369a1; margin-bottom: 4px; display: flex; align-items: center; gap: 8px;">
                        <span>⚠️</span> Gestor de Incidencias BCF 3.0 &amp; Visor IFC en el Laboratorio ConTech
                    </h4>
                    <p style="font-size: 13.5px; color: #475569; margin: 0; line-height: 1.6;">
                        Explora la gestión real de colisiones espaciales, tickets de interferencia y modelos federados completos en el <strong>BIM Hub</strong> oficial en <strong>lab.motazorrilla.com/bim</strong> (Pestaña "Incidencias BCF").
                    </p>
                </div>
                <a href="https://lab.motazorrilla.com/bim/" target="_blank" rel="noopener noreferrer" style="display: inline-flex; align-items: center; gap: 8px; padding: 10px 20px; background: #0284c7; color: #ffffff; font-size: 13.5px; font-weight: 700; border-radius: 10px; text-decoration: none; box-shadow: 0 4px 12px rgba(2, 132, 199, 0.25); transition: all 0.2s;">
                    Abrir Visor &amp; BCF en el Lab &rarr;
                </a>
            </div>
        </section>

        <!-- ======================================================== -->
        <!-- CTA FOOTER ACADÉMICO                                     -->
        <!-- ======================================================== -->
        <div class="page-footer-action">
            <h3 style="font-size:22px; font-weight:800; color:var(--navy-primary); margin-bottom:8px;">
                ¿Consultas sobre este Laboratorio o la Metodología de Auditoría 3D?
            </h3>
            <p style="font-size:14.5px; color:var(--text-muted); margin-bottom:22px; max-width:700px; margin-left:auto; margin-right:auto;">
                Contacta directamente al facilitador para acceder a los modelos federados completos en Navisworks Manage, Solibri Office y Revit 2026.
            </p>
            <div style="display:flex; justify-content:center; gap:14px; flex-wrap:wrap;">
                <a href="https://wa.me/584148873615?text=Hola%20Ing.%20H%C3%A9ctor%20Mota,%20deseo%20m%C3%A1s%20detalles%20sobre%20el%20Laboratorio%203D%20Clash%20Detection%20UGMA..." target="_blank" rel="noopener noreferrer" class="btn-action-green">
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

        // --- 2. SIMULADOR DE MATRIZ DE REGLAS (MÓDULO 2) ---
        function runMatrixRuleEvaluation() {
            const d1 = document.getElementById('matrixDisc1').value;
            const d2 = document.getElementById('matrixDisc2').value;
            const dist = parseFloat(document.getElementById('matrixDistInput').value);
            const disp = document.getElementById('matrixEvaluationResult');
            const distText = document.getElementById('matrixDistValText');
            distText.textContent = dist + ' mm (' + (dist < 0 ? 'Penetración de sólidos' : (dist === 0 ? 'Contacto directo' : 'Holgura libre')) + ')';

            let status = '';
            let action = '';
            let bg = '';
            let border = '';
            let color = '';

            if (d1 === 'EST' && (d2 === 'HVAC' || d2 === 'SAN')) {
                // Cruce crítico con estructura
                if (dist <= 0) {
                    status = 'CRÍTICA P1 · HARD CLASH DE ESTRUCTURA';
                    action = 'Invasión física prohibida en elemento estructural de soporte. Exige rediseño de trazado o cálculo formal de pase encamisado según COVENIN 1756.';
                    bg = '#ffe4e6'; border = '#fda4af'; color = '#9f1239';
                } else if (dist < 50) {
                    status = 'ALERTA P2 · SOFT CLASH (FALTA DE RECUBRIMIENTO)';
                    action = 'La separación de ' + dist + ' mm no permite el correcto vibrado del concreto o el aislamiento térmico. Se requiere un mínimo de 50 mm.';
                    bg = '#fef3c7'; border = '#fde68a'; color = '#78350f';
                } else {
                    status = 'CONFORME · SEPARACIÓN ADECUADA';
                    action = 'La separación de ' + dist + ' mm cumple con la holgura reglamentaria para mantenimiento y formaletas.';
                    bg = '#d1fae5'; border = '#a7f3d0'; color = '#065f46';
                }
            } else if (d1 === 'ELE' && (d2 === 'SAN' || d2 === 'HVAC')) {
                // Eléctrica vs Fluidos
                if (dist < 150) {
                    status = 'ALERTA P2 · VIOLACIÓN DE DISTANCIA DIELÉCTRICA';
                    action = 'Bandeja portacables a menos de 150 mm de tubería con fluidos. Peligro de condensación sobre conductores según Código Eléctrico Nacional FONDONORMA 200.';
                    bg = '#fef3c7'; border = '#fde68a'; color = '#78350f';
                } else {
                    status = 'CONFORME · SEPARACIÓN DIELÉCTRICA APROBADA';
                    action = 'La distancia de ' + dist + ' mm garantiza la seguridad operativa entre redes eléctricas y de fluidos.';
                    bg = '#d1fae5'; border = '#a7f3d0'; color = '#065f46';
                }
            } else {
                if (dist <= 0) {
                    status = 'INTERFERENCIA FÍSICA DETECTADA';
                    action = 'Colisión directa entre componentes. Se requiere revisión en el War Room de coordinación.';
                    bg = '#fee2e2'; border = '#fca5a5'; color = '#991b1b';
                } else {
                    status = 'CONFORME · ESPACIO LIBRE';
                    action = 'No se detectan colisiones directas entre las disciplinas seleccionadas.';
                    bg = '#d1fae5'; border = '#a7f3d0'; color = '#065f46';
                }
            }

            disp.innerHTML = `
                <div style="font-weight:800; font-size:13.5px; color:${color}; margin-bottom:4px;">
                    🚦 ${status}
                </div>
                <div style="font-size:13px; color:#334155; line-height:1.55;">
                    ${action}
                </div>
            `;
            disp.style.backgroundColor = bg;
            disp.style.borderColor = border;
        }

        // --- 3. LABORATORIO 3D THREE.JS WEBGL (MÓDULO 3) ---
        let scene, camera, renderer, controls;
        let beamMesh, mepMesh, clashIndicator;
        let beamBox, mepBox;
        let currentScenario = 1;

        const BEAM_Y = 2.6; // metros
        const BEAM_HEIGHT = 0.5;

        function init3DLab() {
            const container = document.getElementById('webglCanvas');
            if (!container) return;
            const width = container.clientWidth;
            const height = container.clientHeight;

            scene = new THREE.Scene();
            scene.background = new THREE.Color(0x0f172a);

            camera = new THREE.PerspectiveCamera(45, width / height, 0.1, 100);
            camera.position.set(4, 3.5, 5);

            renderer = new THREE.WebGLRenderer({ canvas: container, antialias: true });
            renderer.setSize(width, height);
            renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
            renderer.shadowMap.enabled = true;

            controls = new THREE.OrbitControls(camera, renderer.domElement);
            controls.enableDamping = true;
            controls.dampingFactor = 0.05;
            controls.target.set(0, 2.2, 0);

            const ambientLight = new THREE.AmbientLight(0xffffff, 0.65);
            scene.add(ambientLight);

            const dirLight = new THREE.DirectionalLight(0xffffff, 0.85);
            dirLight.position.set(5, 10, 7);
            dirLight.castShadow = true;
            scene.add(dirLight);

            const gridHelper = new THREE.GridHelper(8, 16, 0x0284c7, 0x334155);
            scene.add(gridHelper);

            // Columnas de Concreto
            const colGeo = new THREE.BoxGeometry(0.4, 3.5, 0.4);
            const colMat = new THREE.MeshStandardMaterial({ color: 0x94a3b8, roughness: 0.8 });
            
            const col1 = new THREE.Mesh(colGeo, colMat);
            col1.position.set(-1.8, 1.75, 0);
            scene.add(col1);

            const col2 = new THREE.Mesh(colGeo, colMat);
            col2.position.set(1.8, 1.75, 0);
            scene.add(col2);

            // Viga de Concreto V-101
            const beamGeo = new THREE.BoxGeometry(4.0, BEAM_HEIGHT, 0.35);
            const beamMat = new THREE.MeshStandardMaterial({ 
                color: 0x64748b, 
                roughness: 0.6,
                transparent: true,
                opacity: 0.95
            });
            beamMesh = new THREE.Mesh(beamGeo, beamMat);
            beamMesh.position.set(0, BEAM_Y, 0);
            scene.add(beamMesh);

            // Elemento Mecánico Inicial: Ducto HVAC
            const mepGeo = new THREE.BoxGeometry(0.5, 0.3, 3.5);
            const mepMat = new THREE.MeshStandardMaterial({ 
                color: 0x38bdf8, 
                metalness: 0.8, 
                roughness: 0.2 
            });
            mepMesh = new THREE.Mesh(mepGeo, mepMat);
            mepMesh.position.set(0, 2.55, 0);
            scene.add(mepMesh);

            // Esfera de Resalte de Colisión
            const clashGeo = new THREE.SphereGeometry(0.35, 16, 16);
            const clashMat = new THREE.MeshBasicMaterial({ 
                color: 0xe11d48, 
                wireframe: true,
                transparent: true,
                opacity: 0.85
            });
            clashIndicator = new THREE.Mesh(clashGeo, clashMat);
            clashIndicator.position.set(0, 2.55, 0);
            scene.add(clashIndicator);

            beamBox = new THREE.Box3();
            mepBox = new THREE.Box3();

            window.addEventListener('resize', onWindowResize);
            animate();
            evaluateCollision();
        }

        function onWindowResize() {
            const container = document.getElementById('webglCanvas');
            if (!container || !renderer || !camera) return;
            camera.aspect = container.clientWidth / container.clientHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(container.clientWidth, container.clientHeight);
        }

        function animate() {
            requestAnimationFrame(animate);
            if (controls) controls.update();
            if (clashIndicator && clashIndicator.visible) {
                clashIndicator.rotation.y += 0.02;
            }
            if (renderer && scene && camera) {
                renderer.render(scene, camera);
            }
        }

        function changeScenario() {
            const sc = parseInt(document.getElementById('scenarioSelect').value);
            currentScenario = sc;
            
            if (sc === 1) {
                // Viga vs Ducto HVAC
                mepMesh.geometry.dispose();
                mepMesh.geometry = new THREE.BoxGeometry(0.6, 0.35, 3.5);
                mepMesh.material.color.setHex(0x38bdf8);
                document.getElementById('bcfTitle').value = "COL-042: Interferencia Crítica Viga V-101 vs Ducto HVAC";
            } else if (sc === 2) {
                // Columna vs Tubería Sanitaria PVC
                mepMesh.geometry.dispose();
                mepMesh.geometry = new THREE.CylinderGeometry(0.08, 0.08, 3.5, 16);
                mepMesh.rotation.z = Math.PI / 2;
                mepMesh.material.color.setHex(0xf97316);
                document.getElementById('bcfTitle').value = "COL-089: Cruce de Tubería Sanitaria 4\" PVC vs Columna C-1";
            } else if (sc === 3) {
                // Bandeja Eléctrica vs Tubería Agua Helada
                mepMesh.geometry.dispose();
                mepMesh.geometry = new THREE.BoxGeometry(0.4, 0.1, 3.5);
                mepMesh.material.color.setHex(0xa855f7);
                document.getElementById('bcfTitle').value = "COL-114: Violación de Holgura Bandeja Eléctrica vs Tubería";
            }
            evaluateCollision();
            renderBcfCode();
        }

        function updateDuctElevation() {
            const val = parseFloat(document.getElementById('ductHeightSlider').value);
            const meters = val / 1000;
            document.getElementById('ductElevationText').innerText = val.toLocaleString('en-US') + ' mm (Cota N.P.T.)';
            if (mepMesh) mepMesh.position.y = meters;
            if (clashIndicator) clashIndicator.position.y = meters;
            evaluateCollision();
        }

        function updateDuctX() {
            const val = parseFloat(document.getElementById('ductXSlider').value);
            const meters = val / 1000;
            document.getElementById('ductXText').innerText = val.toLocaleString('en-US') + ' mm';
            if (mepMesh) mepMesh.position.x = meters;
            if (clashIndicator) clashIndicator.position.x = meters;
            evaluateCollision();
        }

        function updateTolerance() {
            const tol = parseFloat(document.getElementById('toleranceSlider').value);
            document.getElementById('toleranceText').innerText = tol + ' mm de aislamiento requerido';
            evaluateCollision();
        }

        function evaluateCollision() {
            if (!beamMesh || !mepMesh) return;

            beamBox.setFromObject(beamMesh);
            mepBox.setFromObject(mepMesh);

            const toleranceMeters = parseFloat(document.getElementById('toleranceSlider').value) / 1000;
            const expandedMepBox = mepBox.clone().expandByScalar(toleranceMeters);

            const isHardClash = beamBox.intersectsBox(mepBox);
            const isSoftClash = !isHardClash && beamBox.intersectsBox(expandedMepBox);

            const statusBox = document.getElementById('clashStatusBox');
            const statusIcon = document.getElementById('statusIcon');
            const statusTitle = document.getElementById('statusTitle');
            const statusDesc = document.getElementById('statusDesc');

            // Telemetría
            const telZ = document.getElementById('telZ');
            const telX = document.getElementById('telX');
            const telVol = document.getElementById('telVol');
            const telStatus = document.getElementById('telStatus');

            if (telZ) telZ.textContent = mepMesh.position.y.toFixed(2) + ' m';
            if (telX) telX.textContent = mepMesh.position.x.toFixed(2) + ' m';

            if (isHardClash) {
                // Cálculo de volumen intersectado
                const intersectionBox = beamBox.clone().intersect(mepBox);
                const size = new THREE.Vector3();
                intersectionBox.getSize(size);
                const volDm3 = (size.x * size.y * size.z * 1000).toFixed(1);

                clashIndicator.visible = true;
                clashIndicator.material.color.setHex(0xe11d48);
                mepMesh.material.color.setHex(0xe11d48);

                statusBox.className = "status-box clash-active";
                statusIcon.innerText = "⚠️";
                statusTitle.innerText = "¡Colisión Directa Detectada (Hard Clash)!";
                statusDesc.innerText = "El elemento mecánico intersecta físicamente el volumen de la viga V-101. Requiere rediseño de trazado o pasamuro estructural.";

                if (telVol) telVol.textContent = volDm3 + ' dm³';
                if (telStatus) {
                    telStatus.textContent = 'HARD CLASH';
                    telStatus.style.color = '#f43f5e';
                }
            } else if (isSoftClash) {
                clashIndicator.visible = true;
                clashIndicator.material.color.setHex(0xb45309);
                mepMesh.material.color.setHex(0xf59e0b);

                statusBox.className = "status-box clash-soft";
                statusIcon.innerText = "📐";
                statusTitle.innerText = "Alerta de Holgura (Soft Clearance Clash)";
                statusDesc.innerText = "No hay contacto físico, pero no se cumple la distancia mínima de aislamiento térmico de " + (toleranceMeters * 1000) + " mm.";

                if (telVol) telVol.textContent = '0.0 dm³ (Holgura violada)';
                if (telStatus) {
                    telStatus.textContent = 'SOFT CLASH';
                    telStatus.style.color = '#fbbf24';
                }
            } else {
                clashIndicator.visible = false;
                mepMesh.material.color.setHex(currentScenario === 2 ? 0xf97316 : (currentScenario === 3 ? 0xa855f7 : 0x38bdf8));

                statusBox.className = "status-box clash-clear";
                statusIcon.innerText = "✅";
                statusTitle.innerText = "Coordinación Conforme (Espacio Libre)";
                statusDesc.innerText = "El trazado respeta la cota libre y la holgura de tolerancia reglamentaria. No se detectan interferencias.";

                if (telVol) telVol.textContent = '0.0 dm³ (Conforme)';
                if (telStatus) {
                    telStatus.textContent = 'DESPEJADO';
                    telStatus.style.color = '#34d399';
                }
            }
        }

        // --- 4. GESTOR DE INCIDENCIAS BCF 3.0 / 2.1 (MÓDULO 4) ---
        let bcfFormat = 'json';

        function setBcfFormat(fmt) {
            bcfFormat = fmt;
            const bJson = document.getElementById('btnBcfFmtJson');
            const bXml = document.getElementById('btnBcfFmtXml');

            if (fmt === 'json') {
                bJson.style.background = 'var(--navy-primary)';
                bJson.style.color = '#fff';
                bJson.style.borderColor = 'var(--navy-primary)';
                bXml.style.background = 'var(--surface-subtle)';
                bXml.style.color = 'var(--text-muted)';
                bXml.style.borderColor = 'var(--border)';
            } else {
                bXml.style.background = 'var(--navy-primary)';
                bXml.style.color = '#fff';
                bXml.style.borderColor = 'var(--navy-primary)';
                bJson.style.background = 'var(--surface-subtle)';
                bJson.style.color = 'var(--text-muted)';
                bJson.style.borderColor = 'var(--border)';
            }
            renderBcfCode();
        }

        function syncWithBcfGenerator() {
            goToStep(4);
            renderBcfCode();
        }

        function generateBcfData() {
            const elevation = document.getElementById('ductHeightSlider').value;
            const tolerance = document.getElementById('toleranceSlider').value;
            const title = document.getElementById('bcfTitle').value;
            const priority = document.getElementById('bcfPriority').value;
            const status = document.getElementById('bcfStatus').value;
            const assignee = document.getElementById('bcfAssignee').value;
            const stage = document.getElementById('bcfStage').value;
            const comment = document.getElementById('bcfComment').value;

            const camPos = camera ? {
                x: parseFloat(camera.position.x.toFixed(2)),
                y: parseFloat(camera.position.y.toFixed(2)),
                z: parseFloat(camera.position.z.toFixed(2))
            } : { x: 4.0, y: 3.5, z: 5.0 };

            return {
                topic_guid: "9c8a41bf-653a-4e2a-9f5b-" + Math.random().toString(36).substring(2, 10),
                topic_type: "Clash",
                title: title,
                priority: priority,
                topic_status: status,
                stage: stage,
                creation_date: new Date().toISOString(),
                creation_author: "hector.mota@motazorrilla.com",
                assigned_to: assignee,
                components: [
                    { ifc_guid: "2O2Fr$t4X7Zf8NOew3FL9m", ifc_class: "IfcBeam", name: "V-101 Concreto Sísmico" },
                    { ifc_guid: "1u3$kLmN18PvR0Qw2Z9xAa", ifc_class: "IfcDuctSegment", name: "Ducto_Climatizacion_600x350" }
                ],
                camera_viewpoint: {
                    position: camPos,
                    direction: { x: -0.62, y: -0.35, z: -0.70 },
                    up_vector: { x: 0.0, y: 1.0, z: 0.0 },
                    elevation_mm: elevation,
                    required_clearance_mm: tolerance
                },
                comments: [
                    {
                        comment_guid: "f47ac10b-58cc-4372-a567-0e02b2c3d479",
                        date: new Date().toISOString(),
                        author: "Ing. Héctor Mota (Coordinador BIM UGMA)",
                        comment: comment
                    }
                ]
            };
        }

        function renderBcfCode() {
            const data = generateBcfData();
            const out = document.getElementById('bcfCodeOutput');
            if (!out) return;

            if (bcfFormat === 'json') {
                out.textContent = JSON.stringify(data, null, 2);
            } else {
                out.textContent = `<?xml version="1.0" encoding="UTF-8"?>
<VisualizationInfo xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
                   Guid="${data.topic_guid}">
  <ComponentSelection>
    <Component IfcGuid="2O2Fr$t4X7Zf8NOew3FL9m" Selected="true"/>
    <Component IfcGuid="1u3$kLmN18PvR0Qw2Z9xAa" Selected="true"/>
  </ComponentSelection>
  <PerspectiveCamera>
    <CameraViewPoint>
      <X>${data.camera_viewpoint.position.x}</X>
      <Y>${data.camera_viewpoint.position.y}</Y>
      <Z>${data.camera_viewpoint.position.z}</Z>
    </CameraViewPoint>
    <CameraDirection>
      <X>${data.camera_viewpoint.direction.x}</X>
      <Y>${data.camera_viewpoint.direction.y}</Y>
      <Z>${data.camera_viewpoint.direction.z}</Z>
    </CameraDirection>
    <CameraUpVector>
      <X>0.0</X><Y>1.0</Y><Z>0.0</Z>
    </CameraUpVector>
    <FieldOfView>45.0</FieldOfView>
  </PerspectiveCamera>
  <Topic Guid="${data.topic_guid}" TopicType="${data.topic_type}" TopicStatus="${data.topic_status}">
    <Title>${data.title}</Title>
    <Priority>${data.priority}</Priority>
    <CreationDate>${data.creation_date}</CreationDate>
    <CreationAuthor>${data.creation_author}</CreationAuthor>
    <AssignedTo>${data.assigned_to}</AssignedTo>
    <Description>${data.comments[0].comment}</Description>
  </Topic>
</VisualizationInfo>`;
            }
        }

        function downloadBcfFile() {
            const data = generateBcfData();
            const content = (bcfFormat === 'json') ? JSON.stringify(data, null, 2) : document.getElementById('bcfCodeOutput').textContent;
            const ext = (bcfFormat === 'json') ? 'json' : 'bcf';
            const blob = new Blob([content], { type: 'application/json' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = `Ticket_BCF_${data.topic_guid.substring(0,8)}.${ext}`;
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            URL.revokeObjectURL(url);
        }

        function copyBcfCode() {
            const text = document.getElementById('bcfCodeOutput').textContent;
            navigator.clipboard.writeText(text).then(() => {
                alert('¡Payload BCF copiado al portapapeles!');
            });
        }

        // --- 5. CALCULADORA DE COSTO DE NO-CALIDAD (MÓDULO 5) ---
        function calculateReworkCost() {
            const p = parseFloat(document.getElementById('costPartida').value) || 0;
            const d = parseFloat(document.getElementById('costDemolition').value) || 0;
            const days = parseFloat(document.getElementById('costDaysDelay').value) || 0;
            const crew = parseFloat(document.getElementById('costDailyCrew').value) || 0;

            document.getElementById('costPartidaText').textContent = '$' + p.toLocaleString('en-US', { minimumFractionDigits: 2 });
            document.getElementById('costDemolitionText').textContent = '$' + d.toLocaleString('en-US', { minimumFractionDigits: 2 });
            document.getElementById('costDaysDelayText').textContent = days + ' días laborables';
            document.getElementById('costDailyCrewText').textContent = '$' + crew.toLocaleString('en-US', { minimumFractionDigits: 2 }) + ' / día';

            // Costos en Faena
            const costCrewIdle = days * crew;
            const totalFieldCost = d + costCrewIdle;

            // Costo en Oficina BIM (Coordinación de 3 horas)
            const bimHours = 3.5;
            const bimHourlyRate = 25.0; // USD/hora
            const totalBimCost = bimHours * bimHourlyRate;

            // Ahorro y Multiplicador MacLeamy
            const netSavings = totalFieldCost - totalBimCost;
            const multiplier = totalBimCost > 0 ? (totalFieldCost / totalBimCost).toFixed(1) : 0;
            const roiPercent = totalBimCost > 0 ? ((netSavings / totalBimCost) * 100).toFixed(0) : 0;

            const card = document.getElementById('reworkResultCard');
            card.innerHTML = `
                <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:12px; margin-bottom:16px;">
                    <div>
                        <span style="font-size:12px; font-weight:800; color:var(--text-light); text-transform:uppercase;">Impacto Económico del Conflicto Espacial:</span>
                        <div style="font-size:24px; font-weight:800; color:#e11d48;">
                            $${totalFieldCost.toLocaleString('en-US', { minimumFractionDigits: 2 })} USD en Faena
                        </div>
                    </div>
                    <div style="text-align:right;">
                        <span style="font-size:12px; font-weight:800; color:var(--text-light); text-transform:uppercase;">Resolución en Preconstrucción BIM:</span>
                        <div style="font-size:20px; font-weight:800; color:#059669;">
                            $${totalBimCost.toFixed(2)} USD (3.5 Horas-Hombre)
                        </div>
                    </div>
                </div>

                <div class="grid-3" style="margin:12px 0;">
                    <div style="background:#f8fafc; padding:12px; border-radius:8px; border:1px solid var(--border);">
                        <div style="font-size:11.5px; color:var(--text-light); font-weight:700;">COSTO DE DEMOLICIÓN &amp; RESANE:</div>
                        <div style="font-size:16px; font-weight:800; color:var(--navy-primary);">$${d.toLocaleString('en-US', { minimumFractionDigits: 2 })}</div>
                    </div>
                    <div style="background:#f8fafc; padding:12px; border-radius:8px; border:1px solid var(--border);">
                        <div style="font-size:11.5px; color:var(--text-light); font-weight:700;">PARALIZACIÓN DE CUADRILLA (${days}d):</div>
                        <div style="font-size:16px; font-weight:800; color:var(--navy-primary);">$${costCrewIdle.toLocaleString('en-US', { minimumFractionDigits: 2 })}</div>
                    </div>
                    <div style="background:#ecfdf5; padding:12px; border-radius:8px; border:1px solid #a7f3d0;">
                        <div style="font-size:11.5px; color:#047857; font-weight:700;">AHORRO NETO AUDITORÍA BIM:</div>
                        <div style="font-size:16px; font-weight:800; color:#047857;">$${netSavings.toLocaleString('en-US', { minimumFractionDigits: 2 })}</div>
                    </div>
                </div>

                <div style="margin-top:14px; padding:12px 16px; background:#eff6ff; border-radius:8px; border:1px solid #bfdbfe; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:8px;">
                    <div style="font-size:13px; color:#1e40af;">
                        📈 <strong>Factor Multiplicador de MacLeamy:</strong> La resolución tardía en obra resulta <strong>${multiplier}x veces más costosa</strong> que la detección temprana.
                    </div>
                    <div style="font-size:13px; font-weight:800; color:#1e40af;">
                        Retorno de Inversión (ROI): +${roiPercent}%
                    </div>
                </div>
            `;
        }

        // --- 6. SCRIPT PYTHON CLIPBOARD ---
        function copyPythonCode() {
            const code = document.getElementById('pythonCodeSnippet').innerText;
            navigator.clipboard.writeText(code).then(() => {
                alert('¡Script de Python IfcOpenShell copiado al portapapeles!');
            });
        }

        // --- 7. INICIALIZACIÓN GLOBAL ---
        window.addEventListener('DOMContentLoaded', () => {
            updateStepperUI();
            runMatrixRuleEvaluation();
            init3DLab();
            renderBcfCode();
            calculateReworkCost();
        });
    </script>
</body>
</html>
