<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidad 4: Eficiencia Energética, Climatización HVAC y Materiales Ecológicos · Postgrado UGMA</title>

    <meta name="title" content="Unidad 4: Eficiencia Energética, Climatización HVAC y Materiales Ecológicos · Postgrado UGMA">
    <meta name="description" content="Día 4 del Diplomado en Gerencia de Obras UGMA: Auditoría termo-eléctrica HVAC 16 TR (Trifásico vs Monofásico), conductores CEN 200, efecto Joule, dimensionamiento solar 5.1 HSP y concretos GGBS Sidor por el Ing. Héctor Mota Zorrilla.">
    <meta name="keywords" content="Eficiencia Energética, Auditoría HVAC 16 TR, Trifásico vs Monofásico, CEN FONDONORMA 200, Efecto Joule, Desbalance NEMA MG-1, Energía Solar Guayana 5.1 HSP, GGBS Sidor, ASHRAE 55, Héctor Mota Zorrilla, UGMA">
    <meta name="author" content="Ing. Héctor Mota Zorrilla">
    <meta name="theme-color" content="#0f2942">

    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="shortcut icon" href="/favicon.ico">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,600&family=JetBrains+Mono:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg: #f8fafc;
            --surface: #ffffff;
            --surface-subtle: #f1f5f9;
            --border: #e2e8f0;
            --border-hover: #cbd5e1;
            --text-main: #0f172a;
            --text-muted: #334155;
            --text-light: #64748b;

            --navy-primary: #0f2942;
            --navy-dark: #0a192f;
            --emerald: #047857;
            --emerald-light: #d1fae5;
            --emerald-dark: #064e3b;
            --amber-accent: #d97706;
            --amber-light: #fef3c7;
            --amber-dark: #92400e;
            --blue-accent: #0284c7;
            --blue-light: #e0f2fe;
            --red-accent: #dc2626;
            --red-light: #fee2e2;

            --font-sans: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            --font-mono: 'JetBrains Mono', monospace;
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.07), 0 2px 4px -2px rgba(0, 0, 0, 0.05);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.08), 0 4px 6px -4px rgba(0, 0, 0, 0.04);
        }

        * { margin:0; padding:0; box-sizing:border-box; font-family: var(--font-sans); }
        body {
            background: var(--bg);
            color: var(--text-main);
            min-height: 100vh;
            padding: 24px 16px 80px;
            line-height: 1.7;
            -webkit-font-smoothing: antialiased;
        }

        .container { max-width: 1180px; margin: 0 auto; }

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
            color: var(--amber-accent);
            border-color: var(--amber-accent);
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
            text-decoration: none;
            transition: all 0.2s ease;
        }
        .brand-logo-link:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }
        .brand-text-logo {
            font-size: 14px;
            font-weight: 800;
            color: var(--navy-primary);
            letter-spacing: -0.01em;
        }
        .brand-text-logo span { color: var(--amber-accent); }
        .nav-actions {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
        }
        .nav-lab-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--emerald-dark);
            background: var(--emerald-light);
            border: 1px solid #a7f3d0;
            padding: 7px 16px;
            border-radius: 9999px;
            font-size: 13px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.2s ease;
        }
        .nav-lab-link:hover {
            background: var(--emerald);
            color: #ffffff;
            transform: translateY(-2px);
        }

        /* HEADER ACADÉMICO */
        .page-header {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 36px 32px;
            margin-bottom: 28px;
            box-shadow: var(--shadow-md);
            background-image: radial-gradient(circle at 95% 15%, rgba(217, 119, 6, 0.08) 0%, rgba(4, 120, 87, 0.05) 50%, rgba(255, 255, 255, 1) 100%);
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
            background: var(--amber-light);
            color: var(--amber-dark);
            border: 1px solid #fde68a;
            font-size: 11.5px;
            font-weight: 800;
            padding: 4px 12px;
            border-radius: 9999px;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        .badge-emerald {
            background: var(--emerald-light);
            color: var(--emerald-dark);
            border-color: #a7f3d0;
        }
        .badge-blue {
            background: var(--blue-light);
            color: var(--blue-accent);
            border-color: #bae6fd;
        }
        .page-title {
            font-size: clamp(23px, 3.5vw, 34px);
            font-weight: 800;
            color: var(--navy-primary);
            margin-bottom: 12px;
            line-height: 1.25;
            letter-spacing: -0.02em;
        }
        .page-subtitle {
            font-size: 15px;
            color: var(--text-muted);
            max-width: 1040px;
            margin-bottom: 20px;
            line-height: 1.75;
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

        /* STEPPER STICKY */
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
        .stepper-controls {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .btn-stepper-nav {
            padding: 5px 12px;
            font-size: 12px;
            font-weight: 700;
            border-radius: 8px;
            border: 1px solid var(--border);
            background: var(--surface-subtle);
            color: var(--text-main);
            cursor: pointer;
            transition: all 0.2s;
        }
        .btn-stepper-nav:hover {
            border-color: var(--amber-accent);
            color: var(--amber-dark);
            background: #ffffff;
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
            padding: 5px 12px;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.2s;
        }
        .view-mode-toggle:hover {
            color: var(--amber-dark);
            border-color: var(--amber-accent);
        }
        .stepper-track {
            display: flex;
            gap: 8px;
            overflow-x: auto;
            padding-bottom: 4px;
            scrollbar-width: thin;
        }
        .step-btn {
            flex: 1;
            min-width: 135px;
            background: var(--surface-subtle);
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 9px 12px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
            text-align: left;
        }
        .step-btn:hover {
            border-color: var(--amber-accent);
            background: #ffffff;
            transform: translateY(-2px);
        }
        .step-btn.active {
            background: #ffffff;
            border-color: var(--amber-accent);
            border-width: 2px;
            box-shadow: 0 4px 10px rgba(217, 119, 6, 0.15);
        }
        .step-num {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: #e2e8f0;
            color: var(--navy-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: 800;
            flex-shrink: 0;
            transition: all 0.2s;
        }
        .step-btn.active .step-num {
            background: var(--amber-accent);
            color: #ffffff;
        }
        .step-info {
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }
        .step-tag {
            font-size: 9.5px;
            text-transform: uppercase;
            font-weight: 700;
            color: var(--text-light);
            letter-spacing: 0.04em;
        }
        .step-name {
            font-size: 11.5px;
            font-weight: 700;
            color: var(--navy-primary);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .stepper-progress {
            height: 4px;
            background: #e2e8f0;
            border-radius: 2px;
            margin-top: 10px;
            overflow: hidden;
        }
        .stepper-bar-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--amber-accent) 0%, #f59e0b 100%);
            width: 14.28%;
            transition: width 0.3s ease;
        }

        /* ACADEMIC MODULES */
        .module-section {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 34px 32px;
            margin-bottom: 28px;
            box-shadow: var(--shadow-sm);
            display: none;
            animation: fadeIn 0.3s ease-in-out;
        }
        .module-section.active-module { display: block; }
        body.all-visible .module-section {
            display: block !important;
            margin-bottom: 36px;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(6px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .module-header {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 22px;
            padding-bottom: 16px;
            border-bottom: 1px solid var(--border);
        }
        .module-badge-num {
            background: var(--amber-light);
            color: var(--amber-dark);
            width: 42px;
            height: 42px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            font-weight: 800;
            border: 1px solid #fde68a;
            flex-shrink: 0;
        }
        .module-title {
            font-size: clamp(19px, 2.5vw, 24px);
            font-weight: 800;
            color: var(--navy-primary);
            line-height: 1.3;
        }
        .module-desc {
            font-size: 13.5px;
            color: var(--text-light);
            margin-top: 2px;
        }

        /* SANGRÍA ACADÉMICA Y PÁRRAFOS */
        .academic-p {
            font-size: 15px;
            color: var(--text-muted);
            margin-bottom: 18px;
            line-height: 1.8;
            text-indent: 2.2em;
            text-align: justify;
        }
        .academic-p strong {
            color: var(--text-main);
            font-weight: 700;
        }
        .academic-h3 {
            font-size: 17.5px;
            font-weight: 800;
            color: var(--navy-primary);
            margin: 26px 0 12px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .academic-h4 {
            font-size: 15px;
            font-weight: 700;
            color: var(--navy-primary);
            margin: 18px 0 8px;
        }

        /* ECUACIONES MATEMÁTICAS CLARAS Y ACADÉMICAS */
        .equation-card {
            background: #ffffff;
            border: 1px solid var(--border);
            border-left: 5px solid var(--navy-primary);
            border-radius: 14px;
            padding: 20px 24px;
            margin: 22px 0;
            box-shadow: var(--shadow-sm);
            transition: all 0.2s ease;
        }
        .equation-card:hover {
            box-shadow: var(--shadow-md);
            border-color: var(--border-hover);
        }
        .equation-card.equation-emerald {
            border-left-color: var(--emerald);
            background: linear-gradient(180deg, #f0fdf4 0%, #ffffff 100%);
        }
        .equation-card.equation-danger {
            border-left-color: var(--red-accent);
            background: linear-gradient(180deg, #fef2f2 0%, #ffffff 100%);
        }
        .equation-card.equation-amber {
            border-left-color: var(--amber-accent);
            background: linear-gradient(180deg, #fffbeb 0%, #ffffff 100%);
        }
        .equation-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
            padding-bottom: 10px;
            border-bottom: 1px solid var(--border);
            flex-wrap: wrap;
            gap: 8px;
        }
        .equation-title {
            font-size: 14.5px;
            font-weight: 800;
            color: var(--navy-primary);
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .equation-tag {
            font-size: 11px;
            font-weight: 700;
            padding: 3px 10px;
            border-radius: 9999px;
            background: var(--surface-subtle);
            color: var(--text-muted);
            border: 1px solid var(--border);
        }
        .equation-display {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            flex-wrap: wrap;
            gap: 8px 12px;
            font-family: var(--font-mono);
            font-size: 15.5px;
            color: var(--navy-dark);
            margin: 12px 0;
            padding: 12px 18px;
            background: #f8fafc;
            border-radius: 10px;
            border: 1px solid #e2e8f0;
        }
        .math-var {
            font-weight: 700;
            color: var(--navy-primary);
        }
        .math-equals {
            color: var(--text-light);
            font-weight: 700;
            padding: 0 4px;
        }
        .math-fraction {
            display: inline-flex;
            flex-direction: column;
            vertical-align: middle;
            text-align: center;
            padding: 0 4px;
        }
        .math-num {
            border-bottom: 2px solid var(--navy-primary);
            padding: 2px 6px;
            font-size: 0.92em;
            font-weight: 600;
        }
        .math-den {
            padding: 2px 6px;
            font-size: 0.92em;
            font-weight: 600;
        }
        .math-result {
            font-weight: 800;
            padding: 4px 10px;
            border-radius: 6px;
            background: #e0f2fe;
            color: #0369a1;
            border: 1px solid #bae6fd;
        }
        .math-result.result-emerald {
            background: #d1fae5;
            color: #064e3b;
            border-color: #a7f3d0;
        }
        .math-result.result-danger {
            background: #fee2e2;
            color: #991b1b;
            border-color: #fecaca;
        }
        .equation-steps {
            margin-top: 12px;
            font-size: 13.5px;
            color: var(--text-muted);
            line-height: 1.7;
            border-top: 1px dashed var(--border);
            padding-top: 10px;
        }
        .step-row {
            display: flex;
            align-items: baseline;
            gap: 8px;
            margin-bottom: 6px;
        }
        .step-bullet {
            color: var(--amber-accent);
            font-weight: 800;
            font-size: 14px;
        }

        /* TABLA COMPARATIVA MEJORADA */
        .table-hvac-compare th.col-case-a {
            background: #ecfdf5;
            color: #064e3b;
            border-bottom: 3px solid #10b981;
        }
        .table-hvac-compare th.col-case-b {
            background: #fef2f2;
            color: #991b1b;
            border-bottom: 3px solid #ef4444;
        }
        .table-hvac-compare td.cell-case-a {
            background: #f0fdf4;
            color: #064e3b;
            font-weight: 600;
        }
        .table-hvac-compare td.cell-case-b {
            background: #fff1f2;
            color: #991b1b;
            font-weight: 600;
        }
        .hvac-kpi-banner {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 16px;
            margin-bottom: 20px;
        }
        .kpi-banner-card {
            border-radius: 12px;
            padding: 16px 18px;
            border: 1px solid var(--border);
        }
        .kpi-banner-a {
            background: #ecfdf5;
            border-color: #a7f3d0;
        }
        .kpi-banner-b {
            background: #fef2f2;
            border-color: #fecaca;
        }
        .kpi-banner-title {
            font-size: 11.5px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 6px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .kpi-banner-stat {
            font-size: 22px;
            font-weight: 800;
            font-family: var(--font-mono);
            margin: 4px 0;
        }
        .kpi-banner-desc {
            font-size: 12.5px;
            color: var(--text-muted);
            line-height: 1.5;
        }

        /* SELECTOR Y TOGGLE DEL SIMULADOR */
        .sim-selector-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 16px;
            margin-bottom: 20px;
            padding: 16px;
            background: var(--surface-subtle);
            border-radius: 12px;
            border: 1px solid var(--border);
        }
        .sim-select-label {
            font-size: 13px;
            font-weight: 700;
            color: var(--navy-primary);
            margin-bottom: 6px;
            display: block;
        }
        .sim-select {
            width: 100%;
            padding: 8px 12px;
            border-radius: 8px;
            border: 1px solid var(--border);
            background: #ffffff;
            font-size: 13px;
            font-weight: 600;
            color: var(--navy-primary);
            outline: none;
            cursor: pointer;
            transition: all 0.2s;
        }
        .sim-select:focus {
            border-color: var(--amber-accent);
            box-shadow: 0 0 0 2px rgba(217, 119, 6, 0.2);
        }
        .sim-checkbox-label {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            font-size: 13px;
            font-weight: 700;
            color: var(--navy-primary);
            user-select: none;
        }
        .sim-checkbox-label input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: var(--amber-accent);
            cursor: pointer;
        }

        /* FORMULAS MATEMÁTICAS DESTACADAS */
        .math-box {
            background: #0f172a;
            color: #f8fafc;
            border-radius: 12px;
            padding: 16px 20px;
            margin: 18px 0;
            font-family: var(--font-mono);
            font-size: 13.5px;
            line-height: 1.7;
            overflow-x: auto;
            border: 1px solid #1e293b;
            box-shadow: inset 0 2px 4px rgba(0,0,0,0.3);
        }
        .math-box .math-hl { color: #38bdf8; font-weight: 700; }
        .math-box .math-val { color: #4ade80; font-weight: 700; }
        .math-box .math-warn { color: #f87171; font-weight: 700; }

        /* CALLOUTS */
        .callout-box {
            background: #fffbeb;
            border: 1px solid #fde68a;
            border-left: 5px solid var(--amber-accent);
            border-radius: 12px;
            padding: 18px 22px;
            margin: 22px 0;
            font-size: 14px;
            line-height: 1.65;
            color: var(--navy-dark);
        }
        .callout-box strong { color: var(--amber-dark); }
        .callout-red {
            background: #fef2f2;
            border-color: #fecaca;
            border-left-color: var(--red-accent);
        }
        .callout-red strong { color: #991b1b; }
        .callout-emerald {
            background: #ecfdf5;
            border-color: #a7f3d0;
            border-left-color: var(--emerald);
        }
        .callout-emerald strong { color: var(--emerald-dark); }
        .callout-blue {
            background: #f0f9ff;
            border-color: #bae6fd;
            border-left-color: var(--blue-accent);
        }
        .callout-blue strong { color: #0369a1; }

        /* TABLAS COMPARATIVAS */
        .table-responsive {
            width: 100%;
            overflow-x: auto;
            margin: 22px 0;
            border: 1px solid var(--border);
            border-radius: 12px;
        }
        .academic-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13px;
            text-align: left;
            background: #ffffff;
        }
        .academic-table th {
            background: var(--surface-subtle);
            color: var(--navy-primary);
            font-weight: 800;
            padding: 12px 14px;
            border-bottom: 1px solid var(--border);
        }
        .academic-table td {
            padding: 12px 14px;
            border-bottom: 1px solid var(--border);
            color: var(--text-muted);
            vertical-align: top;
        }
        .academic-table tr:hover td { background: #f8fafc; }
        .academic-table tr:last-child td { border-bottom: none; }

        /* SIMULADOR INTERACTIVO HVAC */
        .simulator-card {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 26px 24px;
            margin-top: 24px;
            box-shadow: var(--shadow-sm);
        }
        .slider-group {
            margin-bottom: 20px;
        }
        .slider-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 8px;
            font-size: 13.5px;
            font-weight: 700;
            color: var(--navy-primary);
        }
        .slider-val {
            font-family: var(--font-mono);
            font-weight: 800;
            color: var(--amber-dark);
            background: var(--amber-light);
            padding: 2px 8px;
            border-radius: 6px;
            border: 1px solid #fde68a;
            font-size: 13px;
        }
        .custom-slider {
            width: 100%;
            height: 8px;
            border-radius: 4px;
            background: #e2e8f0;
            outline: none;
            accent-color: var(--amber-accent);
            cursor: pointer;
        }
        .comparison-kpi-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 16px;
            margin-top: 24px;
            padding-top: 20px;
            border-top: 1px solid var(--border);
        }
        .side-kpi-card {
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 16px;
            text-align: center;
            transition: all 0.2s;
        }
        .side-kpi-a {
            background: #ecfdf5;
            border-color: #a7f3d0;
        }
        .side-kpi-b {
            background: #fef2f2;
            border-color: #fecaca;
        }
        .side-title {
            font-size: 11px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 4px;
        }
        .side-val {
            font-size: 24px;
            font-weight: 800;
            font-family: var(--font-mono);
            margin: 6px 0;
        }
        .side-desc {
            font-size: 12px;
            color: var(--text-muted);
        }
        .verdict-box {
            background: #f8fafc;
            border: 1px dashed var(--border-hover);
            border-radius: 12px;
            padding: 18px 20px;
            margin-top: 20px;
            font-size: 13.5px;
            line-height: 1.6;
            color: var(--navy-primary);
        }
        .btn-acta {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--navy-primary);
            color: #ffffff;
            border: none;
            padding: 12px 22px;
            border-radius: 10px;
            font-size: 13.5px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.2s;
            margin-top: 18px;
        }
        .btn-acta:hover {
            background: var(--amber-dark);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(217, 119, 6, 0.25);
        }

        /* CARDS GRID */
        .cards-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(290px, 1fr));
            gap: 18px;
            margin: 22px 0;
        }
        .card-feat {
            background: var(--surface-subtle);
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 20px;
            transition: all 0.2s;
        }
        .card-feat:hover {
            border-color: var(--amber-accent);
            background: #ffffff;
            box-shadow: var(--shadow-sm);
        }
        .card-feat-icon {
            font-size: 24px;
            margin-bottom: 10px;
            display: inline-block;
        }
        .card-feat-title {
            font-size: 15px;
            font-weight: 800;
            color: var(--navy-primary);
            margin-bottom: 8px;
        }
        .card-feat-text {
            font-size: 13px;
            color: var(--text-muted);
            line-height: 1.65;
        }

        /* FOOTER */
        .page-footer {
            margin-top: 48px;
            padding-top: 24px;
            border-top: 1px solid var(--border);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 16px;
            font-size: 13px;
            color: var(--text-light);
        }
        .footer-links {
            display: flex;
            align-items: center;
            gap: 16px;
            flex-wrap: wrap;
        }
        .footer-links a {
            color: var(--navy-primary);
            text-decoration: none;
            font-weight: 700;
        }
        .footer-links a:hover { color: var(--amber-dark); }

        @media (max-width: 768px) {
            .page-header { padding: 24px 20px; }
            .module-section { padding: 24px 20px; }
            .academic-p { text-indent: 1.4em; font-size: 14.5px; }
        }
    
                /* ================================================================= */
        /* MÓDULOS 8 Y 9: TALLER PRÁCTICO & EVALUACIÓN INTERACTIVA (V2)      */
        /* ================================================================= */
        .interactive-cockpit {
            background: #ffffff;
            border: 1.5px solid var(--border);
            border-radius: 18px;
            padding: 26px 24px;
            margin: 22px 0;
            box-shadow: var(--shadow-sm);
        }
        .cockpit-hero-card {
            background: linear-gradient(135deg, #0f2942 0%, #1e3a5f 100%);
            color: #ffffff;
            border-radius: 14px;
            padding: 22px 24px;
            margin-bottom: 24px;
            border: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: 0 10px 20px rgba(15, 41, 66, 0.15);
        }
        .cockpit-hero-title {
            font-size: 19px;
            font-weight: 800;
            margin-bottom: 6px;
            color: #ffffff;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .cockpit-hero-desc {
            font-size: 13.5px;
            color: #cbd5e1;
            line-height: 1.6;
        }
        .mandate-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 12px;
            margin-top: 16px;
        }
        .mandate-pill {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.18);
            border-radius: 10px;
            padding: 10px 14px;
            font-size: 12px;
            color: #e2e8f0;
        }
        .mandate-pill strong {
            display: block;
            font-size: 14px;
            color: #38bdf8;
            margin-top: 2px;
            font-family: var(--font-mono);
        }
        .selectors-section-title {
            font-size: 15px;
            font-weight: 800;
            color: var(--navy-primary);
            margin: 24px 0 12px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .resource-cards-grid-4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 12px;
            margin-bottom: 20px;
        }
        .res-option-card {
            border: 2px solid var(--border);
            border-radius: 12px;
            padding: 14px 15px;
            background: #f8fafc;
            cursor: pointer;
            transition: all 0.2s ease;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            text-align: left;
            user-select: none;
        }
        .res-option-card:hover {
            border-color: #94a3b8;
            background: #ffffff;
            transform: translateY(-2px);
            box-shadow: var(--shadow-sm);
        }
        .res-option-card.selected {
            border-color: var(--amber-accent);
            background: #fffbeb;
            box-shadow: 0 0 0 1px var(--amber-accent);
        }
        .res-option-card.selected.opt-emerald {
            border-color: var(--emerald);
            background: #ecfdf5;
            box-shadow: 0 0 0 1px var(--emerald);
        }
        .res-option-card.selected.opt-blue {
            border-color: var(--blue-accent);
            background: #f0f9ff;
            box-shadow: 0 0 0 1px var(--blue-accent);
        }
        .res-option-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 8px;
            gap: 8px;
        }
        .res-option-title {
            font-size: 13px;
            font-weight: 800;
            color: var(--navy-primary);
            line-height: 1.35;
        }
        .res-option-badge {
            font-size: 10px;
            font-weight: 800;
            padding: 2px 7px;
            border-radius: 6px;
            background: #e2e8f0;
            color: #475569;
            white-space: nowrap;
        }
        .res-option-desc {
            font-size: 11.8px;
            color: var(--text-muted);
            line-height: 1.45;
            margin-bottom: 10px;
        }
        .res-option-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 8px;
            border-top: 1px dashed var(--border);
            font-size: 11px;
            font-family: var(--font-mono);
            color: var(--text-light);
        }
        .telemetry-dashboard {
            background: #f8fafc;
            border: 1.5px solid var(--border);
            border-radius: 14px;
            padding: 20px;
            margin: 22px 0;
        }
        .telemetry-kpis {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 12px;
            margin-bottom: 14px;
        }
        .tel-kpi-card {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 12px 14px;
            text-align: center;
        }
        .tel-kpi-title {
            font-size: 10.5px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--text-light);
            margin-bottom: 4px;
        }
        .tel-kpi-val {
            font-size: 19px;
            font-weight: 800;
            font-family: var(--font-mono);
            color: var(--navy-primary);
            margin: 3px 0;
        }
        .tel-kpi-status {
            font-size: 10.5px;
            font-weight: 800;
            padding: 2px 8px;
            border-radius: 9999px;
            display: inline-block;
        }
        .status-ok { background: #d1fae5; color: #065f46; }
        .status-warn { background: #fef3c7; color: #92400e; }
        .status-danger { background: #fee2e2; color: #991b1b; }

        /* REJILLA Y TARJETAS DE EJECUCIÓN 4D */
        .cpm-rack {
            background: #ffffff;
            border: 1.5px solid var(--border);
            border-radius: 14px;
            padding: 20px;
            margin-top: 22px;
        }
        .cpm-cards-pool-7 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 12px;
            margin-bottom: 18px;
        }
        .exec-card-item {
            background: #ffffff;
            border: 1.5px solid #cbd5e1;
            border-radius: 12px;
            padding: 12px 14px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            gap: 8px;
            box-shadow: var(--shadow-sm);
            transition: all 0.2s ease;
        }
        .exec-card-item:hover {
            border-color: #94a3b8;
            box-shadow: 0 4px 10px rgba(0,0,0,0.06);
        }
        .exec-card-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 8px;
        }
        .exec-card-title {
            font-size: 12.5px;
            font-weight: 800;
            color: var(--navy-primary);
            line-height: 1.35;
        }
        .exec-card-code {
            font-size: 11px;
            font-weight: 800;
            font-family: var(--font-mono);
            background: #e2e8f0;
            color: #334155;
            padding: 2px 6px;
            border-radius: 6px;
        }
        .exec-card-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            font-size: 11px;
            font-family: var(--font-mono);
            color: #475569;
        }
        .exec-badge-pill {
            background: #f1f5f9;
            padding: 2px 8px;
            border-radius: 6px;
            border: 1px solid #e2e8f0;
        }
        .exec-phase-selector {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 8px;
            border-top: 1px dashed var(--border);
            margin-top: 4px;
        }
        .exec-phase-label {
            font-size: 11px;
            font-weight: 700;
            color: var(--text-light);
        }
        .phase-btn-group {
            display: flex;
            gap: 4px;
        }
        .phase-btn {
            background: #f1f5f9;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font-size: 11px;
            font-weight: 700;
            padding: 3px 8px;
            cursor: pointer;
            transition: all 0.15s ease;
        }
        .phase-btn:hover {
            background: #e2e8f0;
        }
        .phase-btn.active {
            background: var(--blue-accent);
            color: #ffffff;
            border-color: var(--blue-accent);
        }
        .phase-summary-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(170px, 1fr));
            gap: 10px;
            margin: 16px 0;
        }
        .phase-col-card {
            background: #f8fafc;
            border: 1.5px solid var(--border);
            border-radius: 10px;
            padding: 12px;
        }
        .phase-col-title {
            font-size: 12px;
            font-weight: 800;
            color: var(--navy-primary);
            margin-bottom: 6px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .phase-col-meta {
            font-size: 11px;
            font-family: var(--font-mono);
            color: var(--text-light);
            margin-bottom: 8px;
            padding-bottom: 6px;
            border-bottom: 1px dashed var(--border);
        }
        .phase-col-tasks {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }
        .task-micro-tag {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            padding: 4px 6px;
            font-size: 11px;
            font-weight: 600;
            color: #334155;
            display: flex;
            justify-content: space-between;
        }
        .task-micro-tag.critical {
            border-color: #f59e0b;
            background: #fffbeb;
            color: #b45309;
            font-weight: 700;
        }

        /* CONTENEDOR GANTT 4D */
        .gantt-section {
            background: #0f172a;
            border-radius: 14px;
            padding: 20px;
            color: #f8fafc;
            margin-top: 18px;
            box-shadow: 0 10px 25px rgba(15, 23, 42, 0.25);
        }
        .gantt-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 14px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.12);
            padding-bottom: 10px;
        }
        .gantt-title {
            font-size: 14px;
            font-weight: 800;
            color: #38bdf8;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .gantt-legend {
            display: flex;
            gap: 12px;
            font-size: 11px;
            flex-wrap: wrap;
        }
        .gantt-legend-item {
            display: flex;
            align-items: center;
            gap: 6px;
        }
        .legend-dot {
            width: 10px;
            height: 10px;
            border-radius: 3px;
        }
        .gantt-svg-scroll {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
        .gantt-svg {
            display: block;
            width: 100%;
            min-width: 780px;
            height: auto;
        }

        /* CONTENEDOR 5D: FLUJO DE CAJA Y CURVA S */
        .cashflow-section {
            background: #ffffff;
            border: 1.5px solid var(--border);
            border-radius: 14px;
            padding: 22px;
            margin-top: 22px;
        }
        .cashflow-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 16px;
            padding-bottom: 12px;
            border-bottom: 1px solid var(--border);
        }
        .cashflow-title {
            font-size: 15px;
            font-weight: 800;
            color: var(--navy-primary);
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .cashflow-kpis {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: 10px;
            margin-bottom: 16px;
        }
        .cf-kpi-pill {
            background: #f8fafc;
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 10px 12px;
            text-align: center;
        }
        .cf-kpi-lbl {
            font-size: 10.5px;
            font-weight: 700;
            color: var(--text-light);
            text-transform: uppercase;
        }
        .cf-kpi-num {
            font-size: 16px;
            font-weight: 800;
            font-family: var(--font-mono);
            color: var(--navy-primary);
            margin-top: 2px;
        }
        .scurve-svg-box {
            width: 100%;
            overflow-x: auto;
        }
        .scurve-svg {
            display: block;
            width: 100%;
            min-width: 780px;
            height: auto;
        }

        /* DICTAMEN PERICIAL */
        .eval-verdict-card {
            border-radius: 14px;
            padding: 22px;
            margin-top: 22px;
            display: none;
            animation: fadeIn 0.3s ease;
        }
        .eval-verdict-card.active { display: block; }
        .score-display-box {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 16px;
            margin-bottom: 18px;
            padding-bottom: 14px;
            border-bottom: 1px solid rgba(0,0,0,0.1);
        }
        .score-number {
            font-size: 38px;
            font-weight: 800;
            font-family: var(--font-mono);
        }
        .criteria-check-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 10px;
            margin: 14px 0 20px;
        }
        .crit-item {
            padding: 8px 12px;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .crit-ok { background: #d1fae5; color: #064e3b; border: 1px solid #a7f3d0; }
        .crit-fail { background: #fee2e2; color: #991b1b; border: 1px solid #fecaca; }
        .station-jump-banner {
            background: linear-gradient(135deg, #f0fdf4 0%, #e0f2fe 100%);
            border: 1.5px solid #7dd3fc;
            border-radius: 16px;
            padding: 20px 24px;
            margin: 28px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 16px;
            box-shadow: var(--shadow-sm);
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(6px); }
            to { opacity: 1; transform: translateY(0); }
        }

    </style>
</head>
<body>

    <div class="container">

        <!-- NAVEGACIÓN SUPERIOR INSTITUCIONAL -->
        <header class="top-nav">
            <a href="/ugma-gerencia-obras" class="back-link">
                &larr; Volver al Portal Diplomado UGMA
            </a>

            <a href="/ugma-gerencia-obras" class="brand-logo-link" title="Universidad Gran Mariscal de Ayacucho">
                <div class="brand-text-logo">UGMA &middot; <span>Gerencia de Obras</span></div>
            </a>

            <div class="nav-actions">
                <a href="/ugma-gerencia-obras/unidad-3-construcciones-sostenibles" class="nav-lab-link" style="background: var(--emerald-light); color: var(--emerald-dark); border-color: #a7f3d0;">
                    &larr; Unidad 3: Construcciones Sostenibles
                </a>
                <a href="https://lab.motazorrilla.com/bim" target="_blank" class="nav-lab-link">
                    <span>🔬</span> Laboratorio ConTech 3D
                </a>
            </div>
        </header>

        <!-- ENCABEZADO ACADÉMICO OFICIAL -->
        <section class="page-header">
            <div class="badge-row">
                <span class="badge">Unidad 04 &middot; Sábado 31-10-2026</span>
                <span class="badge badge-blue">Sesión Práctica &middot; 5 Horas Académicas</span>
                <span class="badge badge-emerald">Auditoría HVAC 16 TR &middot; Solar 5.1 HSP &middot; GGBS Sidor</span>
            </div>

            <h1 class="page-title">UNIDAD 4: Eficiencia Energética, Climatización HVAC y Materiales Ecológicos</h1>

            <p class="page-subtitle">
                Esta sesión técnico-práctica aborda la auditoría energética rigurosa y la descarbonización de activos construidos en climas tropicales cálido-húmedos. Se analiza a fondo el confort térmico adaptativo (ASHRAE 55), la física de fluidos refrigerantes y, como eje central, el caso práctico de inspección de obras del Ing. Héctor Mota Zorrilla: la auditoría comparativa termo-eléctrica de 16 TR de climatización (2x 5 TR + 2x 3 TR) contrastando unidades Trifásicas Inverter 208/230V 3F frente a unidades Monofásicas On/Off 220V 1F (calibres de conductores según CEN FONDONORMA 200, efecto Joule, desbalance NEMA MG-1 y LCC a 15 años). Finalmente, se profundiza en el dimensionamiento solar fotovoltaico con 5.1 HSP en Guayana y la producción de concretos bajos en carbono con escoria siderúrgica granulada GGBS de Sidor.
            </p>

            <div class="speaker-bar">
                <span><strong>Cátedra:</strong> Gerencia de Obras, ConTech &amp; Eficiencia Termo-Eléctrica</span>
                <span>&bull;</span>
                <span><strong>Profesor Titular:</strong> Ing. Héctor Mota Zorrilla</span>
                <span>&bull;</span>
                <span><strong>Estudio de Caso Real:</strong> Auditoría Eléctrica y Térmica de 16 TR HVAC en Obra</span>
            </div>
        </section>

        <!-- STEPPER / PAGINADOR SECUENCIAL (7 MÓDULOS) -->
        <nav class="stepper-container" aria-label="Paginador de temas académicos">
            <div class="stepper-header">
                <div class="stepper-title">
                    <span>⚡</span> Temario Curricular de la Unidad
                </div>
                <div class="stepper-controls">
                    <button type="button" class="btn-stepper-nav" onclick="prevStep()">&larr; Ant.</button>
                    <button type="button" class="btn-stepper-nav" onclick="nextStep()">Sig. &rarr;</button>
                    <button type="button" class="view-mode-toggle" id="viewModeToggleBtn" onclick="toggleAllModules()">
                        <span>👁️</span> Ver Todo el Temario
                    </button>
                </div>
            </div>

            <div class="stepper-track" id="stepperTrack">
                <button type="button" class="step-btn active" onclick="goToStep(1)" id="stepBtn-1">
                    <span class="step-num">1</span>
                    <div class="step-info">
                        <span class="step-name">Confort Térmico</span>
                    </div>
                </button>

                <button type="button" class="step-btn" onclick="goToStep(2)" id="stepBtn-2">
                    <span class="step-num">2</span>
                    <div class="step-info">
                        <span class="step-name">Caso Real 16 TR</span>
                    </div>
                </button>

                <button type="button" class="step-btn" onclick="goToStep(3)" id="stepBtn-3">
                    <span class="step-num">3</span>
                    <div class="step-info">
                        <span class="step-name">Cálculos CEN 200</span>
                    </div>
                </button>

                <button type="button" class="step-btn" onclick="goToStep(4)" id="stepBtn-4">
                    <span class="step-num">4</span>
                    <div class="step-info">
                        <span class="step-name">Desbalance NEMA</span>
                    </div>
                </button>

                <button type="button" class="step-btn" onclick="goToStep(5)" id="stepBtn-5">
                    <span class="step-num">5</span>
                    <div class="step-info">
                        <span class="step-name">LCC 15 Años</span>
                    </div>
                </button>

                <button type="button" class="step-btn" onclick="goToStep(6)" id="stepBtn-6">
                    <span class="step-num">6</span>
                    <div class="step-info">
                        <span class="step-name">Solar 5.1 HSP</span>
                    </div>
                </button>

                <button type="button" class="step-btn" onclick="goToStep(7)" id="stepBtn-7">
                    <span class="step-num">7</span>
                    <div class="step-info">
                        <span class="step-name">Simulador &amp; Memoria</span>
                    </div>
                </button>

                <button type="button" class="step-btn" onclick="goToStep(8)" id="stepBtn-8">
                    <span class="step-num">8</span>
                    <div class="step-info">
                        <span class="step-name">Taller Almacén</span>
                    </div>
                </button>

                <button type="button" class="step-btn" onclick="goToStep(9)" id="stepBtn-9">
                    <span class="step-num">9</span>
                    <div class="step-info">
                        <span class="step-name">Evaluación Telecom</span>
                    </div>
                </button>
            </div>

            <div class="stepper-progress">
                <div class="stepper-bar-fill" id="stepperProgressBar"></div>
            </div>
        </nav>

        <!-- ================================================================= -->
        <!-- MÓDULO 1: FUNDAMENTOS Y CONFORT TÉRMICO ADAPTATIVO (ASHRAE 55)    -->
        <!-- ================================================================= -->
        <article class="module-section active-module" id="moduleSection-1">
            <div class="module-header">
                <div class="module-badge-num">01</div>
                <div>
                    <h2 class="module-title">Fundamentos de Eficiencia Energética y Confort Adaptativo (ASHRAE 55-2023)</h2>
                    <p class="module-desc">Psicrometría Tropical, Cargas Sensibles/Latentes y la Regla de Oro del Setpoint</p>
                </div>
            </div>

            <p class="academic-p">
                La climatización artificial en edificaciones institucionales, comerciales e industriales en climas tropicales representa entre el <strong>55% y el 72% del consumo total de energía eléctrica</strong> facturado a la edificación. En el entorno geográfico de Ciudad Guayana, donde la temperatura media exterior ronda los 32°C y la humedad relativa media supera el 75%, el aire acondicionado debe realizar un trabajo termodinámico dual: abatir la temperatura de bulbo seco (<em>carga térmica sensible</em>) y condensar simultáneamente toneladas de vapor de agua del aire ambiental (<em>carga térmica latente</em>).
            </p>

            <p class="academic-p">
                Uno de los errores más costosos y extendidos en la operación de obras es ajustar arbitrariamente los termostatos a 18°C o 20°C bajo la falsa premisa de que \"así enfriará más rápido\". Esta práctica obliga a los compresores a trabajar de forma ininterrumpida en sus presiones de succión más bajas, duplicando el consumo eléctrico y provocando congelamiento de evaporadores. De acuerdo con el <strong>Modelo de Confort Térmico Adaptativo de la norma ASHRAE 55-2023</strong> para recintos con ventilación natural o acondicionamiento mixto en el trópico, la temperatura de confort neutro se calcula mediante la fórmula:
            </p>

            <div class="equation-card equation-emerald">
                <div class="equation-header">
                    <div class="equation-title">
                        <span>🌡️</span> Modelo Adaptativo de Confort Térmico Tropical (ASHRAE 55-2023)
                    </div>
                    <span class="equation-tag">Psicrometría &middot; Confort Pasivo</span>
                </div>
                <div class="equation-display">
                    <span class="math-var">T<sub>comf</sub></span>
                    <span class="math-equals">=</span>
                    <span>17.8 + 0.31 &times; <span class="math-var">T<sub>ext_med</sub></span></span>
                </div>
                <div class="equation-steps">
                    <div class="step-row">
                        <span class="step-bullet">&bull;</span>
                        <span>Temperatura exterior media en Ciudad Guayana: <strong>T<sub>ext_med</sub> = 28.0°C</strong></span>
                    </div>
                    <div class="step-row">
                        <span class="step-bullet">&bull;</span>
                        <span>Sustitución y cálculo: <strong>T<sub>comf</sub> = 17.8 + (0.31 &times; 28.0) = 26.48°C &approx; </strong><span class="math-result result-emerald">26.5°C</span></span>
                    </div>
                    <div class="step-row">
                        <span class="step-bullet">&bull;</span>
                        <span>Banda de confort admisible (80% aceptabilidad adaptativa): <strong>23.0°C a 30.0°C</strong></span>
                    </div>
                    <div class="step-row">
                        <span class="step-bullet">&bull;</span>
                        <span>Sensación térmica con ventilación inducida (v &ge; 0.8 m/s): <strong>Equivale a 23.5°C reales sin consumo frigorífico adicional</strong>.</span>
                    </div>
                </div>
            </div>

            <p class="academic-p">
                Al integrar ventiladores de cielo raso de alta eficiencia (HVLS o convencionales) que generen una velocidad de aire sobre la piel humana de <strong>v &ge; 0.6 m/s a 1.2 m/s</strong>, la tasa de evaporación transpiratoria se acelera, induciendo una <strong>sensación térmica de enfriamiento fisiológico de 2.5°C a 3.0°C menos</strong> sin requerir potencia frigorífica adicional.
            </p>

            <div class="callout-box callout-emerald">
                <strong>💡 La Regla de Oro de la Eficiencia HVAC:</strong>
                <p style="margin-top: 6px; font-size: 13.5px;">
                    Por cada 1.0°C que se eleva el punto de consigna (setpoint) del termostato (por ejemplo, operando a 25.5°C - 26.0°C con movimiento de aire en lugar de 21.0°C), el consumo eléctrico de los compresores de aire acondicionado se reduce entre un <strong>6% y un 8%</strong>. En una instalación de 16 TR en Guayana, esta sola medida operativa representa una reducción del 30% al 35% en la factura eléctrica mensual con costo de inversión cero.
                </p>
            </div>
        </article>

        <!-- ================================================================= -->
        <!-- MÓDULO 2: CASO PRÁCTICO REAL — AUDITORÍA HVAC 16 TR              -->
        <!-- ================================================================= -->
        <article class="module-section" id="moduleSection-2">
            <div class="module-header">
                <div class="module-badge-num">02</div>
                <div>
                    <h2 class="module-title">El Caso Práctico Real: Auditoría Termo-Eléctrica HVAC (16 TR)</h2>
                    <p class="module-desc">Experiencia de Inspección del Ing. Héctor Mota: 4 Unidades Trifásicas vs 4 Monofásicas</p>
                </div>
            </div>

            <p class="academic-p">
                <strong>Contexto Real de Gerencia e Inspección de Obras (Ing. Héctor Mota Zorrilla):</strong> Durante la ejecución de una edificación comercial e institucional de oficinas en Ciudad Guayana, la ingeniería de detalle estipuló la climatización integral mediante un sistema distribuido de <strong>16 Toneladas de Refrigeración (TR)</strong> totales (192.000 BTU/h), compuesto por cuatro unidades condensadoras ubicadas en la azotea técnica: <strong>dos unidades de 5 TR (60.000 BTU/h c/u) y dos unidades de 3 TR (36.000 BTU/h c/u)</strong>.
            </p>

            <p class="academic-p">
                La propuesta técnica original de ingeniería exigía la instalación de <strong>equipos Trifásicos de Alta Eficiencia (208/230V 3F)</strong> con compresores tipo Inverter de modulación continua y arrancadores suaves electrónicos (<em>Caso A</em>). Sin embargo, argumentando una supuesta \"mayor disponibilidad comercial inmediata en el mercado local\", el contratista de climatización ejecutó la instalación de <strong>cuatro unidades Monofásicas Convencionales (220V 1F)</strong> con compresores tipo Scroll fijos de encendido directo en línea On/Off (<em>Caso B</em>).
            </p>

            <!-- KPI COMPARATIVO RESUMEN -->
            <div class="hvac-kpi-banner">
                <div class="kpi-banner-card kpi-banner-a">
                    <div class="kpi-banner-title" style="color: #064e3b;">
                        <span>Caso A &middot; Ingeniería Original</span>
                        <span class="badge badge-emerald">✅ CONFORME</span>
                    </div>
                    <div class="kpi-banner-stat" style="color: #047857;">16.0 kW Pico / 8.6 kW Med.</div>
                    <div class="kpi-banner-desc">
                        <strong>Trifásico Inverter 208/230V 3F</strong> &bull; Modulación continua VFD &bull; FP = 0.95 &bull; Arrancador suave (LRA &le; 16A) &bull; Conductores ligeros #10 AWG.
                    </div>
                </div>

                <div class="kpi-banner-card kpi-banner-b">
                    <div class="kpi-banner-title" style="color: #991b1b;">
                        <span>Caso B &middot; Mala Praxis en Obra</span>
                        <span class="badge" style="background: #fee2e2; color: #dc2626;">🚨 RECHAZADO</span>
                    </div>
                    <div class="kpi-banner-stat" style="color: #dc2626;">20.2 kW Pico / 15.2 kW Med.</div>
                    <div class="kpi-banner-desc">
                        <strong>Monofásico On/Off 220V 1F</strong> &bull; Ciclado fijo pleno &bull; FP = 0.84 &bull; Golpe de arranque DOL (LRA 188A) &bull; Requiere cable pesado #4 AWG.
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="academic-table table-hvac-compare">
                    <thead>
                        <tr>
                            <th style="width: 25%;">Parámetro Técnico / Eléctrico</th>
                            <th class="col-case-a" style="width: 35%;">Caso A: Ingeniería Propuesta (Trifásico Alta Eficiencia)</th>
                            <th class="col-case-b" style="width: 40%;">Caso B: Mala Praxis Ejecutada (Monofásico Convencional)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Configuración de Equipos</strong></td>
                            <td class="cell-case-a">4 Unidades Trifásicas (2 de 5 TR + 2 de 3 TR)</td>
                            <td class="cell-case-b">4 Unidades Monofásicas (2 de 5 TR + 2 de 3 TR)</td>
                        </tr>
                        <tr>
                            <td><strong>Tensión y Fases de Alimentación</strong></td>
                            <td class="cell-case-a"><strong>208/230V &middot; Trifásico (3 Fases + Tierra)</strong></td>
                            <td class="cell-case-b"><strong>220V &middot; Monofásico bifilar (2 Fases + Tierra)</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Tecnología del Compresor</strong></td>
                            <td class="cell-case-a">Scroll / Rotativo DC Inverter con VFD modulante continuo</td>
                            <td class="cell-case-b">Scroll convencional de velocidad fija (On/Off brusco)</td>
                        </tr>
                        <tr>
                            <td><strong>Eficiencia Energética (EER / SEER)</strong></td>
                            <td class="cell-case-a"><strong>EER = 12.0 BTU/Wh &middot; SEER = 18 - 20</strong></td>
                            <td class="cell-case-b"><strong>EER = 9.5 BTU/Wh &middot; SEER = 10 - 12</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Factor de Potencia (FP / cos &phi;)</strong></td>
                            <td class="cell-case-a"><strong>FP = 0.95</strong> (Compensado activamente por inversor)</td>
                            <td class="cell-case-b"><strong>FP = 0.84</strong> (Carga inductiva sin compensación: 13 kVAR)</td>
                        </tr>
                        <tr>
                            <td><strong>Potencia Eléctrica Pico y Media</strong></td>
                            <td class="cell-case-a"><strong>16.00 kW Pico</strong> &middot; Carga parcial media: <strong>8.60 kW</strong></td>
                            <td class="cell-case-b"><strong>20.22 kW Pico</strong> &middot; Carga parcial media: <strong>15.17 kW</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Calibre de Conductor Alimentador (50m)</strong></td>
                            <td class="cell-case-a"><strong>3x #10 AWG Cu</strong> (o #8 AWG con caída mínima 1.50%)</td>
                            <td class="cell-case-b"><strong>2x #4 AWG Cu</strong> (con #8 instalado la caída es 3.46% violando CEN 200)</td>
                        </tr>
                        <tr>
                            <td><strong>Desbalance de Fases en Tablero Principal</strong></td>
                            <td class="cell-case-a"><strong>0.00% Desbalance</strong> (Simetría vectorial perfecta)</td>
                            <td class="cell-case-b"><strong>25.55% Desbalance</strong> (Alerta destructiva NEMA MG-1)</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="callout-box callout-red">
                <strong>🚨 El Veredicto de la Inspección Técnica:</strong>
                <p style="margin-top: 6px; font-size: 13.5px;">
                    Lo que el contratista presentó como un "ahorro comercial" de 2.600 USD en la compra de las máquinas provocó una cadena de consecuencias críticas: calibres de conductores duplicados, caída de tensión superior al límite normativo, calentamiento excesivo en ductos metálicos del techo, desbalance severo en el transformador y un sobrecosto operativo en energía eléctrica de más de 21.800 USD a lo largo de 15 años.
                </p>
            </div>
        </article>

        <!-- ================================================================= -->
        <!-- MÓDULO 3: CÁLCULOS ELÉCTRICOS, CEN 200, CAÍDA DE TENSIÓN Y JOULE  -->
        <!-- ================================================================= -->
        <article class="module-section" id="moduleSection-3">
            <div class="module-header">
                <div class="module-badge-num">03</div>
                <div>
                    <h2 class="module-title">Fórmulas Rigurosas, Conductores CEN 200, Caída de Tensión y Efecto Joule</h2>
                    <p class="module-desc">Fórmulas RLA/LRA, Verificación de 50m a la Azotea y Calentamiento en Tuberías Conduit</p>
                </div>
            </div>

            <p class="academic-p">
                La distancia física entre el Tablero de Distribución Principal (TDP) en planta baja y la bancada de condensadoras en la azotea técnica es de <strong>L = 50.0 metros</strong> (típico en edificaciones de 3 a 5 niveles). Para auditar este tendido, aplicamos rigurosamente las disposiciones del <strong>Código Eléctrico Nacional (CEN FONDONORMA 200 / Secciones 310, 430 y 440)</strong>.
            </p>

            <h3 class="academic-h3">⚡ 1. Cálculo de Corrientes Nominales de Marcha (RLA) y Capacidad Mínima (MCA)</h3>
            <p class="academic-p">
                Para los equipos de 5 TR (60.000 BTU/h), determinamos la corriente nominal de marcha a plena carga (<strong>RLA - Rated Load Amps</strong>) y la capacidad mínima de conducción del circuito (<strong>MCA - Minimum Circuit Ampacity = 1.25 &times; RLA</strong>):
            </p>

            <div class="equation-card equation-emerald">
                <div class="equation-header">
                    <div class="equation-title">
                        <span>⚡</span> Caso A: Unidad Trifásica Inverter 5 TR (208V 3F &middot; P<sub>in</sub> = 5.0 kW &middot; FP = 0.95)
                    </div>
                    <span class="equation-tag">CEN FONDONORMA 200 &middot; Sec. 440</span>
                </div>
                <div class="equation-display">
                    <span class="math-var">RLA<sub>3&phi;</sub></span>
                    <span class="math-equals">=</span>
                    <span class="math-fraction">
                        <span class="math-num">P</span>
                        <span class="math-den">&radic;3 &times; V &times; FP</span>
                    </span>
                    <span class="math-equals">=</span>
                    <span class="math-fraction">
                        <span class="math-num">5.000 W</span>
                        <span class="math-den">&radic;3 &times; 208 V &times; 0.95</span>
                    </span>
                    <span class="math-equals">=</span>
                    <span class="math-result result-emerald">14.61 A</span>
                </div>
                <div class="equation-display" style="margin-top: 8px;">
                    <span class="math-var">MCA<sub>3&phi;</sub></span>
                    <span class="math-equals">=</span>
                    <span>1.25 &times; <span class="math-var">RLA</span></span>
                    <span class="math-equals">=</span>
                    <span>1.25 &times; 14.61 A</span>
                    <span class="math-equals">=</span>
                    <span class="math-result result-emerald">18.26 A</span>
                    <span style="font-size: 13px; color: var(--emerald-dark); margin-left: 8px;">&rarr; Conductor normativo: <strong>3x #10 AWG Cu</strong> (Ampacidad 30A a 75°C)</span>
                </div>
            </div>

            <div class="equation-card equation-danger">
                <div class="equation-header">
                    <div class="equation-title">
                        <span>🚨</span> Caso B: Unidad Monofásica Convencional 5 TR (220V 1F &middot; P<sub>in</sub> = 6.32 kW &middot; FP = 0.84)
                    </div>
                    <span class="equation-tag" style="background:#fee2e2; color:#991b1b;">Mala Praxis en Obra</span>
                </div>
                <div class="equation-display">
                    <span class="math-var">RLA<sub>1&phi;</sub></span>
                    <span class="math-equals">=</span>
                    <span class="math-fraction">
                        <span class="math-num">P</span>
                        <span class="math-den">V &times; FP</span>
                    </span>
                    <span class="math-equals">=</span>
                    <span class="math-fraction">
                        <span class="math-num">6.320 W</span>
                        <span class="math-den">220 V &times; 0.84</span>
                    </span>
                    <span class="math-equals">=</span>
                    <span class="math-result result-danger">34.20 A</span>
                    <span style="font-size: 12.5px; color: #991b1b; margin-left: 6px;">(¡2.34 veces mayor corriente continua!)</span>
                </div>
                <div class="equation-display" style="margin-top: 8px;">
                    <span class="math-var">MCA<sub>1&phi;</sub></span>
                    <span class="math-equals">=</span>
                    <span>1.25 &times; <span class="math-var">RLA</span></span>
                    <span class="math-equals">=</span>
                    <span>1.25 &times; 34.20 A</span>
                    <span class="math-equals">=</span>
                    <span class="math-result result-danger">42.75 A</span>
                    <span style="font-size: 13px; color: #991b1b; margin-left: 8px;">&rarr; Requiere obligatoriamente: <strong>2x #8 AWG o #4 AWG Cu</strong></span>
                </div>
            </div>

            <h3 class="academic-h3">💥 2. Corrientes de Arranque con Rotor Bloqueado (LRA)</h3>
            <p class="academic-p">
                El impacto dinámico sobre la red eléctrica durante la partida del compresor marca una diferencia abismal entre ambas tecnologías:
            </p>

            <div class="equation-card">
                <div class="equation-header">
                    <div class="equation-title">
                        <span>💥</span> Corrientes de Arranque con Rotor Bloqueado (LRA - Locked Rotor Amps)
                    </div>
                    <span class="equation-tag">Dinámica de Red &middot; CEN Sec. 430</span>
                </div>
                <div class="equation-display">
                    <span class="math-var">Caso A (Inverter Soft-Start):</span>
                    <span class="math-var">LRA</span>
                    <span class="math-equals">&le;</span>
                    <span>1.10 &times; <span class="math-var">RLA</span></span>
                    <span class="math-equals">=</span>
                    <span>1.10 &times; 14.61 A</span>
                    <span class="math-equals">=</span>
                    <span class="math-result result-emerald">16.07 A</span>
                    <span style="font-size: 12.5px; color: var(--emerald-dark); margin-left: 6px;">(Arranque progresivo sin caída de tensión)</span>
                </div>
                <div class="equation-display">
                    <span class="math-var">Caso B (On/Off DOL Convencional):</span>
                    <span class="math-var">LRA</span>
                    <span class="math-equals">&approx;</span>
                    <span>5.50 &times; <span class="math-var">RLA</span></span>
                    <span class="math-equals">=</span>
                    <span>5.50 &times; 34.20 A</span>
                    <span class="math-equals">=</span>
                    <span class="math-result result-danger">188.10 A</span>
                    <span style="font-size: 12.5px; color: #991b1b; margin-left: 6px;">(¡Severo parpadeo y golpe electromecánico!)</span>
                </div>
            </div>

            <h3 class="academic-h3">📏 3. Verificación de Caída de Tensión (&Delta;V &lt; 3%) para Acometida de 50 Metros</h3>
            <p class="academic-p">
                El CEN Sección 215-2 estipula que la caída de tensión en alimentadores no debe superar el <strong>3.0%</strong> bajo carga nominal a fin de proteger los bobinados de los motores. Conforme al CEN Capítulo 9 (Tablas 8 y 9 para conductores de cobre THHN en conduit metálico a 75°C):
            </p>

            <div class="table-responsive">
                <table class="academic-table">
                    <thead>
                        <tr>
                            <th>Caso Evaluado (5 TR a 50m)</th>
                            <th>Calibre del Conductor Cu</th>
                            <th>Resistencia Unitaria (R)</th>
                            <th>Fórmula de Caída de Tensión</th>
                            <th>&Delta;V Resultante (Voltios y %)</th>
                            <th>Dictamen Normativo CEN 200</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Caso A (Trifásico 208V, 14.61A)</strong></td>
                            <td><strong>#10 AWG</strong></td>
                            <td>3.99 &Omega;/km</td>
                            <td>&Delta;V = &radic;3 &times; I &times; L &times; R &times; FP</td>
                            <td><strong>4.86 V (2.34%)</strong></td>
                            <td><span class="badge badge-emerald">CUMPLE (&lt; 3.0%)</span></td>
                        </tr>
                        <tr>
                            <td><strong>Caso A (Trifásico 208V, 14.61A)</strong></td>
                            <td><strong>#8 AWG</strong></td>
                            <td>2.55 &Omega;/km</td>
                            <td>&Delta;V = &radic;3 &times; I &times; L &times; R &times; FP</td>
                            <td><strong>3.13 V (1.50%)</strong></td>
                            <td><span class="badge badge-emerald">CUMPLE HOLGADO</span></td>
                        </tr>
                        <tr>
                            <td><strong>Caso B (Monofásico 220V, 34.20A)</strong></td>
                            <td><strong>#8 AWG</strong> (Instalado por contratista)</td>
                            <td>2.55 &Omega;/km</td>
                            <td>&Delta;V = 2 &times; I &times; L &times; R &times; FP</td>
                            <td><strong style="color: #dc2626;">7.62 V (3.46%)</strong></td>
                            <td><span class="badge" style="background:#fee2e2; color:#dc2626;">VIOLACIÓN NORMATIVA (&gt; 3%)</span></td>
                        </tr>
                        <tr>
                            <td><strong>Caso B (Monofásico 220V, 34.20A)</strong></td>
                            <td><strong>#4 AWG</strong> (Corrección obligatoria)</td>
                            <td>1.01 &Omega;/km</td>
                            <td>&Delta;V = 2 &times; I &times; L &times; R &times; FP</td>
                            <td><strong>3.20 V (1.45%)</strong></td>
                            <td><span class="badge badge-blue">CUMPLE (Cable Muy Pesado)</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h3 class="academic-h3">🔥 4. Pérdidas por Efecto Joule (P = I<sup>2</sup> &times; R &times; L) y Sobrecalentamiento en Techo</h3>
            <p class="academic-p">
                La energía disipada como calor en los conductores a lo largo de los 50 metros de tubería conduit representa desperdicio puro de kilovatios-hora que termina cocinando los cables bajo la losa de la azotea:
            </p>

            <div class="equation-card equation-danger">
                <div class="equation-header">
                    <div class="equation-title">
                        <span>🔥</span> Disipación Térmica por Efecto Joule en Tuberías Conduit (L = 50 metros)
                    </div>
                    <span class="equation-tag">Termodinámica de Conductores</span>
                </div>
                <div class="equation-display">
                    <span class="math-var">P<sub>Joule</sub></span>
                    <span class="math-equals">=</span>
                    <span>n &times; <span class="math-var">I<sup>2</sup></span> &times; <span class="math-var">R</span> &times; <span class="math-var">L</span></span>
                </div>
                <div class="equation-steps">
                    <div class="step-row">
                        <span class="step-bullet">&bull;</span>
                        <span><strong>Caso A (1 unidad 5 TR &middot; 3 hilos #8 AWG Cu &middot; 14.61 A):</strong> P<sub>loss</sub> = 3 &times; (14.61)<sup>2</sup> &times; (0.00255 &Omega;/m) &times; 50m = <span class="math-result result-emerald">81.6 Watts</span></span>
                    </div>
                    <div class="step-row">
                        <span class="step-bullet">&bull;</span>
                        <span><strong>Caso B (1 unidad 5 TR &middot; 2 hilos #4 AWG Cu &middot; 34.20 A):</strong> P<sub>loss</sub> = 2 &times; (34.20)<sup>2</sup> &times; (0.00101 &Omega;/m) &times; 50m = <span class="math-result">118.1 Watts</span></span>
                    </div>
                    <div class="step-row">
                        <span class="step-bullet">&bull;</span>
                        <span><strong>Caso B con #8 AWG (Mala praxis ejecutada en obra):</strong> P<sub>loss</sub> = 2 &times; (34.20)<sup>2</sup> &times; (0.00255 &Omega;/m) &times; 50m = <span class="math-result result-danger">298.3 Watts</span></span>
                    </div>
                    <div class="step-row" style="margin-top: 10px; border-top: 1px dashed var(--border); padding-top: 10px;">
                        <span class="step-bullet">&bull;</span>
                        <span><strong>BALANCE TOTAL CONTINUO EN LOS 4 CIRCUITOS (16 TR):</strong></span>
                    </div>
                    <div class="step-row">
                        <span class="step-bullet">&bull;</span>
                        <span>Caso A Trifásico Inverter (conductores óptimos): <span class="math-result result-emerald">222.0 Watts continuos</span> (Bajo impacto térmico)</span>
                    </div>
                    <div class="step-row">
                        <span class="step-bullet">&bull;</span>
                        <span>Caso B Monofásico con #4 AWG: <span class="math-result">661.0 Watts continuos</span> (+197% más calor disipado)</span>
                    </div>
                    <div class="step-row">
                        <span class="step-bullet">&bull;</span>
                        <span>Caso B Monofásico con #8 AWG (Realidad en obra): <span class="math-result result-danger">1,215.0 Watts continuos</span> (<strong>+447% de sobrecalentamiento crítico</strong>)</span>
                    </div>
                </div>
            </div>

            <div class="callout-box callout-red">
                <strong>🔥 Peligro de Incendio y Degradación Térmica en Techo:</strong>
                <p style="margin-top: 6px; font-size: 13.5px;">
                    Disipar más de 1.2 kW de calor de forma continua dentro de canalizaciones metálicas expuestas al sol radiante de Ciudad Guayana (donde la temperatura ambiente en azotea ya alcanza 42°C) eleva la temperatura interna de los tubos por encima de los <strong>68°C</strong>. Esto supera el límite térmico del aislamiento THHN (75°C corregido por agrupamiento), acelerando el agrietamiento del PVC dieléctrico, disparando interruptores termomagnéticos por calor parásito y creando un riesgo inminente de cortocircuito franco.
                </p>
            </div>
        </article>

        <!-- ================================================================= -->
        <!-- MÓDULO 4: DESBALANCE DE FASES (NEMA MG-1) Y CORRIENTE DE NEUTRO   -->
        <!-- ================================================================= -->
        <article class="module-section" id="moduleSection-4">
            <div class="module-header">
                <div class="module-badge-num">04</div>
                <div>
                    <h2 class="module-title">Desbalance de Fases (NEMA MG-1) y Afectación del Transformador</h2>
                    <p class="module-desc">Análisis Vectorial de Cargas Monofásicas sobre Tablero Trifásico (25.55% Desbalance)</p>
                </div>
            </div>

            <p class="academic-p">
                Uno de los aspectos más destructivos de la sustitución monofásica ejecutada en obra es el <strong>desbalance severo de fases</strong> inducido en el Tablero de Distribución Principal. En el Caso A (Trifásico), cada una de las cuatro unidades demanda corrientes rigurosamente idénticas y simétricas en las fases A, B y C, resultando en un desbalance nulo (0.0%) y una corriente de neutro de cero amperios (<strong>I<sub>N</sub> = 0 A</strong>).
            </p>

            <p class="academic-p">
                Por el contrario, en el Caso B, el contratista debió conectar cuatro unidades monofásicas bifilares de alta potencia (dos de 34.2A y dos de 20.5A) repartidas arbitrariamente entre las fases de la red trifásica:
            </p>

            <div class="cards-grid-3">
                <div class="card-feat">
                    <span class="badge" style="background: #e2e8f0; color: #334155;">Líneas L1 - L2</span>
                    <h4 class="card-feat-title" style="margin-top: 8px;">Unidad 1 (5 TR) + Unidad 4 (3 TR)</h4>
                    <p class="card-feat-text">Carga combinada: 34.20 A + 20.51 A = <strong>54.71 A</strong> conectada entre la fase A y la fase B.</p>
                </div>

                <div class="card-feat">
                    <span class="badge" style="background: #e2e8f0; color: #334155;">Líneas L2 - L3</span>
                    <h4 class="card-feat-title" style="margin-top: 8px;">Unidad 2 (5 TR)</h4>
                    <p class="card-feat-text">Carga individual: <strong>34.20 A</strong> conectada entre la fase B y la fase C.</p>
                </div>

                <div class="card-feat">
                    <span class="badge" style="background: #e2e8f0; color: #334155;">Líneas L3 - L1</span>
                    <h4 class="card-feat-title" style="margin-top: 8px;">Unidad 3 (3 TR)</h4>
                    <p class="card-feat-text">Carga individual: <strong>20.51 A</strong> conectada entre la fase C y la fase A.</p>
                </div>
            </div>

            <p class="academic-p">
                Al resolver el diagrama fasorial vectorial de corrientes de línea considerando el factor de potencia desfasado (<strong>FP = 0.84 &rarr; &phi; = 32.86&deg;</strong>), obtenemos las corrientes que realmente circulan por la acometida trifásica del edificio:
            </p>

            <div class="equation-card equation-danger">
                <div class="equation-header">
                    <div class="equation-title">
                        <span>⚡</span> Análisis Vectorial de Corrientes de Línea en Acometida (Caso B)
                    </div>
                    <span class="equation-tag" style="background:#fee2e2; color:#991b1b;">NEMA MG-1 &middot; IEEE 141</span>
                </div>
                <div class="equation-display">
                    <span>Fase L1: <strong class="math-var" style="color: #b91c1c;">I<sub>L1</sub> = 67.33 A</strong></span>
                    <span style="color: #cbd5e1;">&bull;</span>
                    <span>Fase L2: <strong class="math-var" style="color: #b91c1c;">I<sub>L2</sub> = 77.67 A</strong> <span style="font-size: 11px; background: #fee2e2; padding: 2px 6px; border-radius: 4px;">(Sobrecarga Crítica)</span></span>
                    <span style="color: #cbd5e1;">&bull;</span>
                    <span>Fase L3: <strong class="math-var" style="color: #047857;">I<sub>L3</sub> = 47.86 A</strong> <span style="font-size: 11px; background: #d1fae5; padding: 2px 6px; border-radius: 4px;">(Subcargada)</span></span>
                </div>

                <div class="equation-display" style="margin-top: 8px;">
                    <span class="math-var">I<sub>avg</sub></span>
                    <span class="math-equals">=</span>
                    <span class="math-fraction">
                        <span class="math-num">I<sub>L1</sub> + I<sub>L2</sub> + I<sub>L3</sub></span>
                        <span class="math-den">3</span>
                    </span>
                    <span class="math-equals">=</span>
                    <span class="math-fraction">
                        <span class="math-num">67.33 + 77.67 + 47.86</span>
                        <span class="math-den">3</span>
                    </span>
                    <span class="math-equals">=</span>
                    <span class="math-result">64.29 A</span>
                </div>

                <div class="equation-display" style="margin-top: 8px;">
                    <span class="math-var">&Delta;I<sub>max</sub></span>
                    <span class="math-equals">=</span>
                    <span>|I<sub>L2</sub> - I<sub>avg</sub>|</span>
                    <span class="math-equals">=</span>
                    <span>|77.67 A - 64.29 A|</span>
                    <span class="math-equals">=</span>
                    <span class="math-result result-danger">16.42 A</span>
                </div>

                <div class="equation-display" style="margin-top: 8px;">
                    <span class="math-var">% Desbalance<sub>NEMA</sub></span>
                    <span class="math-equals">=</span>
                    <span class="math-fraction">
                        <span class="math-num">&Delta;I<sub>max</sub></span>
                        <span class="math-den">I<sub>avg</sub></span>
                    </span>
                    <span>&times; 100%</span>
                    <span class="math-equals">=</span>
                    <span class="math-fraction">
                        <span class="math-num">16.42 A</span>
                        <span class="math-den">64.29 A</span>
                    </span>
                    <span>&times; 100%</span>
                    <span class="math-equals">=</span>
                    <span class="math-result result-danger" style="font-size: 17px;">25.55%</span>
                </div>

                <div class="equation-steps">
                    <div class="step-row">
                        <span class="step-bullet">&bull;</span>
                        <span><strong>Límite Internacional Máximo Tolerable (NEMA MG-1):</strong> <strong>&le; 5.0%</strong> (Alerta roja superada en más de 5 veces).</span>
                    </div>
                    <div class="step-row">
                        <span class="step-bullet">&bull;</span>
                        <span><strong>Caso A Trifásico:</strong> Las 4 unidades se distribuyen equitativamente en las 3 fases &rarr; <strong>0.00% Desbalance</strong> y corriente de neutro <strong>I<sub>N</sub> = 0 A</strong>.</span>
                    </div>
                </div>
            </div>

            <div class="callout-box callout-red">
                <strong>⚠️ Consecuencias Destructivas del Desbalance del 25.55%:</strong>
                <p style="margin-top: 6px; font-size: 13.5px;">
                    Los estándares internacionales <strong>NEMA MG-1 e IEEE 141 limitan el desbalance máximo tolerable de corriente al 5% o a lo sumo 10%</strong>. Un desbalance del <strong>25.55%</strong> genera:
                    <br>&bull; <strong>Desclasificación Térmica (Derating) del Transformador:</strong> El transformador de distribución debe desclasificarse entre un 20% y un 25% de su potencia nominal en kVA para evitar que el devanado de la fase L2 se queme por calor localizado.
                    <br>&bull; <strong>Aparición de Corrientes de Secuencia Negativa:</strong> Genera campos magnéticos rotativos inversos en otros motores trifásicos conectados en el edificio (bombas de agua, ascensores), provocando frenado parásito, vibraciones mecánicas y quema de rodamientos.
                    <br>&bull; <strong>Retorno Destructivo por Neutro y Tierra:</strong> Circulación de corrientes parásitas y armónicos por las mallas de puesta a tierra, descalibrando los sistemas informáticos y servidores de la institución.
                </p>
            </div>
        </article>

        <!-- ================================================================= -->
        <!-- MÓDULO 5: EVALUACIÓN ECONÓMICA Y COSTO DE CICLO DE VIDA (LCC)    -->
        <!-- ================================================================= -->
        <article class="module-section" id="moduleSection-5">
            <div class="module-header">
                <div class="module-badge-num">05</div>
                <div>
                    <h2 class="module-title">Evaluación Económica, Facturación y Costo de Ciclo de Vida (LCC)</h2>
                    <p class="module-desc">Retorno Simple en 12.7 Meses y 21.878 USD Ahorrados a 15 Años (LCC)</p>
                </div>
            </div>

            <p class="academic-p">
                Para sustentar la decisión técnica ante la gerencia general o la junta de condominios, el ingeniero debe traducir los amperios y los kilovatios a términos financieros mediante la metodología de <strong>Costo de Ciclo de Vida (Life Cycle Costing - LCC / ASTM E917)</strong>. Consideramos un régimen operativo comercial-institucional estándar: <strong>12 horas diarias (07:00 a 19:00), 26 días al mes (312 horas/mes), totalizando 3.744 horas de climatización al año</strong>.
            </p>

            <p class="academic-p">
                Mientras que el sistema Inverter modula continuamente adaptando su velocidad a la carga parcial media del edificio (consumiendo en promedio 8.60 kW), el sistema convencional monofásico cicla bruscamente a plena potencia fija, con pérdidas térmicas de ciclado (promediando 15.17 kW equivalentes):
            </p>

            <div class="table-responsive">
                <table class="academic-table">
                    <thead>
                        <tr>
                            <th>Concepto Económico / Financiero</th>
                            <th>Caso A: Trifásico Alta Eficiencia</th>
                            <th>Caso B: Monofásico Convencional</th>
                            <th>Ahorro Anual Neto / Beneficio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Consumo Eléctrico Mensual</strong></td>
                            <td><strong>2.683 kWh / mes</strong></td>
                            <td><strong>4.733 kWh / mes</strong></td>
                            <td>2.050 kWh / mes ahorrados (-43.3%)</td>
                        </tr>
                        <tr>
                            <td><strong>Consumo Eléctrico Anual</strong></td>
                            <td><strong>32.198 kWh / año</strong></td>
                            <td><strong>56.796 kWh / año</strong></td>
                            <td><strong>24.598 kWh / año no consumidos</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Facturación Anual (@ $0.10 USD/kWh)</strong></td>
                            <td><strong>$3.219,80 USD / año</strong></td>
                            <td><strong>$5.679,60 USD / año</strong></td>
                            <td><strong>$2.459,80 USD / año en efectivo</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Inversión Inicial CapEx (Equipos + Cables)</strong></td>
                            <td>$10.600,00 USD (Cables #10 y tableros 3F)</td>
                            <td>$8.000,00 USD (Cables gruesos #4 y 1F)</td>
                            <td>Sobrecosto inicial Caso A: <strong>$2.600,00 USD</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Período de Retorno Simple (Payback)</strong></td>
                            <td colspan="2" style="text-align: center; font-weight: 800; color: var(--emerald-dark); background: #ecfdf5;">
                                Payback = $2.600 / $2.459,80 = 1.06 Años &middot; ¡Exactamente 12.7 Meses!
                            </td>
                            <td>Amortización total en el primer año</td>
                        </tr>
                        <tr>
                            <td><strong>Costo de Ciclo de Vida LCC a 10 Años (r = 8%)</strong></td>
                            <td><strong>$34.889,15 USD</strong></td>
                            <td><strong>$51.143,14 USD</strong></td>
                            <td><strong>Ahorro Neto: $16.253,99 USD</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Costo de Ciclo de Vida LCC a 15 Años (r = 8%)</strong></td>
                            <td><strong>$42.011,57 USD</strong></td>
                            <td><strong>$63.889,97 USD</strong></td>
                            <td><strong>Ahorro Neto Acumulado: $21.878,40 USD</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="callout-box callout-emerald">
                <strong>💰 Conclusión Financiera Rotunda:</strong>
                <p style="margin-top: 6px; font-size: 13.5px;">
                    El supuesto "ahorro" de 2.600 USD obtenido por el contratista al comprar unidades monofásicas se evaporó en apenas <strong>12.7 meses de operación</strong>. A los 15 años de servicio, la mala praxis le costará al propietario <strong>21.878 USD adicionales</strong> en desperdicio eléctrico, sin incluir el costo de reparaciones por quemado prematuro de compresores debido a vibraciones y caídas de tensión.
                </p>
            </div>
        </article>

        <!-- ================================================================= -->
        <!-- MÓDULO 6: DIMENSIONAMIENTO SOLAR 5.1 HSP Y CONCRETOS GGBS SIDOR  -->
        <!-- ================================================================= -->
        <article class="module-section" id="moduleSection-6">
            <div class="module-header">
                <div class="module-badge-num">06</div>
                <div>
                    <h2 class="module-title">Dimensionamiento Solar Fotovoltaico (5.1 HSP) y Concretos GGBS Sidor</h2>
                    <p class="module-desc">Sistema Solar de 24.5 kWp para HVAC y Reducción del 37% de Carbono en Concretos Locales</p>
                </div>
            </div>

            <p class="academic-p">
                La transición hacia edificaciones Net-Zero Carbon en Ciudad Guayana conjuga dos vectores de alta ingeniería: la generación solar fotovoltaica in-situ aprovechando el recurso solar del Macizo Guayanés, y la descarbonización del concreto estructural aprovechando los coproductos siderúrgicos de la zona industrial de Matanzas.
            </p>

            <h3 class="academic-h3">☀️ 1. Dimensionamiento Solar Fotovoltaico para los 16 TR de Climatización</h3>
            <p class="academic-p">
                Ciudad Guayana presenta un promedio anual de <strong>Horas Solar Pico (HSP) de 5.1 kWh/m²/día</strong> con una inclinación óptima de paneles de 10° orientados al Sur. Para abastecer el 100% de la demanda diurna del sistema HVAC de alta eficiencia (Caso A, que consume aproximadamente <strong>100 kWh/día</strong> de faena):
            </p>

            <div class="equation-card equation-amber">
                <div class="equation-header">
                    <div class="equation-title">
                        <span>☀️</span> Dimensionamiento del Generador Solar Fotovoltaico (HSP = 5.1 &middot; Ciudad Guayana)
                    </div>
                    <span class="equation-tag">Net-Zero Energy &middot; ASHRAE 90.1</span>
                </div>
                <div class="equation-display">
                    <span class="math-var">P<sub>dc</sub></span>
                    <span class="math-equals">=</span>
                    <span class="math-fraction">
                        <span class="math-num">E<sub>dia</sub></span>
                        <span class="math-den">HSP &times; PR</span>
                    </span>
                    <span class="math-equals">=</span>
                    <span class="math-fraction">
                        <span class="math-num">100.0 kWh/día</span>
                        <span class="math-den">5.1 h &times; 0.80</span>
                    </span>
                    <span class="math-equals">=</span>
                    <span class="math-result" style="background: #fef3c7; color: #92400e; border-color: #fde68a;">24.51 kWp</span>
                </div>
                <div class="equation-display" style="margin-top: 8px;">
                    <span class="math-var">N<sub>módulos</sub></span>
                    <span class="math-equals">=</span>
                    <span class="math-fraction">
                        <span class="math-num">24.510 Wp</span>
                        <span class="math-den">580 Wp / módulo</span>
                    </span>
                    <span class="math-equals">=</span>
                    <span>42.26 &rarr;</span>
                    <span class="math-result result-emerald">42 Módulos Bifaciales</span>
                </div>
                <div class="equation-steps">
                    <div class="step-row">
                        <span class="step-bullet">&bull;</span>
                        <span><strong>Módulos Fotovoltaicos Seleccionados:</strong> 42 unidades monocristalinas TOPCon bifaciales de 580W (Potencia pico instalada: <strong>24.36 kWp</strong>).</span>
                    </div>
                    <div class="step-row">
                        <span class="step-bullet">&bull;</span>
                        <span><strong>Superficie Requerida en Azotea:</strong> <strong>108 m²</strong> orientados al Sur con inclinación de 10°.</span>
                    </div>
                    <div class="step-row">
                        <span class="step-bullet">&bull;</span>
                        <span><strong>Equipamiento de Conversión:</strong> Inversor trifásico híbrido de 25 kW (208/230V 3F) con doble MPPT y limitador dinámico de inyección cero.</span>
                    </div>
                    <div class="step-row">
                        <span class="step-bullet">&bull;</span>
                        <span><strong>Almacenamiento de Respaldo:</strong> Banco modular LiFePO4 de <strong>30 kWh</strong> para estabilizar microrred ante perturbaciones del SEN.</span>
                    </div>
                </div>
            </div>

            <h3 class="academic-h3">🏗️ 2. Concretos de Bajo Carbono con Escoria Granulada GGBS de Sidor</h3>
            <p class="academic-p">
                El concreto armado tradicional es responsable del 8% de las emisiones globales de CO2 debido al clinkerizado a 1.450°C del cemento Portland. En Ciudad Guayana contamos con la <strong>Escoria Granulada de Alto Horno (GGBS - Ground Granulated Blast-furnace Slag)</strong> producida en las plantas siderúrgicas de Sidor en Matanzas, un material cementicio suplementario de reactividad puzolánica latente:
            </p>

            <div class="table-responsive">
                <table class="academic-table">
                    <thead>
                        <tr>
                            <th>Propiedad Técnica / Ambiental</th>
                            <th>Concreto Convencional (100% Cemento Portland)</th>
                            <th>Concreto Ecológico GGBS (40% Sustitución Sidor)</th>
                            <th>Beneficio en Obras Guayana</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Huella de Carbono Embebido</strong></td>
                            <td>340.0 kg CO2e / m³</td>
                            <td><strong>214.4 kg CO2e / m³ (-36.9%)</strong></td>
                            <td>Supera con creces el umbral mínimo del 20% exigido por <strong>EDGE Buildings</strong>.</td>
                        </tr>
                        <tr>
                            <td><strong>Calor de Hidratación en Masa</strong></td>
                            <td>Muy elevado (alcanza 65°C a 70°C en núcleos)</td>
                            <td><strong>Reducción del 35% al 40% del calor pico</strong></td>
                            <td>Evita la fisuración térmica en fundaciones y losas masivas bajo el sol de 36°C de Guayana.</td>
                        </tr>
                        <tr>
                            <td><strong>Resistencia a Sulfatos y Cloruros</strong></td>
                            <td>Moderada; vulnerable a porosidad abierta</td>
                            <td><strong>Extrema densidad microestructural (C-S-H)</strong></td>
                            <td>Inmunidad al ataque químico de aguas freáticas ácidas típicas de suelos bolivarenses.</td>
                        </tr>
                        <tr>
                            <td><strong>Resistencia a Compresión (28 y 56 días)</strong></td>
                            <td>f'c nominal a 28 días; estancamiento posterior</td>
                            <td>Resistencia inicial más lenta; <strong>supera f'c a 56 días (+15%)</strong></td>
                            <td>Ideal para elementos estructurales verticales permanentes y losas postensadas.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </article>

        <!-- ================================================================= -->
        <!-- MÓDULO 7: SIMULADOR INTERACTIVO HVAC & MEMORIA DE CÁLCULO        -->
        <!-- ================================================================= -->
        <article class="module-section" id="moduleSection-7">
            <div class="module-header">
                <div class="module-badge-num">07</div>
                <div>
                    <h2 class="module-title">Simulador Interactivo HVAC &amp; Generador de Memoria de Cálculo</h2>
                    <p class="module-desc">Experimentación Dinámica de Acometidas, Caída de Tensión, Desbalance y Exportación Pericial</p>
                </div>
            </div>

            <p class="academic-p">
                <strong>Taller Práctico de Grado:</strong> En este módulo interactivo, los ingenieros pueden ajustar dinámicamente la <strong>longitud de acometida eléctrica (10m a 100m)</strong>, las <strong>horas de operación diaria (4h a 24h)</strong> y la <strong>tarifa eléctrica comercial ($/kWh)</strong> para auditar en tiempo real el comportamiento electro-térmico de los 16 TR y emitir la Memoria Técnica de Cálculo pericial:
            </p>

            <div class="simulator-card">
                <h3 style="font-size: 17px; font-weight: 800; color: var(--navy-primary); margin-bottom: 6px;">
                    🎛️ Simulador Paramétrico: Auditoría Termo-Eléctrica HVAC 16 TR
                </h3>
                <p style="font-size: 13px; color: var(--text-light); margin-bottom: 22px;">
                    Ajuste las variables de campo para calcular inmediatamente corrientes, caídas de tensión, pérdidas Joule, integración solar y dictamen pericial:
                </p>

                <!-- PARÁMETROS ADICIONALES: CALIBRE Y SOLAR -->
                <div class="sim-selector-grid">
                    <div>
                        <label for="simGaugeSelect" class="sim-select-label">🔌 Conductor Instalado en Caso B (Monofásico)</label>
                        <select id="simGaugeSelect" class="sim-select" onchange="runHvacSimulation()">
                            <option value="8">#8 AWG Cu (Mala praxis ejecutada · R = 2.55 Ω/km)</option>
                            <option value="4">#4 AWG Cu (Corrección técnica forzada · R = 1.01 Ω/km)</option>
                        </select>
                    </div>

                    <div style="display: flex; align-items: flex-end; padding-bottom: 4px;">
                        <label class="sim-checkbox-label">
                            <input type="checkbox" id="simSolarToggle" onchange="runHvacSimulation()">
                            <span>☀️ Acoplar Sistema Solar 24.5 kWp (Compensación Diurna Net-Zero)</span>
                        </label>
                    </div>
                </div>

                <!-- SLIDER LONGITUD -->
                <div class="slider-group">
                    <div class="slider-header">
                        <span>📏 Longitud del Alimentador desde Tablero a Azotea (Metros)</span>
                        <span class="slider-val" id="simDistVal">50 metros</span>
                    </div>
                    <input type="range" min="10" max="100" value="50" step="5" class="custom-slider" id="simDistSlider" oninput="runHvacSimulation()">
                </div>

                <!-- SLIDER HORAS -->
                <div class="slider-group">
                    <div class="slider-header">
                        <span>⏱️ Régimen de Operación Diaria (Horas / Día)</span>
                        <span class="slider-val" id="simHoursVal">12 horas/día</span>
                    </div>
                    <input type="range" min="4" max="24" value="12" step="1" class="custom-slider" id="simHoursSlider" oninput="runHvacSimulation()">
                </div>

                <!-- SLIDER TARIFA -->
                <div class="slider-group">
                    <div class="slider-header">
                        <span>💵 Tarifa Eléctrica Comercial / Equivalente ($ USD / kWh)</span>
                        <span class="slider-val" id="simRateVal">$0.10 / kWh</span>
                    </div>
                    <input type="range" min="0.02" max="0.25" value="0.10" step="0.01" class="custom-slider" id="simRateSlider" oninput="runHvacSimulation()">
                </div>

                <!-- RESULTADOS COMPARATIVOS A VS B -->
                <div class="comparison-kpi-grid">
                    <div class="side-kpi-card side-kpi-a">
                        <div class="side-title" style="color: #064e3b;">Caso A &middot; Trifásico Inverter 208V</div>
                        <div class="side-val" id="kpiDva" style="color: #047857;">1.50% &Delta;V</div>
                        <div class="side-desc" id="kpiDescA">Caída con #8 AWG Cu (<span class="badge badge-emerald" style="padding: 2px 6px;">CUMPLE CEN 200 &lt; 3%</span>)</div>
                        <div style="margin-top: 10px; font-weight: 700; font-size: 13px; color: #064e3b;" id="kpiJouleA">Pérdidas Joule: 222 W</div>
                        <div style="font-size: 11.5px; color: #064e3b; margin-top: 4px;">Desbalance NEMA: <strong>0.00%</strong> &bull; I<sub>N</sub> = 0 A</div>
                    </div>

                    <div class="side-kpi-card side-kpi-b">
                        <div class="side-title" style="color: #991b1b;">Caso B &middot; Monofásico On/Off 220V</div>
                        <div class="side-val" id="kpiDvb" style="color: #dc2626;">3.46% &Delta;V</div>
                        <div class="side-desc" id="kpiDescB">Caída con #8 AWG (<span class="badge" style="background:#fee2e2; color:#dc2626; padding: 2px 6px;">VIOLA CEN 200 &gt; 3%</span>)</div>
                        <div style="margin-top: 10px; font-weight: 700; font-size: 13px; color: #991b1b;" id="kpiJouleB">Pérdidas Joule: 1.215 W</div>
                        <div style="font-size: 11.5px; color: #991b1b; margin-top: 4px;">Desbalance NEMA: <strong>25.55%</strong> &bull; Derating Trafo -25%</div>
                    </div>

                    <div class="side-kpi-card" style="background: #f0fdf4; border-color: #86efac;">
                        <div class="side-title" style="color: #166534;" id="kpiSavingsTitle">Ahorro Financiero Anual</div>
                        <div class="side-val" id="kpiSavings" style="color: #15803d;">$2.460 USD</div>
                        <div class="side-desc" id="kpiPaybackDesc">Retorno de inversión: 12.7 meses</div>
                        <div style="margin-top: 10px; font-weight: 700; font-size: 13px; color: #166534;" id="kpiLcc15">Ahorro a 15 Años: $21.878 USD</div>
                        <div style="font-size: 11.5px; color: #166534; margin-top: 4px;" id="kpiSolarNote">Sin acople solar diurno</div>
                    </div>
                </div>

                <div class="verdict-box" id="simVerdictBox">
                    <strong>📋 Dictamen Técnico Pericial:</strong> Con la longitud actual de alimentador y régimen de horas seleccionado, el sistema Trifásico Inverter (Caso A) optimiza el uso de cobre, disipa una fracción despreciable de calor y ahorra miles de dólares al año. Por el contrario, el sistema Monofásico (Caso B) incurre en caída de tensión no reglamentaria y desbalance del 25.55% en transformador.
                </div>

                <div style="display: flex; gap: 12px; flex-wrap: wrap; margin-top: 18px;">
                    <button type="button" class="btn-acta" onclick="generateHvacCalculationMemory()">
                        <span>📑</span> Exportar Memoria de Cálculo y Dictamen Pericial (16 TR)
                    </button>
                </div>
            </div>
        </article>

        
        <!-- ================================================================= -->
        <!-- BANNER DE ENLACE DIRECTO A ESTACIONES PRÁCTICAS                   -->
        <!-- ================================================================= -->
        <div class="station-jump-banner">
            <div style="display:flex; align-items:center; gap:14px; min-width:280px; flex:1;">
                <div style="font-size:32px;">🎛️</div>
                <div>
                    <div style="font-size:16px; font-weight:800; color:var(--navy-primary);">
                        Estaciones de Aplicación BIM &amp; Respaldo Energético (Unidades 3 y 4)
                    </div>
                    <div style="font-size:13px; color:var(--text-muted); margin-top:2px;">
                        Experimente la práctica guiada del Centro de Almacén o ingrese directamente al Reto Evaluativo de Telecomunicaciones.
                    </div>
                </div>
            </div>
            <div style="display:flex; gap:10px; align-items:center; flex-wrap:wrap;">
                <button type="button" class="btn-stepper-nav" onclick="goToStep(8)" style="background:#047857; color:#fff; border-color:#047857; font-weight:800; padding:10px 18px;">
                    <span>📦</span> Ir al Taller Almacén (Módulo 8) &rarr;
                </button>
                <button type="button" class="btn-stepper-nav" onclick="goToStep(9)" style="background:#0284c7; color:#fff; border-color:#0284c7; font-weight:800; padding:10px 18px;">
                    <span>📡</span> Ir a la Evaluación Telecom (Módulo 9) &rarr;
                </button>
            </div>
        </div>

                <!-- ================================================================= -->
        <!-- MÓDULO 8: TALLER PRÁCTICO GUIADO – ALMACÉN TÉCNICO CLIMATIZADO   -->
        <!-- ================================================================= -->
        <article class="module-section" id="moduleSection-8">
            <div class="module-header">
                <div class="module-badge-num">08</div>
                <div>
                    <h2 class="module-title">Taller Práctico Guiado: Centro de Distribución y Almacén Técnico Climatizado</h2>
                    <p class="module-desc">Simulador BIM Interdimensional: Integración de Envolvente Térmica, Climatización CEN 200, Respaldo Híbrido, Diagrama de Gantt 4D y Flujo de Caja 5D</p>
                </div>
            </div>

            <div class="interactive-cockpit">
                <!-- HERO CARD MANDATO -->
                <div class="cockpit-hero-card">
                    <div class="cockpit-hero-title">
                        <span>🏢</span> Mandato de Obra: Centro de Distribución de Materiales Sensibles (Zona Ind. Unare II)
                    </div>
                    <div class="cockpit-hero-desc">
                        Se le ha encomendado la gerencia integral para la adecuación y habilitación de una nave logística de 600 m² destinada al almacenamiento de insumos farmacéuticos y resinas poliméricas de alta sensibilidad térmica (degradación crítica si T &gt; 25°C). Debe tomar decisiones en cada dimensión BIM garantizando la viabilidad física, eléctrica y presupuestaria antes del inicio de operaciones.
                    </div>
                    <div class="mandate-grid">
                        <div class="mandate-pill">
                            <span>Techo Presupuestario CapEx</span>
                            <strong>$46.000 USD Máximo</strong>
                        </div>
                        <div class="mandate-pill">
                            <span>Plazo Contractual Improrrogable</span>
                            <strong>30 Días Calendario</strong>
                        </div>
                        <div class="mandate-pill">
                            <span>Autonomía de Emergencia</span>
                            <strong>4 Horas Mínimo (Apagón)</strong>
                        </div>
                        <div class="mandate-pill">
                            <span>Norma CEN 200 / NEMA</span>
                            <strong>Trifásico 208V / 0% Desbalance</strong>
                        </div>
                    </div>
                </div>

                <!-- SELECTOR 1: OBRA CIVIL Y RACKS -->
                <div class="selectors-section-title">
                    <span>1️⃣</span> Dimensión 3D/4D: Selección de Cuadrilla de Obra Civil y Montaje Estructural
                </div>
                <div class="resource-cards-grid-4">
                    <div class="res-option-card" id="cardA1_min" onclick="selectAlmacenCivil('min')">
                        <div class="res-option-header">
                            <span class="res-option-title">Cuadrilla Mínima</span>
                            <span class="res-option-badge">Económica</span>
                        </div>
                        <div class="res-option-desc">
                            4 obreros. Ritmo de avance lento. Reduce el costo de nómina pero dilata la obra civil a 16 días, poniendo en riesgo la ruta crítica del proyecto.
                        </div>
                        <div class="res-option-meta">
                            <span>⏱️ 16 días · 👥 4 pers.</span>
                            <strong>$5.200 USD</strong>
                        </div>
                    </div>

                    <div class="res-option-card" id="cardA1_std" onclick="selectAlmacenCivil('std')">
                        <div class="res-option-header">
                            <span class="res-option-title">Cuadrilla Estándar</span>
                            <span class="res-option-badge">Convencional</span>
                        </div>
                        <div class="res-option-desc">
                            6 obreros. Rendimiento convencional según tabulador regional. Completa la adecuación de piso y racks en 12 días calendario.
                        </div>
                        <div class="res-option-meta">
                            <span>⏱️ 12 días · 👥 6 pers.</span>
                            <strong>$7.000 USD</strong>
                        </div>
                    </div>

                    <div class="res-option-card selected opt-emerald" id="cardA1_reforz" onclick="selectAlmacenCivil('reforz')">
                        <div class="res-option-header">
                            <span class="res-option-title">Cuadrilla Reforzada</span>
                            <span class="res-option-badge" style="background:#d1fae5;color:#065f46;">⭐ Óptima</span>
                        </div>
                        <div class="res-option-desc">
                            8 obreros. Excelente paralelismo en nave sin generar congestión física. Acorta la ruta civil a solo 8 días garantizando holgura al comisionamiento.
                        </div>
                        <div class="res-option-meta">
                            <span>⏱️ 8 días · 👥 8 pers.</span>
                            <strong>$8.200 USD</strong>
                        </div>
                    </div>

                    <div class="res-option-card" id="cardA1_doble" onclick="selectAlmacenCivil('doble')">
                        <div class="res-option-header">
                            <span class="res-option-title">Doble Cuadrilla Masiva</span>
                            <span class="res-option-badge">Acelerada</span>
                        </div>
                        <div class="res-option-desc">
                            12 obreros. Máxima velocidad (5 días), pero satura las vías de circulación interna, incrementa riesgos de seguridad y genera un sobrecosto severo.
                        </div>
                        <div class="res-option-meta">
                            <span>⏱️ 5 días · 👥 12 pers.</span>
                            <strong>$12.500 USD</strong>
                        </div>
                    </div>
                </div>

                <!-- SELECTOR 2: ENVOLVENTE TÉRMICA Y TECHO -->
                <div class="selectors-section-title">
                    <span>2️⃣</span> Dimensión Sostenibilidad &amp; Térmica: Envolvente y Aislamiento de Cubierta (Unidad 3/4)
                </div>
                <div class="resource-cards-grid-4">
                    <div class="res-option-card" id="cardA2_black" onclick="selectAlmacenTecho('black')">
                        <div class="res-option-header">
                            <span class="res-option-title">Manto Asfáltico Negro</span>
                            <span class="res-option-badge" style="background:#fee2e2;color:#991b1b;">Inadecuado</span>
                        </div>
                        <div class="res-option-desc">
                            Impermeabilización tradicional sin reflectividad (albedo 0.08). Alcanza 82°C bajo el sol de Guayana e inyecta 16.5 kW de calor parásito al recinto.
                        </div>
                        <div class="res-option-meta">
                            <span>☀️ 82°C · +35% calor</span>
                            <strong>$2.800 USD</strong>
                        </div>
                    </div>

                    <div class="res-option-card" id="cardA2_white" onclick="selectAlmacenTecho('white')">
                        <div class="res-option-header">
                            <span class="res-option-title">Pintura Elastomérica Blanca</span>
                            <span class="res-option-badge">Básica</span>
                        </div>
                        <div class="res-option-desc">
                            Reflexión superficial del 60% que reduce la temperatura a 64°C, pero carece de aislamiento conductivo. Requiere 13.5 kW en el sistema climatizador.
                        </div>
                        <div class="res-option-meta">
                            <span>☀️ 64°C · +15% calor</span>
                            <strong>$3.800 USD</strong>
                        </div>
                    </div>

                    <div class="res-option-card selected opt-emerald" id="cardA2_alum" onclick="selectAlmacenTecho('alum')">
                        <div class="res-option-header">
                            <span class="res-option-title">Manto Aluminizado + Lana 50mm</span>
                            <span class="res-option-badge" style="background:#d1fae5;color:#065f46;">⭐ Óptima</span>
                        </div>
                        <div class="res-option-desc">
                            Lámina aluminizada reflectiva (albedo 0.85) más alma de lana de roca. Abate la temperatura a 54°C y reduce la carga térmica HVAC a solo 8.0 kW.
                        </div>
                        <div class="res-option-meta">
                            <span>☀️ 54°C · R=1.8 m²K/W</span>
                            <strong>$4.800 USD</strong>
                        </div>
                    </div>

                    <div class="res-option-card" id="cardA2_pir" onclick="selectAlmacenTecho('pir')">
                        <div class="res-option-header">
                            <span class="res-option-title">Sándwich Termoacústico PIR 80mm</span>
                            <span class="res-option-badge">Premium</span>
                        </div>
                        <div class="res-option-desc">
                            Panel industrial de poliisocianurato de máxima eficiencia (42°C sup, 6.5 kW HVAC), pero su costo de $11.500 USD quiebra el presupuesto disponible.
                        </div>
                        <div class="res-option-meta">
                            <span>☀️ 42°C · U=0.28 W/m²K</span>
                            <strong>$11.500 USD</strong>
                        </div>
                    </div>
                </div>

                <!-- SELECTOR 3: HVAC 16 TR Y CÓDIGO ELÉCTRICO -->
                <div class="selectors-section-title">
                    <span>3️⃣</span> Dimensión Electromecánica: Sistema Climatizador HVAC 16 TR y Código CEN 200
                </div>
                <div class="resource-cards-grid-4">
                    <div class="res-option-card" id="cardA3_mono8" onclick="selectAlmacenHvac('mono8')">
                        <div class="res-option-header">
                            <span class="res-option-title">Monofásico On/Off (#8 AWG)</span>
                            <span class="res-option-badge" style="background:#fee2e2;color:#991b1b;">Norma Viola</span>
                        </div>
                        <div class="res-option-desc">
                            4 unidades 4 TR 230V monofásicas con cable #8. Provoca 3.8% de caída de tensión (viola límite 3.0%), desbalance NEMA 25.55% y recalienta el neutro.
                        </div>
                        <div class="res-option-meta">
                            <span>⚠️ 3.8% Caída · 14.8 kW</span>
                            <strong>$6.800 USD</strong>
                        </div>
                    </div>

                    <div class="res-option-card" id="cardA3_mono4" onclick="selectAlmacenHvac('mono4')">
                        <div class="res-option-header">
                            <span class="res-option-title">Monofásico (#4 AWG Sobredim.)</span>
                            <span class="res-option-badge">Parche</span>
                        </div>
                        <div class="res-option-desc">
                            Corrige la caída de tensión a 1.9% pero perpetúa el desbalance severo de fases (25.55%) en el transformador de distribución y mantiene 12.2 kW de consumo.
                        </div>
                        <div class="res-option-meta">
                            <span>⚡ 1.9% Caída · 12.2 kW</span>
                            <strong>$8.400 USD</strong>
                        </div>
                    </div>

                    <div class="res-option-card" id="cardA3_tri_onoff" onclick="selectAlmacenHvac('tri_onoff')">
                        <div class="res-option-header">
                            <span class="res-option-title">Trifásico On/Off 208V</span>
                            <span class="res-option-badge">Convencional</span>
                        </div>
                        <div class="res-option-desc">
                            Distribución simétrica de fases (0% desbalance, CEN 200), pero compresores directos con alto pico de arranque LRA y consumo plano de 11.5 kW.
                        </div>
                        <div class="res-option-meta">
                            <span>⚖️ 0% Desbalance · 11.5 kW</span>
                            <strong>$7.800 USD</strong>
                        </div>
                    </div>

                    <div class="res-option-card selected opt-emerald" id="cardA3_tri_inv" onclick="selectAlmacenHvac('tri_inv')">
                        <div class="res-option-header">
                            <span class="res-option-title">Trifásico Inverter VFD 208V</span>
                            <span class="res-option-badge" style="background:#d1fae5;color:#065f46;">⭐ Óptimo</span>
                        </div>
                        <div class="res-option-desc">
                            Cumplimiento pleno CEN 200: 0% desbalance, caída de solo 0.4%, arranque suave progresivo y modulación inverter que reduce la demanda a solo 8.0 kW.
                        </div>
                        <div class="res-option-meta">
                            <span>✅ CEN 200 · 8.0 kW Mod.</span>
                            <strong>$9.200 USD</strong>
                        </div>
                    </div>
                </div>

                <!-- SELECTOR 4: ENERGÍA DE RESPALDO (CONTINUIDAD) -->
                <div class="selectors-section-title">
                    <span>4️⃣</span> Dimensión Respaldo Energético: Continuidad Operativa ante Apagón (4 Horas)
                </div>
                <div class="resource-cards-grid-4">
                    <div class="res-option-card" id="cardA4_r1" onclick="selectAlmacenEnergy('r1')">
                        <div class="res-option-header">
                            <span class="res-option-title">Solar Básico (10 kWp + 15 kWh)</span>
                            <span class="res-option-badge" style="background:#fee2e2;color:#991b1b;">Insuficiente</span>
                        </div>
                        <div class="res-option-desc">
                            Banco de litio reducido. Ante corte de luz, entrega únicamente 1.5 horas de autonomía real antes del colapso de frío de los fármacos.
                        </div>
                        <div class="res-option-meta">
                            <span>🔋 1.5 Horas · 15 kWh</span>
                            <strong>$8.500 USD</strong>
                        </div>
                    </div>

                    <div class="res-option-card" id="cardA4_r2" onclick="selectAlmacenEnergy('r2')">
                        <div class="res-option-header">
                            <span class="res-option-title">Generador Diésel 25 kVA</span>
                            <span class="res-option-badge" style="background:#fef3c7;color:#92400e;">Alto OPEX</span>
                        </div>
                        <div class="res-option-desc">
                            Planta automática accesible en compra inicial, pero consume $9.600 USD/año en gasoil y sus emisiones de hollín amenazan la inocuidad farmacéutica.
                        </div>
                        <div class="res-option-meta">
                            <span>⛽ OPEX +$9.6k/año</span>
                            <strong>$9.800 USD</strong>
                        </div>
                    </div>

                    <div class="res-option-card selected opt-emerald" id="cardA4_r3" onclick="selectAlmacenEnergy('r3')">
                        <div class="res-option-header">
                            <span class="res-option-title">Híbrido Solar Óptimo (20 kWp + 40 kWh)</span>
                            <span class="res-option-badge" style="background:#d1fae5;color:#065f46;">⭐ Óptimo</span>
                        </div>
                        <div class="res-option-desc">
                            Inversor trifásico y banco LiFePO4 de 40 kWh (32 kWh útiles). Soporta con solvencia 4.2 horas continuas con cubierta aluminizada e inverter.
                        </div>
                        <div class="res-option-meta">
                            <span>🔋 4.2 Horas · 40 kWh</span>
                            <strong>$14.500 USD</strong>
                        </div>
                    </div>

                    <div class="res-option-card" id="cardA4_r4" onclick="selectAlmacenEnergy('r4')">
                        <div class="res-option-header">
                            <span class="res-option-title">Macro-Banco Solar (35 kWp + 90 kWh)</span>
                            <span class="res-option-badge" style="background:#fee2e2;color:#991b1b;">Sobrediseño</span>
                        </div>
                        <div class="res-option-desc">
                            Autonomía extendida de más de 9 horas, pero su costo de $28.000 USD rompe el presupuesto global del proyecto en más de $10.000 USD.
                        </div>
                        <div class="res-option-meta">
                            <span>🔋 9.5 Horas · 90 kWh</span>
                            <strong>$28.000 USD</strong>
                        </div>
                    </div>
                </div>

                <!-- TELEMETRÍA EN VIVO -->
                <div class="telemetry-dashboard">
                    <div style="font-size:13px;font-weight:800;color:var(--navy-primary);margin-bottom:12px;display:flex;align-items:center;gap:8px;">
                        <span>📡</span> Telemetría de Diseño Interdimensional en Tiempo Real
                    </div>
                    <div class="telemetry-kpis">
                        <div class="tel-kpi-card">
                            <div class="tel-kpi-title">Potencia Eléctrica Total</div>
                            <div class="tel-kpi-val" id="telAlmacenPower">8.0 kW</div>
                            <div class="tel-kpi-status status-ok" id="telAlmacenPowerStatus">Eficiente</div>
                        </div>
                        <div class="tel-kpi-card">
                            <div class="tel-kpi-title">Desbalance Fases NEMA</div>
                            <div class="tel-kpi-val" id="telAlmacenDesbalance">0.0%</div>
                            <div class="tel-kpi-status status-ok" id="telAlmacenDesbalanceStatus">Cumple CEN 200</div>
                        </div>
                        <div class="tel-kpi-card">
                            <div class="tel-kpi-title">Autonomía de Respaldo</div>
                            <div class="tel-kpi-val" id="telAlmacenBackup">4.2 Horas</div>
                            <div class="tel-kpi-status status-ok" id="telAlmacenBackupStatus">≥ 4.0h Cumple</div>
                        </div>
                        <div class="tel-kpi-card">
                            <div class="tel-kpi-title">Presupuesto Programado</div>
                            <div class="tel-kpi-val" id="telAlmacenCost">$42.800</div>
                            <div class="tel-kpi-status status-ok" id="telAlmacenCostStatus">Bajo Techo $46k</div>
                        </div>
                        <div class="tel-kpi-card">
                            <div class="tel-kpi-title">Plazo Total Ruta Crítica</div>
                            <div class="tel-kpi-val" id="telAlmacenDays">29 Días</div>
                            <div class="tel-kpi-status status-ok" id="telAlmacenDaysStatus">≤ 30d Cumple</div>
                        </div>
                    </div>
                </div>

                <!-- REJILLA TEMPORAL Y TARJETAS DE EJECUCIÓN (7 TARJETAS) -->
                <div class="cpm-rack">
                    <div style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:10px;margin-bottom:14px;">
                        <div>
                            <h3 style="font-size:15px;font-weight:800;color:var(--navy-primary);margin:0;">
                                ⏱️ Rejilla Temporal y Programación de Actividades (Dimensión 4D)
                            </h3>
                            <p style="font-size:12px;color:var(--text-muted);margin:2px 0 0;">
                                Asigne cada una de las 7 actividades de ejecución a una de las 5 fases. Las actividades en una misma fase se ejecutan en <strong>paralelo</strong>.
                            </p>
                        </div>
                    </div>

                    <!-- POOL DE 7 TARJETAS -->
                    <div class="cpm-cards-pool-7" id="almacenTasksPool">
                        <!-- Las 7 tarjetas se inyectan o actualizan dinámicamente -->
                    </div>

                    <!-- RESUMEN DE LAS 5 FASES -->
                    <div class="phase-summary-grid" id="almacenPhasesSummary">
                        <!-- Resumen dinámico de cada fase -->
                    </div>

                    <!-- GANTT 4D EN TIEMPO REAL (SVG) -->
                    <div class="gantt-section">
                        <div class="gantt-header">
                            <div class="gantt-title">
                                <span>📊</span> Diagrama de Gantt 4D Dinámico (Simulación en Tiempo Real)
                            </div>
                            <div class="gantt-legend">
                                <div class="gantt-legend-item">
                                    <div class="legend-dot" style="background:#f59e0b;"></div>
                                    <span>Ruta Crítica (RC)</span>
                                </div>
                                <div class="gantt-legend-item">
                                    <div class="legend-dot" style="background:#0ea5e9;"></div>
                                    <span>Actividad Paralela</span>
                                </div>
                                <div class="gantt-legend-item">
                                    <div class="legend-dot" style="background:#ef4444;"></div>
                                    <span>Límite Contractual (30d)</span>
                                </div>
                            </div>
                        </div>
                        <div class="gantt-svg-scroll">
                            <div id="ganttSvgAlmacenContainer"></div>
                        </div>
                    </div>

                    <!-- DIMENSIÓN 5D: FLUJO DE CAJA Y CURVA S -->
                    <div class="cashflow-section">
                        <div class="cashflow-header">
                            <div class="cashflow-title">
                                <span>📈</span> Dimensión 5D: Flujo de Caja y Curva S de Desembolso Financiero
                            </div>
                            <div style="font-size:12px;color:var(--text-light);font-family:var(--font-mono);">
                                Techo CapEx: $46.000 USD
                            </div>
                        </div>
                        <div class="cashflow-kpis">
                            <div class="cf-kpi-pill">
                                <div class="cf-kpi-lbl">Presupuesto Techo</div>
                                <div class="cf-kpi-num">$46.000 USD</div>
                            </div>
                            <div class="cf-kpi-pill">
                                <div class="cf-kpi-lbl">Inversión Programada</div>
                                <div class="cf-kpi-num" id="cfAlmacenTotal">$42.800 USD</div>
                            </div>
                            <div class="cf-kpi-pill">
                                <div class="cf-kpi-lbl">Desembolso Semanal Prom.</div>
                                <div class="cf-kpi-num" id="cfAlmacenAvg">$8.560 /sem</div>
                            </div>
                            <div class="cf-kpi-pill">
                                <div class="cf-kpi-lbl">Pico Máximo Semanal</div>
                                <div class="cf-kpi-num" id="cfAlmacenPeak">$14.500 USD</div>
                            </div>
                            <div class="cf-kpi-pill">
                                <div class="cf-kpi-lbl">Margen de Contingencia</div>
                                <div class="cf-kpi-num" id="cfAlmacenContingency" style="color:#059669;">+$3.200 USD</div>
                            </div>
                        </div>
                        <div class="scurve-svg-box">
                            <div id="scurveSvgAlmacenContainer"></div>
                        </div>
                    </div>
                </div>

                <!-- BANNER DE ENLACE A MÓDULO 9 -->
                <div class="station-jump-banner">
                    <div>
                        <strong style="font-size:14.5px;color:#0369a1;display:block;margin-bottom:4px;">
                            🚀 Taller de Almacén Integrado con Éxito
                        </strong>
                        <span style="font-size:12.5px;color:#334155;">
                            Ha verificado cómo las decisiones bioclimáticas abaten la carga de climatización y viabilizan el respaldo solar en tiempo y costo. Continúe a la evaluación pericial en el Cerro San Félix.
                        </span>
                    </div>
                    <button type="button" class="btn-stepper-nav" onclick="goToStep(9)" style="background:#0284c7;color:#ffffff;border:none;padding:10px 18px;border-radius:10px;font-weight:800;cursor:pointer;">
                        Ir a la Evaluación Telecom <span>➡️</span>
                    </button>
                </div>
            </div>
        </article>

        <!-- ================================================================= -->
        <!-- MÓDULO 9: EVALUACIÓN PRÁCTICA PERICIAL – TELECOM CERRO SAN FÉLIX -->
        <!-- ================================================================= -->
        <article class="module-section" id="moduleSection-9">
            <div class="module-header">
                <div class="module-badge-num">09</div>
                <div>
                    <h2 class="module-title">Evaluación Práctica Pericial: Estación de Radiobase Telecom Cerro San Félix</h2>
                    <p class="module-desc">Caso de Estudio Autónomo: Gerencia de Infraestructura Remota, Logística de Cumbre, Restricción de Campamento, Sostenibilidad Energética y Evaluación Vigesimal (0-20)</p>
                </div>
            </div>

            <div class="interactive-cockpit">
                <!-- HERO CARD MANDATO PERICIAL -->
                <div class="cockpit-hero-card" style="background: linear-gradient(135deg, #1e1b4b 0%, #312e81 100%);">
                    <div class="cockpit-hero-title">
                        <span>📡</span> Mandato Pericial: Radiobase de Telecomunicaciones 4G/5G en Cumbre Rocosa
                    </div>
                    <div class="cockpit-hero-desc">
                        Como Gerente Director de Proyecto, debe planificar y ejecutar el despliegue de una estación de transmisión en el Cerro San Félix (Puerto Ordaz). El entorno impone restricciones extremas de acceso por pendiente pronunciada, riesgo de incomunicación total por lluvias en 8 semanas, capacidad limitada de pernocta en campamento y necesidad absoluta de continuidad de transmisión durante los cortes nocturnos de energía.
                    </div>
                    <div class="mandate-grid">
                        <div class="mandate-pill">
                            <span>Techo Presupuestario CapEx</span>
                            <strong>$65.000 USD Máximo</strong>
                        </div>
                        <div class="mandate-pill">
                            <span>Plazo Improrrogable</span>
                            <strong>56 Días (8 Semanas)</strong>
                        </div>
                        <div class="mandate-pill">
                            <span>Límite de Campamento</span>
                            <strong>12 Personas Máx. Pernocta</strong>
                        </div>
                        <div class="mandate-pill">
                            <span>Respaldo Continuo</span>
                            <strong>8 Horas Nocturnas Mínimo</strong>
                        </div>
                    </div>
                </div>

                <!-- SELECTOR 1: VIALIDAD DE ACCESO -->
                <div class="selectors-section-title">
                    <span>1️⃣</span> Dimensión Logística &amp; Vialidad: Acceso a Cumbre de Cerro San Félix
                </div>
                <div class="resource-cards-grid-4">
                    <div class="res-option-card" id="cardT1_manual" onclick="selectRadioVialidad('manual')">
                        <div class="res-option-header">
                            <span class="res-option-title">Mantenimiento Manual &amp; Relleno</span>
                            <span class="res-option-badge">Precario</span>
                        </div>
                        <div class="res-option-desc">
                            4 obreros rellenando baches a mano. Económico ($4.000), pero la primera lluvia lava el material y deja varada la grúa de 40T requerida para la torre.
                        </div>
                        <div class="res-option-meta">
                            <span>⏱️ 14 días · 👥 4 pers.</span>
                            <strong>$4.000 USD</strong>
                        </div>
                    </div>

                    <div class="res-option-card" id="cardT1_patrol" onclick="selectRadioVialidad('patrol')">
                        <div class="res-option-header">
                            <span class="res-option-title">Patrol &amp; Cunetas en Tierra</span>
                            <span class="res-option-badge">Vulnerable</span>
                        </div>
                        <div class="res-option-desc">
                            Conformación mecanizada rápida. Mejora la rasante pero las cunetas en tierra colapsan con las fuertes escorrentías del cerro, cortando el paso.
                        </div>
                        <div class="res-option-meta">
                            <span>⏱️ 10 días · 👥 4 pers.</span>
                            <strong>$6.800 USD</strong>
                        </div>
                    </div>

                    <div class="res-option-card selected opt-emerald" id="cardT1_lastrado" onclick="selectRadioVialidad('lastrado')">
                        <div class="res-option-header">
                            <span class="res-option-title">Escarificado, Lastrado &amp; Cunetas Concreto</span>
                            <span class="res-option-badge" style="background:#d1fae5;color:#065f46;">⭐ Óptima</span>
                        </div>
                        <div class="res-option-desc">
                            Sub-base granular compactada con cunetas de concreto vaciado. Garantiza tránsito seguro todo tiempo para grúas pesadas en solo 8 días.
                        </div>
                        <div class="res-option-meta">
                            <span>⏱️ 8 días · 👥 4 pers.</span>
                            <strong>$9.800 USD</strong>
                        </div>
                    </div>

                    <div class="res-option-card" id="cardT1_pavimento" onclick="selectRadioVialidad('pavimento')">
                        <div class="res-option-header">
                            <span class="res-option-title">Pavimento Rígido Concreto 15cm</span>
                            <span class="res-option-badge">Excesivo</span>
                        </div>
                        <div class="res-option-desc">
                            Calidad suprema, pero consume el 37% de todo el presupuesto disponible ($24.000 USD) y toma 22 días, dilatando críticamente las demás etapas.
                        </div>
                        <div class="res-option-meta">
                            <span>⏱️ 22 días · 👥 8 pers.</span>
                            <strong>$24.000 USD</strong>
                        </div>
                    </div>
                </div>

                <!-- SELECTOR 2: SHELTER Y CUBIERTA -->
                <div class="selectors-section-title">
                    <span>2️⃣</span> Dimensión Envolvente &amp; Sostenibilidad: Shelter de Equipos y Cubierta Térmica
                </div>
                <div class="resource-cards-grid-4">
                    <div class="res-option-card" id="cardT2_black" onclick="selectRadioShelter('black')">
                        <div class="res-option-header">
                            <span class="res-option-title">Caseta Bloque + Manto Negro</span>
                            <span class="res-option-badge" style="background:#fee2e2;color:#991b1b;">Inadecuado</span>
                        </div>
                        <div class="res-option-desc">
                            Albañilería tradicional con manto asfáltico negro. Techo a 82°C que transmite 3.5 kW térmicos de calor parásito, recalentando los gabinetes RF.
                        </div>
                        <div class="res-option-meta">
                            <span>☀️ 82°C · 12 días</span>
                            <strong>$5.200 USD</strong>
                        </div>
                    </div>

                    <div class="res-option-card" id="cardT2_white" onclick="selectRadioShelter('white')">
                        <div class="res-option-header">
                            <span class="res-option-title">Caseta Bloque + Pintura Térmica</span>
                            <span class="res-option-badge">Básica</span>
                        </div>
                        <div class="res-option-desc">
                            Pintura elastomérica blanca sobre placa. Refleja radiación solar directa pero las paredes de bloque acumulan calor diurno que liberan de noche.
                        </div>
                        <div class="res-option-meta">
                            <span>☀️ 65°C · 10 días</span>
                            <strong>$6.500 USD</strong>
                        </div>
                    </div>

                    <div class="res-option-card selected opt-emerald" id="cardT2_pir" onclick="selectRadioShelter('pir')">
                        <div class="res-option-header">
                            <span class="res-option-title">Shelter Modular PIR + Aluminizado</span>
                            <span class="res-option-badge" style="background:#d1fae5;color:#065f46;">⭐ Óptimo</span>
                        </div>
                        <div class="res-option-desc">
                            Cabina prefabricada con paneles sándwich PIR 75mm y cubierta aluminizada. Montaje estanco en 6 días. Reduce la carga del clima a solo 0.45 kW.
                        </div>
                        <div class="res-option-meta">
                            <span>☀️ 45°C · 6 días</span>
                            <strong>$8.600 USD</strong>
                        </div>
                    </div>

                    <div class="res-option-card" id="cardT2_bunker" onclick="selectRadioShelter('bunker')">
                        <div class="res-option-header">
                            <span class="res-option-title">Búnker Concreto Antivandálico</span>
                            <span class="res-option-badge">Lento / Caro</span>
                        </div>
                        <div class="res-option-desc">
                            Estructura de concreto armado vaciado en sitio. Altísima seguridad pero 20 días de fraguado y $17.000 USD de costo que desbordan el presupuesto.
                        </div>
                        <div class="res-option-meta">
                            <span>⏱️ 20 días · 👥 8 pers.</span>
                            <strong>$17.000 USD</strong>
                        </div>
                    </div>
                </div>

                <!-- SELECTOR 3: TORRE DE TRANSMISIÓN 45M -->
                <div class="selectors-section-title">
                    <span>3️⃣</span> Dimensión Estructural 3D/4D: Montaje de Torre de Transmisión de 45 Metros
                </div>
                <div class="resource-cards-grid-4">
                    <div class="res-option-card" id="cardT3_used" onclick="selectRadioTorre('used')">
                        <div class="res-option-header">
                            <span class="res-option-title">Torre Usada Reacondicionada</span>
                            <span class="res-option-badge" style="background:#fee2e2;color:#991b1b;">Riesgosa</span>
                        </div>
                        <div class="res-option-desc">
                            2 torristas. Elementos con corrosión previa. Montaje lento y peligroso de 24 días con alto riesgo de no superar la prueba de verticalidad eólica.
                        </div>
                        <div class="res-option-meta">
                            <span>⏱️ 24 días · 👥 2 pers.</span>
                            <strong>$12.500 USD</strong>
                        </div>
                    </div>

                    <div class="res-option-card" id="cardT3_arriostrada" onclick="selectRadioTorre('arriostrada')">
                        <div class="res-option-header">
                            <span class="res-option-title">Torre Arriostrada (Tirantes)</span>
                            <span class="res-option-badge" style="background:#fee2e2;color:#991b1b;">Inviable en Sitio</span>
                        </div>
                        <div class="res-option-desc">
                            Torre ligera con vientos de acero. Inviable en la cumbre del cerro: requiere un radio de anclaje de 30m que cae en el abismo fuera del terreno.
                        </div>
                        <div class="res-option-meta">
                            <span>⚠️ Radio Anclaje 30m</span>
                            <strong>$14.500 USD</strong>
                        </div>
                    </div>

                    <div class="res-option-card selected opt-emerald" id="cardT3_autosop" onclick="selectRadioTorre('autosop')">
                        <div class="res-option-header">
                            <span class="res-option-title">Torre Autosoportada 45m</span>
                            <span class="res-option-badge" style="background:#d1fae5;color:#065f46;">⭐ Óptima</span>
                        </div>
                        <div class="res-option-desc">
                            4 torristas certificados. Base troncopiramidal compacta sobre roca. Montaje seguro en tramos en 14 días en estricto cumplimiento normativo.
                        </div>
                        <div class="res-option-meta">
                            <span>⏱️ 14 días · 👥 4 pers.</span>
                            <strong>$16.500 USD</strong>
                        </div>
                    </div>

                    <div class="res-option-card" id="cardT3_grua" onclick="selectRadioTorre('grua')">
                        <div class="res-option-header">
                            <span class="res-option-title">Doble Cuadrilla + Grúa 70T</span>
                            <span class="res-option-badge">Sobrecupo</span>
                        </div>
                        <div class="res-option-desc">
                            Montaje exprés en 7 días pero requiere 8 torristas. Al coincidir con la cuadrilla solar (6 pers.), suma 14 trabajadores excediendo el límite de 12 de campamento.
                        </div>
                        <div class="res-option-meta">
                            <span>⏱️ 7 días · 👥 8 pers.</span>
                            <strong>$26.000 USD</strong>
                        </div>
                    </div>
                </div>

                <!-- SELECTOR 4: CLIMATIZACIÓN GABINETES RF -->
                <div class="selectors-section-title">
                    <span>4️⃣</span> Dimensión Electromecánica &amp; CEN 200: Climatización de Equipos RF (Norma N+1)
                </div>
                <div class="resource-cards-grid-4">
                    <div class="res-option-card" id="cardT4_mono" onclick="selectRadioClima('mono')">
                        <div class="res-option-header">
                            <span class="res-option-title">Split Monofásico Convencional</span>
                            <span class="res-option-badge" style="background:#fee2e2;color:#991b1b;">Viola CEN 200</span>
                        </div>
                        <div class="res-option-desc">
                            Unidad comercial 230V 1F. Desbalance NEMA 25.55%, caída 3.8% en 65m de acometida de cerro y sin redundancia: si falla, la radiobase se apaga por calor.
                        </div>
                        <div class="res-option-meta">
                            <span>⚠️ 25.5% Desbal. · 0.8 kW</span>
                            <strong>$2.500 USD</strong>
                        </div>
                    </div>

                    <div class="res-option-card" id="cardT4_inv_mono" onclick="selectRadioClima('inv_mono')">
                        <div class="res-option-header">
                            <span class="res-option-title">Split Dual Inverter 1F</span>
                            <span class="res-option-badge">Sin Redundancia</span>
                        </div>
                        <div class="res-option-desc">
                            Reduce consumo continuo a 0.6 kW, pero persiste el desbalance monofásico y carece de conmutador automático de emergencia ante falla simple.
                        </div>
                        <div class="res-option-meta">
                            <span>⚡ 0.6 kW · 1F Inverter</span>
                            <strong>$3.400 USD</strong>
                        </div>
                    </div>

                    <div class="res-option-card selected opt-emerald" id="cardT4_mochila" onclick="selectRadioClima('mochila')">
                        <div class="res-option-header">
                            <span class="res-option-title">Mochila Dual 3F Inverter N+1</span>
                            <span class="res-option-badge" style="background:#d1fae5;color:#065f46;">⭐ Óptimo</span>
                        </div>
                        <div class="res-option-desc">
                            Unidad industrial compacta trifásica 208V con doble compresor redundante y conmutación automática. 0% desbalance y consumo ultra-eficiente de solo 450W.
                        </div>
                        <div class="res-option-meta">
                            <span>✅ 0% Desbal. · 0.45 kW</span>
                            <strong>$5.200 USD</strong>
                        </div>
                    </div>

                    <div class="res-option-card" id="cardT4_chiller" onclick="selectRadioClima('chiller')">
                        <div class="res-option-header">
                            <span class="res-option-title">Chiller de Precisión Circuito Cerrado</span>
                            <span class="res-option-badge">Complejo</span>
                        </div>
                        <div class="res-option-desc">
                            Refrigeración líquida para centros de datos. Consume 1.5 kW y demanda bombas presurizadas con repuestos importados imposibles de mantener en cumbre.
                        </div>
                        <div class="res-option-meta">
                            <span>⏱️ 6 días · 1.5 kW</span>
                            <strong>$13.500 USD</strong>
                        </div>
                    </div>
                </div>

                <!-- SELECTOR 5: RESPALDO ENERGÉTICO 8 HORAS CONTINUAS -->
                <div class="selectors-section-title">
                    <span>5️⃣</span> Dimensión Continuidad &amp; Ciclo de Vida (7D): Respaldo Eléctrico 8 Horas Nocturnas
                </div>
                <div class="resource-cards-grid-4">
                    <div class="res-option-card" id="cardT5_diesel" onclick="selectRadioEnergy('diesel')">
                        <div class="res-option-header">
                            <span class="res-option-title">Motogenerador Diésel 15 kVA</span>
                            <span class="res-option-badge" style="background:#fee2e2;color:#991b1b;">Inviable 7D</span>
                        </div>
                        <div class="res-option-desc">
                            Planta automática con tanque 200L. Inviable en ciclo de vida: el flete de combustible por cerro cuesta $16.800 USD/año y en lluvias el paso se corta.
                        </div>
                        <div class="res-option-meta">
                            <span>⛽ OPEX +$16.8k/año</span>
                            <strong>$7.800 USD</strong>
                        </div>
                    </div>

                    <div class="res-option-card" id="cardT5_solar_basic" onclick="selectRadioEnergy('solar_basic')">
                        <div class="res-option-header">
                            <span class="res-option-title">Solar 12 kWp + 4 Baterías (20 kWh)</span>
                            <span class="res-option-badge" style="background:#fee2e2;color:#991b1b;">Apagón a las 2 AM</span>
                        </div>
                        <div class="res-option-desc">
                            Autonomía real: solo 4.5 horas para la carga total de 3.45 kW. La radiobase se apaga a mitad de la noche incumpliendo el contrato de conectividad.
                        </div>
                        <div class="res-option-meta">
                            <span>🔋 4.5 Horas · 20 kWh</span>
                            <strong>$12.500 USD</strong>
                        </div>
                    </div>

                    <div class="res-option-card selected opt-emerald" id="cardT5_solar_opt" onclick="selectRadioEnergy('solar_opt')">
                        <div class="res-option-header">
                            <span class="res-option-title">Híbrido Solar 18 kWp + 7 LiFePO4 (35 kWh)</span>
                            <span class="res-option-badge" style="background:#d1fae5;color:#065f46;">⭐ Óptimo</span>
                        </div>
                        <div class="res-option-desc">
                            28 kWh útiles (80% DoD). Con carga optimizada (3.0 kW RF + 0.45 kW clima = 3.45 kW), entrega 8.1 horas continuas de transmisión ininterrumpida.
                        </div>
                        <div class="res-option-meta">
                            <span>🔋 8.1 Horas · 35 kWh</span>
                            <strong>$17.900 USD</strong>
                        </div>
                    </div>

                    <div class="res-option-card" id="cardT5_solar_macro" onclick="selectRadioEnergy('solar_macro')">
                        <div class="res-option-header">
                            <span class="res-option-title">Micro-Red Solar 30 kWp + 14 LiFePO4 (70 kWh)</span>
                            <span class="res-option-badge" style="background:#fee2e2;color:#991b1b;">Sobrediseño</span>
                        </div>
                        <div class="res-option-desc">
                            Más de 16 horas de autonomía, pero su costo de $34.000 USD eleva el presupuesto total a más de $78.000 USD, superando con creces el techo contractual.
                        </div>
                        <div class="res-option-meta">
                            <span>🔋 16.5 Horas · 70 kWh</span>
                            <strong>$34.000 USD</strong>
                        </div>
                    </div>
                </div>

                <!-- TELEMETRÍA EN VIVO TELECOM -->
                <div class="telemetry-dashboard">
                    <div style="font-size:13px;font-weight:800;color:var(--navy-primary);margin-bottom:12px;display:flex;align-items:center;gap:8px;">
                        <span>📡</span> Telemetría Pericial en Tiempo Real: Restricciones de Sitio Remoto
                    </div>
                    <div class="telemetry-kpis">
                        <div class="tel-kpi-card">
                            <div class="tel-kpi-title">Autonomía Nocturna</div>
                            <div class="tel-kpi-val" id="telRadioBackup">8.1 Horas</div>
                            <div class="tel-kpi-status status-ok" id="telRadioBackupStatus">≥ 8.0h Cumple</div>
                        </div>
                        <div class="tel-kpi-card">
                            <div class="tel-kpi-title">Pico en Campamento</div>
                            <div class="tel-kpi-val" id="telRadioWorkers">7 Personas</div>
                            <div class="tel-kpi-status status-ok" id="telRadioWorkersStatus">≤ 12 pers. Cumple</div>
                        </div>
                        <div class="tel-kpi-card">
                            <div class="tel-kpi-title">Desbalance Fases CEN 200</div>
                            <div class="tel-kpi-val" id="telRadioDesbalance">0.0%</div>
                            <div class="tel-kpi-status status-ok" id="telRadioDesbalanceStatus">0% Cumple</div>
                        </div>
                        <div class="tel-kpi-card">
                            <div class="tel-kpi-title">Presupuesto Programado</div>
                            <div class="tel-kpi-val" id="telRadioCost">$62.000</div>
                            <div class="tel-kpi-status status-ok" id="telRadioCostStatus">Bajo Techo $65k</div>
                        </div>
                        <div class="tel-kpi-card">
                            <div class="tel-kpi-title">Plazo Total Ruta Crítica</div>
                            <div class="tel-kpi-val" id="telRadioDays">42 Días</div>
                            <div class="tel-kpi-status status-ok" id="telRadioDaysStatus">≤ 56d (8 sem)</div>
                        </div>
                    </div>
                </div>

                <!-- REJILLA TEMPORAL Y TARJETAS DE EJECUCIÓN (7 TARJETAS) -->
                <div class="cpm-rack">
                    <div style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:10px;margin-bottom:14px;">
                        <div>
                            <h3 style="font-size:15px;font-weight:800;color:var(--navy-primary);margin:0;">
                                ⏱️ Rejilla Temporal y Programación de Actividades Telecom (Dimensión 4D)
                            </h3>
                            <p style="font-size:12px;color:var(--text-muted);margin:2px 0 0;">
                                Asigne las 7 actividades a las 5 fases. Supervise que las cuadrillas simultáneas en una fase no excedan las <strong>12 personas de campamento</strong>.
                            </p>
                        </div>
                    </div>

                    <!-- POOL DE 7 TARJETAS TELECOM -->
                    <div class="cpm-cards-pool-7" id="radioTasksPool">
                        <!-- Se inyectan dinámicamente -->
                    </div>

                    <!-- RESUMEN DE LAS 5 FASES -->
                    <div class="phase-summary-grid" id="radioPhasesSummary">
                        <!-- Resumen dinámico -->
                    </div>

                    <!-- GANTT 4D EN TIEMPO REAL (SVG) -->
                    <div class="gantt-section">
                        <div class="gantt-header">
                            <div class="gantt-title">
                                <span>📊</span> Diagrama de Gantt 4D Dinámico (Simulación Telecom)
                            </div>
                            <div class="gantt-legend">
                                <div class="gantt-legend-item">
                                    <div class="legend-dot" style="background:#f59e0b;"></div>
                                    <span>Ruta Crítica (RC)</span>
                                </div>
                                <div class="gantt-legend-item">
                                    <div class="legend-dot" style="background:#0ea5e9;"></div>
                                    <span>Actividad Paralela</span>
                                </div>
                                <div class="gantt-legend-item">
                                    <div class="legend-dot" style="background:#ef4444;"></div>
                                    <span>Límite Lluvias (56d / 8 Sem)</span>
                                </div>
                            </div>
                        </div>
                        <div class="gantt-svg-scroll">
                            <div id="ganttSvgRadioContainer"></div>
                        </div>
                    </div>

                    <!-- DIMENSIÓN 5D: FLUJO DE CAJA Y CURVA S -->
                    <div class="cashflow-section">
                        <div class="cashflow-header">
                            <div class="cashflow-title">
                                <span>📈</span> Dimensión 5D: Flujo de Caja y Curva S de Desembolso Telecom
                            </div>
                            <div style="font-size:12px;color:var(--text-light);font-family:var(--font-mono);">
                                Techo CapEx: $65.000 USD
                            </div>
                        </div>
                        <div class="cashflow-kpis">
                            <div class="cf-kpi-pill">
                                <div class="cf-kpi-lbl">Presupuesto Techo</div>
                                <div class="cf-kpi-num">$65.000 USD</div>
                            </div>
                            <div class="cf-kpi-pill">
                                <div class="cf-kpi-lbl">Inversión Programada</div>
                                <div class="cf-kpi-num" id="cfRadioTotal">$62.000 USD</div>
                            </div>
                            <div class="cf-kpi-pill">
                                <div class="cf-kpi-lbl">Desembolso Semanal Prom.</div>
                                <div class="cf-kpi-num" id="cfRadioAvg">$10.333 /sem</div>
                            </div>
                            <div class="cf-kpi-pill">
                                <div class="cf-kpi-lbl">Pico Máximo Semanal</div>
                                <div class="cf-kpi-num" id="cfRadioPeak">$17.900 USD</div>
                            </div>
                            <div class="cf-kpi-pill">
                                <div class="cf-kpi-lbl">Margen de Contingencia</div>
                                <div class="cf-kpi-num" id="cfRadioContingency" style="color:#059669;">+$3.000 USD</div>
                            </div>
                        </div>
                        <div class="scurve-svg-box">
                            <div id="scurveSvgRadioContainer"></div>
                        </div>
                    </div>
                </div>

                <!-- BOTÓN DE ACCIÓN: EVALUAR ESTRATEGIA PERICIAL -->
                <div style="text-align:center;margin:30px 0 10px;">
                    <button type="button" class="btn-stepper-nav" id="evalRadioBtn" onclick="evaluateRadioPlan()" style="background:linear-gradient(135deg, #059669 0%, #047857 100%);color:#ffffff;font-size:15px;font-weight:800;padding:14px 32px;border-radius:12px;border:none;box-shadow:0 6px 16px rgba(5, 150, 105, 0.3);cursor:pointer;">
                        <span>📋</span> Evaluar Estrategia Pericial de Telecomunicaciones
                    </button>
                </div>

                <!-- TARJETA DE VEREDICTO PERICIAL VIGESIMAL (0-20 PTS) -->
                <div class="eval-verdict-card" id="radioVerdictCard" style="border: 2px solid #cbd5e1; background: #ffffff;">
                    <div class="score-display-box">
                        <div>
                            <span style="font-size:12px;font-weight:700;text-transform:uppercase;color:var(--text-light);letter-spacing:0.05em;">
                                Calificación Pericial de Grado UGMA
                            </span>
                            <div class="score-number" id="evalScoreNum" style="color: #059669;">20 / 20</div>
                            <span id="evalScoreLabel" style="font-size:14px;font-weight:800;color:#065f46;">
                                EXCELENCIA ACADÉMICA Y GERENCIAL (Aprobado con Mención)
                            </span>
                        </div>
                        <div style="text-align:right;">
                            <span style="font-size:11px;color:var(--text-light);display:block;">Cohorte 2026 &middot; Diplomado Gerencia de Obras</span>
                            <span style="font-size:12px;font-weight:800;color:var(--navy-primary);">Cátedra de Planificación &amp; Control</span>
                        </div>
                    </div>

                    <div style="font-size:13px;font-weight:800;color:var(--navy-primary);margin-bottom:8px;">
                        Auditoría Forense de Decisiones Interdimensionales:
                    </div>
                    <div class="criteria-check-list" id="evalCriteriaList">
                        <!-- Lista de criterios evaluados -->
                    </div>

                    <div id="evalFeedbackBox" style="font-size:13px;line-height:1.65;color:#334155;background:#f8fafc;border-radius:10px;padding:16px;border:1px solid #e2e8f0;margin-top:14px;">
                        <!-- Retroalimentación técnica -->
                    </div>

                    <div style="margin-top:18px;text-align:right;">
                        <button type="button" class="btn-stepper-nav" onclick="reopenRadioEvaluation()" style="background:#f1f5f9;color:#334155;border:1px solid #cbd5e1;padding:8px 16px;border-radius:8px;font-size:12px;font-weight:700;cursor:pointer;">
                            <span>✏️</span> Modificar Decisiones y Reintentar Simulación
                        </button>
                    </div>
                </div>
            </div>
        </article>

        <!-- FOOTER INSTITUCIONAL -->
        <footer class="page-footer">
            <div>
                <strong>Universidad Gran Mariscal de Ayacucho &middot; Vicerrectorado de Investigación y Postgrado</strong><br>
                Diplomado en Gerencia de Obras &amp; Control de Proyectos &middot; Cohorte 2026 &middot; Ciudad Guayana, Venezuela.
            </div>
            <div class="footer-links">
                <a href="/ugma-gerencia-obras">Portal Diplomado</a>
                <span>&bull;</span>
                <a href="/ugma-gerencia-obras/unidad-3-construcciones-sostenibles">Unidad 3: Construcciones Sostenibles</a>
                <span>&bull;</span>
                <a href="/ugma-gerencia-obras/admin.html">Panel Docente</a>
            </div>
        </footer>

    </div>

    <!-- SCRIPT DE NAVEGACIÓN Y SIMULADOR HVAC 16 TR -->
    <script>
        let currentStep = 1;
        const totalSteps = 9;
        let isAllVisible = false;

        function updateStepperUI() {
            for (let i = 1; i <= totalSteps; i++) {
                const btn = document.getElementById(`stepBtn-${i}`);
                const sec = document.getElementById(`moduleSection-${i}`);
                if (btn) {
                    if (i === currentStep) btn.classList.add('active');
                    else btn.classList.remove('active');
                }
                if (sec) {
                    if (i === currentStep || isAllVisible) sec.classList.add('active-module');
                    else sec.classList.remove('active-module');
                }
            }
            const barFill = document.getElementById('stepperProgressBar');
            if (barFill) {
                const pct = (currentStep / totalSteps) * 100;
                barFill.style.width = `${pct}%`;
            }
        }

        function goToStep(step) {
            if (step < 1) step = 1;
            if (step > totalSteps) step = totalSteps;
            currentStep = step;
            if (isAllVisible) toggleAllModules();
            else updateStepperUI();

            const targetSec = document.getElementById(`moduleSection-${step}`);
            if (targetSec) {
                targetSec.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }

        function nextStep() {
            if (currentStep < totalSteps) goToStep(currentStep + 1);
        }

        function prevStep() {
            if (currentStep > 1) goToStep(currentStep - 1);
        }

        function toggleAllModules() {
            isAllVisible = !isAllVisible;
            const body = document.body;
            const btn = document.getElementById('viewModeToggleBtn');
            if (isAllVisible) {
                body.classList.add('all-visible');
                btn.innerHTML = '<span>📄</span> Ver por Módulos';
                for (let i = 1; i <= totalSteps; i++) {
                    const sec = document.getElementById(`moduleSection-${i}`);
                    if (sec) sec.classList.add('active-module');
                }
            } else {
                body.classList.remove('all-visible');
                btn.innerHTML = '<span>👁️</span> Ver Todo el Temario';
                updateStepperUI();
            }
        }

        // --- SIMULADOR DINÁMICO DE AUDITORÍA HVAC 16 TR ---
        function runHvacSimulation() {
            const distEl = document.getElementById('simDistSlider');
            if (!distEl) return;

            const dist = parseFloat(distEl.value) || 50;
            const hours = parseFloat(document.getElementById('simHoursSlider').value) || 12;
            const rate = parseFloat(document.getElementById('simRateSlider').value) || 0.10;
            const gaugeEl = document.getElementById('simGaugeSelect');
            const gauge = gaugeEl ? gaugeEl.value : '8';
            const solarEl = document.getElementById('simSolarToggle');
            const hasSolar = solarEl ? solarEl.checked : false;

            document.getElementById('simDistVal').innerText = `${dist} metros`;
            document.getElementById('simHoursVal').innerText = `${hours} horas/día`;
            document.getElementById('simRateVal').innerText = `$${rate.toFixed(2)} / kWh`;

            // Caída de tensión Caso A: 3x #8 AWG Cu (R = 2.55 ohm/km = 0.00255 ohm/m), 14.61 A, 208V, FP=0.95
            // dV = sqrt(3) * I * L * (R * cos + X * sin)
            const dV_A = Math.sqrt(3) * 14.61 * dist * (0.00255 * 0.95 + 0.00016 * 0.312);
            const pct_dV_A = (dV_A / 208) * 100;

            // Caída de tensión Caso B según calibre seleccionado
            // #8 AWG: R = 2.55 ohm/km (0.00255 ohm/m)
            // #4 AWG: R = 1.01 ohm/km (0.00101 ohm/m)
            const r_B = gauge === '4' ? 0.00101 : 0.00255;
            const dV_B = 2 * 34.20 * dist * (r_B * 0.84 + 0.00016 * 0.542);
            const pct_dV_B = (dV_B / 220) * 100;

            // Pérdidas Joule totales (2x5 TR + 2x3 TR)
            // Caso A: 222 W a 50m proporcional a dist
            const joule_A = Math.round(222 * (dist / 50));
            // Caso B: si #8 AWG -> 1215 W a 50m; si #4 AWG -> 661 W a 50m
            const baseJouleB = gauge === '4' ? 661 : 1215;
            const joule_B = Math.round(baseJouleB * (dist / 50));

            // Actualizar KPIs Caso A
            const kpiDva = document.getElementById('kpiDva');
            kpiDva.innerText = `${pct_dV_A.toFixed(2)}% ΔV`;
            document.getElementById('kpiJouleA').innerText = `Pérdidas Joule: ${joule_A} W`;

            // Actualizar KPIs Caso B
            const kpiDvb = document.getElementById('kpiDvb');
            const kpiDescB = document.getElementById('kpiDescB');
            kpiDvb.innerText = `${pct_dV_B.toFixed(2)}% ΔV`;

            if (pct_dV_B > 3.0) {
                kpiDvb.style.color = '#dc2626';
                kpiDescB.innerHTML = `Conductor #${gauge} AWG (<span class="badge" style="background:#fee2e2; color:#dc2626; padding: 2px 6px;">VIOLA CEN 200 &gt; 3%</span>)`;
            } else {
                kpiDvb.style.color = gauge === '4' ? '#0284c7' : '#047857';
                kpiDescB.innerHTML = `Conductor #${gauge} AWG (<span class="badge ${gauge === '4' ? 'badge-blue' : 'badge-emerald'}" style="padding: 2px 6px;">${gauge === '4' ? 'CUMPLE CON SOBRECOBRE' : 'CUMPLE CEN 200'}</span>)`;
            }

            document.getElementById('kpiJouleB').innerText = `Pérdidas Joule: ${joule_B} W (Conductor #${gauge} AWG)`;

            // Consumo Anual HVAC:
            // Caso A = 8.60 kW promedio * hours * 26 días * 12 meses
            const kwh_A_raw = 8.60 * hours * 26 * 12;
            // Caso B = 15.17 kW promedio * hours * 26 días * 12 meses
            const kwh_B_raw = 15.17 * hours * 26 * 12;

            // Generación solar anual (24.51 kWp * 5.1 HSP * 0.80 PR * 26 días * 12 meses = ~31.200 kWh/año)
            const solarAnnualKwh = hasSolar ? Math.round(24.51 * 5.1 * 0.80 * 26 * 12) : 0;
            const netKwh_A = Math.max(0, kwh_A_raw - solarAnnualKwh);
            const netKwh_B = Math.max(0, kwh_B_raw - solarAnnualKwh);

            const bill_A = netKwh_A * rate;
            const bill_B = netKwh_B * rate;
            const rawBill_A = kwh_A_raw * rate;
            const rawBill_B = kwh_B_raw * rate;

            // Ahorro anual entre A y B (más el efecto solar en la factura neta)
            const savings = bill_B - bill_A;
            const totalSavingsWithSolar = hasSolar ? ((rawBill_B - bill_A)) : savings;

            const extraCapEx = hasSolar ? (2600 + 14500) : 2600; // Inversión solar adicional
            const paybackYears = totalSavingsWithSolar > 0 ? (extraCapEx / totalSavingsWithSolar) : 0;
            const paybackMonths = Math.round(paybackYears * 12 * 10) / 10;

            // Costo de ciclo de vida (LCC a 15 años, r = 8%)
            const r = 0.08;
            let pv_A = 0;
            let pv_B = 0;
            for (let t = 1; t <= 15; t++) {
                pv_A += (bill_A + (hasSolar ? 650 : 450)) / Math.pow(1 + r, t);
                pv_B += (rawBill_B + 850) / Math.pow(1 + r, t);
            }
            const lcc_A = (hasSolar ? (10600 + 14500) : 10600) + pv_A;
            const lcc_B = 8000 + pv_B;
            const netLccSavings = Math.round(lcc_B - lcc_A);

            document.getElementById('kpiSavings').innerText = `$${Math.round(totalSavingsWithSolar).toLocaleString('es-VE')} USD/año`;
            document.getElementById('kpiPaybackDesc').innerText = `Retorno de inversión: ${paybackMonths} meses (${paybackYears.toFixed(2)} años)`;
            document.getElementById('kpiLcc15').innerText = `Ahorro a 15 Años: $${netLccSavings.toLocaleString('es-VE')} USD`;

            const solarNoteEl = document.getElementById('kpiSolarNote');
            if (hasSolar) {
                solarNoteEl.innerHTML = `☀️ <strong>Solar 24.5 kWp activo:</strong> Genera ${solarAnnualKwh.toLocaleString('es-VE')} kWh/año &bull; Net-Zero HVAC: <strong>${((solarAnnualKwh / kwh_A_raw) * 100).toFixed(0)}% cubierto</strong>`;
            } else {
                solarNoteEl.innerText = 'Sin acople solar diurno (Solo red eléctrica SEN)';
            }

            // Dictamen Técnico Dinámico
            const verdictEl = document.getElementById('simVerdictBox');
            let verdictHtml = '';

            if (pct_dV_B > 3.0) {
                verdictHtml += `<strong>🚨 Dictamen Técnico de Inspección Pericial:</strong> A ${dist} metros de alimentador, el conductor instalado #${gauge} AWG en el Caso Monofásico <strong>VIOLA EL CÓDIGO CEN 200 con una caída de tensión de ${pct_dV_B.toFixed(2)}% (&gt; 3.0%)</strong>. Esto ocasiona sub-tensión en bornes del compresor, paradas por térmico y quema prematura del devanado. Además, el desbalance de fases del <strong>25.55%</strong> sobrecalienta destructivamente el transformador principal.<br><br>`;
            } else if (gauge === '4') {
                verdictHtml += `<strong>⚠️ Dictamen Técnico: Conductor #4 AWG Mitiga Caída pero No Soluciona el Desbalance:</strong> Aunque el cable pesado #4 AWG reduce la caída a ${pct_dV_B.toFixed(2)}%, requiere 4 veces más cobre por fase, disipa ${joule_B}W en calor continuo y <strong>mantiene el desbalance crítico del 25.55% en el transformador</strong> con derating forzoso del 25%.<br><br>`;
            } else {
                verdictHtml += `<strong>✅ Verificación de Conductores:</strong> La acometida trifásica opera en rango normativo con apenas ${pct_dV_A.toFixed(2)}% de caída y disipación de calor despreciable (${joule_A}W).<br><br>`;
            }

            if (hasSolar) {
                verdictHtml += `☀️ <strong>Beneficio de la Integración Solar 24.5 kWp:</strong> El arreglo fotovoltaico de 42 paneles TOPCon cubre ${solarAnnualKwh.toLocaleString('es-VE')} kWh/año, logrando una operación prácticamente <strong>Net-Zero Carbon</strong> durante las horas diurnas pico y protegiendo la faena operativa contra fluctuaciones y racionamientos del sistema eléctrico.`;
            } else {
                verdictHtml += `💰 <strong>Beneficio Económico del Caso A:</strong> La adopción de tecnología Trifásica Inverter ahorra <strong>$${Math.round(totalSavingsWithSolar).toLocaleString('es-VE')} USD/año</strong> en factura eléctrica, amortizando la diferencia de inversión en solo <strong>${paybackMonths} meses</strong> y acumulando <strong>$${netLccSavings.toLocaleString('es-VE')} USD</strong> a los 15 años de vida útil.`;
            }

            verdictEl.innerHTML = verdictHtml;
        }

        function generateHvacCalculationMemory() {
            const dist = document.getElementById('simDistSlider').value;
            const hours = document.getElementById('simHoursSlider').value;
            const rate = document.getElementById('simRateSlider').value;
            const gauge = document.getElementById('simGaugeSelect').value;
            const hasSolar = document.getElementById('simSolarToggle').checked;
            const kpiDva = document.getElementById('kpiDva').innerText;
            const kpiDvb = document.getElementById('kpiDvb').innerText;
            const savings = document.getElementById('kpiSavings').innerText;
            const payback = document.getElementById('kpiPaybackDesc').innerText;
            const lcc15 = document.getElementById('kpiLcc15').innerText;

            const textReport = `====================================================================
🏛️ UNIVERSIDAD GRAN MARISCAL DE AYACUCHO (UGMA)
VICERRECTORADO DE INVESTIGACIÓN Y POSTGRADO · COHORTE 2026
MEMORIA DE CÁLCULO Y DICTAMEN PERICIAL TERMO-ELÉCTRICO (16 TR HVAC)
Cátedra: ConTech, Eficiencia Energética y Gerencia de Obras
Profesor Titular: Ing. Héctor Mota Zorrilla
====================================================================
FECHA DE EMISIÓN: Sábado 31 de Octubre de 2026
PROYECTO AUDITADO: Edificación Comercial-Institucional (Bancada de 16 TR)
UBICACIÓN: Ciudad Guayana, Estado Bolívar, Venezuela

PARÁMETROS DE DISEÑO AUDITADOS:
• Carga Frigorífica Total: 16 Toneladas de Refrigeración (2x 5 TR + 2x 3 TR)
• Longitud de Alimentadores a Azotea Técnica: ${dist} metros
• Régimen Operativo: ${hours} horas/día · 26 días/mes (312 h/mes)
• Tarifa Eléctrica Aplicada: $${rate} USD / kWh
• Conductor Evaluado en Caso Monofásico: #${gauge} AWG Cu
• Integración Solar Fotovoltaica (24.5 kWp): ${hasSolar ? 'ACTIVADA (Generación Diurna Net-Zero)' : 'DESACTIVADA'}

RESULTADOS COMPARATIVOS DE AUDITORÍA:
--------------------------------------------------------------------
1. CASO A (TRIFÁSICO 208V INVERTER · INGENIERÍA SUGERIDA):
   - Corriente Nominal Marcha (5 TR): 14.61 A (MCA = 18.26 A) -> Conductor #10 / #8 AWG Cu
   - Corriente de Arranque LRA: <= 16.07 A (Soft-start modulado continuo)
   - Caída de Tensión a ${dist}m: ${kpiDva} (CUMPLE CEN 200 < 3.0%)
   - Desbalance de Fases NEMA MG-1: 0.00% (Simetría vectorial simétrica)
   - Corriente de Neutro: I_N = 0.0 A
   - Factor de Potencia: 0.95 (Cero inyección de reactivos parásitos)

2. CASO B (MONOFÁSICO 220V ON/OFF · MALA PRAXIS EJECUTADA EN OBRA):
   - Corriente Nominal Marcha (5 TR): 34.20 A (MCA = 42.75 A) -> Requiere cable grueso #4 AWG
   - Corriente de Arranque LRA: 188.10 A (Impacto severo Direct-On-Line)
   - Caída de Tensión con conductor #${gauge} AWG: ${kpiDvb}
   - Desbalance de Fases NEMA MG-1: 25.55% (Alerta destructiva > 5.0%)
   - Afectación al Transformador: Derating forzoso del 25% de kVA nominales
   - Factor de Potencia: 0.84 (13.0 kVAR reactivos inductivos no compensados)

EVALUACIÓN ECONÓMICA Y RETORNO DE INVERSIÓN:
--------------------------------------------------------------------
• Ahorro Operativo Anual Calculado: ${savings}
• Período de Recuperación (Payback): ${payback}
• ${lcc15}
• Generación Solar Anual: ${hasSolar ? '31.200 kWh/año cubiertos in-situ' : 'N/A'}

DICTAMEN PERICIAL VINCULANTE (ING. HÉCTOR MOTA ZORRILLA):
Se rechaza categóricamente la sustitución monofásica efectuada por el contratista.
La supuesta economía inicial de compra generó una infracción flagrante a la norma
CEN FONDONORMA 200 (caída de tensión > 3%), sobrecalentamiento crítico en canalizaciones
por Efecto Joule (> 1.2 kW de calor en techo) y un desbalance de fases del 25.55% que
compromete la vida útil del transformador de potencia y equipos vecinos. Se ordena la
reversión hacia tecnología Trifásica Inverter o la imposición de calibres #4 AWG más
compensación activa de reactivos.

Documento pericial emitido con rigor académico y validez para evaluación de grado UGMA.
====================================================================`;

            navigator.clipboard.writeText(textReport).then(() => {
                alert('¡Memoria de Cálculo y Dictamen Pericial HVAC (16 TR) copiado al portapapeles con éxito!\n\nPuede pegarlo directamente en su informe pericial, documento Word o compartirlo.');
            }).catch(() => {
                alert('Memoria generada exitosamente. Copie el texto desde la consola o reporte pericial.');
            });
        }

        
                // =================================================================
        // ESTADO Y LÓGICA INTERACTIVA: MÓDULO 8 (TALLER ALMACÉN V2)
        // =================================================================
        const almacenState = {
            civil: 'reforz',
            techo: 'alum',
            hvac: 'tri_inv',
            energy: 'r3',
            phases: { A1: 1, A2: 2, A3: 2, A4: 3, A5: 3, A6: 4, A7: 5 }
        };

        function selectAlmacenCivil(opt) {
            almacenState.civil = opt;
            document.querySelectorAll('#cardA1_min, #cardA1_std, #cardA1_reforz, #cardA1_doble')
                .forEach(c => c.classList.remove('selected', 'opt-blue', 'opt-emerald'));
            const sel = document.getElementById('cardA1_' + opt);
            if (sel) sel.classList.add('selected', opt === 'reforz' ? 'opt-emerald' : 'opt-blue');
            runAlmacenSimulation();
        }

        function selectAlmacenTecho(opt) {
            almacenState.techo = opt;
            document.querySelectorAll('#cardA2_black, #cardA2_white, #cardA2_alum, #cardA2_pir')
                .forEach(c => c.classList.remove('selected', 'opt-blue', 'opt-emerald'));
            const sel = document.getElementById('cardA2_' + opt);
            if (sel) sel.classList.add('selected', opt === 'alum' ? 'opt-emerald' : 'opt-blue');
            runAlmacenSimulation();
        }

        function selectAlmacenHvac(opt) {
            almacenState.hvac = opt;
            document.querySelectorAll('#cardA3_mono8, #cardA3_mono4, #cardA3_tri_onoff, #cardA3_tri_inv')
                .forEach(c => c.classList.remove('selected', 'opt-blue', 'opt-emerald'));
            const sel = document.getElementById('cardA3_' + opt);
            if (sel) sel.classList.add('selected', opt === 'tri_inv' ? 'opt-emerald' : 'opt-blue');
            runAlmacenSimulation();
        }

        function selectAlmacenEnergy(opt) {
            almacenState.energy = opt;
            document.querySelectorAll('#cardA4_r1, #cardA4_r2, #cardA4_r3, #cardA4_r4')
                .forEach(c => c.classList.remove('selected', 'opt-blue', 'opt-emerald'));
            const sel = document.getElementById('cardA4_' + opt);
            if (sel) sel.classList.add('selected', opt === 'r3' ? 'opt-emerald' : 'opt-blue');
            runAlmacenSimulation();
        }

        function setAlmacenPhase(actId, phaseNum) {
            almacenState.phases[actId] = parseInt(phaseNum);
            runAlmacenSimulation();
        }

        function runAlmacenSimulation() {
            // Calibración paramétrica de decisiones
            const civilMap = {
                min: { name: 'Cuadrilla Mínima', days: 16, cost: 5200, workers: 4 },
                std: { name: 'Cuadrilla Estándar', days: 12, cost: 7000, workers: 6 },
                reforz: { name: 'Cuadrilla Reforzada', days: 8, cost: 8200, workers: 8 },
                doble: { name: 'Doble Cuadrilla Masiva', days: 5, cost: 12500, workers: 12 }
            };
            const techoMap = {
                black: { name: 'Manto Asfáltico Negro Tradicional', days: 8, cost: 2800, workers: 4, thermalKW: 16.5, temp: 82 },
                white: { name: 'Pintura Elastomérica Blanca', days: 6, cost: 3800, workers: 4, thermalKW: 13.5, temp: 64 },
                alum: { name: 'Manto Aluminizado + Lana de Roca 50mm', days: 6, cost: 4800, workers: 4, thermalKW: 8.0, temp: 54 },
                pir: { name: 'Sándwich Termoacústico PIR 80mm', days: 5, cost: 11500, workers: 4, thermalKW: 6.5, temp: 42 }
            };
            const hvacMap = {
                mono8: { name: 'Monofásico On/Off (#8 AWG)', days: 5, cost: 6800, workers: 3, desbal: 25.55, vdrop: 3.8, powerKW: 14.8, cenOk: false },
                mono4: { name: 'Monofásico (#4 AWG Sobredim.)', days: 5, cost: 8400, workers: 3, desbal: 25.55, vdrop: 1.9, powerKW: 12.2, cenOk: false },
                tri_onoff: { name: 'Trifásico On/Off 208V', days: 5, cost: 7800, workers: 3, desbal: 0.0, vdrop: 0.9, powerKW: 11.5, cenOk: true },
                tri_inv: { name: 'Trifásico Inverter VFD 208V CEN 200', days: 5, cost: 9200, workers: 3, desbal: 0.0, vdrop: 0.4, powerKW: 8.0, cenOk: true }
            };
            const energyMap = {
                r1: { name: 'Solar Básico 10 kWp + 15 kWh Litio', days: 6, cost: 8500, workers: 4, kwh: 15 },
                r2: { name: 'Planta Diésel Insonorizada 25 kVA', days: 4, cost: 9800, workers: 4, kwh: 999 },
                r3: { name: 'Híbrido Solar Óptimo 20 kWp + 40 kWh Litio', days: 8, cost: 14500, workers: 4, kwh: 40 },
                r4: { name: 'Macro-Banco Solar 35 kWp + 90 kWh LiFePO4', days: 12, cost: 28000, workers: 6, kwh: 90 }
            };

            const selCiv = civilMap[almacenState.civil] || civilMap.reforz;
            const selTec = techoMap[almacenState.techo] || techoMap.alum;
            const selHva = hvacMap[almacenState.hvac] || hvacMap.tri_inv;
            const selEne = energyMap[almacenState.energy] || energyMap.r3;

            // Potencia activa requerida (kW) según envolvente + clima
            let actualPowerKW = selHva.powerKW;
            if (selTec.thermalKW > 10) actualPowerKW += (selTec.thermalKW - 8.0) * 0.4;

            // Autonomía en horas
            let backupHours = 0;
            if (almacenState.energy === 'r2') {
                backupHours = 12.0; // Diésel con tanque lleno
            } else {
                const usableKWh = selEne.kwh * 0.8; // 80% DoD
                backupHours = +(usableKWh / actualPowerKW).toFixed(1);
            }

            // Las 7 Actividades de Almacén
            const activities = [
                { id: 'A1', title: 'Obras Civiles y Montaje Racks', days: selCiv.days, cost: selCiv.cost, workers: selCiv.workers },
                { id: 'A2', title: 'Impermeabilización y Cubierta Térmica', days: selTec.days, cost: selTec.cost, workers: selTec.workers },
                { id: 'A3', title: 'Bandejas, Conduit y Acometida CEN 200', days: 6, cost: 2800, workers: 3 },
                { id: 'A4', title: 'Montaje Evaporadoras/Condensadoras HVAC', days: selHva.days, cost: selHva.cost, workers: selHva.workers },
                { id: 'A5', title: 'Instalación Estructura y Arreglo Solar', days: selEne.days, cost: selEne.cost, workers: selEne.workers },
                { id: 'A6', title: 'Interconexión Inversores, Baterías & Tablero', days: 4, cost: 1900, workers: 3 },
                { id: 'A7', title: 'Comisionamiento, Balanceo NEMA & Pruebas', days: 3, cost: 1400, workers: 2 }
            ];

            // Renderizar pool de 7 tarjetas
            const poolEl = document.getElementById('almacenTasksPool');
            if (poolEl) {
                poolEl.innerHTML = activities.map(act => {
                    const currentPhase = almacenState.phases[act.id] || 1;
                    return `
                        <div class="exec-card-item">
                            <div class="exec-card-header">
                                <span class="exec-card-code">${act.id}</span>
                                <span class="exec-card-title">${act.title}</span>
                            </div>
                            <div class="exec-card-badges">
                                <span class="exec-badge-pill">⏱️ ${act.days}d</span>
                                <span class="exec-badge-pill">👥 ${act.workers}p</span>
                                <span class="exec-badge-pill">💵 $${act.cost.toLocaleString('en-US')}</span>
                            </div>
                            <div class="exec-phase-selector">
                                <span class="exec-phase-label">Asignar Fase:</span>
                                <div class="phase-btn-group">
                                    ${[1, 2, 3, 4, 5].map(p => `
                                        <button type="button" class="phase-btn ${p === currentPhase ? 'active' : ''}" onclick="setAlmacenPhase('${act.id}', ${p})">${p}</button>
                                    `).join('')}
                                </div>
                            </div>
                        </div>
                    `;
                }).join('');
            }

            // Cálculo secuencial de Fases y Ruta Crítica
            const phaseSummary = {
                1: { title: 'Fase 1: Preparación & Civil', days: 0, workers: 0, tasks: [], start: 0, finish: 0 },
                2: { title: 'Fase 2: Envolvente & Ductería', days: 0, workers: 0, tasks: [], start: 0, finish: 0 },
                3: { title: 'Fase 3: Electromecánica & HVAC', days: 0, workers: 0, tasks: [], start: 0, finish: 0 },
                4: { title: 'Fase 4: Energía & Respaldo', days: 0, workers: 0, tasks: [], start: 0, finish: 0 },
                5: { title: 'Fase 5: Pruebas & Cierre CDE', days: 0, workers: 0, tasks: [], start: 0, finish: 0 }
            };

            activities.forEach(act => {
                const p = almacenState.phases[act.id] || 1;
                phaseSummary[p].tasks.push(act);
                if (act.days > phaseSummary[p].days) phaseSummary[p].days = act.days;
                phaseSummary[p].workers += act.workers;
            });

            let currentTimelineDay = 0;
            let totalProjectDays = 0;
            for (let p = 1; p <= 5; p++) {
                phaseSummary[p].start = currentTimelineDay;
                phaseSummary[p].finish = currentTimelineDay + phaseSummary[p].days;
                currentTimelineDay = phaseSummary[p].finish;
            }
            totalProjectDays = currentTimelineDay;

            // Calcular Ruta Crítica por tarea
            activities.forEach(act => {
                const p = almacenState.phases[act.id] || 1;
                act.start = phaseSummary[p].start;
                act.finish = act.start + act.days;
                act.isCritical = (act.days === phaseSummary[p].days);
            });

            // Costo total programado
            const totalScheduledCost = activities.reduce((acc, a) => acc + a.cost, 0);

            // Renderizar resumen de Fases
            const summaryEl = document.getElementById('almacenPhasesSummary');
            if (summaryEl) {
                summaryEl.innerHTML = Object.keys(phaseSummary).map(pKey => {
                    const p = phaseSummary[pKey];
                    return `
                        <div class="phase-col-card">
                            <div class="phase-col-title">
                                <span>Fase ${pKey}</span>
                                <span style="font-size:11px;color:#0284c7;font-family:var(--font-mono);">${p.days}d</span>
                            </div>
                            <div class="phase-col-meta">
                                ⏱️ Días ${p.start + 1}-${p.finish} &middot; 👥 ${p.workers} trab.
                            </div>
                            <div class="phase-col-tasks">
                                ${p.tasks.length === 0 ? '<span style="font-size:10.5px;color:#94a3b8;">Sin actividades</span>' : 
                                    p.tasks.map(t => `
                                        <div class="task-micro-tag ${t.isCritical ? 'critical' : ''}">
                                            <span>${t.id} (${t.days}d)</span>
                                            <span>${t.isCritical ? '⚡ RC' : ''}</span>
                                        </div>
                                    `).join('')
                                }
                            </div>
                        </div>
                    `;
                }).join('');
            }

            // Actualizar Telemetría KPIs
            const powEl = document.getElementById('telAlmacenPower');
            const powSt = document.getElementById('telAlmacenPowerStatus');
            if (powEl && powSt) {
                powEl.textContent = actualPowerKW.toFixed(1) + ' kW';
                if (actualPowerKW <= 8.5) {
                    powSt.className = 'tel-kpi-status status-ok';
                    powSt.textContent = 'Eficiente';
                } else if (actualPowerKW <= 12.0) {
                    powSt.className = 'tel-kpi-status status-warn';
                    powSt.textContent = 'Moderado';
                } else {
                    powSt.className = 'tel-kpi-status status-danger';
                    powSt.textContent = 'Sobrecarga Térmica';
                }
            }

            const desEl = document.getElementById('telAlmacenDesbalance');
            const desSt = document.getElementById('telAlmacenDesbalanceStatus');
            if (desEl && desSt) {
                desEl.textContent = selHva.desbal.toFixed(1) + '%';
                if (selHva.desbal <= 2.0) {
                    desSt.className = 'tel-kpi-status status-ok';
                    desSt.textContent = 'CUMPLE CEN 200';
                } else {
                    desSt.className = 'tel-kpi-status status-danger';
                    desSt.textContent = 'VIOLA CEN 200';
                }
            }

            const bakEl = document.getElementById('telAlmacenBackup');
            const bakSt = document.getElementById('telAlmacenBackupStatus');
            if (bakEl && bakSt) {
                bakEl.textContent = backupHours.toFixed(1) + ' Horas';
                if (backupHours >= 4.0) {
                    bakSt.className = 'tel-kpi-status status-ok';
                    bakSt.textContent = '≥ 4.0h Cumple';
                } else {
                    bakSt.className = 'tel-kpi-status status-danger';
                    bakSt.textContent = '< 4.0h Falla';
                }
            }

            const cstEl = document.getElementById('telAlmacenCost');
            const cstSt = document.getElementById('telAlmacenCostStatus');
            if (cstEl && cstSt) {
                cstEl.textContent = '$' + totalScheduledCost.toLocaleString('en-US');
                if (totalScheduledCost <= 46000) {
                    cstSt.className = 'tel-kpi-status status-ok';
                    cstSt.textContent = 'Bajo Techo $46k';
                } else {
                    cstSt.className = 'tel-kpi-status status-danger';
                    cstSt.textContent = 'Excede Techo $46k';
                }
            }

            const dayEl = document.getElementById('telAlmacenDays');
            const daySt = document.getElementById('telAlmacenDaysStatus');
            if (dayEl && daySt) {
                dayEl.textContent = totalProjectDays + ' Días';
                if (totalProjectDays <= 30) {
                    daySt.className = 'tel-kpi-status status-ok';
                    daySt.textContent = '≤ 30d Cumple';
                } else {
                    daySt.className = 'tel-kpi-status status-danger';
                    daySt.textContent = '> 30d Atrasado';
                }
            }

            // Renderizar Gantt 4D en SVG
            renderGanttChartSvg('ganttSvgAlmacenContainer', activities, 35, 30);

            // Renderizar Flujo de Caja 5D y Curva S en SVG (Semanas 1 a 5)
            const weeklyCosts = calculateWeeklyCashflow(activities, 5, 7);
            renderSCurveSvg('scurveSvgAlmacenContainer', weeklyCosts, 46000, 5, totalScheduledCost, 'Almacen');
        }

        // =================================================================
        // ESTADO Y LÓGICA INTERACTIVA: MÓDULO 9 (EVALUACIÓN TELECOM V2)
        // =================================================================
        const radioState = {
            vialidad: 'lastrado',
            shelter: 'pir',
            torre: 'autosop',
            clima: 'mochila',
            energy: 'solar_opt',
            phases: { T1: 1, T2: 2, T3: 3, T4: 3, T5: 4, T6: 4, T7: 5 }
        };

        function selectRadioVialidad(opt) {
            radioState.vialidad = opt;
            document.querySelectorAll('#cardT1_manual, #cardT1_patrol, #cardT1_lastrado, #cardT1_pavimento')
                .forEach(c => c.classList.remove('selected', 'opt-blue', 'opt-emerald'));
            const sel = document.getElementById('cardT1_' + opt);
            if (sel) sel.classList.add('selected', opt === 'lastrado' ? 'opt-emerald' : 'opt-blue');
            runRadioSimulation();
        }

        function selectRadioShelter(opt) {
            radioState.shelter = opt;
            document.querySelectorAll('#cardT2_black, #cardT2_white, #cardT2_pir, #cardT2_bunker')
                .forEach(c => c.classList.remove('selected', 'opt-blue', 'opt-emerald'));
            const sel = document.getElementById('cardT2_' + opt);
            if (sel) sel.classList.add('selected', opt === 'pir' ? 'opt-emerald' : 'opt-blue');
            runRadioSimulation();
        }

        function selectRadioTorre(opt) {
            radioState.torre = opt;
            document.querySelectorAll('#cardT3_used, #cardT3_arriostrada, #cardT3_autosop, #cardT3_grua')
                .forEach(c => c.classList.remove('selected', 'opt-blue', 'opt-emerald'));
            const sel = document.getElementById('cardT3_' + opt);
            if (sel) sel.classList.add('selected', opt === 'autosop' ? 'opt-emerald' : 'opt-blue');
            runRadioSimulation();
        }

        function selectRadioClima(opt) {
            radioState.clima = opt;
            document.querySelectorAll('#cardT4_mono, #cardT4_inv_mono, #cardT4_mochila, #cardT4_chiller')
                .forEach(c => c.classList.remove('selected', 'opt-blue', 'opt-emerald'));
            const sel = document.getElementById('cardT4_' + opt);
            if (sel) sel.classList.add('selected', opt === 'mochila' ? 'opt-emerald' : 'opt-blue');
            runRadioSimulation();
        }

        function selectRadioEnergy(opt) {
            radioState.energy = opt;
            document.querySelectorAll('#cardT5_diesel, #cardT5_solar_basic, #cardT5_solar_opt, #cardT5_solar_macro')
                .forEach(c => c.classList.remove('selected', 'opt-blue', 'opt-emerald'));
            const sel = document.getElementById('cardT5_' + opt);
            if (sel) sel.classList.add('selected', opt === 'solar_opt' ? 'opt-emerald' : 'opt-blue');
            runRadioSimulation();
        }

        function setRadioPhase(actId, phaseNum) {
            radioState.phases[actId] = parseInt(phaseNum);
            runRadioSimulation();
        }

        function runRadioSimulation() {
            // Mapeo paramétrico
            const viaMap = {
                manual: { name: 'Mantenimiento Manual & Relleno', days: 14, cost: 4000, workers: 4 },
                patrol: { name: 'Patrol & Cunetas en Tierra', days: 10, cost: 6800, workers: 4 },
                lastrado: { name: 'Escarificado, Lastrado & Cunetas Concreto', days: 8, cost: 9800, workers: 4 },
                pavimento: { name: 'Pavimento Rígido Concreto 15cm', days: 22, cost: 24000, workers: 8 }
            };
            const sheMap = {
                black: { name: 'Caseta Bloque + Manto Negro', days: 12, cost: 5200, workers: 4, thermalKW: 3.5 },
                white: { name: 'Caseta Bloque + Pintura Térmica', days: 10, cost: 6500, workers: 4, thermalKW: 2.0 },
                pir: { name: 'Shelter Modular PIR + Aluminizado', days: 6, cost: 8600, workers: 4, thermalKW: 0.45 },
                bunker: { name: 'Búnker Concreto Antivandálico', days: 20, cost: 17000, workers: 8, thermalKW: 1.2 }
            };
            const torMap = {
                used: { name: 'Torre Usada Reacondicionada', days: 24, cost: 12500, workers: 2 },
                arriostrada: { name: 'Torre Arriostrada (Tirantes)', days: 18, cost: 14500, workers: 4 },
                autosop: { name: 'Torre Autosoportada 45m', days: 14, cost: 16500, workers: 4 },
                grua: { name: 'Doble Cuadrilla + Grúa 70T', days: 7, cost: 26000, workers: 8 }
            };
            const cliMap = {
                mono: { name: 'Split Monofásico Convencional', days: 4, cost: 2500, workers: 2, powerKW: 0.8, desbal: 25.55, redOk: false },
                inv_mono: { name: 'Split Dual Inverter 1F', days: 4, cost: 3400, workers: 2, powerKW: 0.6, desbal: 25.55, redOk: false },
                mochila: { name: 'Mochila Dual 3F Inverter N+1', days: 4, cost: 5200, workers: 2, powerKW: 0.45, desbal: 0.0, redOk: true },
                chiller: { name: 'Chiller de Precisión Líquido', days: 6, cost: 13500, workers: 3, powerKW: 1.5, desbal: 0.0, redOk: true }
            };
            const eneMap = {
                diesel: { name: 'Motogenerador Diésel 15 kVA', days: 6, cost: 7800, workers: 4, kwh: 999, isDiesel: true },
                solar_basic: { name: 'Solar 12 kWp + 4 Baterías (20 kWh)', days: 8, cost: 12500, workers: 4, kwh: 20, isDiesel: false },
                solar_opt: { name: 'Híbrido Solar 18 kWp + 7 LiFePO4 (35 kWh)', days: 10, cost: 17900, workers: 4, kwh: 35, isDiesel: false },
                solar_macro: { name: 'Micro-Red Solar 30 kWp + 14 LiFePO4 (70 kWh)', days: 14, cost: 34000, workers: 6, kwh: 70, isDiesel: false }
            };

            const selVia = viaMap[radioState.vialidad] || viaMap.lastrado;
            const selShe = sheMap[radioState.shelter] || sheMap.pir;
            const selTor = torMap[radioState.torre] || torMap.autosop;
            const selCli = cliMap[radioState.clima] || cliMap.mochila;
            const selEne = eneMap[radioState.energy] || eneMap.solar_opt;

            // Demanda total de la radiobase (3.0 kW RF base + Climatizador + Térmica)
            let totalRadioLoadKW = 3.0 + selCli.powerKW;
            if (radioState.shelter === 'black') totalRadioLoadKW += 1.8;
            else if (radioState.shelter === 'white') totalRadioLoadKW += 0.8;

            // Autonomía nocturna
            let backupHours = 0;
            if (selEne.isDiesel) {
                backupHours = 14.0;
            } else {
                const usableKWh = selEne.kwh * 0.8; // 80% DoD
                backupHours = +(usableKWh / totalRadioLoadKW).toFixed(1);
            }

            // 7 Actividades Telecom
            const activities = [
                { id: 'T1', title: 'Escarificado & Vialidad de Cumbre', days: selVia.days, cost: selVia.cost, workers: selVia.workers },
                { id: 'T2', title: 'Losa Fundación & Montaje Shelter', days: selShe.days, cost: selShe.cost, workers: selShe.workers },
                { id: 'T3', title: 'Izaje & Verticalidad Torre 45m', days: selTor.days, cost: selTor.cost, workers: selTor.workers },
                { id: 'T4', title: 'Montaje & Sellado Clima Mochila', days: selCli.days, cost: selCli.cost, workers: selCli.workers },
                { id: 'T5', title: 'Arreglo Fotovoltaico & Generación', days: selEne.days, cost: selEne.cost, workers: selEne.workers },
                { id: 'T6', title: 'Tendido Guías de Onda & Baterías', days: 5, cost: 2400, workers: 3 },
                { id: 'T7', title: 'Comisionamiento RF & Pruebas 8h', days: 4, cost: 1600, workers: 2 }
            ];

            // Renderizar pool Telecom
            const poolEl = document.getElementById('radioTasksPool');
            if (poolEl) {
                poolEl.innerHTML = activities.map(act => {
                    const currentPhase = radioState.phases[act.id] || 1;
                    return `
                        <div class="exec-card-item">
                            <div class="exec-card-header">
                                <span class="exec-card-code">${act.id}</span>
                                <span class="exec-card-title">${act.title}</span>
                            </div>
                            <div class="exec-card-badges">
                                <span class="exec-badge-pill">⏱️ ${act.days}d</span>
                                <span class="exec-badge-pill">👥 ${act.workers}p</span>
                                <span class="exec-badge-pill">💵 $${act.cost.toLocaleString('en-US')}</span>
                            </div>
                            <div class="exec-phase-selector">
                                <span class="exec-phase-label">Asignar Fase:</span>
                                <div class="phase-btn-group">
                                    ${[1, 2, 3, 4, 5].map(p => `
                                        <button type="button" class="phase-btn ${p === currentPhase ? 'active' : ''}" onclick="setRadioPhase('${act.id}', ${p})">${p}</button>
                                    `).join('')}
                                </div>
                            </div>
                        </div>
                    `;
                }).join('');
            }

            // Fases y cálculo 4D
            const phaseSummary = {
                1: { title: 'Fase 1: Acceso & Vialidad', days: 0, workers: 0, tasks: [], start: 0, finish: 0 },
                2: { title: 'Fase 2: Obras Civiles & Shelter', days: 0, workers: 0, tasks: [], start: 0, finish: 0 },
                3: { title: 'Fase 3: Torre & Climatización', days: 0, workers: 0, tasks: [], start: 0, finish: 0 },
                4: { title: 'Fase 4: Energía & Respaldo', days: 0, workers: 0, tasks: [], start: 0, finish: 0 },
                5: { title: 'Fase 5: Comisionamiento RF & CDE', days: 0, workers: 0, tasks: [], start: 0, finish: 0 }
            };

            let peakCampWorkers = 0;
            activities.forEach(act => {
                const p = radioState.phases[act.id] || 1;
                phaseSummary[p].tasks.push(act);
                if (act.days > phaseSummary[p].days) phaseSummary[p].days = act.days;
                phaseSummary[p].workers += act.workers;
            });

            let currentTimelineDay = 0;
            for (let p = 1; p <= 5; p++) {
                phaseSummary[p].start = currentTimelineDay;
                phaseSummary[p].finish = currentTimelineDay + phaseSummary[p].days;
                currentTimelineDay = phaseSummary[p].finish;
                if (phaseSummary[p].workers > peakCampWorkers) {
                    peakCampWorkers = phaseSummary[p].workers;
                }
            }
            const totalProjectDays = currentTimelineDay;

            activities.forEach(act => {
                const p = radioState.phases[act.id] || 1;
                act.start = phaseSummary[p].start;
                act.finish = act.start + act.days;
                act.isCritical = (act.days === phaseSummary[p].days);
            });

            const totalScheduledCost = activities.reduce((acc, a) => acc + a.cost, 0);

            // Renderizar resumen Fases Telecom
            const summaryEl = document.getElementById('radioPhasesSummary');
            if (summaryEl) {
                summaryEl.innerHTML = Object.keys(phaseSummary).map(pKey => {
                    const p = phaseSummary[pKey];
                    const crewAlert = p.workers > 12;
                    return `
                        <div class="phase-col-card" style="${crewAlert ? 'border-color:#ef4444;background:#fff5f5;' : ''}">
                            <div class="phase-col-title">
                                <span>Fase ${pKey}</span>
                                <span style="font-size:11px;color:#0284c7;font-family:var(--font-mono);">${p.days}d</span>
                            </div>
                            <div class="phase-col-meta" style="${crewAlert ? 'color:#b91c1c;font-weight:700;' : ''}">
                                ⏱️ Días ${p.start + 1}-${p.finish} &middot; 👥 ${p.workers} trab. ${crewAlert ? '⚠️ >12' : ''}
                            </div>
                            <div class="phase-col-tasks">
                                ${p.tasks.length === 0 ? '<span style="font-size:10.5px;color:#94a3b8;">Sin actividades</span>' : 
                                    p.tasks.map(t => `
                                        <div class="task-micro-tag ${t.isCritical ? 'critical' : ''}">
                                            <span>${t.id} (${t.days}d)</span>
                                            <span>${t.isCritical ? '⚡ RC' : ''}</span>
                                        </div>
                                    `).join('')
                                }
                            </div>
                        </div>
                    `;
                }).join('');
            }

            // Actualizar Telemetría Telecom
            const bakEl = document.getElementById('telRadioBackup');
            const bakSt = document.getElementById('telRadioBackupStatus');
            if (bakEl && bakSt) {
                bakEl.textContent = backupHours.toFixed(1) + ' Horas';
                if (backupHours >= 8.0) {
                    bakSt.className = 'tel-kpi-status status-ok';
                    bakSt.textContent = '≥ 8.0h Cumple';
                } else {
                    bakSt.className = 'tel-kpi-status status-danger';
                    bakSt.textContent = '< 8.0h Falla';
                }
            }

            const wrkEl = document.getElementById('telRadioWorkers');
            const wrkSt = document.getElementById('telRadioWorkersStatus');
            if (wrkEl && wrkSt) {
                wrkEl.textContent = peakCampWorkers + ' Personas';
                if (peakCampWorkers <= 12) {
                    wrkSt.className = 'tel-kpi-status status-ok';
                    wrkSt.textContent = '≤ 12 pers. Cumple';
                } else {
                    wrkSt.className = 'tel-kpi-status status-danger';
                    wrkSt.textContent = 'Excede Campamento!';
                }
            }

            const desEl = document.getElementById('telRadioDesbalance');
            const desSt = document.getElementById('telRadioDesbalanceStatus');
            if (desEl && desSt) {
                desEl.textContent = selCli.desbal.toFixed(1) + '%';
                if (selCli.desbal <= 2.0) {
                    desSt.className = 'tel-kpi-status status-ok';
                    desSt.textContent = '0% CEN 200';
                } else {
                    desSt.className = 'tel-kpi-status status-danger';
                    desSt.textContent = 'Desbalance Severo';
                }
            }

            const cstEl = document.getElementById('telRadioCost');
            const cstSt = document.getElementById('telRadioCostStatus');
            if (cstEl && cstSt) {
                cstEl.textContent = '$' + totalScheduledCost.toLocaleString('en-US');
                if (totalScheduledCost <= 65000) {
                    cstSt.className = 'tel-kpi-status status-ok';
                    cstSt.textContent = 'Bajo Techo $65k';
                } else {
                    cstSt.className = 'tel-kpi-status status-danger';
                    cstSt.textContent = 'Excede Techo $65k';
                }
            }

            const dayEl = document.getElementById('telRadioDays');
            const daySt = document.getElementById('telRadioDaysStatus');
            if (dayEl && daySt) {
                dayEl.textContent = totalProjectDays + ' Días';
                if (totalProjectDays <= 56) {
                    daySt.className = 'tel-kpi-status status-ok';
                    daySt.textContent = '≤ 56d (8 sem)';
                } else {
                    daySt.className = 'tel-kpi-status status-danger';
                    daySt.textContent = '> 56d Lluvias!';
                }
            }

            // Renderizar Gantt 4D en SVG (60 días max, 56d deadline)
            renderGanttChartSvg('ganttSvgRadioContainer', activities, 60, 56);

            // Renderizar Flujo de Caja 5D y Curva S en SVG (Semanas 1 a 8)
            const weeklyCosts = calculateWeeklyCashflow(activities, 8, 7);
            renderSCurveSvg('scurveSvgRadioContainer', weeklyCosts, 65000, 8, totalScheduledCost, 'Radio');
        }

        // =================================================================
        // MOTOR DE RENDERIZADO SVG: DIAGRAMA DE GANTT 4D
        // =================================================================
        function renderGanttChartSvg(containerId, activities, maxDays, deadlineDay) {
            const container = document.getElementById(containerId);
            if (!container) return;

            const width = 880;
            const rowHeight = 30;
            const topMargin = 40;
            const leftMargin = 180;
            const chartWidth = width - leftMargin - 40;
            const height = topMargin + activities.length * rowHeight + 35;
            const pxPerDay = chartWidth / maxDays;

            let gridSvg = '';
            for (let d = 0; d <= maxDays; d += 5) {
                const x = leftMargin + d * pxPerDay;
                gridSvg += `
                    <line x1="${x}" y1="${topMargin - 15}" x2="${x}" y2="${height - 25}" stroke="rgba(255,255,255,0.08)" stroke-width="1" />
                    <text x="${x}" y="${topMargin - 20}" fill="#94a3b8" font-size="10" font-family="monospace" text-anchor="middle">D${d}</text>
                `;
            }

            // Línea de deadline contractual
            const deadX = leftMargin + deadlineDay * pxPerDay;
            const deadlineSvg = `
                <line x1="${deadX}" y1="${topMargin - 15}" x2="${deadX}" y2="${height - 20}" stroke="#ef4444" stroke-width="2" stroke-dasharray="4,4" />
                <rect x="${deadX - 45}" y="${height - 20}" width="90" height="16" rx="4" fill="#ef4444" />
                <text x="${deadX}" y="${height - 8}" fill="#ffffff" font-size="9.5" font-weight="bold" font-family="sans-serif" text-anchor="middle">Límite: ${deadlineDay}d</text>
            `;

            // Filas de tareas
            let rowsSvg = '';
            activities.forEach((act, idx) => {
                const y = topMargin + idx * rowHeight;
                const barX = leftMargin + act.start * pxPerDay;
                const barW = Math.max(act.days * pxPerDay, 6);
                const isCrit = act.isCritical;

                const fillColor = isCrit ? 'url(#critGrad)' : 'url(#barGrad)';
                const strokeColor = isCrit ? '#f59e0b' : '#38bdf8';

                rowsSvg += `
                    <!-- Fila ${act.id} -->
                    <text x="${leftMargin - 10}" y="${y + 16}" fill="#e2e8f0" font-size="11" font-weight="700" font-family="sans-serif" text-anchor="end">
                        ${act.id}: ${act.title.length > 20 ? act.title.substring(0, 19) + '…' : act.title}
                    </text>
                    <rect x="${barX}" y="${y + 4}" width="${barW}" height="18" rx="5" fill="${fillColor}" stroke="${strokeColor}" stroke-width="${isCrit ? 1.5 : 1}" />
                    <text x="${barX + 6}" y="${y + 17}" fill="${isCrit ? '#ffffff' : '#082f49'}" font-size="9.5" font-weight="800" font-family="monospace">
                        ${act.days}d (${act.workers}p) ${isCrit ? '⚡ RC' : ''}
                    </text>
                `;
            });

            container.innerHTML = `
                <svg viewBox="0 0 ${width} ${height}" class="gantt-svg">
                    <defs>
                        <linearGradient id="barGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                            <stop offset="0%" stop-color="#38bdf8" />
                            <stop offset="100%" stop-color="#0284c7" />
                        </linearGradient>
                        <linearGradient id="critGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                            <stop offset="0%" stop-color="#f59e0b" />
                            <stop offset="100%" stop-color="#b45309" />
                        </linearGradient>
                    </defs>
                    <rect x="0" y="0" width="${width}" height="${height}" fill="#0f172a" rx="10" />
                    ${gridSvg}
                    ${rowsSvg}
                    ${deadlineSvg}
                </svg>
            `;
        }

        // =================================================================
        // MOTOR DE RENDERIZADO SVG: DIMENSIÓN 5D Y CURVA S
        // =================================================================
        function calculateWeeklyCashflow(activities, totalWeeks, daysPerWeek) {
            const weekly = new Array(totalWeeks).fill(0);
            activities.forEach(act => {
                const dailyCost = act.cost / act.days;
                for (let d = 0; d < act.days; d++) {
                    const currentDay = act.start + d;
                    const weekIdx = Math.min(Math.floor(currentDay / daysPerWeek), totalWeeks - 1);
                    weekly[weekIdx] += dailyCost;
                }
            });
            return weekly.map(w => Math.round(w));
        }

        function renderSCurveSvg(containerId, weeklyCosts, budgetCeiling, totalWeeks, totalCost, prefix) {
            const container = document.getElementById(containerId);
            if (!container) return;

            const width = 880;
            const height = 260;
            const topMargin = 30;
            const bottomMargin = 40;
            const leftMargin = 70;
            const chartWidth = width - leftMargin - 40;
            const chartHeight = height - topMargin - bottomMargin;

            // Escala Y (máximo hasta 1.15 del techo presupuestario)
            const maxY = budgetCeiling * 1.15;
            const pxPerDollar = chartHeight / maxY;
            const pxPerWeek = chartWidth / totalWeeks;

            // Acumulados
            const cumulative = [];
            let runningSum = 0;
            weeklyCosts.forEach(c => {
                runningSum += c;
                cumulative.push(runningSum);
            });

            // Grid y Ejes
            let gridSvg = '';
            for (let val = 0; val <= maxY; val += (budgetCeiling / 4)) {
                const y = topMargin + chartHeight - val * pxPerDollar;
                gridSvg += `
                    <line x1="${leftMargin}" y1="${y}" x2="${width - 40}" y2="${y}" stroke="#e2e8f0" stroke-width="1" />
                    <text x="${leftMargin - 8}" y="${y + 4}" fill="#64748b" font-size="10" font-family="monospace" text-anchor="end">
                        $${Math.round(val / 1000)}k
                    </text>
                `;
            }

            // Techo presupuestario (Línea roja discontinua)
            const ceilingY = topMargin + chartHeight - budgetCeiling * pxPerDollar;
            const ceilingSvg = `
                <line x1="${leftMargin}" y1="${ceilingY}" x2="${width - 40}" y2="${ceilingY}" stroke="#ef4444" stroke-width="1.5" stroke-dasharray="5,4" />
                <text x="${width - 45}" y="${ceilingY - 5}" fill="#ef4444" font-size="10" font-weight="bold" font-family="sans-serif" text-anchor="end">
                    Techo Presupuestario: $${budgetCeiling.toLocaleString('en-US')} USD
                </text>
            `;

            // Barras semanales de desembolso (CapEx Periódico)
            let barsSvg = '';
            weeklyCosts.forEach((cost, idx) => {
                const barH = cost * pxPerDollar;
                const barW = Math.min(pxPerWeek * 0.45, 42);
                const x = leftMargin + idx * pxPerWeek + (pxPerWeek / 2) - (barW / 2);
                const y = topMargin + chartHeight - barH;

                barsSvg += `
                    <rect x="${x}" y="${y}" width="${barW}" height="${barH}" rx="4" fill="#93c5fd" opacity="0.85" />
                    <text x="${x + barW / 2}" y="${y - 4}" fill="#0369a1" font-size="9" font-weight="bold" font-family="monospace" text-anchor="middle">
                        $${Math.round(cost / 1000)}k
                    </text>
                    <text x="${x + barW / 2}" y="${height - 20}" fill="#475569" font-size="10" font-weight="700" font-family="sans-serif" text-anchor="middle">
                        Sem ${idx + 1}
                    </text>
                `;
            });

            // Curva S Acumulada
            let pathD = `M ${leftMargin} ${topMargin + chartHeight}`;
            let areaD = `M ${leftMargin} ${topMargin + chartHeight}`;
            let dotsSvg = '';

            cumulative.forEach((cum, idx) => {
                const x = leftMargin + (idx + 1) * pxPerWeek - (pxPerWeek * 0.25);
                const y = topMargin + chartHeight - cum * pxPerDollar;
                pathD += ` L ${x} ${y}`;
                areaD += ` L ${x} ${y}`;

                const overCeiling = cum > budgetCeiling;
                dotsSvg += `
                    <circle cx="${x}" cy="${y}" r="4.5" fill="${overCeiling ? '#ef4444' : '#059669'}" stroke="#ffffff" stroke-width="1.5" />
                    <text x="${x}" y="${y - 8}" fill="${overCeiling ? '#b91c1c' : '#065f46'}" font-size="9.5" font-weight="800" font-family="monospace" text-anchor="middle">
                        $${Math.round(cum / 1000)}k
                    </text>
                `;
            });

            areaD += ` L ${leftMargin + cumulative.length * pxPerWeek - (pxPerWeek * 0.25)} ${topMargin + chartHeight} Z`;

            container.innerHTML = `
                <svg viewBox="0 0 ${width} ${height}" class="scurve-svg">
                    <defs>
                        <linearGradient id="scurveAreaGrad" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" stop-color="#10b981" stop-opacity="0.25" />
                            <stop offset="100%" stop-color="#10b981" stop-opacity="0.0" />
                        </linearGradient>
                    </defs>
                    <rect x="0" y="0" width="${width}" height="${height}" fill="#f8fafc" rx="10" />
                    ${gridSvg}
                    ${barsSvg}
                    <path d="${areaD}" fill="url(#scurveAreaGrad)" />
                    <path d="${pathD}" fill="none" stroke="#059669" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    ${dotsSvg}
                    ${ceilingSvg}
                </svg>
            `;

            // Actualizar tarjetas de KPI financiero
            const totEl = document.getElementById(`cf${prefix}Total`);
            const avgEl = document.getElementById(`cf${prefix}Avg`);
            const peakEl = document.getElementById(`cf${prefix}Peak`);
            const conEl = document.getElementById(`cf${prefix}Contingency`);

            if (totEl) totEl.textContent = '$' + totalCost.toLocaleString('en-US') + ' USD';
            if (avgEl) avgEl.textContent = '$' + Math.round(totalCost / totalWeeks).toLocaleString('en-US') + ' /sem';
            if (peakEl) {
                const maxWeek = Math.max(...weeklyCosts);
                peakEl.textContent = '$' + maxWeek.toLocaleString('en-US') + ' USD';
            }
            if (conEl) {
                const contingency = budgetCeiling - totalCost;
                if (contingency >= 0) {
                    conEl.style.color = '#059669';
                    conEl.textContent = '+$' + contingency.toLocaleString('en-US') + ' USD';
                } else {
                    conEl.style.color = '#ef4444';
                    conEl.textContent = '-$' + Math.abs(contingency).toLocaleString('en-US') + ' USD';
                }
            }
        }

        // =================================================================
        // MOTOR DE EVALUACIÓN VIGESIMAL (0-20 PTS) - TELECOM
        // =================================================================
        function reopenRadioEvaluation() {
            const verdictCard = document.getElementById('radioVerdictCard');
            if (verdictCard) verdictCard.classList.remove('active');
            window.scrollTo({ top: document.getElementById('moduleSection-9').offsetTop - 60, behavior: 'smooth' });
        }

        function evaluateRadioPlan() {
            const verdictCard = document.getElementById('radioVerdictCard');
            if (!verdictCard) return;
            verdictCard.classList.add('active');

            // Criterios de auditoría
            const viaMap = { manual: 4000, patrol: 6800, lastrado: 9800, pavimento: 24000 };
            const sheMap = { black: 5200, white: 6500, pir: 8600, bunker: 17000 };
            const torMap = { used: 12500, arriostrada: 14500, autosop: 16500, grua: 26000 };
            const cliMap = { mono: 2500, inv_mono: 3400, mochila: 5200, chiller: 13500 };
            const eneMap = { diesel: 7800, solar_basic: 12500, solar_opt: 17900, solar_macro: 34000 };

            const totalCost = (viaMap[radioState.vialidad] || 0) +
                              (sheMap[radioState.shelter] || 0) +
                              (torMap[radioState.torre] || 0) +
                              (cliMap[radioState.clima] || 0) +
                              (eneMap[radioState.energy] || 0) + 2400 + 1600;

            const cpmDays = parseInt(document.getElementById('telRadioDays')?.textContent || '42');
            const peakWorkers = parseInt(document.getElementById('telRadioWorkers')?.textContent || '7');
            const backupHours = parseFloat(document.getElementById('telRadioBackup')?.textContent || '8.1');

            const isBudgetOk = (totalCost <= 65000);
            const isTimeOk = (cpmDays <= 56);
            const isCampOk = (peakWorkers <= 12);
            const isBackupOk = (backupHours >= 8.0);
            const isCenOk = (radioState.clima === 'mochila' || radioState.clima === 'chiller');
            const isGreenOk = (radioState.energy !== 'diesel');

            let score = 0;
            if (isBudgetOk) score += 3.5;
            if (isTimeOk) score += 3.5;
            if (isCampOk) score += 3.0;
            if (isBackupOk) score += 3.5;
            if (isCenOk) score += 3.5;
            if (isGreenOk) score += 3.0;

            score = Math.round(score);

            const scoreNum = document.getElementById('evalScoreNum');
            const scoreLbl = document.getElementById('evalScoreLabel');
            scoreNum.textContent = `${score} / 20`;

            if (score >= 19) {
                scoreNum.style.color = '#059669';
                scoreLbl.style.color = '#065f46';
                scoreLbl.textContent = 'EXCELENCIA ACADÉMICA Y GERENCIAL (Aprobado con Mención de Honor)';
            } else if (score >= 14) {
                scoreNum.style.color = '#d97706';
                scoreLbl.style.color = '#92400e';
                scoreLbl.textContent = 'APROBADO SATISFACTORIAMENTE (Con Observaciones Periciales)';
            } else {
                scoreNum.style.color = '#dc2626';
                scoreLbl.style.color = '#991b1b';
                scoreLbl.textContent = 'DICTAMEN NO CONFORME (Requiere Reingeniería de Proyecto)';
            }

            // Lista de criterios
            const critList = document.getElementById('evalCriteriaList');
            critList.innerHTML = `
                <div class="crit-item ${isBudgetOk ? 'crit-ok' : 'crit-fail'}">
                    <span>${isBudgetOk ? '✔' : '✖'}</span> Techo CapEx ($${totalCost.toLocaleString('en-US')} / $65.000 USD)
                </div>
                <div class="crit-item ${isTimeOk ? 'crit-ok' : 'crit-fail'}">
                    <span>${isTimeOk ? '✔' : '✖'}</span> Plazo Contractual (${cpmDays} / 56 Días)
                </div>
                <div class="crit-item ${isCampOk ? 'crit-ok' : 'crit-fail'}">
                    <span>${isCampOk ? '✔' : '✖'}</span> Límite Campamento (${peakWorkers} / 12 Personas)
                </div>
                <div class="crit-item ${isBackupOk ? 'crit-ok' : 'crit-fail'}">
                    <span>${isBackupOk ? '✔' : '✖'}</span> Respaldo Nocturno (${backupHours}h / 8.0h Mín.)
                </div>
                <div class="crit-item ${isCenOk ? 'crit-ok' : 'crit-fail'}">
                    <span>${isCenOk ? '✔' : '✖'}</span> Código CEN 200 (Trifásico 208V / 0% Desbal.)
                </div>
                <div class="crit-item ${isGreenOk ? 'crit-ok' : 'crit-fail'}">
                    <span>${isGreenOk ? '✔' : '✖'}</span> Sostenibilidad 7D (Cero Diésel en Cumbre)
                </div>
            `;

            // Retroalimentación
            const fbBox = document.getElementById('evalFeedbackBox');
            let fbHtml = '';
            if (score === 20) {
                fbHtml = `<strong>🏆 Dictamen Pericial de la Cátedra (Ing. Héctor Mota Zorrilla):</strong><br>
                Su solución de ingeniería y gerencia demuestra el dominio holístico de la Metodología BIM y la Planificación 4D/5D. La selección del <strong>Shelter Modular PIR con cubierta aluminizada</strong> redujo la carga térmica parásita a solo 0.45 kW, lo que sumado a la unidad <strong>Mochila Dual Trifásica Inverter N+1 (CEN 200)</strong> mantuvo la demanda total en 3.45 kW. Con ello, el banco de <strong>7 baterías LiFePO4 de 35 kWh (28 kWh útiles)</strong> soporta con exactitud matemática las 8.1 horas de corte nocturno sin emitir ni un gramo de CO2 ni depender de la peligrosa logística de diésel. Además, la programación secuencial de la torre autosoportada y el arreglo solar respetó el límite estricto de 12 camas en campamento culminando en 42 días (con 14 días de holgura antes de las lluvias) e invirtiendo $62.000 USD con una reserva de contingencia de $3.000 USD.`;
            } else {
                fbHtml = `<strong>🔍 Diagnóstico Forense y Recomendaciones de Reingeniería:</strong><br>`;
                if (!isBudgetOk) {
                    fbHtml += `&bull; <strong>Quiebre Financiero (Dimensión 5D):</strong> El presupuesto de $${totalCost.toLocaleString('en-US')} excede el techo contractual de $65.000 USD. Revise opciones sobredimensionadas como el pavimento rígido o el macro-banco solar.<br>`;
                }
                if (!isTimeOk) {
                    fbHtml += `&bull; <strong>Riesgo Crítico de Incomunicación (Dimensión 4D):</strong> La duración de ${cpmDays} días supera las 8 semanas (56 días). Las lluvias torrenciales iniciarán dejando la obra a medio construir.<br>`;
                }
                if (!isCampOk) {
                    fbHtml += `&bull; <strong>Infracción de Seguridad y Campamento:</strong> El pico de ${peakWorkers} trabajadores simultáneos rebasa la capacidad de 12 camas en cumbre. Separe actividades a fases distintas para reducir la congestión en sitio.<br>`;
                }
                if (!isBackupOk) {
                    fbHtml += `&bull; <strong>Colapso de Continuidad de Red:</strong> La autonomía nocturna de ${backupHours}h no alcanza las 8 horas contratadas. La antena se apagará de madrugada interrumpiendo el servicio de emergencia.<br>`;
                }
                if (!isCenOk) {
                    fbHtml += `&bull; <strong>Infracción Eléctrica (CEN 200):</strong> El climatizador monofásico induce desbalance severo en la acometida trifásica de 65m y carece de redundancia N+1 ante avería.<br>`;
                }
                if (!isGreenOk) {
                    fbHtml += `&bull; <strong>Inviabilidad en Ciclo de Vida (7D):</strong> El generador diésel tiene un costo de acarreo de combustible de $16.800 USD/año que arruina el OPEX de la operadora y contamina la cumbre.<br>`;
                }
                fbHtml += `<br><em>Pulse en "Modificar Decisiones y Reintentar Simulación" para ajustar su estrategia hasta obtener los 20 puntos de grado.</em>`;
            }
            fbBox.innerHTML = fbHtml;
            verdictCard.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }

        window.addEventListener('DOMContentLoaded', () => {
            runAlmacenSimulation();
            runRadioSimulation();
            updateStepperUI();
            runHvacSimulation();
        });
    </script>
</body>
</html>
