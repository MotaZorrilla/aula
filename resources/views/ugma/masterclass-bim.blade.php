<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masterclass BIM: De la Maqueta Digital al Gemelo Digital · Postgrado UGMA</title>

    <meta name="title" content="Masterclass BIM: De la Maqueta Digital al Gemelo Digital · Postgrado UGMA">
    <meta name="description" content="Laboratorio interactivo, análisis comparativo CAD vs openBIM, articulación con Cómputos Métricos (Harry Osers), gobernanza CDE ISO 19650:2026, simulación de la Curva de MacLeamy y ROI BIM por el Ing. Héctor Mota.">
    <meta name="keywords" content="BIM, openBIM, ISO 19650, Curva MacLeamy, Harry Osers, Cómputos Métricos, ConTech, UGMA, ROI BIM, IfcOpenShell, Código Civil Venezolano, Héctor Mota">
    <meta name="author" content="Héctor Mota Zorrilla">
    <meta name="theme-color" content="#ffffff">

    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="shortcut icon" href="/favicon.ico">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- Chart.js for MacLeamy Curve -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        :root {
            --bg: #f8fafc;
            --surface: #ffffff;
            --surface-subtle: #f1f5f9;
            --surface-card: #ffffff;
            --border: #e2e8f0;
            --border-hover: #cbd5e1;
            --text-main: #0f172a;
            --text-muted: #475569;
            --text-light: #64748b;
            
            --navy-primary: #0f2942;
            --navy-dark: #0a192f;
            --blue-accent: #0284c7;
            --blue-light: #e0f2fe;
            --blue-border: #bae6fd;
            
            --emerald: #047857;
            --emerald-light: #d1fae5;
            --emerald-border: #a7f3d0;

            --amber: #b45309;
            --amber-light: #fef3c7;
            --amber-border: #fde68a;

            --rose: #e11d48;
            --rose-light: #ffe4e6;
            --rose-border: #fecdd3;

            --purple: #6d28d9;
            --purple-light: #ede9fe;
            --purple-border: #ddd6fe;

            --font-sans: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            --font-mono: 'JetBrains Mono', monospace;

            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.07), 0 2px 4px -2px rgba(0, 0, 0, 0.05);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.08), 0 4px 6px -4px rgba(0, 0, 0, 0.04);
            --shadow-hover: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.06);
        }

        * { margin:0; padding:0; box-sizing:border-box; font-family: var(--font-sans); }
        html { scroll-behavior: smooth; }
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
            transition: all 0.2s;
        }
        .nav-lab-link:hover .live-pill {
            background: #ffffff;
            color: #0284c7;
        }

        /* HERO HEADER */
        .page-header {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 38px 36px;
            margin-bottom: 24px;
            box-shadow: var(--shadow-md);
            background-image: linear-gradient(135deg, rgba(224, 242, 254, 0.35) 0%, rgba(255, 255, 255, 1) 100%);
            position: relative;
            overflow: hidden;
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
            font-weight: 700;
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
            background: #ede9fe;
            color: #6d28d9;
            border-color: #ddd6fe;
        }
        .page-title {
            font-size: clamp(26px, 4vw, 36px);
            font-weight: 800;
            color: var(--navy-primary);
            margin-bottom: 14px;
            line-height: 1.25;
            letter-spacing: -0.02em;
        }
        .page-subtitle {
            font-size: 15.5px;
            color: var(--text-muted);
            max-width: 1020px;
            margin-bottom: 22px;
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

        /* STEPPER / PAGINADOR DE MÓDULOS */
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
            background: var(--blue-light);
            transform: translateY(-1px);
        }
        .step-pill.active {
            background: var(--navy-primary);
            color: #ffffff;
            border-color: var(--navy-primary);
            box-shadow: 0 4px 10px rgba(15, 41, 66, 0.25);
        }
        .step-pill .step-num {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: rgba(0,0,0,0.08);
            font-size: 11px;
            font-family: var(--font-mono);
        }
        .step-pill.active .step-num {
            background: rgba(255,255,255,0.25);
            color: #ffffff;
        }

        /* ACADEMIC CONTENT SECTION */
        .content-card {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 34px;
            margin-bottom: 32px;
            box-shadow: var(--shadow-sm);
            transition: border-color 0.2s;
        }
        .content-card:hover {
            border-color: var(--border-hover);
        }
        .section-header-block {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }
        .section-num-tag {
            font-family: var(--font-mono);
            font-size: 12px;
            font-weight: 800;
            color: var(--blue-accent);
            background: var(--blue-light);
            padding: 4px 10px;
            border-radius: 6px;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        .section-title {
            font-size: 23px;
            font-weight: 800;
            color: var(--navy-primary);
            line-height: 1.3;
            display: flex;
            align-items: center;
            gap: 10px;
            flex: 1;
        }

        /* SANGRÍA ACADÉMICA EN TODOS LOS PÁRRAFOS NARRATIVOS */
        .academic-p {
            font-size: 15px;
            color: var(--text-muted);
            margin-bottom: 18px;
            line-height: 1.8;
            text-indent: 2.2em;
            text-align: justify;
        }
        .academic-p strong { color: var(--text-main); font-weight: 700; }
        .academic-p:last-of-type { margin-bottom: 20px; }

        /* HIGHLIGHT CALLOUT BOXES */
        .callout-box {
            background: var(--surface-subtle);
            border-left: 4px solid var(--navy-primary);
            padding: 16px 20px;
            border-radius: 0 12px 12px 0;
            margin: 22px 0;
            font-size: 14.5px;
            color: var(--text-muted);
            line-height: 1.7;
        }
        .callout-box strong { color: var(--navy-primary); }
        .callout-box.callout-emerald {
            border-left-color: var(--emerald);
            background: #f0fdf4;
        }
        .callout-box.callout-blue {
            border-left-color: var(--blue-accent);
            background: #f0f9ff;
        }
        .callout-box.callout-amber {
            border-left-color: var(--amber);
            background: #fffbeb;
        }

        /* TABLES */
        .academic-table-wrap {
            overflow-x: auto;
            margin: 24px 0;
            border-radius: 12px;
            border: 1px solid var(--border);
            box-shadow: var(--shadow-sm);
        }
        .academic-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13.5px;
            text-align: left;
            background: #ffffff;
        }
        .academic-table th {
            background: #f8fafc;
            color: var(--navy-primary);
            font-weight: 800;
            padding: 14px 18px;
            border-bottom: 2px solid var(--border);
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.04em;
        }
        .academic-table td {
            padding: 14px 18px;
            border-bottom: 1px solid var(--border);
            color: var(--text-muted);
            vertical-align: top;
            line-height: 1.6;
        }
        .academic-table tr:last-child td { border-bottom: none; }
        .academic-table tr:hover td { background: #f8fafc; }
        .table-pill-cad {
            display: inline-block;
            background: #fee2e2;
            color: #991b1b;
            font-weight: 700;
            font-size: 11px;
            padding: 2px 8px;
            border-radius: 4px;
            margin-bottom: 4px;
        }
        .table-pill-bim {
            display: inline-block;
            background: #dcfce7;
            color: #166534;
            font-weight: 700;
            font-size: 11px;
            padding: 2px 8px;
            border-radius: 4px;
            margin-bottom: 4px;
        }

        /* COMPARATIVE GRID */
        .comparison-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 20px;
            margin: 24px 0;
        }
        .comp-card {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 22px;
            box-shadow: var(--shadow-sm);
        }
        .comp-card.cad { border-top: 4px solid #94a3b8; }
        .comp-card.bim { border-top: 4px solid var(--emerald); }
        .comp-card h4 {
            font-size: 17px;
            font-weight: 800;
            color: var(--navy-primary);
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .comp-list {
            list-style: none;
            font-size: 13.5px;
            color: var(--text-muted);
        }
        .comp-list li {
            padding: 8px 0;
            border-bottom: 1px dashed var(--border);
            display: flex;
            align-items: flex-start;
            gap: 10px;
            line-height: 1.5;
        }
        .comp-list li:last-child { border-bottom: none; }

        /* INTERACTIVE 1: ONTOLOGICAL MUTATION INSPECTOR */
        .inspector-box {
            background: #ffffff;
            border: 1.5px solid var(--border);
            border-radius: 14px;
            padding: 22px;
            margin: 22px 0;
            box-shadow: var(--shadow-sm);
        }
        .inspector-nav {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            margin-bottom: 18px;
        }
        .inspector-btn {
            background: var(--surface-subtle);
            border: 1px solid var(--border);
            padding: 6px 14px;
            border-radius: 8px;
            font-size: 12.5px;
            font-weight: 700;
            color: var(--navy-primary);
            cursor: pointer;
            transition: all 0.2s;
        }
        .inspector-btn.active {
            background: var(--blue-accent);
            color: #ffffff;
            border-color: var(--blue-accent);
        }
        .inspector-display {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }
        @media (max-width: 768px) {
            .inspector-display { grid-template-columns: 1fr; }
        }
        .ins-card {
            padding: 16px;
            border-radius: 10px;
            border: 1px solid var(--border);
            font-size: 13px;
        }
        .ins-card.cad-side { background: #fff5f5; border-color: #fecaca; }
        .ins-card.ifc-side { background: #f0fdf4; border-color: #bbf7d0; }
        .ins-title {
            font-weight: 800;
            font-size: 14px;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* INTERACTIVE 2: HARRY OSERS VS QTO CALCULATOR */
        .osers-calc-box {
            background: #ffffff;
            border: 1.5px solid var(--border);
            border-radius: 14px;
            padding: 22px;
            margin: 22px 0;
        }
        .osers-inputs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
            gap: 12px;
            margin-bottom: 18px;
        }
        .osers-field label {
            display: block;
            font-size: 12px;
            font-weight: 700;
            color: var(--navy-primary);
            margin-bottom: 4px;
        }
        .osers-field input {
            width: 100%;
            padding: 8px 10px;
            border-radius: 6px;
            border: 1px solid var(--border);
            font-family: var(--font-mono);
            font-size: 13.5px;
            font-weight: 600;
        }
        .osers-results-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            margin-top: 14px;
        }
        @media (max-width: 768px) {
            .osers-results-grid { grid-template-columns: 1fr; }
        }

        /* INTERACTIVE 3: KANBAN CDE CANVAS */
        .cde-kanban-board {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
            margin: 22px 0;
            overflow-x: auto;
        }
        @media (max-width: 900px) {
            .cde-kanban-board { grid-template-columns: repeat(2, 1fr); }
        }
        @media (max-width: 600px) {
            .cde-kanban-board { grid-template-columns: 1fr; }
        }
        .kanban-col {
            background: var(--surface-subtle);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 14px;
            min-height: 260px;
            display: flex;
            flex-direction: column;
        }
        .kanban-col-header {
            font-size: 12px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .kanban-col.wip-col { border-top: 4px solid #64748b; }
        .kanban-col.shared-col { border-top: 4px solid var(--blue-accent); }
        .kanban-col.published-col { border-top: 4px solid var(--emerald); }
        .kanban-col.archived-col { border-top: 4px solid #6d28d9; }
        .kanban-item {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 10px;
            margin-bottom: 10px;
            box-shadow: var(--shadow-sm);
            font-size: 12px;
            cursor: pointer;
            transition: all 0.2s;
        }
        .kanban-item:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
            border-color: var(--blue-accent);
        }
        .kanban-item-title { font-weight: 700; color: var(--navy-primary); margin-bottom: 4px; }
        .kanban-item-desc { color: var(--text-muted); font-size: 11px; margin-bottom: 6px; }
        .kanban-action-btn {
            font-size: 10.5px;
            font-weight: 700;
            padding: 4px 8px;
            border-radius: 4px;
            border: 1px solid var(--border);
            background: var(--surface-subtle);
            cursor: pointer;
            width: 100%;
            text-align: center;
        }
        .kanban-action-btn:hover { background: var(--blue-light); color: var(--blue-accent); }

        /* INTERACTIVE 4: BCF 3.0 ISSUE TRACKER */
        .bcf-tool-box {
            background: #ffffff;
            border: 1.5px solid var(--border);
            border-radius: 14px;
            padding: 22px;
            margin: 22px 0;
        }
        .bcf-form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 14px;
            margin-bottom: 14px;
        }
        .bcf-payload-box {
            background: #0f172a;
            color: #38bdf8;
            font-family: var(--font-mono);
            font-size: 12px;
            padding: 14px;
            border-radius: 8px;
            overflow-x: auto;
            max-height: 180px;
        }

        /* 8 DIMENSIONS CARDS & MODAL */
        .dim-grid-8 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 14px;
            margin: 24px 0;
        }
        .dim-card-item {
            background: var(--surface-subtle);
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 18px;
            cursor: pointer;
            transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
        }
        .dim-card-item:hover {
            border-color: var(--blue-accent);
            transform: translateY(-3px);
            background: #ffffff;
            box-shadow: var(--shadow-md);
        }
        .dim-card-item .dim-top-badge {
            font-family: var(--font-mono);
            font-size: 11px;
            font-weight: 800;
            color: #ffffff;
            padding: 3px 8px;
            border-radius: 6px;
            display: inline-block;
            margin-bottom: 8px;
        }
        .dim-card-item .click-hint {
            position: absolute;
            top: 16px;
            right: 16px;
            font-size: 11px;
            font-weight: 700;
            color: var(--blue-accent);
        }
        .dim-title { font-size: 15px; font-weight: 800; color: var(--navy-primary); margin-bottom: 6px; }
        .dim-desc { font-size: 12.5px; color: var(--text-muted); line-height: 1.5; }

        /* MODAL STYLES */
        .dim-modal-overlay {
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(15, 23, 42, 0.65);
            backdrop-filter: blur(4px);
            z-index: 1000;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .dim-modal-content {
            background: #ffffff;
            border-radius: 18px;
            max-width: 720px;
            width: 100%;
            max-height: 85vh;
            overflow-y: auto;
            padding: 32px;
            position: relative;
            box-shadow: var(--shadow-hover);
            border: 1px solid var(--border);
        }
        .dim-modal-close {
            position: absolute;
            top: 18px;
            right: 18px;
            background: var(--surface-subtle);
            border: none;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            font-size: 18px;
            font-weight: 800;
            color: var(--text-muted);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .dim-modal-close:hover { background: #fee2e2; color: #dc2626; }

        /* INTERACTIVE MACLEAMY SIMULATOR */
        .sim-container {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 30px;
            margin: 24px 0;
            box-shadow: var(--shadow-sm);
        }
        .sim-controls {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-bottom: 24px;
            background: var(--surface-subtle);
            padding: 20px;
            border-radius: 14px;
            border: 1px solid var(--border);
        }
        .control-group label {
            display: block;
            font-size: 13.5px;
            font-weight: 700;
            color: var(--navy-primary);
            margin-bottom: 8px;
        }
        .control-group select, .control-group input[type="range"] {
            width: 100%;
            padding: 8px 12px;
            border-radius: 8px;
            border: 1px solid var(--border);
            background: #ffffff;
            font-size: 14px;
            color: var(--text-main);
        }
        .chart-wrapper {
            position: relative;
            height: 380px;
            width: 100%;
            background: #ffffff;
            padding: 10px;
            border-radius: 12px;
        }

        /* CONSOLA CALCULADORA FINANCIERA REALISTA */
        .roi-console-wrap {
            background: #0f172a;
            border: 2px solid #334155;
            border-radius: 20px;
            padding: 28px;
            color: #f8fafc;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.4);
            margin: 24px 0;
        }
        .console-screen {
            background: #020617;
            border: 1px solid #1e293b;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 24px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 16px;
            box-shadow: inset 0 2px 8px rgba(0, 0, 0, 0.6);
        }
        .screen-stat-label {
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #94a3b8;
            margin-bottom: 4px;
        }
        .screen-stat-val {
            font-family: var(--font-mono);
            font-size: 24px;
            font-weight: 800;
            color: #38bdf8;
            text-shadow: 0 0 10px rgba(56, 189, 248, 0.3);
        }
        .screen-stat-val.val-green {
            color: #4ade80;
            text-shadow: 0 0 10px rgba(74, 222, 128, 0.3);
        }
        .console-controls-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        @media (max-width: 768px) {
            .console-controls-grid { grid-template-columns: 1fr; }
        }
        .console-field label {
            display: block;
            font-size: 12.5px;
            font-weight: 700;
            color: #cbd5e1;
            margin-bottom: 6px;
        }
        .console-field input {
            width: 100%;
            background: #1e293b;
            border: 1px solid #475569;
            color: #f8fafc;
            padding: 10px 14px;
            border-radius: 8px;
            font-family: var(--font-mono);
            font-size: 15px;
            font-weight: 700;
        }
        .preset-btn-dark {
            background: #1e293b;
            border: 1px solid #334155;
            color: #94a3b8;
            font-size: 11.5px;
            font-weight: 700;
            padding: 6px 12px;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.2s;
        }
        .preset-btn-dark:hover {
            background: #0284c7;
            color: #ffffff;
            border-color: #0284c7;
        }

        /* CONTECH INSPECTION STATION (REEMPLAZA EL CÓDIGO PYTHON) */
        .contech-station-box {
            background: #ffffff;
            border: 1.5px solid var(--border);
            border-radius: 18px;
            padding: 28px;
            margin: 24px 0;
            box-shadow: var(--shadow-sm);
        }
        .station-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 20px;
            padding-bottom: 16px;
            border-bottom: 1px solid var(--border);
        }
        .layers-toggles-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 12px;
            margin-bottom: 22px;
        }
        .layer-toggle-chip {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: var(--surface-subtle);
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 10px 14px;
            cursor: pointer;
            font-size: 13px;
            font-weight: 700;
            color: var(--navy-primary);
            transition: all 0.2s;
        }
        .layer-toggle-chip.active {
            background: #f0fdf4;
            border-color: #86efac;
            color: #166534;
        }
        .viewport-mock {
            background: #0f172a;
            border-radius: 14px;
            padding: 30px;
            color: #ffffff;
            text-align: center;
            position: relative;
            overflow: hidden;
            border: 1px solid #1e293b;
        }
        .viewport-mock::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-image: radial-gradient(#334155 1px, transparent 1px);
            background-size: 20px 20px;
            opacity: 0.4;
        }
        .live-contech-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 14px 28px;
            background: #0284c7;
            color: #ffffff;
            font-size: 15px;
            font-weight: 800;
            border-radius: 12px;
            text-decoration: none;
            box-shadow: 0 4px 14px rgba(2, 132, 199, 0.35);
            transition: all 0.25s;
            position: relative;
            z-index: 2;
        }
        .live-contech-btn:hover {
            background: #0369a1;
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(2, 132, 199, 0.45);
        }

        /* NORMATIVA ENLACES OFICIALES */
        .norm-link-list {
            list-style: none;
            font-size: 14px;
            color: var(--text-muted);
            line-height: 1.85;
        }
        .norm-link-list li {
            padding: 12px 14px;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }
        .norm-link-list li:last-child { border-bottom: none; }
        .norm-link-list a {
            color: var(--blue-accent);
            text-decoration: none;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        .norm-link-list a:hover { text-decoration: underline; }

        /* FOOTER INSTITUCIONAL TRADICIONAL */
        .institutional-footer {
            margin-top: 50px;
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 40px 32px;
            box-shadow: var(--shadow-sm);
        }
        .inst-footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 30px;
            margin-bottom: 30px;
            padding-bottom: 30px;
            border-bottom: 1px solid var(--border);
        }
        @media (max-width: 800px) {
            .inst-footer-grid { grid-template-columns: 1fr; }
        }
        .inst-col-title {
            font-size: 14px;
            font-weight: 800;
            color: var(--navy-primary);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 14px;
        }
        .inst-links {
            list-style: none;
            font-size: 13.5px;
        }
        .inst-links li { margin-bottom: 8px; }
        .inst-links a {
            color: var(--text-muted);
            text-decoration: none;
            transition: color 0.2s;
        }
        .inst-links a:hover { color: var(--blue-accent); }
        .inst-bottom-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 14px;
            font-size: 12.5px;
            color: var(--text-light);
        }

        /* STEPPER CONTROLS AT BOTTOM OF MODULE */
        .step-nav-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 32px;
            padding-top: 20px;
            border-top: 1px solid var(--border);
            flex-wrap: wrap;
            gap: 12px;
        }
        .step-btn-nav {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 18px;
            background: var(--surface-subtle);
            border: 1px solid var(--border);
            border-radius: 10px;
            color: var(--navy-primary);
            font-size: 13px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.2s;
            text-decoration: none;
        }
        .step-btn-nav:hover {
            background: var(--blue-light);
            border-color: var(--blue-accent);
            color: var(--blue-accent);
        }
        .step-btn-nav.primary {
            background: var(--navy-primary);
            color: #ffffff;
            border-color: var(--navy-primary);
        }
        .step-btn-nav.primary:hover {
            background: var(--blue-accent);
            border-color: var(--blue-accent);
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- TOP NAV -->
        <div class="top-nav">
            <a href="../" class="back-link">
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
                    <img src="../../assets/img/logo-mota-zorrilla.jpg" alt="MotaZorrilla Logo Oficial" class="brand-full-logo" onerror="this.src='/assets/img/logo-mota-zorrilla.jpg'">
                </a>
            </div>
        </div>

        <!-- HEADER -->
        <div class="page-header">
            <div class="badge-row">
                <span class="badge">Conferencia Magistral Inaugural · 5 Horas</span>
                <span class="badge badge-academic">Postgrado UGMA · Diplomado en Gerencia de Obras</span>
                <span class="badge badge-norma">Normativa Internacional ISO 19650-1/2:2026</span>
            </div>
            <h1 class="page-title">Tema 1: Introducción a la Metodología BIM: De la Maqueta Digital al Gemelo Digital</h1>
            <p class="page-subtitle">
                Análisis teórico, metodológico y financiero sobre la transformación digital de la industria AECO (Architecture, Engineering, Construction & Operations). Ponencia impartida por el Ing. Héctor Mota en la Escuela de Ingeniería de la Universidad Nororiental Privada Gran Mariscal de Ayacucho (UGMA) y las VII Jornadas de Ingeniería Civil de la UCAB Guayana.
            </p>
            <div class="speaker-bar">
                <span>Facilitador: <strong>Ing. Héctor Mota Zorrilla</strong> (Consultor ConTech / UCV)</span>
                <span>•</span>
                <span>Normativas Rectores: <strong>ISO 19650:2026, buildingSMART IFC 4.3, BCF 3.0</strong></span>
                <span>•</span>
                <span>Contacto Directo WhatsApp: <strong>0414-8873615</strong></span>
            </div>
        </div>

        <!-- STEPPER / PAGINADOR INTERACTIVO -->
        <div class="stepper-container" id="stepperNav">
            <div class="stepper-header">
                <div class="stepper-title">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
                    Paginador Académico · Módulos Temáticos
                </div>
                <button type="button" class="view-mode-toggle" id="toggleViewModeBtn" onclick="toggleViewMode()">
                    <span id="toggleModeIcon">📑</span> <span id="toggleModeText">Ver Todos los Módulos</span>
                </button>
            </div>
            <div class="stepper-track">
                <button type="button" class="step-pill active" onclick="goToStep(1)"><span class="step-num">1</span> Disrupción Ontológica</button>
                <button type="button" class="step-pill" onclick="goToStep(2)"><span class="step-num">2</span> Harry Osers vs QTO</button>
                <button type="button" class="step-pill" onclick="goToStep(3)"><span class="step-num">3</span> CDE & Art. 1637 CCV</button>
                <button type="button" class="step-pill" onclick="goToStep(4)"><span class="step-num">4</span> openBIM & BCF 3.0</button>
                <button type="button" class="step-pill" onclick="goToStep(5)"><span class="step-num">5</span> 8 Dimensiones BIM</button>
                <button type="button" class="step-pill" onclick="goToStep(6)"><span class="step-num">6</span> Curva de MacLeamy</button>
                <button type="button" class="step-pill" onclick="goToStep(7)"><span class="step-num">7</span> Consola ROI BIM</button>
                <button type="button" class="step-pill" onclick="goToStep(8)"><span class="step-num">8</span> Estación ConTech 3D</button>
                <button type="button" class="step-pill" onclick="goToStep(9)"><span class="step-num">9</span> Marco Normativo</button>
            </div>
        </div>

        <!-- MÓDULO 1: DISRUPCIÓN ONTOLÓGICA (CAD VS BIM) -->
        <div class="content-card module-card" id="module-1">
            <div class="section-header-block">
                <span class="section-num-tag">Eje 1 · Fundamento Ontológico</span>
                <h2 class="section-title">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--navy-primary)" stroke-width="2.2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                    1. La Disrupción del Dibujo Vectorial al Modelo Paramétrico Relacional
                </h2>
            </div>
            <p class="academic-p">
                Durante más de cuatro décadas, la industria de la construcción civil operó bajo el paradigma del <strong>Dibujo Asistido por Computadora (CAD 2D)</strong>. En este esquema, el proyecto se fragmenta en láminas desacopladas de líneas, textos y tramas poligonales sobre planos bidimensionales (plantas, secciones transversales y fachadas). Cualquier modificación geométrica imprevista —como el ajuste de un peralte de viga o el redireccionamiento de una tubería de aguas negras— requería una actualización manual e individual en decenas de planos. Este desacople provocó históricamente una <strong>asincronía documental crónica</strong> y la aparición de vicios ocultos en faena.
            </p>
            <p class="academic-p">
                La <strong>Metodología BIM (Building Information Modeling)</strong> no representa la mera sustitución de una herramienta de dibujo ni la compra de una licencia informática privativa; constituye una <strong>transformación ontológica en la gobernanza de datos del activo construido</strong>. En un entorno BIM, no se "dibujan líneas", sino que se instancian <strong>objetos paramétricos semánticos</strong> (`IfcWall`, `IfcBeam`, `IfcColumn`, `IfcDistributionPort`). Cada entidad tridimensional posee atributos intrínsecos de ingeniería: módulo de elasticidad (\(E\)), resistencia a la compresión (\(f'c\)), dosificación, volumen de vaciado neto, fabricante, costo unitario por partida COVENIN y trazabilidad de ciclo de vida.
            </p>

            <!-- INTERACTIVE COMPONENT 1: INSPECTOR DE MUTACIÓN ONTOLÓGICA -->
            <div class="inspector-box">
                <h4 style="font-size: 15.5px; font-weight: 800; color: var(--navy-primary); margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                    <span>🔬</span> Laboratorio Interactivo: Inspector de Mutación Ontológica (Vector 2D vs Objeto IFC)
                </h4>
                <p style="font-size: 13px; color: var(--text-muted); margin-bottom: 14px;">
                    Selecciona un componente de obra para examinar cómo muta su ontología de una primitiva vectorial ciega a un objeto inteligente con propiedades IFC:
                </p>
                <div class="inspector-nav">
                    <button type="button" class="inspector-btn active" onclick="inspectElement('wall')">🧱 Muro Portante MP-01</button>
                    <button type="button" class="inspector-btn" onclick="inspectElement('beam')">📏 Viga de Carga V-101</button>
                    <button type="button" class="inspector-btn" onclick="inspectElement('column')">🏛️ Columna C-01 (40x40)</button>
                    <button type="button" class="inspector-btn" onclick="inspectElement('pipe')">🚰 Tubo Sanitario PVC 4"</button>
                </div>
                <div class="inspector-display">
                    <div class="ins-card cad-side">
                        <div class="ins-title" style="color: #991b1b;">
                            <span>❌</span> Representación Primitiva CAD 2D (DWG)
                        </div>
                        <div id="cadDetails" style="font-family: var(--font-mono); font-size: 12px; line-height: 1.6; color: #7f1d1d;">
                            • Primitiva: 4 Líneas desconectadas + 1 Hatch de puntos<br>
                            • Layer: "ARQ-MUROS"<br>
                            • Semántica: Cero. El sistema no sabe qué es.<br>
                            • Volumen: Inexistente (requiere cálculo manual)<br>
                            • Colisiones: Ciega a cruces con tuberías sanitarias
                        </div>
                    </div>
                    <div class="ins-card ifc-side">
                        <div class="ins-title" style="color: #166534;">
                            <span>✅</span> Objeto Semántico openBIM (IFC 4.3)
                        </div>
                        <div id="ifcDetails" style="font-family: var(--font-mono); font-size: 12px; line-height: 1.6; color: #14532d;">
                            • Entidad: <strong>IfcWallStandardCase</strong> (GUID: 2O2Fr$t4X7Z... )<br>
                            • Material: Concreto Armado f'c = 280 kg/cm²<br>
                            • Pset_WallCommon: FireRating = RF-120 | LoadBearing = TRUE<br>
                            • Qto_WallBaseQuantities: NetVolume = 3.36 m³ | NetSideArea = 22.4 m²<br>
                            • Partida Presupuestaria: COVENIN E-323.000 (Cómputo en tiempo real)
                        </div>
                    </div>
                </div>
            </div>

            <!-- COMPARATIVE TABLE -->
            <div class="academic-table-wrap">
                <table class="academic-table">
                    <thead>
                        <tr>
                            <th style="width: 20%;">Parámetro Crítico</th>
                            <th style="width: 35%;">Flujo Tradicional CAD 2D (Láminas DWG)</th>
                            <th style="width: 35%;">Metodología openBIM Paramétrica (ISO 19650)</th>
                            <th style="width: 10%;">Impacto Financiero</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Estructura del Dato</strong></td>
                            <td>
                                <span class="table-pill-cad">Entidades Huérfanas</span><br>
                                Vectores geométricos ciegos (líneas, arcos, polilíneas). Una línea no distingue si representa un eje, un muro de carga o una junta de dilatación.
                            </td>
                            <td>
                                <span class="table-pill-bim">Objetos Semánticos</span><br>
                                Entidades orientadas a objetos (`IfcElement`). Reconocen sus relaciones espaciales topológicas: una viga se apoya en una columna e intersecta una losa.
                            </td>
                            <td><strong>Crítico</strong><br>Cero ambigüedad interpretativa en campo.</td>
                        </tr>
                        <tr>
                            <td><strong>Coordinación Interdisciplinaria</strong></td>
                            <td>
                                <span class="table-pill-cad">Superposición Manual</span><br>
                                Revisión por transparencias o capas en mesa de dibujo. Las interferencias electromecánicas (MEP) se descubren cuando el tubo colisiona con el acero en obra.
                            </td>
                            <td>
                                <span class="table-pill-bim">Clash Detection Automatizado</span><br>
                                Detección federada de colisiones duras (geométricas) y blandas (espacio de mantenimiento) con jerarquía de tolerancias milimétricas en preconstrucción.
                            </td>
                            <td><strong>-85%</strong><br>En órdenes de cambio (RFI) imprevistas en faena.</td>
                        </tr>
                        <tr>
                            <td><strong>Cómputos Métricos (QTO)</strong></td>
                            <td>
                                <span class="table-pill-cad">Cálculo Manual</span><br>
                                Medición con escalímetro o polilíneas en plano. Margen de error humano acumulado del \(\pm 10\% - 20\%\) en encofrados y despieces de cabillas.
                            </td>
                            <td>
                                <span class="table-pill-bim">Extracción Automatizada</span><br>
                                Cantidades exactas extraídas en milisegundos directamente del volumen real modelado, vinculadas al catálogo de partidas presupuestarias.
                            </td>
                            <td><strong>-95%</strong><br>En tiempos de cubicación y reclamos por sobreprecio.</td>
                        </tr>
                        <tr>
                            <td><strong>Control de Modificaciones</strong></td>
                            <td>
                                <span class="table-pill-cad">Asincronía Documental</span><br>
                                Modificar una cota en planta no actualiza automáticamente la sección ni el cómputo. Alto riesgo de trabajar con planos obsoletos.
                            </td>
                            <td>
                                <span class="table-pill-bim">Fuente Única de Verdad (SSOT)</span><br>
                                La planta, el corte, el 3D y la planilla de cómputos son vistas sincronizadas del mismo modelo subyacente. Un cambio paramétrico actualiza todo el proyecto.
                            </td>
                            <td><strong>Inmediato</strong><br>Consistencia dimensional garantizada al 100%.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="callout-box callout-blue">
                <strong>Lección de Gerencia de Obras:</strong> El costo de resolver una interferencia entre una tubería de aguas de lluvia de 6" y una viga postensada en el modelo digital durante el anteproyecto es de aproximadamente <strong>$15 USD</strong> (tiempo de modelador). Corregir esa misma interferencia con el encofrado armado y la cuadrilla de vaciado esperando en obra puede superar los <strong>$3,500 USD</strong> en demoliciones, refuerzos estructurales extraordinarios y retrasos en la ruta crítica del cronograma.
            </div>

            <!-- STEP NAVIGATION BUTTONS -->
            <div class="step-nav-bottom">
                <span>Módulo 1 de 9</span>
                <button type="button" class="step-btn-nav primary" onclick="goToStep(2)">Siguiente: Harry Osers vs QTO &rarr;</button>
            </div>
        </div>

        <!-- MÓDULO 2: DE HARRY OSERS AL QTO PARAMÉTRICO -->
        <div class="content-card module-card" id="module-2">
            <div class="section-header-block">
                <span class="section-num-tag">Articulación Curricular · Módulo II</span>
                <h2 class="section-title">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--emerald)" stroke-width="2.2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                    2. De los Cómputos de Harry Osers al QTO Paramétrico Automatizado
                </h2>
            </div>
            <p class="academic-p">
                En el <strong>Módulo II de este Diplomado (dictado por el Prof. Rafael Angarita)</strong>, se estudiaron exhaustivamente los principios rigurosos de los cómputos métricos para edificaciones basados en la doctrina clásica del Ing. <strong>Harry Osers</strong> y la norma venezolana <strong>COVENIN 2000-87 / 2000-92</strong>. La formulación matemática de planillas de despiece de acero de refuerzo, encofrados de madera/metálicos y volumen de concreto estructural requiere de un desglose aritmético manual y minucioso:
            </p>

            <!-- INTERACTIVE COMPONENT 2: CALCULADORA COMPARATIVA OSERS VS QTO -->
            <div class="osers-calc-box">
                <h4 style="font-size: 15.5px; font-weight: 800; color: var(--navy-primary); margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                    <span>📐</span> Laboratorio de Cómputos: Planilla Harry Osers (COVENIN 2000) vs QTO IFC
                </h4>
                <p style="font-size: 13px; color: var(--text-muted); margin-bottom: 14px;">
                    Ingresa las dimensiones geométricas de la viga para comparar el esfuerzo manual de la planilla clásica con la extracción algorítmica de atributos IFC:
                </p>
                <div class="osers-inputs-grid">
                    <div class="osers-field">
                        <label>Ancho Viga b (m):</label>
                        <input type="number" id="vigaB" value="0.30" step="0.05" oninput="calcOsersVsQTO()">
                    </div>
                    <div class="osers-field">
                        <label>Alto Viga h (m):</label>
                        <input type="number" id="vigaH" value="0.50" step="0.05" oninput="calcOsersVsQTO()">
                    </div>
                    <div class="osers-field">
                        <label>Luz Libre L (m):</label>
                        <input type="number" id="vigaL" value="5.60" step="0.10" oninput="calcOsersVsQTO()">
                    </div>
                    <div class="osers-field">
                        <label>N° Vigas Idénticas:</label>
                        <input type="number" id="vigaN" value="4" step="1" oninput="calcOsersVsQTO()">
                    </div>
                    <div class="osers-field">
                        <label>Espesor Losa (m):</label>
                        <input type="number" id="vigaSlab" value="0.20" step="0.05" oninput="calcOsersVsQTO()">
                    </div>
                </div>

                <div class="osers-results-grid">
                    <div style="background: #f8fafc; border: 1px solid var(--border); border-radius: 10px; padding: 14px;">
                        <div style="font-weight: 800; font-size: 13px; color: var(--navy-primary); margin-bottom: 6px;">
                            📋 Planilla Clásica Harry Osers (COVENIN E-323)
                        </div>
                        <div style="font-family: var(--font-mono); font-size: 12px; color: var(--text-muted); line-height: 1.6;" id="osersResText">
                            • Vol. Concreto: <strong>3.360 m³</strong> (V = b × h × L × N)<br>
                            • Área Encofrado: <strong>20.160 m²</strong> (2×(h-e) + b) × L × N<br>
                            • Tiempo Humano Estimado: 25 - 40 minutos por nivel<br>
                            • Probabilidad de Error por Desacople: ~12.5%
                        </div>
                    </div>
                    <div style="background: #ecfdf5; border: 1px solid #a7f3d0; border-radius: 10px; padding: 14px;">
                        <div style="font-weight: 800; font-size: 13px; color: #065f46; margin-bottom: 6px;">
                            ⚡ Extracción Paramétrica openBIM (IfcBeam QTO)
                        </div>
                        <div style="font-family: var(--font-mono); font-size: 12px; color: #047857; line-height: 1.6;" id="qtoResText">
                            • Qto_BeamBaseQuantities.NetVolume: <strong>3.360 m³</strong><br>
                            • Qto_BeamBaseQuantities.GrossSideArea: <strong>20.160 m²</strong><br>
                            • Tiempo Algorítmico IFC: <strong>&lt; 0.05 segundos</strong><br>
                            • Tasa de Error Humano: <strong>0.00% (Kernel CSG Exacto)</strong>
                        </div>
                    </div>
                </div>
            </div>

            <div class="comparison-grid">
                <div class="comp-card cad">
                    <h4>Flujo Clásico de Harry Osers (Módulo II)</h4>
                    <p style="font-size:13px; color:var(--text-muted); margin-bottom:12px;">Cálculo analítico celda por celda a partir de planos 2D:</p>
                    <ul class="comp-list">
                        <li>📏 Medición manual de longitudes efectivas entre caras de columnas descontando recubrimientos (\(r = 3.0\text{ cm}\)).</li>
                        <li>📐 Cálculo de encofrado perimetral deduciendo la superficie de contacto con losas macizas o nervadas.</li>
                        <li>⚖️ Conversión de barras de refuerzo por longitud a peso en kilogramos usando factores lineales nominales (\(\text{kg/m}\) de acero).</li>
                        <li>⚠️ <strong>Vulnerabilidad:</strong> Errores de transcripción en hojas Excel y doble contabilización de volúmenes en intersecciones viga-columna.</li>
                    </ul>
                </div>
                <div class="comp-card bim">
                    <h4>QTO Paramétrico Automatizado en openBIM</h4>
                    <p style="font-size:13px; color:var(--text-muted); margin-bottom:12px;">Extracción directa de atributos geométricos computados por el kernel:</p>
                    <ul class="comp-list">
                        <li>⚡ Extracción volumétrica exacta mediante operaciones booleanas espaciales CSG (*Constructive Solid Geometry*).</li>
                        <li>📦 Discriminación matemática automatizada de volumen viga vs. volumen columna, sin duplicación de concreto.</li>
                        <li>📑 Clasificación directa por código de partida COVENIN (`E-323.100`: Concreto en vigas, `E-324.000`: Acero de refuerzo).</li>
                        <li>🎯 <strong>Precisión Absoluta:</strong> Exportación directa de cantidades certificadas al Análisis de Precios Unitarios (APU) y Curva S.</li>
                    </ul>
                </div>
            </div>

            <!-- STEP NAVIGATION BUTTONS -->
            <div class="step-nav-bottom">
                <button type="button" class="step-btn-nav" onclick="goToStep(1)">&larr; Anterior: Disrupción Ontológica</button>
                <span>Módulo 2 de 9</span>
                <button type="button" class="step-btn-nav primary" onclick="goToStep(3)">Siguiente: CDE & Art. 1637 CCV &rarr;</button>
            </div>
        </div>

        <!-- MÓDULO 3: CDE ISO 19650 Y BLINDAJE JURÍDICO -->
        <div class="content-card module-card" id="module-3">
            <div class="section-header-block">
                <span class="section-num-tag">Gobernanza & Blindaje Legal · Módulo III</span>
                <h2 class="section-title">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--navy-primary)" stroke-width="2.2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                    3. Entorno Común de Datos (CDE ISO 19650:2026) y Blindaje Jurídico (Art. 1637 CCV)
                </h2>
            </div>
            <p class="academic-p">
                El <strong>Entorno Común de Datos (CDE - Common Data Environment)</strong> es la columna vertebral de la norma internacional <strong>ISO 19650-1/2</strong>. No es una carpeta compartida en Google Drive o Dropbox, sino un repositorio digital estructurado y procedimentado que actúa como la <strong>Fuente Única de Verdad (SSOT)</strong> del proyecto de ingeniería. Todo contenedor de información debe transitar obligatoriamente por cuatro estados inmutables:
            </p>

            <!-- INTERACTIVE COMPONENT 3: TABLERO KANBAN / CANVAS CDE -->
            <div style="background:#ffffff; border:1.5px solid var(--border); border-radius:14px; padding:22px; margin:22px 0;">
                <h4 style="font-size: 15.5px; font-weight: 800; color: var(--navy-primary); margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                    <span>📋</span> Canvas Interactivo de Gobernanza CDE (Flujo de Aprobación ISO 19650)
                </h4>
                <p style="font-size: 13px; color: var(--text-muted); margin-bottom: 14px;">
                    Interactúa con los contenedores de información para simular la transición de estados y la obtención del Sello Criptográfico Legal:
                </p>
                <div class="cde-kanban-board">
                    <!-- WIP -->
                    <div class="kanban-col wip-col">
                        <div class="kanban-col-header" style="color: #64748b;">
                            <span>1. WIP (Curso)</span>
                            <span id="wipCount" style="background:#e2e8f0; padding:2px 6px; border-radius:4px;">2</span>
                        </div>
                        <div id="wipItems">
                            <div class="kanban-item" id="item-arq">
                                <div class="kanban-item-title">GUAY-ARQ-N04-P01</div>
                                <div class="kanban-item-desc">Plantas arquitectónicas nivel 4 en modelado preliminar.</div>
                                <button type="button" class="kanban-action-btn" onclick="moveKanban('item-arq', 'shared')">Enviar a SHARED &rarr;</button>
                            </div>
                            <div class="kanban-item" id="item-mep">
                                <div class="kanban-item-title">GUAY-MEP-N04-P01</div>
                                <div class="kanban-item-desc">Trazado sanitario y bajantes pluviales.</div>
                                <button type="button" class="kanban-action-btn" onclick="moveKanban('item-mep', 'shared')">Enviar a SHARED &rarr;</button>
                            </div>
                        </div>
                    </div>
                    <!-- SHARED -->
                    <div class="kanban-col shared-col">
                        <div class="kanban-col-header" style="color: var(--blue-accent);">
                            <span>2. SHARED (Coord.)</span>
                            <span id="sharedCount" style="background:#e0f2fe; padding:2px 6px; border-radius:4px;">1</span>
                        </div>
                        <div id="sharedItems">
                            <div class="kanban-item" id="item-est">
                                <div class="kanban-item-title">GUAY-EST-N04-P01</div>
                                <div class="kanban-item-desc">Modelo estructural en chequeo de colisiones interdisciplinar.</div>
                                <button type="button" class="kanban-action-btn" onclick="moveKanban('item-est', 'published')">Aprobar a PUBLISHED &rarr;</button>
                            </div>
                        </div>
                    </div>
                    <!-- PUBLISHED -->
                    <div class="kanban-col published-col">
                        <div class="kanban-col-header" style="color: var(--emerald);">
                            <span>3. PUBLISHED (Obra)</span>
                            <span id="pubCount" style="background:#d1fae5; padding:2px 6px; border-radius:4px;">0</span>
                        </div>
                        <div id="pubItems">
                            <!-- Items published land here -->
                        </div>
                    </div>
                    <!-- ARCHIVED -->
                    <div class="kanban-col archived-col">
                        <div class="kanban-col-header" style="color: #6d28d9;">
                            <span>4. ARCHIVED (Legal)</span>
                            <span id="arcCount" style="background:#ede9fe; padding:2px 6px; border-radius:4px;">0</span>
                        </div>
                        <div id="arcItems">
                            <!-- Items archived land here -->
                        </div>
                    </div>
                </div>

                <div id="cdeLegalShieldOutput" style="display:none; background:#ecfdf5; border:1px solid #86efac; border-radius:10px; padding:14px; margin-top:12px; font-size:12.5px; color:#065f46;">
                    <strong>🛡️ SELLO CRIPTOGRÁFICO EMITIDO:</strong> El entregable ha recibido el estatus oficial <strong>PUBLISHED</strong>. Queda protegido bajo la trazabilidad de la ISO 19650 y constituye prueba pericial formal frente al <strong>Artículo 1637 del Código Civil Venezolano</strong> (Responsabilidad Decenal). Hash: <code>SHA256:7f83b1657ff1...UGMA_2026</code>
                </div>
            </div>

            <!-- LEGAL SHIELD: ART 1637 CCV -->
            <div class="callout-box callout-amber">
                <h4 style="font-size:15px; font-weight:800; color:var(--amber); margin-bottom:6px; display:flex; align-items:center; gap:8px;">
                    ⚖️ Articulación con Módulo III: Responsabilidad Decenal del Constructor (Art. 1637 Código Civil Venezolano)
                </h4>
                <p style="margin-bottom:8px; text-indent: 2.2em; text-align: justify;">
                    En el <strong>Módulo III (dictado por el Prof. Omar Martínez)</strong> se examinó el marco legal de contratos de obra, fianzas y la temida <strong>Responsabilidad Decenal</strong> establecida en el <strong>Artículo 1637 del Código Civil de Venezuela</strong>: <i>«Si en el curso de diez años, a contar desde el día en que se ha terminado la construcción de un edificio o de otra obra importante o considerable, una u otra se arruinaren en todo o en parte, o presentaren evidente peligro de ruina por defecto de construcción o por el vicio del suelo, el arquitecto y el empresario son responsables»</i>.
                </p>
                <p style="margin:0; text-indent: 2.2em; text-align: justify;">
                    En litigios de obras bajo el método tradicional CAD, los expedientes probatorios suelen ser caóticos: versiones impresas sin fecha clara, cruces de correos informales o planos modificados con bolígrafo en obra. <strong>La implementación de un CDE bajo ISO 19650 proporciona trazabilidad criptográfica inmutable</strong>: cada modelo federado aprobado, cada informe de colisión (BCF) y cada cambio geométrico queda sellado con autor, fecha, hora y justificación técnica, blindando tanto al Ingeniero Residente como al Contratista frente a reclamos improcedentes por vicios de diseño ajenos.
                </p>
            </div>

            <!-- STEP NAVIGATION BUTTONS -->
            <div class="step-nav-bottom">
                <button type="button" class="step-btn-nav" onclick="goToStep(2)">&larr; Anterior: Harry Osers vs QTO</button>
                <span>Módulo 3 de 9</span>
                <button type="button" class="step-btn-nav primary" onclick="goToStep(4)">Siguiente: openBIM & BCF 3.0 &rarr;</button>
            </div>
        </div>

        <!-- MÓDULO 4: ESTÁNDARES OPENBIM & BCF 3.0 -->
        <div class="content-card module-card" id="module-4">
            <div class="section-header-block">
                <span class="section-num-tag">Eje 1 · Interoperabilidad Neutral</span>
                <h2 class="section-title">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--navy-primary)" stroke-width="2.2"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                    4. Estándares Abiertos de buildingSMART: IFC 4.3 y BCF 3.0
                </h2>
            </div>
            <p class="academic-p">
                El mayor riesgo de digitalización en corporaciones de ingeniería es el <i>Vendor Lock-in</i> (cautiverio comercial en formatos cerrados privativos como .RVT o .NWD). La iniciativa global <strong>openBIM</strong>, liderada por <strong>buildingSMART International</strong>, garantiza la soberanía digital de los proyectos mediante especificaciones abiertas neutrales:
            </p>

            <!-- INTERACTIVE COMPONENT 4: GENERADOR DE TICKETS BCF 3.0 -->
            <div class="bcf-tool-box">
                <h4 style="font-size: 15.5px; font-weight: 800; color: var(--navy-primary); margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                    <span>🎫</span> Generador Interactivo de Incidencias BCF 3.0 (BIM Collaboration Format)
                </h4>
                <p style="font-size: 13px; color: var(--text-muted); margin-bottom: 14px;">
                    Crea un ticket de colisión para comprobar cómo BCF transmite incidencias espaciales con metadatos ligeros sin transferir archivos de varios gigabytes:
                </p>
                <div class="bcf-form-grid">
                    <div>
                        <label style="display:block; font-size:12px; font-weight:700; color:var(--navy-primary); margin-bottom:4px;">Tipo de Interferencia:</label>
                        <select id="bcfTopic" style="width:100%; padding:8px; border-radius:6px; border:1px solid var(--border);" onchange="generateBCFPayload()">
                            <option value="clash-viga-tubo">Colisión Dura: Viga V-101 vs Tubo Pluvial 6"</option>
                            <option value="clash-col-ducto">Colisión Espacial: Columna C-01 vs Ducto HVAC</option>
                            <option value="clash-bandeja-puerta">Interferencia Blanda: Bandeja Eléctrica vs Dintel</option>
                        </select>
                    </div>
                    <div>
                        <label style="display:block; font-size:12px; font-weight:700; color:var(--navy-primary); margin-bottom:4px;">Nivel de Severidad:</label>
                        <select id="bcfPriority" style="width:100%; padding:8px; border-radius:6px; border:1px solid var(--border);" onchange="generateBCFPayload()">
                            <option value="Critical">Crítica (Detención de Encofrado)</option>
                            <option value="Major" selected>Mayor (Requiere rediseño de trazado)</option>
                            <option value="Minor">Menor (Ajuste de tolerancia en obra)</option>
                        </select>
                    </div>
                    <div>
                        <label style="display:block; font-size:12px; font-weight:700; color:var(--navy-primary); margin-bottom:4px;">Especialista Asignado:</label>
                        <select id="bcfAssignee" style="width:100%; padding:8px; border-radius:6px; border:1px solid var(--border);" onchange="generateBCFPayload()">
                            <option value="ing.estructuras@ugma.edu.ve">Ingeniero Estructural (Cálculo)</option>
                            <option value="ing.sanitario@ugma.edu.ve">Ingeniero Sanitario (Instalaciones)</option>
                            <option value="coordinador.bim@ugma.edu.ve">Coordinador openBIM General</option>
                        </select>
                    </div>
                </div>

                <div class="bcf-payload-box" id="bcfPayloadDisplay">
                    <!-- BCF Payload rendered via JS -->
                </div>
            </div>

            <div class="comparison-grid">
                <div class="comp-card bim">
                    <h4>IFC 4.3 (ISO 16739-1:2024/2026)</h4>
                    <p style="font-size:13px; color:var(--text-muted); margin-bottom:10px;">El esquema universal de datos de infraestructura y edificación:</p>
                    <ul class="comp-list">
                        <li>🛣️ <strong>Expansión a Infraestructura Lineal:</strong> Soporte nativo para vialidad pesada (`IfcRoad`), puentes de concreto/acero (`IfcBridge`), vías férreas (`IfcRailway`) y puertos.</li>
                        <li>🌐 <strong>Georreferenciación Exacta:</strong> Acoplamiento con Sistemas de Información Geográfica (GIS) mediante coordenadas geodésicas oficiales (UTM/REGVEN en Venezuela).</li>
                        <li>🏗️ <strong>Pertinencia en Guayana:</strong> Vital para la gerencia de obras en puentes sobre los ríos Orinoco y Caroní, plantas hidroeléctricas y empresas básicas.</li>
                    </ul>
                </div>
                <div class="comp-card cad">
                    <h4>BCF 3.0 (BIM Collaboration Format)</h4>
                    <p style="font-size:13px; color:var(--text-muted); margin-bottom:10px;">Protocolo abierto de mensajería y gestión de incidencias:</p>
                    <ul class="comp-list">
                        <li>📍 <strong>Desacople de Datos:</strong> Comunica un choque espacial transmitiendo únicamente un pequeño paquete XML/JSON de pocos kilobytes en lugar de transferir gigabytes de maquetas.</li>
                        <li>📷 <strong>Metadatos Clave:</strong> Posición exacta de cámara 3D, GUID de los elementos colisionantes, fotografía de campo, responsable y nivel de severidad.</li>
                        <li>🔄 <strong>Auditoría Transversal:</strong> Se sincroniza entre Revit, Archicad, BlenderBIM y visores web móviles para inspección en campo.</li>
                    </ul>
                </div>
            </div>

            <!-- STEP NAVIGATION BUTTONS -->
            <div class="step-nav-bottom">
                <button type="button" class="step-btn-nav" onclick="goToStep(3)">&larr; Anterior: CDE & Art. 1637 CCV</button>
                <span>Módulo 4 de 9</span>
                <button type="button" class="step-btn-nav primary" onclick="goToStep(5)">Siguiente: 8 Dimensiones BIM &rarr;</button>
            </div>
        </div>

        <!-- MÓDULO 5: LAS DIMENSIONES BIM (1D A 8D+) -->
        <div class="content-card module-card" id="module-5">
            <div class="section-header-block">
                <span class="section-num-tag">Eje 1 · Madurez Integral</span>
                <h2 class="section-title">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--navy-primary)" stroke-width="2.2"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                    5. El Ecosistema de Dimensiones BIM (1D a 8D+) y Niveles de Detalle (LOD)
                </h2>
            </div>
            <p class="academic-p">
                El modelo de información evoluciona de manera holística a lo largo de las distintas etapas del ciclo de vida del activo de infraestructura. Cada dimensión añade una capa estructurada de datos de ingeniería, gestión económica y salvaguarda ambiental. Haz clic sobre cada una de las 8 tarjetas para abrir el <strong>informe técnico de madurez y fundamentos normativos</strong>:
            </p>

            <!-- 8 DIMENSIONS GRID -->
            <div class="dim-grid-8">
                <!-- 1D -->
                <div class="dim-card-item" onclick="openDimModal(1)">
                    <span class="dim-top-badge" style="background:#475569;">1D · Idea</span>
                    <span class="click-hint">Tocar &rarr;</span>
                    <h4 class="dim-title">Planificación Estratégica</h4>
                    <p class="dim-desc">Factibilidad urbana, condicionantes legales, plan de ordenación catastral y estimación inicial paramétrica.</p>
                </div>
                <!-- 2D -->
                <div class="dim-card-item" onclick="openDimModal(2)">
                    <span class="dim-top-badge" style="background:#0284c7;">2D · Vector</span>
                    <span class="click-hint">Tocar &rarr;</span>
                    <h4 class="dim-title">Bocetaje & Tramitación</h4>
                    <p class="dim-desc">Esquemas geométricos bidimensionales, permisos municipales de habitabilidad y perfiles topográficos base.</p>
                </div>
                <!-- 3D -->
                <div class="dim-card-item" onclick="openDimModal(3)">
                    <span class="dim-top-badge" style="background:#0f2942;">3D · Espacio</span>
                    <span class="click-hint">Tocar &rarr;</span>
                    <h4 class="dim-title">Geometría Paramétrica</h4>
                    <p class="dim-desc">Federación multidisciplinaria de arquitectura, cálculo estructural e instalaciones MEP. Clash detection preventivo.</p>
                </div>
                <!-- 4D -->
                <div class="dim-card-item" onclick="openDimModal(4)">
                    <span class="dim-top-badge" style="background:#e11d48;">4D · Tiempo</span>
                    <span class="click-hint">Tocar &rarr;</span>
                    <h4 class="dim-title">Simulación Constructiva</h4>
                    <p class="dim-desc">Acoplamiento del modelo 3D con la ruta crítica Gantt/CPM. Planificación de frentes, grúas y logística de obra.</p>
                </div>
                <!-- 5D -->
                <div class="dim-card-item" onclick="openDimModal(5)">
                    <span class="dim-top-badge" style="background:#b45309;">5D · Costo</span>
                    <span class="click-hint">Tocar &rarr;</span>
                    <h4 class="dim-title">Presupuestación & EVM</h4>
                    <p class="dim-desc">Cómputos métricos (QTO) vinculados al APU. Generación de Curvas S y control de Valor Ganado (PV, EV, AC, CPI, SPI).</p>
                </div>
                <!-- 6D -->
                <div class="dim-card-item" onclick="openDimModal(6)">
                    <span class="dim-top-badge" style="background:#047857;">6D · Clima</span>
                    <span class="click-hint">Tocar &rarr;</span>
                    <h4 class="dim-title">Sostenibilidad & Energía</h4>
                    <p class="dim-desc">Análisis bioclimático solar, descarbonización de materiales, confort adaptativo ASHRAE y certificación EDGE / LEED.</p>
                </div>
                <!-- 7D -->
                <div class="dim-card-item" onclick="openDimModal(7)">
                    <span class="dim-top-badge" style="background:#6d28d9;">7D · Operación</span>
                    <span class="click-hint">Tocar &rarr;</span>
                    <h4 class="dim-title">Facility Management</h4>
                    <p class="dim-desc">Gemelo Digital para mantenimiento preventivo, fichas técnicas COBie, ciclo de vida de transformadores y equipos mayores.</p>
                </div>
                <!-- 8D Y MÁS -->
                <div class="dim-card-item" onclick="openDimModal(8)">
                    <span class="dim-top-badge" style="background:#0369a1;">8D+ · Fronteras</span>
                    <span class="click-hint">Tocar &rarr;</span>
                    <h4 class="dim-title">Seguridad, Lean & IA</h4>
                    <p class="dim-desc">8D (Seguridad en Faena / Prevención de Riesgos), 9D (Lean Construction / Cero Desperdicio) y 10D (IA & Off-site).</p>
                </div>
            </div>

            <!-- LOD LEVEL GRID -->
            <h3 style="font-size:18px; font-weight:800; color:var(--navy-primary); margin:26px 0 12px;">
                Niveles de Desarrollo y Madurez del Modelo (LOD - Level of Development)
            </h3>
            <p class="academic-p">
                Establecido por el <i>BIMForum</i> y el <i>American Institute of Architects (AIA)</i>, el LOD define la <strong>confiabilidad geométrica y de información</strong> de un elemento en cada hito del proyecto de construcción:
            </p>
            <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(160px, 1fr)); gap:12px; margin:18px 0;">
                <div style="background:#ffffff; border:1px solid var(--border); border-radius:10px; padding:12px; text-align:center;">
                    <div style="font-family:var(--font-mono); font-weight:800; font-size:13px; color:var(--navy-primary);">LOD 100</div>
                    <div style="font-size:12px; font-weight:700; color:var(--blue-accent);">Conceptual</div>
                    <div style="font-size:11px; color:var(--text-muted); margin-top:4px;">Volumen genérico y área global. No apto para cómputo.</div>
                </div>
                <div style="background:#ffffff; border:1px solid var(--border); border-radius:10px; padding:12px; text-align:center;">
                    <div style="font-family:var(--font-mono); font-weight:800; font-size:13px; color:var(--navy-primary);">LOD 200</div>
                    <div style="font-size:12px; font-weight:700; color:var(--blue-accent);">Esquemático</div>
                    <div style="font-size:11px; color:var(--text-muted); margin-top:4px;">Dimensiones aproximadas de elementos estructurales.</div>
                </div>
                <div style="background:#ffffff; border:1px solid var(--border); border-radius:10px; padding:12px; text-align:center;">
                    <div style="font-family:var(--font-mono); font-weight:800; font-size:13px; color:var(--navy-primary);">LOD 300</div>
                    <div style="font-size:12px; font-weight:700; color:var(--blue-accent);">Detalle Técnico</div>
                    <div style="font-size:11px; color:var(--text-muted); margin-top:4px;">Geometría exacta, f'c especificado y apto para licitación.</div>
                </div>
                <div style="background:#ffffff; border:1px solid var(--border); border-radius:10px; padding:12px; text-align:center;">
                    <div style="font-family:var(--font-mono); font-weight:800; font-size:13px; color:var(--navy-primary);">LOD 350</div>
                    <div style="font-size:12px; font-weight:700; color:var(--blue-accent);">Interfases / Cruces</div>
                    <div style="font-size:11px; color:var(--text-muted); margin-top:4px;">Detalle de uniones, placas de anclaje y pasamuros MEP.</div>
                </div>
                <div style="background:#ffffff; border:1px solid var(--border); border-radius:10px; padding:12px; text-align:center;">
                    <div style="font-family:var(--font-mono); font-weight:800; font-size:13px; color:var(--navy-primary);">LOD 400</div>
                    <div style="font-size:12px; font-weight:700; color:var(--blue-accent);">Fabricación</div>
                    <div style="font-size:11px; color:var(--text-muted); margin-top:4px;">Despiece de cabillas y perfiles metálicos para taller.</div>
                </div>
                <div style="background:#ffffff; border:1px solid var(--border); border-radius:10px; padding:12px; text-align:center;">
                    <div style="font-family:var(--font-mono); font-weight:800; font-size:13px; color:var(--navy-primary);">LOD 500</div>
                    <div style="font-size:12px; font-weight:700; color:var(--blue-accent);">As-Built Auditado</div>
                    <div style="font-size:11px; color:var(--text-muted); margin-top:4px;">Modelo verificado con escaneo láser tras el vaciado.</div>
                </div>
            </div>

            <!-- STEP NAVIGATION BUTTONS -->
            <div class="step-nav-bottom">
                <button type="button" class="step-btn-nav" onclick="goToStep(4)">&larr; Anterior: openBIM & BCF 3.0</button>
                <span>Módulo 5 de 9</span>
                <button type="button" class="step-btn-nav primary" onclick="goToStep(6)">Siguiente: Curva de MacLeamy &rarr;</button>
            </div>
        </div>

        <!-- MÓDULO 6: CURVA DE MACLEAMY & SIMULADOR -->
        <div class="content-card module-card" id="module-6">
            <div class="section-header-block">
                <span class="section-num-tag">Eje 1 · Análisis Cuantitativo</span>
                <h2 class="section-title">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--emerald)" stroke-width="2.2"><path d="M3 3v18h18"></path><path d="M18.7 8l-5.1 5.2-2.8-2.7L7 14.3"></path></svg>
                    6. Fundamento Cuantitativo: La Curva de MacLeamy (Civitillo, 2021)
                </h2>
            </div>
            <p class="academic-p">
                Formulada originalmente por el arquitecto Patrick MacLeamy y revalidada en investigaciones empíricas contemporáneas (Civitillo, 2021), este modelo matemático fundamenta la viabilidad financiera de la digitalización ConTech en obras civiles. Demuestra que la <strong>capacidad de influir positivamente en el costo final y desempeño energético de una obra es máxima en las etapas iniciales</strong> (prediseño y diseño esquemático) y decae drásticamente a medida que el proyecto entra en ejecución.
            </p>
            <p class="academic-p">
                En sentido opuesto, el <strong>costo financiero de incorporar cambios en el diseño crece exponencialmente</strong> conforme avanza la construcción. Mientras el flujo tradicional en CAD concentra el mayor esfuerzo técnico en la fase de "Documentación de Construcción" (cuando modificar un plano resulta sumamente oneroso), la metodología BIM desplaza el esfuerzo hacia las etapas tempranas de diseño preliminar mediante el principio de <strong>Front-Loading</strong>.
            </p>

            <!-- INTERACTIVE SIMULATOR -->
            <div class="sim-container">
                <h3 style="font-size:18px; font-weight:800; color:var(--navy-primary); margin-bottom:14px; display:flex; align-items:center; gap:8px;">
                    <span>📊</span> Simulador Dinámico de Esfuerzo y Costos (Curva de MacLeamy)
                </h3>
                <div class="sim-controls">
                    <div class="control-group">
                        <label for="shiftSlider">Desplazamiento del Esfuerzo BIM (Front-Loading):</label>
                        <input type="range" id="shiftSlider" min="1" max="5" value="3" step="1" oninput="updateMacLeamyChart()">
                        <span id="shiftValText" style="font-size:12.5px; color:var(--blue-accent); font-family:var(--font-mono); font-weight:700;">Nivel de Madurez: Intermedio (BIM Level 2 - Norma ISO 19650)</span>
                    </div>
                    <div class="control-group">
                        <label for="costMultiplier">Tipología y Complejidad del Proyecto:</label>
                        <select id="costMultiplier" onchange="updateMacLeamyChart()">
                            <option value="1">Edificación Estándar / Residencial (Factor 1.0x)</option>
                            <option value="1.3" selected>Proyecto Industrial Siderúrgico / Guayana (Factor 1.3x)</option>
                            <option value="1.65">Infraestructura Crítica Hospitalaria / Hidroeléctrica (Factor 1.65x)</option>
                        </select>
                    </div>
                </div>

                <div class="chart-wrapper">
                    <canvas id="macleamyCanvas"></canvas>
                </div>
            </div>

            <!-- STEP NAVIGATION BUTTONS -->
            <div class="step-nav-bottom">
                <button type="button" class="step-btn-nav" onclick="goToStep(5)">&larr; Anterior: 8 Dimensiones BIM</button>
                <span>Módulo 6 de 9</span>
                <button type="button" class="step-btn-nav primary" onclick="goToStep(7)">Siguiente: Consola ROI BIM &rarr;</button>
            </div>
        </div>

        <!-- MÓDULO 7: CALCULADORA FINANCIERA ROI BIM -->
        <div class="content-card module-card" id="module-7">
            <div class="section-header-block">
                <span class="section-num-tag">Eje 1 · Análisis Financiero</span>
                <h2 class="section-title">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--emerald)" stroke-width="2.2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    7. Consola Financiera: Calculadora de Retorno de Inversión (ROI BIM)
                </h2>
            </div>
            <p class="academic-p">
                Basada en métricas cuantitativas del <i>Center for Integrated Facility Engineering (CIFE)</i> de la Universidad de Stanford y estadísticas de <i>McGraw Hill Construction</i>, esta herramienta estima el impacto financiero tangible al adoptar coordinación BIM multidisciplinaria en proyectos de edificación e infraestructura pesada:
            </p>

            <!-- CONSOLA HARDWARE-LIKE CALCULADORA -->
            <div class="roi-console-wrap">
                <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:16px;">
                    <div style="font-size:13px; font-weight:800; text-transform:uppercase; letter-spacing:0.08em; color:#38bdf8;">
                        📟 ConTech Financial Terminal · Algoritmo Stanford CIFE
                    </div>
                    <div style="display:flex; gap:8px;">
                        <button type="button" class="preset-btn-dark" onclick="applyPreset(1500000, 7.5, 1.6)">Residencial $1.5M</button>
                        <button type="button" class="preset-btn-dark" onclick="applyPreset(5000000, 9.5, 2.0)">Industrial $5.0M</button>
                        <button type="button" class="preset-btn-dark" onclick="applyPreset(12000000, 11.0, 2.2)">Hospitalario $12M</button>
                    </div>
                </div>

                <!-- DIGITAL DISPLAY -->
                <div class="console-screen">
                    <div>
                        <div class="screen-stat-label">Ahorro en Mitigación RFI</div>
                        <div class="screen-stat-val val-green" id="savingsVal">$170,000</div>
                    </div>
                    <div>
                        <div class="screen-stat-label">Inversión en Modelado BIM</div>
                        <div class="screen-stat-val" id="bimInvestVal" style="color:#f59e0b;">$45,000</div>
                    </div>
                    <div>
                        <div class="screen-stat-label">Beneficio Financiero Neto</div>
                        <div class="screen-stat-val val-green" id="netBenefitVal">+$125,000</div>
                    </div>
                    <div>
                        <div class="screen-stat-label">Retorno Sobre Inversión</div>
                        <div class="screen-stat-val val-green" id="roiVal">+277.8%</div>
                    </div>
                </div>

                <!-- CONTROLES -->
                <div class="console-controls-grid">
                    <div class="console-field">
                        <label for="budgetInput">Presupuesto Directo de Obra (USD $):</label>
                        <input type="number" id="budgetInput" value="2500000" step="50000" oninput="calculateROI()">
                    </div>
                    <div class="console-field">
                        <label for="contingencyRate">Sobrecosto Histórico CAD por Interferencias (%):</label>
                        <input type="number" id="contingencyRate" value="8.5" step="0.5" oninput="calculateROI()">
                    </div>
                    <div class="console-field">
                        <label for="bimCostRate">Honorarios de Coordinación e Ingeniería BIM (%):</label>
                        <input type="number" id="bimCostRate" value="1.8" step="0.1" oninput="calculateROI()">
                    </div>
                    <div class="console-field" style="display:flex; align-items:flex-end;">
                        <div style="background:#1e293b; border-radius:8px; padding:10px 14px; width:100%; font-size:12px; color:#94a3b8;">
                            <strong>Ecuación Rectora:</strong><br>
                            \(\text{ROI} = \frac{\Delta \text{Ahorro (80\% RFI)} - \text{Inversión BIM}}{\text{Inversión BIM}} \times 100\%\)
                        </div>
                    </div>
                </div>
            </div>

            <!-- STEP NAVIGATION BUTTONS -->
            <div class="step-nav-bottom">
                <button type="button" class="step-btn-nav" onclick="goToStep(6)">&larr; Anterior: Curva de MacLeamy</button>
                <span>Módulo 7 de 9</span>
                <button type="button" class="step-btn-nav primary" onclick="goToStep(8)">Siguiente: Estación ConTech 3D &rarr;</button>
            </div>
        </div>

        <!-- MÓDULO 8: ESTACIÓN CONTECH & VISOR 3D LIVE (REEMPLAZA CÓDIGO PYTHON) -->
        <div class="content-card module-card" id="module-8">
            <div class="section-header-block">
                <span class="section-num-tag">Eje 1 · Laboratorio ConTech</span>
                <h2 class="section-title">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--navy-primary)" stroke-width="2.2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                    8. Estación de Coordinación ConTech y Exploración openBIM 3D Live
                </h2>
            </div>
            <p class="academic-p">
                La inspección de modelos federados en obras de infraestructura civil trasciende las viejas hojas de cálculo y la programación de scripts estáticos. En el entorno de preconstrucción digital, el equipo de gerencia de obras utiliza visores WebGL ligeros y neutrales basados en estándares openBIM para auditar las capas disciplinares antes de autorizar cualquier vaciado de concreto en campo.
            </p>

            <!-- ESTACIÓN DE INSPECCIÓN INTERACTIVA -->
            <div class="contech-station-box">
                <div class="station-header">
                    <div>
                        <h4 style="font-size:16px; font-weight:800; color:var(--navy-primary); margin:0;">
                            🕹️ Consola de Control de Capas Disciplinares (Modelo Federado Edificio Corporativo)
                        </h4>
                        <span style="font-size:12.5px; color:var(--text-muted);">
                            Activa o desactiva las especialidades para observar la composición del modelo federado:
                        </span>
                    </div>
                    <span style="background:#dcfce7; color:#166534; font-size:11px; font-weight:800; padding:4px 10px; border-radius:9999px;">
                        ● 142 Entidades IFC Sincronizadas
                    </span>
                </div>

                <div class="layers-toggles-grid">
                    <div class="layer-toggle-chip active" id="chip-est" onclick="toggleLayer('est')">
                        <span>🏛️ Estructura Concreto Armado (EST)</span>
                        <span>ON</span>
                    </div>
                    <div class="layer-toggle-chip active" id="chip-mep" onclick="toggleLayer('mep')">
                        <span>🚰 Red Hidrosanitaria & Pluvial (MEP)</span>
                        <span>ON</span>
                    </div>
                    <div class="layer-toggle-chip active" id="chip-arq" onclick="toggleLayer('arq')">
                        <span>🧱 Cerramientos & Muros (ARQ)</span>
                        <span>ON</span>
                    </div>
                    <div class="layer-toggle-chip active" id="chip-clash" onclick="toggleLayer('clash')">
                        <span>⚡ Matriz Clash Detection BCF</span>
                        <span>ON</span>
                    </div>
                </div>

                <div class="viewport-mock">
                    <div style="position:relative; z-index:2; padding:20px 10px;">
                        <div style="font-size:38px; margin-bottom:8px;">📐</div>
                        <h3 style="font-size:20px; font-weight:800; margin-bottom:8px;">
                            Visor BIM 3D WebGL de Alto Rendimiento en el Servidor Homelab
                        </h3>
                        <p style="font-size:14px; color:#cbd5e1; max-width:640px; margin:0 auto 20px; line-height:1.6;">
                            Explora la maqueta paramétrica real en 3D directamente en tu navegador móvil o de escritorio, realiza cortes transversales en tiempo real, aísla elementos estructurales y consulta atributos paramétricos sin instalar software privativo:
                        </p>
                        <a href="https://lab.motazorrilla.com/bim/" target="_blank" rel="noopener noreferrer" class="live-contech-btn">
                            <span>🚀 Abrir Visor BIM 3D en Vivo en lab.motazorrilla.com</span>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- STEP NAVIGATION BUTTONS -->
            <div class="step-nav-bottom">
                <button type="button" class="step-btn-nav" onclick="goToStep(7)">&larr; Anterior: Consola ROI BIM</button>
                <span>Módulo 8 de 9</span>
                <button type="button" class="step-btn-nav primary" onclick="goToStep(9)">Siguiente: Marco Normativo &rarr;</button>
            </div>
        </div>

        <!-- MÓDULO 9: MARCO NORMATIVO Y ENLACES OFICIALES -->
        <div class="content-card module-card" id="module-9">
            <div class="section-header-block">
                <span class="section-num-tag">Referencias Académicas & Repositorios Oficiales</span>
                <h2 class="section-title">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--navy-primary)" stroke-width="2.2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                    9. Marco Normativo y Bibliografía Académica de Referencia
                </h2>
            </div>
            <p class="academic-p">
                Cada uno de los siguientes estándares y referencias bibliográficas cuenta con un enlace directo a sus respectivos organismos rectores, repositorios oficiales o publicaciones científicas para su consulta y verificación rigurosa:
            </p>

            <ul class="norm-link-list">
                <li>
                    <span>🌐</span>
                    <div>
                        <a href="https://www.iso.org/standard/68078.html" target="_blank" rel="noopener noreferrer">
                            ISO 19650-1:2018 / 2026: Conceptos y Principios de Gestión de la Información BIM
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                        </a>
                        <div style="font-size:12.5px; color:var(--text-muted);">Organización Internacional de Normalización (ISO), Ginebra. Norma rectora del CDE y el ciclo de vida del activo.</div>
                    </div>
                </li>
                <li>
                    <span>🌐</span>
                    <div>
                        <a href="https://www.iso.org/standard/68080.html" target="_blank" rel="noopener noreferrer">
                            ISO 19650-2:2018: Fase de Entrega de Activos de Construcción (Delivery Phase)
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                        </a>
                        <div style="font-size:12.5px; color:var(--text-muted);">Procedimientos formales para contratación, pliegos EIR, BEP y contenedores de información.</div>
                    </div>
                </li>
                <li>
                    <span>🏛️</span>
                    <div>
                        <a href="https://technical.buildingsmart.org/standards/ifc/" target="_blank" rel="noopener noreferrer">
                            ISO 16739-1:2024 / buildingSMART IFC 4.3: Industry Foundation Classes
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                        </a>
                        <div style="font-size:12.5px; color:var(--text-muted);">Esquema universal neutro con soporte expandido para vialidad, puentes e infraestructuras lineales.</div>
                    </div>
                </li>
                <li>
                    <span>🏛️</span>
                    <div>
                        <a href="https://technical.buildingsmart.org/standards/bcf/" target="_blank" rel="noopener noreferrer">
                            buildingSMART BCF 3.0: BIM Collaboration Format (API & XML/JSON)
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                        </a>
                        <div style="font-size:12.5px; color:var(--text-muted);">Protocolo abierto de comunicación de interferencias y discrepancias espaciales en obra.</div>
                    </div>
                </li>
                <li>
                    <span>⚖️</span>
                    <div>
                        <a href="http://historico.tsj.gob.ve/legislacion/ccv.html" target="_blank" rel="noopener noreferrer">
                            Código Civil de Venezuela (1982) · Artículo 1637 (Responsabilidad Decenal)
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                        </a>
                        <div style="font-size:12.5px; color:var(--text-muted);">Tribunal Supremo de Justicia (TSJ). Gaceta Oficial N° 2.990 Extraordinaria. Responsabilidad decenal por ruina o vicios de suelo/construcción.</div>
                    </div>
                </li>
                <li>
                    <span>📐</span>
                    <div>
                        <a href="http://www.fondonorma.org.ve/" target="_blank" rel="noopener noreferrer">
                            COVENIN 2000-87 / 2000-92: Mediciones y Codificación de Partidas para Edificaciones
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                        </a>
                        <div style="font-size:12.5px; color:var(--text-muted);">FONDONORMA y Colegio de Ingenieros de Venezuela (CIV). Criterios oficiales de cubicación de concreto, acero y encofrados.</div>
                    </div>
                </li>
                <li>
                    <span>📚</span>
                    <div>
                        <a href="http://www.civ.net.ve/" target="_blank" rel="noopener noreferrer">
                            Harry Osers (1985): Cómputos Métricos y Presupuestos en Edificaciones
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                        </a>
                        <div style="font-size:12.5px; color:var(--text-muted);">Doctrina clásica venezolana para la estructuración de planillas analíticas de despiece y medición en obras civiles.</div>
                    </div>
                </li>
                <li>
                    <span>📊</span>
                    <div>
                        <a href="https://www.researchgate.net/" target="_blank" rel="noopener noreferrer">
                            Civitillo, J. (2021): Cost Management in BIM: Quantitative Analysis of MacLeamy Curve
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                        </a>
                        <div style="font-size:12.5px; color:var(--text-muted);">Journal of Construction Engineering and Project Management, 11(2), 45-58. Validación cuantitativa del front-loading de MacLeamy.</div>
                    </div>
                </li>
                <li>
                    <span>📖</span>
                    <div>
                        <a href="https://www.wiley.com/en-us/BIM+Handbook%3A+A+Guide+to+Building+Information+Modeling+for+Owners%2C+Designers%2C+Engineers%2C+Contractors%2C+and+Facility+Managers%2C+3rd+Edition-p-9781119287537" target="_blank" rel="noopener noreferrer">
                            Eastman, C., Teicholz, P., Sacks, R., &amp; Liston, K. (2018): BIM Handbook (3rd Ed.)
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                        </a>
                        <div style="font-size:12.5px; color:var(--text-muted);">John Wiley &amp; Sons, Hoboken, NJ. La obra de referencia canónica sobre gestión y modelado de información de edificaciones.</div>
                    </div>
                </li>
            </ul>

            <!-- STEP NAVIGATION BUTTONS -->
            <div class="step-nav-bottom">
                <button type="button" class="step-btn-nav" onclick="goToStep(8)">&larr; Anterior: Estación ConTech 3D</button>
                <span>Módulo 9 de 9</span>
                <button type="button" class="step-btn-nav primary" onclick="goToStep(1)">Volver al Inicio (Módulo 1) &uarr;</button>
            </div>
        </div>

        <!-- FOOTER INSTITUCIONAL ACADÉMICO TRADICIONAL -->
        <footer class="institutional-footer">
            <div class="inst-footer-grid">
                <div>
                    <div style="display:flex; align-items:center; gap:12px; margin-bottom:14px;">
                        <img src="../../assets/img/logo-mota-zorrilla.jpg" alt="MotaZorrilla" style="height:32px; border-radius:4px;" onerror="this.src='/assets/img/logo-mota-zorrilla.jpg'">
                        <span style="font-weight:800; font-size:16px; color:var(--navy-primary);">MotaZorrilla · Ingeniería & ConTech</span>
                    </div>
                    <p style="font-size:13.5px; color:var(--text-muted); line-height:1.7; margin-bottom:16px;">
                        Cátedra e Investigación en Transformación Digital de la Industria de la Construcción. Programa académico de Postgrado impartido en la Universidad Nororiental Privada Gran Mariscal de Ayacucho (UGMA) y la Universidad Católica Andrés Bello (UCAB Guayana).
                    </p>
                    <div style="font-size:12.5px; color:var(--text-light);">
                        Facilitador: <strong>Ing. Héctor Mota Zorrilla</strong> · Consultor BIM / CIV N° 124.582
                    </div>
                </div>
                <div>
                    <div class="inst-col-title">Rutas Académicas</div>
                    <ul class="inst-links">
                        <li><a href="../">Hub Gerencia de Obras UGMA</a></li>
                        <li><a href="../cde-iso19650/">Módulo 2: CDE ISO 19650</a></li>
                        <li><a href="../clash-detection/">Módulo 3: Clash Detection</a></li>
                        <li><a href="../planificacion-4d-5d/">Módulo 4: 4D / 5D & EVM</a></li>
                        <li><a href="../ia-control-obra/">Módulo 5: Drones e IA en Obra</a></li>
                        <li><a href="../energia-solar-sostenibilidad/">Módulo 6: Sostenibilidad 6D</a></li>
                        <li><a href="../taller-integrador/">Módulo 7: Taller Integrador</a></li>
                    </ul>
                </div>
                <div>
                    <div class="inst-col-title">Entornos ConTech</div>
                    <ul class="inst-links">
                        <li><a href="https://lab.motazorrilla.com/bim/" target="_blank" rel="noopener noreferrer">Visor BIM 3D (Laboratorio)</a></li>
                        <li><a href="https://aula.motazorrilla.com/" target="_blank" rel="noopener noreferrer">Aula Virtual Principal</a></li>
                        <li><a href="https://motazorrilla.com/" target="_blank" rel="noopener noreferrer">Portal Corporativo</a></li>
                        <li><a href="https://wa.me/584148873615" target="_blank" rel="noopener noreferrer">Consultas Académicas WhatsApp</a></li>
                    </ul>
                </div>
            </div>
            <div class="inst-bottom-bar">
                <span>© 2026 Universidad Nororiental Gran Mariscal de Ayacucho (UGMA) · Decanato de Postgrado e Investigación.</span>
                <span>Desarrollado bajo el Ecosistema ConTech openBIM · Ciudad Guayana, Venezuela.</span>
            </div>
        </footer>

    </div>

    <!-- MODAL POPUP PARA LAS 8 DIMENSIONES BIM -->
    <div class="dim-modal-overlay" id="dimModal" onclick="closeDimModal(event)">
        <div class="dim-modal-content" onclick="event.stopPropagation()">
            <button type="button" class="dim-modal-close" onclick="closeDimModal()">✕</button>
            <div id="dimModalBody">
                <!-- Se llena dinámicamente con JavaScript -->
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT: PAGINADOR, MODAL DIMENSIONES, CHART, ROI, INTERACTIVOS -->
    <script>
        // MODO DE VISTA: true = solo muestra un módulo a la vez; false = vista completa corrida
        let isPaginatedMode = true;
        let currentStep = 1;
        const totalSteps = 9;

        function goToStep(step) {
            currentStep = step;
            const pills = document.querySelectorAll('.step-pill');
            pills.forEach((p, idx) => {
                if (idx + 1 === step) {
                    p.classList.add('active');
                    p.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
                } else {
                    p.classList.remove('active');
                }
            });

            if (isPaginatedMode) {
                for (let i = 1; i <= totalSteps; i++) {
                    const card = document.getElementById(`module-${i}`);
                    if (card) {
                        card.style.display = (i === step) ? 'block' : 'none';
                    }
                }
            } else {
                const target = document.getElementById(`module-${step}`);
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            }

            // Si es módulo 6, actualizar gráfica
            if (step === 6 && macLeamyChartInstance) {
                setTimeout(() => { macLeamyChartInstance.resize(); macLeamyChartInstance.update(); }, 150);
            }
        }

        function toggleViewMode() {
            isPaginatedMode = !isPaginatedMode;
            const btnText = document.getElementById('toggleModeText');
            const btnIcon = document.getElementById('toggleModeIcon');
            
            if (isPaginatedMode) {
                btnText.innerText = "Ver Todos los Módulos";
                btnIcon.innerText = "📑";
                goToStep(currentStep);
            } else {
                btnText.innerText = "Modo Paginado (Foco)";
                btnIcon.innerText = "🔍";
                for (let i = 1; i <= totalSteps; i++) {
                    const card = document.getElementById(`module-${i}`);
                    if (card) card.style.display = 'block';
                }
                const currentCard = document.getElementById(`module-${currentStep}`);
                if (currentCard) currentCard.scrollIntoView({ behavior: 'smooth' });
            }
        }

        // INTERACTIVO 1: INSPECTOR ONTOLÓGICO
        const elementData = {
            wall: {
                cad: "• Primitiva: 4 Líneas desconectadas + 1 Hatch de puntos<br>• Layer: 'ARQ-MUROS'<br>• Semántica: Cero. El sistema no sabe qué es.<br>• Volumen: Inexistente (requiere cálculo manual)<br>• Colisiones: Ciega a cruces con tuberías sanitarias",
                ifc: "• Entidad: <strong>IfcWallStandardCase</strong> (GUID: 2O2Fr$t4X7Z... )<br>• Material: Concreto Armado f'c = 280 kg/cm²<br>• Pset_WallCommon: FireRating = RF-120 | LoadBearing = TRUE<br>• Qto_WallBaseQuantities: NetVolume = 3.36 m³ | NetSideArea = 22.4 m²<br>• Partida Presupuestaria: COVENIN E-323.000 (Cómputo en tiempo real)"
            },
            beam: {
                cad: "• Primitiva: 2 Líneas continuas en plano de planta<br>• Layer: 'EST-VIGAS'<br>• Peralte: Solo indicado en un corte separado (desacoplado)<br>• Volumen: Desconocido sin medir longitud entre columnas a mano<br>• Intersecciones: Se superpone con columnas sin deducir volumen",
                ifc: "• Entidad: <strong>IfcBeam</strong> (GUID: 1K8La$m2Y9W... )<br>• Dimensiones: 30x50 cm | Luz Libre = 5.60 m<br>• Pset_BeamCommon: Span = 5.60 m | ConcreteGrade = HA-30<br>• Qto_BeamBaseQuantities: NetVolume = 0.84 m³ (Deducción automática viga/columna)<br>• Partida Presupuestaria: COVENIN E-323.100"
            },
            column: {
                cad: "• Primitiva: Rectángulo 2D de 40x40 cm con achurado sólido<br>• Layer: 'EST-COLUMNAS'<br>• Altura de entrepiso: Desconocida en el dibujo 2D<br>• Cuantía de Acero: Indicada en una tabla externa propensa a error<br>• Cómputo: Requiere multiplicar área por altura de entrepiso a mano",
                ifc: "• Entidad: <strong>IfcColumn</strong> (GUID: 3M9Kp$q1Z5R... )<br>• Perfil: Rectangular 40x40 cm | Altura neta = 3.20 m<br>• Pset_ColumnCommon: LoadBearing = TRUE | Level = Nivel +3.20m<br>• Qto_ColumnBaseQuantities: NetVolume = 0.512 m³ | FormworkArea = 5.12 m²<br>• Partida Presupuestaria: COVENIN E-321.100"
            },
            pipe: {
                cad: "• Primitiva: Línea simple de trazo discontinuo en color magenta<br>• Layer: 'SAN-DESAGUE-4'<br>• Pendiente: Texto estático anotado ('s = 2%') sin verificación física<br>• Cota batea: Desconocida espacialmente<br>• Colisión: No detecta si atraviesa el alma de una viga de carga",
                ifc: "• Entidad: <strong>IfcPipeSegment</strong> (GUID: 0P4Tr$v8N2X... )<br>• Material: PVC Sanitario Espiga/Campana Ø 110 mm (4\")<br>• Pset_PipeSegmentOccurrence: Slope = 2.00% | InvertElevation = +2.85 m<br>• Detección de Choque: <strong>Alerta BCF Inmediata</strong> al intersectar IfcBeam<br>• Partida Presupuestaria: COVENIN I-SAN.400"
            }
        };

        function inspectElement(type) {
            document.querySelectorAll('.inspector-btn').forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');
            document.getElementById('cadDetails').innerHTML = elementData[type].cad;
            document.getElementById('ifcDetails').innerHTML = elementData[type].ifc;
        }

        // INTERACTIVO 2: HARRY OSERS VS QTO
        function calcOsersVsQTO() {
            const b = parseFloat(document.getElementById('vigaB').value) || 0.30;
            const h = parseFloat(document.getElementById('vigaH').value) || 0.50;
            const L = parseFloat(document.getElementById('vigaL').value) || 5.60;
            const N = parseInt(document.getElementById('vigaN').value) || 4;
            const slab = parseFloat(document.getElementById('vigaSlab').value) || 0.20;

            const volUnit = b * h * L;
            const volTotal = volUnit * N;

            // Encofrado de viga según doctrina Osers: Fondo + 2 caras laterales deduciendo losa
            const sideH = Math.max(0, h - slab);
            const encofradoUnit = (2 * sideH + b) * L;
            const encofradoTotal = encofradoUnit * N;

            document.getElementById('osersResText').innerHTML = `
                • Vol. Concreto: <strong>${volTotal.toFixed(3)} m³</strong> (V = b × h × L × N)<br>
                • Área Encofrado: <strong>${encofradoTotal.toFixed(3)} m²</strong> ([2×(h-e) + b] × L × N)<br>
                • Tiempo Humano Estimado: 25 - 40 minutos por nivel<br>
                • Probabilidad de Error por Desacople: ~12.5%
            `;

            document.getElementById('qtoResText').innerHTML = `
                • Qto_BeamBaseQuantities.NetVolume: <strong>${volTotal.toFixed(3)} m³</strong><br>
                • Qto_BeamBaseQuantities.GrossSideArea: <strong>${encofradoTotal.toFixed(3)} m²</strong><br>
                • Tiempo Algorítmico IFC: <strong>&lt; 0.05 segundos</strong><br>
                • Tasa de Error Humano: <strong>0.00% (Kernel CSG Exacto)</strong>
            `;
        }

        // INTERACTIVO 3: KANBAN CDE
        function moveKanban(itemId, targetCol) {
            const item = document.getElementById(itemId);
            if (!item) return;

            if (targetCol === 'shared') {
                document.getElementById('sharedItems').appendChild(item);
                item.querySelector('button').innerText = "Aprobar a PUBLISHED →";
                item.querySelector('button').setAttribute('onclick', `moveKanban('${itemId}', 'published')`);
            } else if (targetCol === 'published') {
                document.getElementById('pubItems').appendChild(item);
                item.querySelector('button').innerText = "Archivar en ARCHIVED →";
                item.querySelector('button').setAttribute('onclick', `moveKanban('${itemId}', 'archived')`);
                document.getElementById('cdeLegalShieldOutput').style.display = 'block';
            } else if (targetCol === 'archived') {
                document.getElementById('arcItems').appendChild(item);
                item.querySelector('button').innerText = "✓ Custodia As-Built Inmutable";
                item.querySelector('button').disabled = true;
                item.querySelector('button').style.background = "#f1f5f9";
                item.querySelector('button').style.color = "#94a3b8";
            }
            updateKanbanCounters();
        }

        function updateKanbanCounters() {
            document.getElementById('wipCount').innerText = document.getElementById('wipItems').children.length;
            document.getElementById('sharedCount').innerText = document.getElementById('sharedItems').children.length;
            document.getElementById('pubCount').innerText = document.getElementById('pubItems').children.length;
            document.getElementById('arcCount').innerText = document.getElementById('arcItems').children.length;
        }

        // INTERACTIVO 4: GENERADOR BCF
        function generateBCFPayload() {
            const topic = document.getElementById('bcfTopic').value;
            const priority = document.getElementById('bcfPriority').value;
            const assignee = document.getElementById('bcfAssignee').value;
            const date = new Date().toISOString();

            const jsonBCF = {
                "bcf_version": "3.0",
                "topic": {
                    "guid": "bcf-9a2c-4f11-b0e5-7798c8e192a0",
                    "topic_type": "ClashDetection",
                    "topic_status": "Open",
                    "title": topic === "clash-viga-tubo" ? "Interferencia Dura: Viga V-101 vs Tubo Pluvial 6\"" : (topic === "clash-col-ducto" ? "Colisión: Columna C-01 vs Ducto Clima" : "Interferencia: Bandeja Eléctrica"),
                    "priority": priority,
                    "creation_date": date,
                    "assigned_to": assignee
                },
                "viewpoint": {
                    "camera_view_point": { "x": 14.52, "y": 8.30, "z": 4.15 },
                    "camera_direction": { "x": -0.707, "y": 0.707, "z": -0.25 },
                    "components_selection": [
                        { "ifc_guid": "1K8La$m2Y9W...", "discipline": "EST" },
                        { "ifc_guid": "0P4Tr$v8N2X...", "discipline": "MEP" }
                    ]
                }
            };

            document.getElementById('bcfPayloadDisplay').innerText = JSON.stringify(jsonBCF, null, 2);
        }

        // 8 DIMENSIONES BIM MODAL DATA
        const dimDetails = {
            1: {
                title: "1D BIM · Idea, Factibilidad & Marco Legal",
                norma: "ISO 19650-1 / AIA Document E203",
                badge: "1D · ESTRATEGIA INICIAL",
                content: `
                    <p style="margin-bottom:12px;"><strong>Definición Técnica:</strong> La primera dimensión de la metodología BIM abarca la estructuración preliminar del proyecto de inversión, el plan estratégico de necesidades del cliente y el marco de factibilidad físico-legal.</p>
                    <h5 style="font-weight:800; color:var(--navy-primary); margin:12px 0 6px;">Entregables Formales:</h5>
                    <ul style="padding-left:18px; margin-bottom:12px; line-height:1.7;">
                        <li><strong>EIR (Exchange Information Requirements):</strong> Requisitos de intercambio de información definidos por el comitente.</li>
                        <li><strong>Estudio de Cabida y Zonificación Urbana:</strong> Respeto a variables urbanas locales (densidad, retiros, alturas de zonificación).</li>
                        <li><strong>Modelo de Masa Conceptual (LOD 100):</strong> Evaluación de volumetría preliminar y asoleamiento primario.</li>
                    </ul>
                    <div style="background:#f1f5f9; padding:12px; border-radius:8px; font-size:13px;">
                        <strong>Impacto en Gerencia:</strong> Tomar decisiones equivocadas en 1D invalida cualquier optimización geométrica posterior.
                    </div>
                `
            },
            2: {
                title: "2D BIM · Vectores, Catastro & Tramitación",
                norma: "ISO 128 / Normativa Municipal de Ingeniería",
                badge: "2D · PLANIMETRÍA BASE",
                content: `
                    <p style="margin-bottom:12px;"><strong>Definición Técnica:</strong> La dimensión 2D no desaparece en BIM; evoluciona para servir como base cartográfica, poligonal topográfica y documentación legal para entidades públicas y bancarias.</p>
                    <h5 style="font-weight:800; color:var(--navy-primary); margin:12px 0 6px;">Rol en el Ecosistema Digital:</h5>
                    <ul style="padding-left:18px; margin-bottom:12px; line-height:1.7;">
                        <li><strong>Levantamiento Topográfico Georreferenciado:</strong> Coordenadas oficiales REGVEN / UTM WGS84.</li>
                        <li><strong>Planos de Permisología Municipal:</strong> Documentos extraídos directamente del modelo como vistas sincronizadas.</li>
                        <li><strong>Láminas Contractuales:</strong> Planos sellados para protocolización notarial y avalúos bancarios.</li>
                    </ul>
                `
            },
            3: {
                title: "3D BIM · Geometría Paramétrica & openBIM Federado",
                norma: "ISO 16739-1:2024 (IFC 4.3) / buildingSMART",
                badge: "3D · COORDINACIÓN ESPACIAL",
                content: `
                    <p style="margin-bottom:12px;"><strong>Definición Técnica:</strong> Modelado computacional tridimensional paramétrico y federación de modelos de Arquitectura, Estructura e Instalaciones MEP bajo el estándar neutral IFC 4.3.</p>
                    <h5 style="font-weight:800; color:var(--navy-primary); margin:12px 0 6px;">Procesos Clave:</h5>
                    <ul style="padding-left:18px; margin-bottom:12px; line-height:1.7;">
                        <li><strong>Clash Detection Automatizado:</strong> Detección de interferencias duras, blandas y de holgura de montaje.</li>
                        <li><strong>Generación de Tickets BCF 3.0:</strong> Comunicación de colisiones espaciales sin adjuntar archivos de gran tamaño.</li>
                        <li><strong>Kernel CSG (Constructive Solid Geometry):</strong> Deducción matemática real de vacíos y uniones.</li>
                    </ul>
                `
            },
            4: {
                title: "4D BIM · Simulación Constructiva & Gestión del Tiempo",
                norma: "AACE International 29R-03 / ISO 21500",
                badge: "4D · VINCULACIÓN GANTT",
                content: `
                    <p style="margin-bottom:12px;"><strong>Definición Técnica:</strong> Integración temporal de la WBS (*Work Breakdown Structure*) y el cronograma CPM/Gantt con los elementos espaciales del modelo digital.</p>
                    <h5 style="font-weight:800; color:var(--navy-primary); margin:12px 0 6px;">Capacidades de Vanguardia:</h5>
                    <ul style="padding-left:18px; margin-bottom:12px; line-height:1.7;">
                        <li><strong>Simulación de Secuencias de Vaciado:</strong> Visualización cronológica de encofrados, fraguados y desencofrados.</li>
                        <li><strong>Logística de Grúas y Acopios:</strong> Planificación de radios de giro y áreas de descarga de materiales pesados.</li>
                        <li><strong>Análisis de Líneas de Balance:</strong> Control del ritmo constructivo para cuadrillas de obra.</li>
                    </ul>
                `
            },
            5: {
                title: "5D BIM · Presupuestación Dinámica & Valor Ganado (EVM)",
                norma: "COVENIN 2000-87 / PMI PMBOK EVM Practice Standard",
                badge: "5D · GESTIÓN DE COSTOS",
                content: `
                    <p style="margin-bottom:12px;"><strong>Definición Técnica:</strong> Extracción algorítmica de cómputos métricos (QTO) vinculada al Análisis de Precios Unitarios (APU) y al control financiero de Valor Ganado (*Earned Value Management*).</p>
                    <h5 style="font-weight:800; color:var(--navy-primary); margin:12px 0 6px;">Métricas Cuantitativas:</h5>
                    <ul style="padding-left:18px; margin-bottom:12px; line-height:1.7;">
                        <li><strong>PV (Planned Value) / EV (Earned Value) / AC (Actual Cost):</strong> Indicadores de salud financiera en tiempo real.</li>
                        <li><strong>CPI (Cost Performance Index) & SPI (Schedule Performance Index):</strong> Predicción del costo final de la obra a culminar.</li>
                        <li><strong>Articulación con Catálogo COVENIN:</strong> Asignación directa de códigos de partidas presupuestarias.</li>
                    </ul>
                `
            },
            6: {
                title: "6D BIM · Sostenibilidad, Clima & Descarbonización",
                norma: "ASHRAE 90.1 / ISO 14040 LCA / LEED v5 / EDGE",
                badge: "6D · EFICIENCIA AMBIENTAL",
                content: `
                    <p style="margin-bottom:12px;"><strong>Definición Técnica:</strong> Modelado bioclimático y análisis del ciclo de vida del edificio, huella de carbono incorporado en materiales y diseño solar pasivo/activo.</p>
                    <h5 style="font-weight:800; color:var(--navy-primary); margin:12px 0 6px;">Alcance Técnico:</h5>
                    <ul style="padding-left:18px; margin-bottom:12px; line-height:1.7;">
                        <li><strong>Análisis de Radiación Solar & Sombras:</strong> Optimización de protecciones solares en fachadas tropicales (Guayana).</li>
                        <li><strong>Energía Solar Fotovoltaica:</strong> Cálculo del rendimiento del sistema solar con coeficientes HSP locales.</li>
                        <li><strong>LCA (Life Cycle Assessment):</strong> Cuantificación de kilogramos de CO₂ por m³ de concreto vaciado.</li>
                    </ul>
                `
            },
            7: {
                title: "7D BIM · Facility Management & Mantenimiento de Activos",
                norma: "BS 1192-4 (COBie) / ISO 55000 Asset Management",
                badge: "7D · GEMELO DIGITAL EN OPERACIÓN",
                content: `
                    <p style="margin-bottom:12px;"><strong>Definición Técnica:</strong> Transferencia de datos paramétricos As-Built al operador final del edificio a través del esquema neutral COBie (*Construction Operations Building Information Exchange*).</p>
                    <h5 style="font-weight:800; color:var(--navy-primary); margin:12px 0 6px;">Beneficios Operacionales:</h5>
                    <ul style="padding-left:18px; margin-bottom:12px; line-height:1.7;">
                        <li><strong>Planes de Mantenimiento Preventivo:</strong> Historial de vida útil de transformadores, bombas hidroneumáticas y chillers.</li>
                        <li><strong>Conexión IoT / SCADA:</strong> Monitoreo de consumos energéticos y fallas en tiempo real.</li>
                        <li><strong>Fin del Archivo Muerto:</strong> Manuales de operación y garantías vinculados directamente a cada elemento 3D.</li>
                    </ul>
                `
            },
            8: {
                title: "8D a 10D BIM · Nuevas Fronteras: Seguridad, Lean & IA",
                norma: "ISO 45001 / OSHA / Lean Construction Institute",
                badge: "8D-10D · CONTECH AVANZADO",
                content: `
                    <p style="margin-bottom:12px;"><strong>Definición Técnica:</strong> Las dimensiones emergentes de la industria 4.0 que complementan las 7 dimensiones canónicas de buildingSMART:</p>
                    <ul style="padding-left:18px; margin-bottom:12px; line-height:1.7;">
                        <li><strong>8D BIM (Seguridad y Salud Laboral):</strong> Simulación de riesgos de caída en bordes de losa, líneas de vida y protocolos de evacuación en obra según COVENIN 2270 / OSHA.</li>
                        <li><strong>9D BIM (Lean Construction):</strong> Eliminación sistemática de desperdicios (*Muda*), optimización de flujos y *Last Planner System*.</li>
                        <li><strong>10D BIM (Industrialización & IA Generativa):</strong> Prefabricación off-site, robótica de construcción y control de avance con visión artificial por drones.</li>
                    </ul>
                `
            }
        };

        function openDimModal(dimNumber) {
            const data = dimDetails[dimNumber];
            if (!data) return;

            const modalBody = document.getElementById('dimModalBody');
            modalBody.innerHTML = `
                <div style="font-family:var(--font-mono); font-size:12px; font-weight:800; color:var(--blue-accent); text-transform:uppercase; margin-bottom:8px;">
                    ${data.badge} • ${data.norma}
                </div>
                <h3 style="font-size:22px; font-weight:800; color:var(--navy-primary); margin-bottom:16px;">
                    ${data.title}
                </h3>
                <div style="font-size:14.5px; color:var(--text-muted); line-height:1.75;">
                    ${data.content}
                </div>
            `;
            document.getElementById('dimModal').style.display = 'flex';
        }

        function closeDimModal(e) {
            document.getElementById('dimModal').style.display = 'none';
        }

        // TOGGLE CAPAS DISCIPLINARES EN CONTECH STATION
        function toggleLayer(layer) {
            const chip = document.getElementById(`chip-${layer}`);
            if (chip.classList.contains('active')) {
                chip.classList.remove('active');
                chip.querySelector('span:last-child').innerText = 'OFF';
            } else {
                chip.classList.add('active');
                chip.querySelector('span:last-child').innerText = 'ON';
            }
        }

        // CHARTS & CALCULADORA ROI
        let macLeamyChartInstance = null;

        function initMacLeamyChart() {
            const canvas = document.getElementById('macleamyCanvas');
            if (!canvas) return;
            const ctx = canvas.getContext('2d');
            
            const labels = ['Prediseño', 'Diseño Esquemático', 'Desarrollo de Detalle', 'Documentación', 'Construcción', 'Operación'];
            const abilityData = [100, 85, 60, 35, 15, 5];
            const changeCostData = [5, 12, 28, 55, 95, 100];
            const cadData = [10, 20, 35, 85, 50, 10];
            const bimData = [25, 65, 85, 45, 20, 8];

            macLeamyChartInstance = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [
                        {
                            label: 'Capacidad de Impactar Costo y Desempeño (Curva 1)',
                            data: abilityData,
                            borderColor: '#0284c7',
                            backgroundColor: 'rgba(2, 132, 199, 0.05)',
                            borderWidth: 2.5,
                            borderDash: [5, 5],
                            tension: 0.4,
                            pointRadius: 4
                        },
                        {
                            label: 'Costo Financiero de Cambios en Diseño (Curva 2)',
                            data: changeCostData,
                            borderColor: '#e11d48',
                            backgroundColor: 'rgba(225, 29, 72, 0.05)',
                            borderWidth: 2.5,
                            borderDash: [5, 5],
                            tension: 0.4,
                            pointRadius: 4
                        },
                        {
                            label: 'Flujo Tradicional CAD (Curva 3)',
                            data: cadData,
                            borderColor: '#94a3b8',
                            backgroundColor: 'rgba(148, 163, 184, 0.1)',
                            borderWidth: 2.5,
                            tension: 0.4,
                            pointRadius: 5
                        },
                        {
                            label: 'Flujo Metodología BIM (Curva 4 - Front-Loading)',
                            data: bimData,
                            borderColor: '#047857',
                            backgroundColor: 'rgba(4, 120, 87, 0.15)',
                            borderWidth: 3.5,
                            tension: 0.4,
                            pointRadius: 6,
                            fill: true
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    interaction: { mode: 'index', intersect: false },
                    plugins: {
                        legend: {
                            position: 'top',
                            labels: {
                                color: '#0f172a',
                                font: { family: "'Plus Jakarta Sans', sans-serif", size: 12, weight: '600' },
                                boxWidth: 16
                            }
                        }
                    },
                    scales: {
                        x: { grid: { color: '#e2e8f0' } },
                        y: {
                            grid: { color: '#e2e8f0' },
                            title: { display: true, text: 'Nivel Relativo de Esfuerzo / Costo (%)' },
                            min: 0, max: 110
                        }
                    }
                }
            });
        }

        function updateMacLeamyChart() {
            if (!macLeamyChartInstance) return;
            const shift = parseInt(document.getElementById('shiftSlider').value);
            const multiplier = parseFloat(document.getElementById('costMultiplier').value);
            const shiftText = document.getElementById('shiftValText');

            let newBimData;
            if (shift === 1) {
                shiftText.innerText = "Nivel de Madurez: Inicial (BIM Level 1 / Modelado Aislado)";
                newBimData = [15, 40, 65, 60, 30, 10];
            } else if (shift === 2) {
                shiftText.innerText = "Nivel de Madurez: Colaboración Parcial (Intercambio BCF)";
                newBimData = [20, 55, 75, 50, 25, 9];
            } else if (shift === 3) {
                shiftText.innerText = "Nivel de Madurez: Intermedio (BIM Level 2 - Norma ISO 19650)";
                newBimData = [25, 65, 85, 45, 20, 8];
            } else if (shift === 4) {
                shiftText.innerText = "Nivel de Madurez: Avanzado (Integración 4D/5D QTO)";
                newBimData = [35, 78, 92, 38, 16, 7];
            } else {
                shiftText.innerText = "Nivel de Madurez: Óptimo (Gemelo Digital & ConTech)";
                newBimData = [45, 90, 95, 30, 12, 6];
            }

            const baseChangeCost = [5, 12, 28, 55, 95, 100];
            const updatedCost = baseChangeCost.map(val => Math.min(108, val * multiplier));

            macLeamyChartInstance.data.datasets[3].data = newBimData;
            macLeamyChartInstance.data.datasets[1].data = updatedCost;
            macLeamyChartInstance.update();
        }

        function calculateROI() {
            const budget = parseFloat(document.getElementById('budgetInput').value) || 0;
            const contingencyRate = parseFloat(document.getElementById('contingencyRate').value) || 0;
            const bimCostRate = parseFloat(document.getElementById('bimCostRate').value) || 0;

            const typicalReworkCost = budget * (contingencyRate / 100);
            const estimatedSavings = typicalReworkCost * 0.80;
            const bimInvestment = budget * (bimCostRate / 100);
            const netBenefit = estimatedSavings - bimInvestment;

            let netROI = 0;
            if (bimInvestment > 0) {
                netROI = (netBenefit / bimInvestment) * 100;
            }

            document.getElementById('savingsVal').innerText = '$' + Math.round(estimatedSavings).toLocaleString('en-US');
            document.getElementById('bimInvestVal').innerText = '$' + Math.round(bimInvestment).toLocaleString('en-US');
            document.getElementById('netBenefitVal').innerText = (netBenefit >= 0 ? '+$' : '-$') + Math.abs(Math.round(netBenefit)).toLocaleString('en-US');
            document.getElementById('roiVal').innerText = (netROI >= 0 ? '+' : '') + netROI.toFixed(1) + '%';
        }

        function applyPreset(budget, contingency, bimRate) {
            document.getElementById('budgetInput').value = budget;
            document.getElementById('contingencyRate').value = contingency;
            document.getElementById('bimCostRate').value = bimRate;
            calculateROI();
        }

        window.addEventListener('DOMContentLoaded', () => {
            initMacLeamyChart();
            calculateROI();
            calcOsersVsQTO();
            generateBCFPayload();
            goToStep(1);
        });
    </script>
</body>
</html>
