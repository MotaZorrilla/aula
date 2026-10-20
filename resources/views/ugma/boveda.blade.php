<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bóveda Centralizada de Descargas & Aula Virtual · Módulo V · Postgrado UGMA</title>

    <meta name="title" content="Módulo V: Tecnología y Sostenibilidad en Gerencia de Obras · Postgrado UGMA">
    <meta name="description" content="Diplomado en Planificación y Gerencia de Obras UGMA. ConTech, openBIM ISO 19650, Clash Detection 3D, Simulación 4D/5D EVM, IA Agéntica, Sostenibilidad Solar y RCD por el Ing. Héctor Mota.">
    <meta name="keywords" content="UGMA, Gerencia de Obras, ConTech, Metodologia BIM, ISO 19650, Curva MacLeamy, Navisworks, Three.js, IFC 4.3, IA Construcción, Sostenibilidad, RCD, Héctor Mota">
    <meta name="author" content="Héctor Mota Zorrilla">
    <meta name="theme-color" content="#0f2942">
    <link rel="canonical" href="https://aula.motazorrilla.com/ugma-gerencia-obras/">

    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="shortcut icon" href="/favicon.ico">

    <!-- Open Graph -->
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://aula.motazorrilla.com/ugma-gerencia-obras/">
    <meta property="og:title" content="Módulo V: Tecnología y Sostenibilidad en Gerencia de Obras · UGMA">
    <meta property="og:description" content="30 Horas Académicas en ConTech, Masterclass BIM, Simulación 4D/5D, IA y Eficiencia Solar. Facilitador: Ing. Héctor Mota.">
    <meta property="og:image" content="https://aula.motazorrilla.com/assets/img/profile.jpg">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">
    
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
            --navy-surface: #1e3a5f;
            --blue-accent: #0284c7;
            --blue-light: #e0f2fe;
            --blue-hover: #0369a1;
            
            --emerald: #047857;
            --emerald-light: #d1fae5;
            --amber: #b45309;
            --amber-light: #fef3c7;
            --purple: #6d28d9;
            --purple-light: #ede9fe;
            --rose: #be123c;
            --rose-light: #ffe4e6;

            --font-sans: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            --font-mono: 'JetBrains Mono', monospace;
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.07), 0 2px 4px -2px rgba(0, 0, 0, 0.05);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.08), 0 4px 6px -4px rgba(0, 0, 0, 0.04);
            --shadow-hover: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.06);
        }

        * { margin:0; padding:0; box-sizing:border-box; font-family: var(--font-sans); }
        body { 
            background: var(--bg); 
            color: var(--text-main); 
            min-height: 100vh; 
            padding: 24px 16px 80px; 
            line-height: 1.6; 
            -webkit-font-smoothing: antialiased;
        }

        .container { max-width: 1180px; margin: 0 auto; }

        /* TOP NAVIGATION */
        .top-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 32px;
            padding-bottom: 18px;
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
            transition: all 0.2s ease;
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
        .nav-right-cluster {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
        }
        .brand-logo-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 6px 16px;
            border-radius: 9999px;
            background: #ffffff;
            border: 1px solid rgba(15, 41, 66, 0.15);
            box-shadow: var(--shadow-sm);
            transition: all 0.25s ease;
            text-decoration: none;
        }
        .brand-logo-link:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
            border-color: rgba(15, 41, 66, 0.35);
        }
        .brand-full-logo {
            height: 26px;
            width: auto;
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

        /* ACADEMIC HERO */
        .module-hero {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 44px 38px;
            margin-bottom: 36px;
            position: relative;
            box-shadow: var(--shadow-md);
            background-image: linear-gradient(135deg, rgba(241, 245, 249, 0.6) 0%, rgba(255, 255, 255, 1) 100%);
        }
        .module-badge-row {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 16px;
        }
        .inst-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: var(--navy-primary);
            color: #ffffff;
            font-size: 11.5px;
            font-weight: 700;
            padding: 5px 14px;
            border-radius: 9999px;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        .accreditation-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: var(--emerald-light);
            color: var(--emerald);
            border: 1px solid rgba(4, 120, 87, 0.25);
            font-size: 11.5px;
            font-weight: 700;
            padding: 4px 12px;
            border-radius: 9999px;
        }
        .module-title {
            font-size: clamp(26px, 3.8vw, 38px);
            font-weight: 800;
            line-height: 1.25;
            margin-bottom: 14px;
            color: var(--navy-primary);
            letter-spacing: -0.02em;
        }
        .module-sub {
            font-size: 15.5px;
            color: var(--text-muted);
            max-width: 980px;
            margin-bottom: 26px;
            line-height: 1.7;
        }
        .meta-chips {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }
        .chip {
            background: #ffffff;
            border: 1px solid var(--border);
            padding: 8px 16px;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--text-muted);
            box-shadow: var(--shadow-sm);
        }
        .chip strong { color: var(--navy-primary); font-weight: 700; }

        /* SECTION HEADERS */
        .section-header-academic {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin: 48px 0 22px;
            padding-bottom: 12px;
            border-bottom: 2px solid var(--border);
            flex-wrap: wrap;
            gap: 12px;
        }
        .section-header-academic h2 {
            font-size: 23px;
            font-weight: 800;
            color: var(--navy-primary);
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .section-subtext {
            font-size: 13.5px;
            color: var(--text-light);
            font-weight: 500;
        }

        /* RETROSPECTIVA: MÓDULOS I AL IV */
        .retro-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
            gap: 18px;
            margin-bottom: 36px;
        }
        .retro-card {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 22px;
            display: flex;
            flex-direction: column;
            box-shadow: var(--shadow-sm);
            transition: all 0.25s ease;
            position: relative;
        }
        .retro-card:hover {
            border-color: #94a3b8;
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }
        .retro-tag {
            font-family: var(--font-mono);
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            padding: 3px 8px;
            border-radius: 6px;
            display: inline-block;
            margin-bottom: 10px;
            width: fit-content;
        }
        .tag-m1 { background: #f1f5f9; color: #475569; }
        .tag-m2 { background: var(--blue-light); color: var(--blue-hover); }
        .tag-m3 { background: var(--rose-light); color: var(--rose); }
        .tag-m4 { background: var(--purple-light); color: var(--purple); }
        .retro-prof {
            font-size: 12.5px;
            color: var(--text-light);
            font-weight: 600;
            margin-bottom: 6px;
        }
        .retro-title {
            font-size: 16.5px;
            font-weight: 800;
            color: var(--navy-primary);
            margin-bottom: 10px;
            line-height: 1.35;
        }
        .retro-desc {
            font-size: 13px;
            color: var(--text-muted);
            line-height: 1.6;
            margin-bottom: 14px;
            flex-grow: 1;
        }
        .retro-bridge {
            background: #f8fafc;
            border: 1px dashed var(--border);
            padding: 10px 12px;
            border-radius: 10px;
            font-size: 12px;
            color: var(--navy-primary);
            line-height: 1.5;
            margin-top: auto;
        }
        .retro-bridge strong { color: var(--emerald); font-weight: 700; }

        .btn-retro-open {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            margin-top: 14px;
            padding: 9px 14px;
            background: var(--blue-light);
            border: 1px solid var(--blue-border);
            color: #0369a1;
            font-size: 12px;
            font-weight: 700;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.2s ease;
            text-align: center;
            width: 100%;
        }
        .btn-retro-open:hover {
            background: var(--blue-accent);
            color: #ffffff;
            border-color: var(--blue-accent);
            transform: translateY(-1px);
            box-shadow: 0 4px 10px rgba(2, 132, 199, 0.25);
        }

        /* MODAL DE CLASE DE REPASO INTERACTIVA (MÓDULOS I AL IV) */
        .repaso-modal-overlay {
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(15, 23, 42, 0.7);
            backdrop-filter: blur(5px);
            z-index: 1000;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .repaso-modal-content {
            background: #ffffff;
            border-radius: 20px;
            max-width: 860px;
            width: 100%;
            max-height: 88vh;
            overflow-y: auto;
            padding: 36px 32px;
            position: relative;
            box-shadow: var(--shadow-hover);
            border: 1px solid var(--border);
        }
        .repaso-modal-close {
            position: absolute;
            top: 20px;
            right: 20px;
            background: var(--surface-subtle);
            border: none;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            font-size: 18px;
            font-weight: 800;
            color: var(--text-muted);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s;
        }
        .repaso-modal-close:hover {
            background: #fee2e2;
            color: #dc2626;
            transform: rotate(90deg);
        }
        .repaso-academic-p {
            font-size: 14.5px;
            color: var(--text-muted);
            line-height: 1.8;
            text-indent: 2.2em;
            text-align: justify;
            margin-bottom: 16px;
        }
        .repaso-academic-p strong {
            color: var(--navy-primary);
            font-weight: 700;
        }
        .repaso-files-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 12px;
            margin: 18px 0 24px;
        }
        .repaso-file-item {
            background: #f8fafc;
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 12px 14px;
            font-size: 12.5px;
            display: flex;
            align-items: flex-start;
            gap: 10px;
        }
        .repaso-interactive-box {
            background: #f0fdf4;
            border: 1.5px solid #a7f3d0;
            border-radius: 14px;
            padding: 22px;
            margin: 24px 0;
        }
        .repaso-interactive-box.box-blue {
            background: #f0f9ff;
            border-color: #bae6fd;
        }
        .repaso-interactive-box.box-amber {
            background: #fffbeb;
            border-color: #fde68a;
        }
        .repaso-interactive-box.box-purple {
            background: #faf5ff;
            border-color: #e9d5ff;
        }
        .repaso-bridge-box {
            background: #0f172a;
            color: #f8fafc;
            border-radius: 14px;
            padding: 22px 24px;
            margin-top: 24px;
        }

        /* EXECUTIVE WAR ROOM / LIVE DECISION SIMULATOR (CLUB TIA INSPIRATION) */
        .decision-room-card {
            background: #ffffff;
            border: 1.5px solid #cbd5e1;
            border-radius: 20px;
            padding: 34px;
            margin-bottom: 44px;
            box-shadow: var(--shadow-md);
            position: relative;
            overflow: hidden;
            background-image: linear-gradient(135deg, rgba(248, 250, 252, 0.8) 0%, rgba(255, 255, 255, 1) 100%);
        }
        .decision-room-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0;
            width: 6px; height: 100%;
            background: linear-gradient(180deg, var(--navy-primary), var(--emerald));
        }
        .dec-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 16px;
        }
        .dec-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: #ecfdf5;
            color: var(--emerald);
            border: 1px solid #a7f3d0;
            font-size: 11.5px;
            font-weight: 700;
            padding: 4px 12px;
            border-radius: 6px;
            text-transform: uppercase;
            font-family: var(--font-mono);
        }
        .dec-title {
            font-size: 21px;
            font-weight: 800;
            color: var(--navy-primary);
            margin-bottom: 8px;
        }
        .dec-prompt {
            font-size: 14.5px;
            color: var(--text-muted);
            margin-bottom: 22px;
            line-height: 1.65;
        }
        .dec-options-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 12px;
            margin-bottom: 24px;
        }
        .dec-btn {
            background: #ffffff;
            border: 1.5px solid var(--border);
            padding: 16px 20px;
            border-radius: 14px;
            text-align: left;
            cursor: pointer;
            transition: all 0.2s ease;
            display: flex;
            flex-direction: column;
            gap: 4px;
            position: relative;
        }
        .dec-btn:hover {
            border-color: var(--blue-accent);
            background: #f0f9ff;
            transform: translateY(-1px);
        }
        .dec-btn.selected {
            border-color: var(--navy-primary);
            background: #f8fafc;
            box-shadow: 0 0 0 2px var(--navy-primary);
        }
        .dec-btn-title {
            font-size: 14.5px;
            font-weight: 700;
            color: var(--navy-primary);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .dec-btn-desc {
            font-size: 13px;
            color: var(--text-muted);
            line-height: 1.5;
        }
        .dec-bar-wrap {
            margin-top: 8px;
            background: #e2e8f0;
            height: 8px;
            border-radius: 9999px;
            overflow: hidden;
            display: none;
        }
        .dec-bar-fill {
            height: 100%;
            background: var(--blue-accent);
            width: 0%;
            transition: width 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .dec-result-box {
            display: none;
            background: #f8fafc;
            border: 1.5px solid #cbd5e1;
            padding: 20px 24px;
            border-radius: 14px;
            margin-top: 18px;
            font-size: 13.5px;
            line-height: 1.65;
            color: var(--text-main);
        }
        .dec-result-box.active { display: block; }
        .dec-actions {
            display: flex;
            align-items: center;
            gap: 14px;
            flex-wrap: wrap;
        }
        .btn-dec-vote {
            padding: 12px 24px;
            background: var(--navy-primary);
            color: #ffffff;
            border: none;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        .btn-dec-vote:hover {
            background: #1e3a8a;
            transform: translateY(-2px);
        }
        .btn-dec-reset {
            padding: 12px 20px;
            background: #ffffff;
            color: var(--text-muted);
            border: 1px solid var(--border);
            border-radius: 10px;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
        }

        /* 6 DIAS DE CLASE: ARQUITECTURA DE ALTA DENSIDAD */
        .days-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(360px, 1fr));
            gap: 24px;
            margin-bottom: 50px;
        }
        .day-card {
            background: #ffffff;
            border: 1.5px solid var(--border);
            border-radius: 18px;
            padding: 26px;
            display: flex;
            flex-direction: column;
            box-shadow: var(--shadow-sm);
            transition: all 0.25s ease;
            position: relative;
        }
        .day-card:hover {
            border-color: #94a3b8;
            transform: translateY(-3px);
            box-shadow: var(--shadow-hover);
        }
        .day-top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
            flex-wrap: wrap;
            gap: 8px;
        }
        .day-badge {
            font-family: var(--font-mono);
            font-size: 11px;
            font-weight: 700;
            color: #ffffff;
            background: var(--navy-primary);
            padding: 3px 10px;
            border-radius: 6px;
            text-transform: uppercase;
            letter-spacing: 0.04em;
        }
        .day-schedule {
            font-family: var(--font-mono);
            font-size: 11.5px;
            color: var(--text-light);
            font-weight: 600;
        }
        .day-title {
            font-size: 18px;
            font-weight: 800;
            color: var(--navy-primary);
            margin-bottom: 10px;
            line-height: 1.35;
        }
        .day-objective {
            font-size: 13.5px;
            color: var(--text-muted);
            line-height: 1.6;
            margin-bottom: 16px;
        }

        /* ACORDEÓN TÉCNICO DE ALTA DENSIDAD */
        .density-accordion {
            margin-bottom: 18px;
            border: 1px solid var(--border);
            border-radius: 12px;
            overflow: hidden;
            background: #f8fafc;
        }
        .density-accordion summary {
            padding: 12px 16px;
            font-size: 13px;
            font-weight: 700;
            color: var(--navy-primary);
            cursor: pointer;
            user-select: none;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #ffffff;
            border-bottom: 1px solid transparent;
            transition: all 0.2s;
        }
        .density-accordion[open] summary {
            border-bottom-color: var(--border);
            background: #f1f5f9;
        }
        .density-accordion summary::marker, .density-accordion summary::-webkit-details-marker { display: none; }
        .density-accordion summary::after {
            content: '+';
            font-family: var(--font-mono);
            font-size: 16px;
            font-weight: 700;
            color: var(--blue-accent);
        }
        .density-accordion[open] summary::after { content: '−'; }
        .acc-content {
            padding: 16px;
            font-size: 12.5px;
            color: var(--text-muted);
            line-height: 1.65;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        .acc-section-title {
            font-size: 12px;
            font-weight: 800;
            color: var(--navy-primary);
            text-transform: uppercase;
            letter-spacing: 0.04em;
            margin-bottom: 4px;
            display: flex;
            align-items: center;
            gap: 6px;
        }
        .formula-box {
            background: #ffffff;
            border: 1px solid var(--border);
            padding: 8px 12px;
            border-radius: 8px;
            font-family: var(--font-mono);
            font-size: 11.5px;
            color: #0369a1;
            overflow-x: auto;
        }
        .workflow-steps {
            padding-left: 18px;
            margin: 0;
        }
        .workflow-steps li { margin-bottom: 4px; }

        .day-pills {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            margin-bottom: 20px;
        }
        .day-pill {
            font-size: 11px;
            font-family: var(--font-mono);
            background: #ffffff;
            border: 1px solid var(--border);
            padding: 3px 8px;
            border-radius: 6px;
            color: var(--text-muted);
            font-weight: 500;
        }
        .btn-day-action {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 11px 18px;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 700;
            text-decoration: none;
            background: var(--surface-subtle);
            border: 1px solid var(--border);
            color: var(--navy-primary);
            transition: all 0.2s ease;
            margin-top: auto;
        }
        .btn-day-action:hover {
            background: var(--navy-primary);
            border-color: var(--navy-primary);
            color: #ffffff;
            transform: translateY(-1px);
            box-shadow: 0 4px 10px rgba(15, 41, 66, 0.15);
        }
        .btn-day-action.featured-day {
            background: #ecfdf5;
            border-color: #a7f3d0;
            color: var(--emerald);
        }
        .btn-day-action.featured-day:hover {
            background: var(--emerald);
            border-color: var(--emerald);
            color: #ffffff;
        }

        /* REPOSITORIO DE DOSSIERS TÉCNICOS */
        .dossier-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 16px;
            margin-bottom: 48px;
        }
        .dossier-item {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 18px 20px;
            display: flex;
            align-items: flex-start;
            gap: 14px;
            transition: all 0.2s;
        }
        .dossier-item:hover {
            border-color: var(--blue-accent);
            transform: translateY(-2px);
            box-shadow: var(--shadow-sm);
        }
        .dossier-icon {
            font-size: 24px;
            line-height: 1;
            flex-shrink: 0;
            margin-top: 2px;
        }
        .dossier-meta h4 {
            font-size: 14.5px;
            font-weight: 800;
            color: var(--navy-primary);
            margin-bottom: 4px;
        }
        .dossier-meta p {
            font-size: 12.5px;
            color: var(--text-muted);
            line-height: 1.5;
            margin-bottom: 8px;
        }
        .dossier-meta .dossier-tag {
            font-family: var(--font-mono);
            font-size: 11px;
            color: var(--blue-accent);
            font-weight: 600;
        }

        /* INSTRUCTOR CARD */
        .instructor-card {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 34px;
            margin-bottom: 40px;
            display: flex;
            flex-direction: column;
            gap: 24px;
            box-shadow: var(--shadow-sm);
        }
        @media (min-width: 768px) {
            .instructor-card {
                flex-direction: row;
                align-items: center;
            }
        }
        .instructor-img {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #ffffff;
            box-shadow: 0 0 0 2px var(--emerald), var(--shadow-md);
            flex-shrink: 0;
        }
        .instructor-bio h3 {
            font-size: 21px;
            font-weight: 800;
            color: var(--navy-primary);
            margin-bottom: 4px;
        }
        .instructor-bio .role {
            font-size: 13px;
            color: var(--emerald);
            font-weight: 700;
            margin-bottom: 12px;
            display: block;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        .instructor-bio p {
            font-size: 14.5px;
            color: var(--text-muted);
            line-height: 1.65;
        }

        /* ACTION BOX */
        .action-box {
            text-align: center;
            padding: 44px 24px;
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 18px;
            box-shadow: var(--shadow-sm);
        }
        .action-box h4 {
            font-size: 22px;
            font-weight: 800;
            margin-bottom: 10px;
            color: var(--navy-primary);
        }
        .action-box p {
            font-size: 14.5px;
            color: var(--text-muted);
            max-width: 680px;
            margin: 0 auto 24px;
            line-height: 1.6;
        }
        .btn-action {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 14px 30px;
            background: #25D366;
            color: #ffffff;
            font-weight: 700;
            font-size: 15px;
            border-radius: 12px;
            text-decoration: none;
            transition: all 0.2s;
            box-shadow: 0 4px 14px rgba(37, 211, 102, 0.35);
        }
        .btn-action:hover {
            background: #20ba59;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(37, 211, 102, 0.45);
        }
    
        /* === AUTHENTICATION & BOVEDA STYLES (FASE 2) === */
        .auth-nav-cluster {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .btn-auth-action {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 7px 15px;
            border-radius: 9999px;
            font-size: 13px;
            font-weight: 700;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.2s ease;
            box-shadow: var(--shadow-sm);
        }
        .btn-auth-login {
            background: var(--navy-primary);
            color: #ffffff;
            border: 1px solid var(--navy-primary);
        }
        .btn-auth-login:hover {
            background: var(--navy-surface);
            transform: translateY(-1px);
            box-shadow: var(--shadow-md);
        }
        .btn-auth-register {
            background: #f0f9ff;
            color: var(--blue-accent);
            border: 1px solid #bae6fd;
        }
        .btn-auth-register:hover {
            background: var(--blue-accent);
            color: #ffffff;
            transform: translateY(-1px);
        }
        .user-profile-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 5px 14px;
            border-radius: 9999px;
            background: #ecfdf5;
            border: 1.5px solid #a7f3d0;
            color: var(--emerald);
            font-size: 12.5px;
            font-weight: 700;
        }
        .btn-auth-logout {
            background: #fee2e2;
            border: 1px solid #fecaca;
            color: #991b1b;
            padding: 5px 12px;
            border-radius: 9999px;
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.2s;
        }
        .btn-auth-logout:hover {
            background: #ef4444;
            color: #ffffff;
        }

        /* HERO AUTH GATEWAY BANNER */
        .hero-gateway-banner {
            background: #ffffff;
            border: 1.5px solid var(--border);
            border-radius: 16px;
            padding: 20px 26px;
            margin: 22px 0 26px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 16px;
            box-shadow: var(--shadow-sm);
            transition: all 0.3s ease;
        }
        .hero-gateway-banner.authenticated {
            background: #f0fdf4;
            border-color: #86efac;
        }

        /* BÓVEDA CENTRALIZADA DE DESCARGAS */
        .boveda-container {
            position: relative;
            margin: 36px 0 54px;
        }
        .boveda-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(330px, 1fr));
            gap: 20px;
        }
        .boveda-card {
            background: #ffffff;
            border: 1.5px solid var(--border);
            border-radius: 18px;
            padding: 24px;
            box-shadow: var(--shadow-sm);
            transition: all 0.25s ease;
            display: flex;
            flex-direction: column;
            position: relative;
        }
        .boveda-card:hover {
            border-color: var(--blue-accent);
            box-shadow: var(--shadow-md);
            transform: translateY(-2px);
        }
        .boveda-card-head {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 14px;
            padding-bottom: 12px;
            border-bottom: 1px solid var(--border);
        }
        .boveda-resumen-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            width: 100%;
            padding: 11px 16px;
            background: var(--navy-primary);
            color: #ffffff;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 700;
            text-decoration: none;
            margin: 12px 0 16px;
            transition: all 0.2s ease;
            box-shadow: var(--shadow-sm);
        }
        .boveda-resumen-btn:hover {
            background: var(--blue-accent);
            transform: translateY(-1px);
            box-shadow: var(--shadow-md);
        }
        .boveda-files-list {
            display: flex;
            flex-direction: column;
            gap: 8px;
            margin-top: auto;
        }
        .boveda-file-link {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 9px 12px;
            background: #f8fafc;
            border: 1px solid var(--border);
            border-radius: 8px;
            font-size: 12px;
            text-decoration: none;
            color: var(--navy-primary);
            transition: all 0.15s ease;
        }
        .boveda-file-link:hover {
            background: #f0f9ff;
            border-color: #bae6fd;
            color: var(--blue-accent);
        }
        .boveda-file-ext {
            font-size: 10px;
            font-weight: 800;
            padding: 2px 7px;
            border-radius: 4px;
            background: #e2e8f0;
            color: #475569;
            font-family: var(--font-mono);
        }

        /* OVERLAY PROTECTOR DE LA BÓVEDA */
        .boveda-lock-curtain {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(15, 23, 42, 0.78);
            backdrop-filter: blur(7px);
            border-radius: 20px;
            z-index: 40;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px 24px;
            text-align: center;
            color: #ffffff;
            transition: all 0.35s ease;
        }
        .boveda-lock-curtain.unlocked {
            opacity: 0;
            pointer-events: none;
            visibility: hidden;
        }

        /* MODAL DE AUTENTICACIÓN Y REGISTRO */
        .auth-modal-overlay {
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(15, 23, 42, 0.7);
            backdrop-filter: blur(5px);
            z-index: 2000;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .auth-modal-overlay.active { display: flex; }
        .auth-modal-box {
            background: #ffffff;
            border-radius: 20px;
            max-width: 520px;
            width: 100%;
            padding: 34px 30px;
            position: relative;
            box-shadow: var(--shadow-hover);
            border: 1px solid var(--border);
            animation: modalFade 0.25s ease-out;
        }
        @keyframes modalFade {
            from { opacity: 0; transform: translateY(14px) scale(0.97); }
            to { opacity: 1; transform: translateY(0) scale(1); }
        }
        .auth-tabs-row {
            display: flex;
            border-bottom: 2px solid var(--border);
            margin-bottom: 22px;
            gap: 10px;
        }
        .auth-tab-btn {
            flex: 1;
            padding: 10px;
            font-size: 14px;
            font-weight: 700;
            background: none;
            border: none;
            color: var(--text-muted);
            cursor: pointer;
            border-bottom: 2px solid transparent;
            margin-bottom: -2px;
            transition: all 0.2s;
        }
        .auth-tab-btn.active {
            color: var(--navy-primary);
            border-bottom-color: var(--navy-primary);
        }
        .auth-field-input {
            width: 100%;
            padding: 10px 14px;
            border-radius: 8px;
            border: 1px solid var(--border);
            font-size: 13.5px;
            margin-bottom: 12px;
            outline: none;
            transition: all 0.2s;
        }
        .auth-field-input:focus {
            border-color: var(--blue-accent);
            box-shadow: 0 0 0 3px rgba(2, 132, 199, 0.15);
        }
        .btn-auth-submit {
            width: 100%;
            padding: 12px;
            background: var(--navy-primary);
            color: #ffffff;
            border: none;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.2s;
            box-shadow: var(--shadow-sm);
        }
        .btn-auth-submit:hover {
            background: var(--navy-surface);
            box-shadow: var(--shadow-md);
        }
        .btn-auth-demo {
            width: 100%;
            margin-top: 10px;
            padding: 10px;
            background: #ecfdf5;
            color: var(--emerald);
            border: 1px solid #a7f3d0;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.2s;
        }
        .btn-auth-demo:hover {
            background: #d1fae5;
        }
    
    
        /* HAMBURGER & MOBILE DRAWER STYLES */
        .hamburger-btn {
            display: none;
            background: #ffffff;
            border: 1.5px solid var(--border);
            padding: 8px 14px;
            border-radius: 10px;
            cursor: pointer;
            font-size: 22px;
            line-height: 1;
            color: var(--navy-primary);
            box-shadow: var(--shadow-sm);
            transition: all 0.2s;
        }
        .hamburger-btn:hover { background: var(--surface-subtle); border-color: var(--blue-accent); }
        .mobile-drawer-overlay {
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(15, 23, 42, 0.65);
            backdrop-filter: blur(4px);
            z-index: 2500;
            display: none;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .mobile-drawer-overlay.active { display: block; opacity: 1; }
        .mobile-drawer {
            position: fixed;
            top: 0; right: -320px;
            width: 310px;
            height: 100vh;
            background: #ffffff;
            z-index: 2600;
            padding: 24px 20px;
            box-shadow: -5px 0 25px rgba(0,0,0,0.15);
            transition: right 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            flex-direction: column;
            overflow-y: auto;
        }
        .mobile-drawer.active { right: 0; }
        .drawer-close {
            background: none;
            border: none;
            font-size: 22px;
            color: var(--text-muted);
            cursor: pointer;
            padding: 4px;
        }
        .drawer-user-box {
            background: #f1f5f9;
            border-radius: 12px;
            padding: 14px;
            margin: 16px 0 20px;
            border: 1px solid var(--border);
        }
        .drawer-links-group { display: flex; flex-direction: column; gap: 6px; }
        .drawer-link {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 9px 12px;
            border-radius: 8px;
            text-decoration: none;
            color: var(--navy-primary);
            font-size: 13.5px;
            font-weight: 600;
            transition: all 0.2s;
        }
        .drawer-link:hover { background: #f0f9ff; color: var(--blue-accent); transform: translateX(3px); }
        @media (max-width: 860px) {
            .nav-right-cluster { display: none !important; }
            .hamburger-btn { display: inline-flex; align-items: center; justify-content: center; }
        }
    
    </style>
</head>
<body>

    <div class="container">
        <!-- TOP NAV -->
        <div class="top-nav">
            <div class="nav-left-cluster">
                <a href="./index.html" class="back-link">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    <span>Diplomado Gerencia UGMA</span>
                </a>
                <a href="./boveda.html" class="btn-auth-action btn-auth-register" style="font-size:12.5px;">
                    <span>📂</span> Bóveda de Descargas
                </a>
                <a href="./admin.html" class="btn-auth-action" style="font-size:12px; background:#f1f5f9; color:var(--navy-primary); border:1px solid var(--border);" title="Acceso Exclusivo Docente">
                    <span>⚙️</span> Docente
                </a>
            </div>

            <div class="nav-right-cluster">
                <div id="navAuthArea" style="display:flex; align-items:center; gap:8px;"></div>
                <a href="https://lab.motazorrilla.com/bim/" target="_blank" rel="noopener" class="btn-auth-action btn-auth-register" style="font-size:12px;">
                    <span>Visor 3D</span>
                </a>
            </div>

            <!-- BOTÓN HAMBURGUESA MÓVIL -->
            <button type="button" class="hamburger-btn" onclick="toggleMobileMenu()" aria-label="Abrir Menú">
                ☰
            </button>
        </div>

        <!-- OVERLAY Y MENÚ HAMBURGUESA LATERAL (DRAWER) -->
        <div id="mobileDrawerOverlay" class="mobile-drawer-overlay" onclick="toggleMobileMenu()"></div>
        <aside id="mobileDrawer" class="mobile-drawer">
            <div style="display:flex; justify-content:space-between; align-items:center; border-bottom:1px solid var(--border); padding-bottom:12px;">
                <div style="font-weight:800; color:var(--navy-primary); font-size:15px;">🏛️ Menú del Diplomado</div>
                <button type="button" class="drawer-close" onclick="toggleMobileMenu()">✕</button>
            </div>

            <div id="drawerUserStatus" class="drawer-user-box"></div>

            <nav class="drawer-links-group">
                <div style="font-size:11px; font-weight:800; color:var(--text-light); text-transform:uppercase; margin:8px 0 4px 6px;">Navegación Principal</div>
                <a href="./index.html" class="drawer-link"><span>🏠</span> Portada del Diplomado</a>
                <a href="./boveda.html" class="drawer-link"><span>📂</span> Bóveda Central de Descargas</a>
                <a href="https://lab.motazorrilla.com/bim/" target="_blank" class="drawer-link"><span>🧪</span> Laboratorio BIM 3D WebGL</a>

                <div style="font-size:11px; font-weight:800; color:var(--text-light); text-transform:uppercase; margin:14px 0 4px 6px;">Cimientos: Módulos I al IV</div>
                <a href="./modulo-1-organizacion.html" class="drawer-link"><span>🏛️</span> Módulo I: Organización (Pérez)</a>
                <a href="./modulo-2-costos-evm.html" class="drawer-link"><span>📊</span> Módulo II: Costos y EVM (Angarita)</a>
                <a href="./modulo-3-marco-legal.html" class="drawer-link"><span>⚖️</span> Módulo III: Marco Legal (Martínez)</a>
                <a href="./modulo-4-lean-calidad.html" class="drawer-link"><span>📋</span> Módulo IV: Lean y Calidad (Zambrano)</a>

                <div style="font-size:11px; font-weight:800; color:var(--text-light); text-transform:uppercase; margin:14px 0 4px 6px;">Módulo V: Clases Interactivas</div>
                <a href="./cde-iso19650/" class="drawer-link"><span>📁</span> Sesión 1: CDE ISO 19650</a>
                <a href="./clash-detection/" class="drawer-link"><span>⚡</span> Sesión 2: Clash Detection 3D</a>
                <a href="./planificacion-4d-5d/" class="drawer-link"><span>⏱️</span> Sesión 3: Simulación 4D/5D EVM</a>
                <a href="./ia-control-obra/" class="drawer-link"><span>🤖</span> Sesión 4: IA en Control de Obra</a>
                <a href="./energia-solar-sostenibilidad/" class="drawer-link"><span>☀️</span> Sesión 5: Sostenibilidad y Solar</a>
                <a href="./taller-integrador/" class="drawer-link"><span>🎯</span> Sesión 6: War Room Integrador</a>

                <div style="font-size:11px; font-weight:800; color:var(--text-light); text-transform:uppercase; margin:14px 0 4px 6px;">Gestión Académica</div>
                <a href="./admin.html" class="drawer-link" style="color:var(--emerald); font-weight:700;"><span>⚙️</span> Panel de Administración Docente</a>
            </nav>
        </aside>

        <!-- HERO PRINCIPAL -->
        <div class="module-hero">
            <div class="module-badge-row">
                <span class="inst-badge">Universidad Nororiental Gran Mariscal de Ayacucho · UGMA</span>
                <span class="accreditation-badge">Diplomado en Planificación y Gerencia de Obras · Postgrado</span>
            </div>
            <h1 class="module-title">Módulo V: Tecnología y Sostenibilidad en Gerencia de Obras</h1>
            <p class="module-sub">
                Programa ejecutivo de posgrado (30 horas académicas) enfocado en la adopción estratégica de <strong>Construction Technology (ConTech)</strong>, modelado paramétrico bajo el estándar internacional <strong>openBIM (ISO 19650:2026)</strong>, auditoría espacial 3D, control dinámico de cronograma y costo (<strong>4D/5D EVM con Visión Artificial</strong>), automatización agéntica de bitácoras y eficiencia energética solar fotovoltaica.
            </p>

            <div class="meta-chips">
                <div class="chip">⏱️ <strong>30 Horas Académicas</strong> (6 Encuentros)</div>
                <div class="chip">🏛️ <strong>Decanato de Postgrado · Escuela de Ingeniería</strong></div>
                <div class="chip">📍 <strong>Puerto Ordaz / Formato Híbrido Presencial</strong></div>
                <div class="chip">📊 <strong>7 Portales Web Especializados en Vivo</strong></div>
                <div class="chip">🎯 <strong>Evaluación Holística 100% sobre 20 pts</strong></div>
            </div>

            <!-- PORTAL PROMINENTE DE ACCESO AL AULA VIRTUAL Y BÓVEDA -->
            <div id="heroAuthBanner" class="hero-gateway-banner" style="border: 2px solid #0284c7; background: #f0f9ff; padding: 24px; border-radius: 18px; margin: 24px 0;">
                <div style="flex:1; min-width:280px;">
                    <div style="display:flex; align-items:center; gap:10px; margin-bottom:6px;">
                        <span style="font-size:24px;">🏛️</span>
                        <div>
                            <strong id="heroAuthTitle" style="color:var(--navy-primary); font-size:17px; display:block;">Control de Acceso · Diplomado en Gerencia de Obras</strong>
                            <span style="font-size:12px; color:#0369a1; font-weight:700;">ÁREA EXCLUSIVA DE ESTUDIANTES Y PARTICIPANTES INSCRITOS</span>
                        </div>
                    </div>
                    <p id="heroAuthDesc" style="font-size:13.5px; color:var(--text-muted); margin:8px 0 0; line-height:1.6;">
                        Para acceder a los módulos de descarga de la Bóveda (Módulos I al V), ver las clases interactivas y usar los laboratorios 3D, ingresa con tu cuenta de alumno o utiliza el botón de <strong>Acceso Rápido Demo</strong>.
                    </p>
                </div>
                <div id="heroAuthButtons" style="display:flex; gap:10px; align-items:center; flex-wrap:wrap;">
                    <button type="button" class="btn-auth-demo" style="width:auto; margin:0; padding:12px 20px; font-size:14px; background:#047857; color:#ffffff; border:none; box-shadow:0 4px 10px rgba(4,120,87,0.25);" onclick="handleDemoLogin()">
                        <span>⚡</span> Entrar como Alumno (Demo 1-Click)
                    </button>
                    <button type="button" class="btn-auth-action btn-auth-login" style="padding:11px 18px; font-size:13.5px;" onclick="openAuthModal('login')">
                        <span>🔑</span> Iniciar Sesión
                    </button>
                    <button type="button" class="btn-auth-action btn-auth-register" style="padding:11px 18px; font-size:13.5px; background:#ffffff;" onclick="openAuthModal('register')">
                        <span>📝</span> Registrarse
                    </button>
                </div>
            </div>
        </div>

        <!-- RETROSPECTIVA ESTRATÉGICA INTERMODULAR (MÓDULOS I AL IV) -->
        <div class="section-header-academic">
            <h2>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--navy-primary)" stroke-width="2.2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                Cimientos del Diplomado: Articulación con Módulos I al IV
            </h2>
            <span class="section-subtext">Cómo la tecnología de frontera resuelve los cuellos de botella vistos en los módulos anteriores</span>
        </div>

        <div class="retro-grid">
            <!-- MÓDULO I -->
            <div class="retro-card" onclick="openRepasoModal(1)">
                <span class="retro-tag tag-m1">Módulo I · 20 Horas</span>
                <div class="retro-prof">Prof. Ing. José Ignacio Pérez</div>
                <h3 class="retro-title">Estructura Organizativa de una Obra</h3>
                <p class="retro-desc">
                    Definición de organigramas tradicionales de faena, jerarquías de toma de decisiones entre inspectores, residentes y contratistas, y distribución de responsabilidades en obra civil.
                </p>
                <div class="retro-bridge">
                    <strong>Salto Tecnológico Módulo V:</strong> Transición a roles digitales colaborativos: <em>BIM Manager</em>, Coordinador openBIM y modeladores interdisciplinarios conectados en tiempo real.
                </div>
                <button type="button" class="btn-retro-open" onclick="event.stopPropagation(); openRepasoModal(1);">
                    <span>📖</span> Abrir Clase de Repaso &amp; Recursos &rarr;
                </button>
            </div>

            <!-- MÓDULO II -->
            <div class="retro-card" onclick="openRepasoModal(2)">
                <span class="retro-tag tag-m2">Módulo II · 20 Horas</span>
                <div class="retro-prof">Prof. Ing. Rafael Angarita</div>
                <h3 class="retro-title">Planificación y Análisis Estratégico</h3>
                <p class="retro-desc">
                    Cómputos métricos de Harry Osers, Análisis de Precios Unitarios (APU), Factor de Costos Asociados al Salario (FCAS), formulación de la Curva S y Valor Ganado (EVM) en hojas de cálculo.
                </p>
                <div class="retro-bridge">
                    <strong>Salto Tecnológico Módulo V:</strong> Extracción paramétrica automática de cómputos (QTO) en modelos IFC y Curva S dinámica 4D/5D certificada mediante Visión Artificial con drones.
                </div>
                <button type="button" class="btn-retro-open" onclick="event.stopPropagation(); openRepasoModal(2);">
                    <span>📖</span> Abrir Clase de Repaso &amp; Recursos &rarr;
                </button>
            </div>

            <!-- MÓDULO III -->
            <div class="retro-card" onclick="openRepasoModal(3)">
                <span class="retro-tag tag-m3">Módulo III · 30 Horas</span>
                <div class="retro-prof">Prof. Abg. Omar Enrique Martínez</div>
                <h3 class="retro-title">Normas y Responsabilidades Legales</h3>
                <p class="retro-desc">
                    Seguridad jurídica, contratos de construcción, licitaciones públicas, ordenanzas municipales y responsabilidad civil y penal decenal (Art. 1637 Código Civil Venezolano).
                </p>
                <div class="retro-bridge">
                    <strong>Salto Tecnológico Módulo V:</strong> Entorno CDE ISO 19650 con estados <em>Published</em> como prueba judicial inmutable y Agentes de IA para detección temprana de reclamos (<em>claims</em>).
                </div>
                <button type="button" class="btn-retro-open" onclick="event.stopPropagation(); openRepasoModal(3);">
                    <span>📖</span> Abrir Clase de Repaso &amp; Recursos &rarr;
                </button>
            </div>

            <!-- MÓDULO IV -->
            <div class="retro-card" onclick="openRepasoModal(4)">
                <span class="retro-tag tag-m4">Módulo IV · 20 Horas</span>
                <div class="retro-prof">Prof. Esp. Ing. Diego Zambrano</div>
                <h3 class="retro-title">Control de Procesos e Informes</h3>
                <p class="retro-desc">
                    Filosofía <em>Lean Construction</em>, sistema <em>Last Planner (LPS)</em>, planificación colaborativa semanal (PPC/PAC), control de calidad de concreto y reportes técnicos de bitácora.
                </p>
                <div class="retro-bridge">
                    <strong>Salto Tecnológico Módulo V:</strong> Digitalización de bitácoras con voz (<em>Speech-to-Report</em>), sensores IoT de maduración de concreto y gemelos digitales de obra.
                </div>
                <button type="button" class="btn-retro-open" onclick="event.stopPropagation(); openRepasoModal(4);">
                    <span>📖</span> Abrir Clase de Repaso &amp; Recursos &rarr;
                </button>
            </div>
        </div>

        <!-- BÓVEDA CENTRALIZADA DE DESCARGAS (MÓDULOS I AL V) -->
        <div class="section-header-academic" id="boveda-descargas">
            <h2>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--navy-primary)" stroke-width="2.2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                Bóveda Centralizada de Descargas: Expedientes del Diplomado
            </h2>
            <span class="section-subtext">Resúmenes académicos de cátedra y materiales auténticos de cátedra organizados por módulo</span>
        </div>

        <div class="boveda-container">
            <!-- TELÓN DE BLOQUEO PARA INVITADOS -->
            <div id="bovedaLockCurtain" class="boveda-lock-curtain">
                <div style="font-size:42px; margin-bottom:12px;">🔒</div>
                <h3 style="font-size:22px; font-weight:800; margin-bottom:10px; color:#ffffff;">Bóveda Protegida · Acceso Alumnos Inscritos</h3>
                <p style="font-size:14px; max-width:620px; line-height:1.6; color:#e2e8f0; margin-bottom:24px;">
                    Esta bóveda reúne los 4 Resúmenes Académicos de Cátedra en PDF, hojas de cálculo de EVM y cómputos de Harry Osers, manuales SIGECOF, y los expedientes del Módulo V. Para desbloquear las descargas, identifícate como alumno del Diplomado.
                </p>
                <div style="display:flex; gap:12px; flex-wrap:wrap; justify-content:center;">
                    <button type="button" class="btn-auth-action btn-auth-login" style="padding:10px 22px; font-size:14px;" onclick="openAuthModal('login')">
                        <span>🔑</span> Iniciar Sesión para Descargar
                    </button>
                    <button type="button" class="btn-auth-action btn-auth-register" style="padding:10px 22px; font-size:14px; background:#ffffff; color:var(--navy-primary);" onclick="openAuthModal('register')">
                        <span>📝</span> Registrarse en 30 Segundos
                    </button>
                    <button type="button" class="btn-auth-demo" style="width:auto; margin:0; padding:10px 18px; font-size:14px;" onclick="handleDemoLogin()">
                        <span>⚡</span> Ingresar con Acceso Rápido
                    </button>
                </div>
            </div>

            <!-- CONTENIDO DE LA BÓVEDA (5 TARJETAS) -->
            <div class="boveda-grid">
                <!-- MÓDULO I -->
                <div class="boveda-card">
                    <div class="boveda-card-head">
                        <div>
                            <span class="boveda-module-badge tag-m1">Módulo I · Pérez</span>
                            <h4 style="font-size:16px; font-weight:800; color:var(--navy-primary); margin-top:4px;">Estructura Organizativa</h4>
                        </div>
                        <span style="font-size:20px;">🏛️</span>
                    </div>
                    <p style="font-size:12.5px; color:var(--text-muted); line-height:1.5; margin-bottom:12px;">
                        Organigramas matriciales, asignación de responsabilidades con Matriz RACI y gestión de las 6 fases del ciclo constructivo.
                    </p>
                    <a href="./descargas/modulos-previos/Resumen_Ejecutivo_Modulo_I_Organizacion_Perez.pdf" download class="boveda-resumen-btn auth-protected-download">
                        <span>📥</span> Descargar Resumen Oficial (PDF)
                    </a>
                    <div class="boveda-files-list">
                        <a href="./descargas/modulos-previos/Caso_Expansion_Industrial_Matanzas.pdf" download class="boveda-file-link auth-protected-download">
                            <span>📄 Caso Práctico Matanzas</span>
                            <span class="boveda-file-ext">PDF · 67 KB</span>
                        </a>
                        <a href="./descargas/modulos-previos/Fases_Proceso_Constructivo.pdf" download class="boveda-file-link auth-protected-download">
                            <span>📑 Las 6 Fases Constructivas</span>
                            <span class="boveda-file-ext">PDF · 858 KB</span>
                        </a>
                    </div>
                </div>

                <!-- MÓDULO II -->
                <div class="boveda-card">
                    <div class="boveda-card-head">
                        <div>
                            <span class="boveda-module-badge tag-m2">Módulo II · Angarita</span>
                            <h4 style="font-size:16px; font-weight:800; color:var(--navy-primary); margin-top:4px;">Costos, APU &amp; EVM</h4>
                        </div>
                        <span style="font-size:20px;">📊</span>
                    </div>
                    <p style="font-size:12.5px; color:var(--text-muted); line-height:1.5; margin-bottom:12px;">
                        Cómputos métricos Harry Osers, modelo matemático analítico de Curva S y gestión financiera de Valor Ganado (EVM).
                    </p>
                    <a href="./descargas/modulos-previos/Resumen_Ejecutivo_Modulo_II_Costos_EVM_Angarita.pdf" download class="boveda-resumen-btn auth-protected-download">
                        <span>📥</span> Descargar Resumen Oficial (PDF)
                    </a>
                    <div class="boveda-files-list">
                        <a href="./descargas/modulos-previos/Planilla_Computos_Harry_Osers.xlsx" download class="boveda-file-link auth-protected-download">
                            <span>📐 Cómputos Harry Osers</span>
                            <span class="boveda-file-ext">XLSX · 18 KB</span>
                        </a>
                        <a href="./descargas/modulos-previos/Modelo_Matematico_Curva_S.pdf" download class="boveda-file-link auth-protected-download">
                            <span>📈 Curva S Matemática Sigmoidal</span>
                            <span class="boveda-file-ext">PDF · 2.1 MB</span>
                        </a>
                        <a href="./descargas/modulos-previos/Ejemplo_Valor_Ganado_EVM.xlsx" download class="boveda-file-link auth-protected-download">
                            <span>💵 Plantilla EVM Dinámica</span>
                            <span class="boveda-file-ext">XLSX · 185 KB</span>
                        </a>
                        <a href="./descargas/modulos-previos/Guia_Softwares_Costos_Planificacion.pdf" download class="boveda-file-link auth-protected-download">
                            <span>💻 Guía Softwares (MaPreX, LuloWin)</span>
                            <span class="boveda-file-ext">PDF · 186 KB</span>
                        </a>
                    </div>
                </div>

                <!-- MÓDULO III -->
                <div class="boveda-card">
                    <div class="boveda-card-head">
                        <div>
                            <span class="boveda-module-badge tag-m3">Módulo III · Martínez</span>
                            <h4 style="font-size:16px; font-weight:800; color:var(--navy-primary); margin-top:4px;">Marco Legal &amp; Art. 1637</h4>
                        </div>
                        <span style="font-size:20px;">⚖️</span>
                    </div>
                    <p style="font-size:12.5px; color:var(--text-muted); line-height:1.5; margin-bottom:12px;">
                        Ley de Contrataciones Públicas, contratos de obras, régimen de garantías y responsabilidad decenal por ruina estructural.
                    </p>
                    <a href="./descargas/modulos-previos/Resumen_Ejecutivo_Modulo_III_Marco_Legal_Martinez.pdf" download class="boveda-resumen-btn auth-protected-download">
                        <span>📥</span> Descargar Resumen Oficial (PDF)
                    </a>
                    <div class="boveda-files-list">
                        <a href="./descargas/modulos-previos/Contrataciones_y_Licitaciones.pdf" download class="boveda-file-link auth-protected-download">
                            <span>📜 Contrataciones y Licitaciones</span>
                            <span class="boveda-file-ext">PDF · 17.8 MB</span>
                        </a>
                        <a href="./descargas/modulos-previos/Marco_Legal_Ingenieria_Venezuela.png" download class="boveda-file-link auth-protected-download">
                            <span>🗺️ Mapa Legal en Venezuela</span>
                            <span class="boveda-file-ext">PNG · 4.5 MB</span>
                        </a>
                        <a href="./descargas/modulos-previos/Modulo_3_Marco_Legal_Classroom.pdf" download class="boveda-file-link auth-protected-download">
                            <span>⚖️ Cátedra de Marco Legal</span>
                            <span class="boveda-file-ext">PDF · 4.3 MB</span>
                        </a>
                    </div>
                </div>

                <!-- MÓDULO IV -->
                <div class="boveda-card">
                    <div class="boveda-card-head">
                        <div>
                            <span class="boveda-module-badge tag-m4">Módulo IV · Zambrano</span>
                            <h4 style="font-size:16px; font-weight:800; color:var(--navy-primary); margin-top:4px;">Lean, Calidad &amp; Casos</h4>
                        </div>
                        <span style="font-size:20px;">📋</span>
                    </div>
                    <p style="font-size:12.5px; color:var(--text-muted); line-height:1.5; margin-bottom:12px;">
                        Last Planner System (LPS), Caso Residencial Los Olivos (18 tareas, ruta crítica 63 días), peritaje Edificio San Antonio y manual SIGECOF.
                    </p>
                    <a href="./descargas/modulos-previos/Resumen_Ejecutivo_Modulo_IV_Lean_Calidad_Zambrano.pdf" download class="boveda-resumen-btn auth-protected-download">
                        <span>📥</span> Descargar Resumen Oficial (PDF)
                    </a>
                    <div class="boveda-files-list">
                        <a href="./descargas/modulos-previos/Caso_Practico_Residencial_Los_Olivos.pdf" download class="boveda-file-link auth-protected-download">
                            <span>🏡 Caso Los Olivos (Ruta Crítica)</span>
                            <span class="boveda-file-ext">PDF · 123 KB</span>
                        </a>
                        <a href="./descargas/modulos-previos/Peritaje_Patologia_Edificio_San_Antonio.pdf" download class="boveda-file-link auth-protected-download">
                            <span>🔍 Peritaje Edificio San Antonio</span>
                            <span class="boveda-file-ext">PDF · 2.4 MB</span>
                        </a>
                        <a href="./descargas/modulos-previos/Manual_Formatos_Obras_SIGECOF.pdf" download class="boveda-file-link auth-protected-download">
                            <span>📑 Manual SIGECOF (168 págs)</span>
                            <span class="boveda-file-ext">PDF · 1.8 MB</span>
                        </a>
                    </div>
                </div>

                <!-- MÓDULO V -->
                <div class="boveda-card" style="border-color:#38bdf8; background:#f0f9ff;">
                    <div class="boveda-card-head">
                        <div>
                            <span class="boveda-module-badge" style="background:#0284c7; color:#ffffff;">Módulo V · Mota Zorrilla</span>
                            <h4 style="font-size:16px; font-weight:800; color:var(--navy-primary); margin-top:4px;">Tecnología y Sostenibilidad</h4>
                        </div>
                        <span style="font-size:20px;">🚀</span>
                    </div>
                    <p style="font-size:12.5px; color:var(--text-muted); line-height:1.5; margin-bottom:12px;">
                        openBIM ISO 19650, Clash Detection 3D, Simulación 4D/5D EVM, IA predictiva y eficiencia solar fotovoltaica en Guayana.
                    </p>
                    <a href="./descargas/modulos-previos/CONTENIDO_PROGRAMATICO_MODULO_V_HECTOR_MOTA.pdf" download class="boveda-resumen-btn auth-protected-download" style="background:#0284c7;">
                        <span>📥</span> Contenido Programático Oficial (PDF)
                    </a>
                    <div class="boveda-files-list">
                        <a href="./descargas/modulos-previos/FORMATO_PLANIFICACION_DOCENTE_MODULO_V_HECTOR_MOTA.pdf" download class="boveda-file-link auth-protected-download">
                            <span>🏛️ Planificación Docente Oficial UGMA</span>
                            <span class="boveda-file-ext">PDF · 128 KB</span>
                        </a>
                        <a href="https://lab.motazorrilla.com/bim/" target="_blank" rel="noopener" class="boveda-file-link">
                            <span>🌐 Visor BIM 3D WebGL (Laboratorio)</span>
                            <span class="boveda-file-ext">WEB · Three.js</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- EXECUTIVE WAR ROOM / LIVE DECISION SIMULATOR (CLUB TIA ADAPTADO) -->
        <div class="decision-room-card" id="executive-decision-room">
            <div class="dec-header">
                <div>
                    <span class="dec-badge">⚡ Simulador Gerencial en Tiempo Real · Dinámica Ejecutiva</span>
                    <h3 class="dec-title" style="margin-top:8px;">Executive Decision Room: Dilema de Obra Crítico</h3>
                </div>
                <span style="font-family:var(--font-mono); font-size:12px; color:var(--text-light); font-weight:600;">
                    Caso Real: Vaciado Estructural Edificio Guayana
                </span>
            </div>
            
            <p class="dec-prompt">
                <strong>Escenario de Faena:</strong> Faltan 48 horas para el vaciado masivo de concreto de la viga de transferencia del Piso 4 ($85\text{ m}^3$). El inspector electromecánico detecta en sitio una colisión severa no prevista: el trazado principal de ductos de climatización (HVAC) intercepta longitudinalmente la armadura de acero de refuerzo principal. <em>¿Cuál es su orden de servicio como Gerente del Proyecto?</em>
            </p>

            <div class="dec-options-grid" id="decisionOptions">
                <button type="button" class="dec-btn" onclick="selectDecision(1)">
                    <div class="dec-btn-title">
                        <span>A) Proceder con el vaciado y desviar los ductos en obra por debajo de la viga tras el fraguado.</span>
                        <span class="badge-opt" style="font-size:11px; color:var(--text-light);">Opción 1</span>
                    </div>
                    <div class="dec-btn-desc">Prioriza el cumplimiento del cronograma inmediato (SPI) evitando penalizaciones de la concretera.</div>
                    <div class="dec-bar-wrap" id="barWrap1"><div class="dec-bar-fill" id="barFill1"></div></div>
                </button>

                <button type="button" class="dec-btn" onclick="selectDecision(2)">
                    <div class="dec-btn-title">
                        <span>B) Perforar pases en el alma de la viga mediante brocas diamantadas durante el encofrado.</span>
                        <span class="badge-opt" style="font-size:11px; color:var(--text-light);">Opción 2</span>
                    </div>
                    <div class="dec-btn-desc">Modifica la sección resistente en campo sin recalcular la deflexión estructural.</div>
                    <div class="dec-bar-wrap" id="barWrap2"><div class="dec-bar-fill" id="barFill2"></div></div>
                </button>

                <button type="button" class="dec-btn" onclick="selectDecision(3)">
                    <div class="dec-btn-title">
                        <span>C) Paralizar el vaciado, emitir ticket BCF en CDE ISO 19650 y relocalizar ductos en modelo federado.</span>
                        <span class="badge-opt" style="font-size:11px; color:var(--emerald); font-weight:700;">Recomendada (openBIM)</span>
                    </div>
                    <div class="dec-btn-desc">Preserva la garantía decenal (Art. 1637 CCV) y formaliza la extensión justificada en bitácora digital.</div>
                    <div class="dec-bar-wrap" id="barWrap3"><div class="dec-bar-fill" id="barFill3"></div></div>
                </button>
            </div>

            <div class="dec-actions">
                <button type="button" class="btn-dec-vote" id="btnSubmitVote" onclick="submitDecision()">
                    <span>🗳️ Registrar Decisión Gerencial</span>
                </button>
                <button type="button" class="btn-dec-reset" onclick="resetDecision()">
                    <span>🔄 Reiniciar Simulación</span>
                </button>
                <span id="voteFeedback" style="font-size:12.5px; font-weight:600; color:var(--emerald);"></span>
            </div>

            <!-- RESULT BOX -->
            <div class="dec-result-box" id="decisionResult">
                <div style="font-weight:800; font-size:14px; color:var(--navy-primary); margin-bottom:6px;" id="resultHeader">
                    Dictamen Técnico y Jurídico de la Decisión
                </div>
                <div id="resultText"></div>
            </div>
        </div>

        <!-- 6 DÍAS DE CLASE: ARQUITECTURA DE ALTA DENSIDAD -->
        <div class="section-header-academic">
            <h2>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--navy-primary)" stroke-width="2.2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                Itinerario Curricular: Las 6 Sesiones de Trabajo (30 Horas)
            </h2>
            <span class="section-subtext">Estructura por día de clase con acordeones técnicos desplegables y enlaces a laboratorios</span>
        </div>

        <div class="days-grid">
            <!-- DÍA 1 -->
            <div class="day-card">
                <div class="day-top-bar">
                    <span class="day-badge">Día 01 · Viernes 23-10-2026</span>
                    <span class="day-schedule">01:15 a 05:00 PM · 5h</span>
                </div>
                <h3 class="day-title">Transformación Digital, openBIM y Gobernanza ISO 19650</h3>
                <p class="day-objective">
                    Fundamentación del salto de CAD 2D al modelo paramétrico. Gobernanza de información en el Entorno Común de Datos (CDE) y esquemas neutros IFC 4.3 de buildingSMART.
                </p>

                <details class="density-accordion">
                    <summary>Explorar Contenido Técnico &amp; Fórmulas</summary>
                    <div class="acc-content">
                        <div>
                            <span class="acc-section-title">📐 Fundamento Normativo</span>
                            ISO 19650-1/2:2026. Estados de información inmutables: WIP, Shared, Published y Archived. Modelo neutro IFC 4.3 (ISO 16739-1) para edificación e infraestructura vial.
                        </div>
                        <div>
                            <span class="acc-section-title">📊 Curva de MacLeamy (Civitillo, 2021)</span>
                            <div class="formula-box">
                                ROI_BIM = (Costo_Errores_Evitados - Inversión_BIM) / Inversión_BIM
                            </div>
                        </div>
                        <div>
                            <span class="acc-section-title">⚙️ Taller Práctico</span>
                            <ul class="workflow-steps">
                                <li>Configuración de carpetas CDE bajo convención de nombres ISO 19650.</li>
                                <li>Inspección de metadatos de zapatas en IfcOpenShell.</li>
                                <li>Extracción paramétrica de cantidades (QTO) vs. cómputo manual.</li>
                            </ul>
                        </div>
                    </div>
                </details>

                <div class="day-pills">
                    <span class="day-pill">ISO 19650-1/2</span>
                    <span class="day-pill">IFC 4.3</span>
                    <span class="day-pill">Curva MacLeamy</span>
                    <span class="day-pill">Cómputos Harry Osers</span>
                    <span class="day-pill">Validador CDE</span>
                </div>

                <div style="display:flex; flex-direction:column; gap:8px; margin-top:auto;">
                    <a href="./masterclass-bim/" class="btn-day-action featured-day" style="font-weight:800; border-color:#0284c7; background:#e0f2fe; color:#0369a1;">
                        <span>🏛️</span> Tema 1: Masterclass BIM (De Maqueta a Gemelo) &rarr;
                    </a>
                    <a href="./cde-iso19650/" class="btn-day-action">
                        <span>📁</span> Portal Dedicado: CDE &amp; Validador ISO 19650 &rarr;
                    </a>
                </div>
            </div>

            <!-- DÍA 2 -->
            <div class="day-card">
                <div class="day-top-bar">
                    <span class="day-badge">Día 02 · Sábado 24-10-2026</span>
                    <span class="day-schedule">08:00 a 11:45 AM · 5h</span>
                </div>
                <h3 class="day-title">Coordinación Interdisciplinaria, Clash Detection 3D y BCF 3.0</h3>
                <p class="day-objective">
                    Validación automatizada de modelos federados (Arquitectura, Estructuras, MEP). Jerarquía de interferencias espaciales y comunicación sin software cautivo.
                </p>

                <details class="density-accordion">
                    <summary>Explorar Contenido Técnico &amp; Fórmulas</summary>
                    <div class="acc-content">
                        <div>
                            <span class="acc-section-title">🔍 Tipología de Colisiones</span>
                            Interferencias Hard (geométricas directas), Soft (gálibos de mantenimiento) y Clearance (tolerancias de vibración y dilatación térmica).
                        </div>
                        <div>
                            <span class="acc-section-title">📑 Matriz de Tolerancias MEP</span>
                            <div class="formula-box">
                                Tolerancia_Viga_Ducto: Δz ≥ 50 mm | Pendiente_Aguas_Negras: s ≥ 1.5%
                            </div>
                        </div>
                        <div>
                            <span class="acc-section-title">⚙️ Taller Práctico</span>
                            <ul class="workflow-steps">
                                <li>Federación de modelos IFC en visor Three.js WebGL.</li>
                                <li>Generación de reportes de incidencias en formato abierto BCF 3.0.</li>
                                <li>Simulación en vivo de resolución de conflicto en mesa técnica.</li>
                            </ul>
                        </div>
                    </div>
                </details>

                <div class="day-pills">
                    <span class="day-pill">Three.js WebGL</span>
                    <span class="day-pill">Clash Detection</span>
                    <span class="day-pill">BCF 3.0</span>
                    <span class="day-pill">Navisworks TimeLiner</span>
                </div>

                <a href="./clash-detection/" class="btn-day-action featured-day">
                    <span>⚡</span> Portal Dedicado: Laboratorio 3D Clash Detection &rarr;
                </a>
            </div>

            <!-- DÍA 3 -->
            <div class="day-card">
                <div class="day-top-bar">
                    <span class="day-badge">Día 03 · Viernes 30-10-2026</span>
                    <span class="day-schedule">01:15 a 05:00 PM · 5h</span>
                </div>
                <h3 class="day-title">Planificación 4D/5D, Curva S y EVM con Visión Artificial</h3>
                <p class="day-objective">
                    Integración del cronograma Gantt y el presupuesto paramétrico. Cálculo objetivo del Valor Ganado (EVM) contrastando As-Planned vs As-Built con drones.
                </p>

                <details class="density-accordion">
                    <summary>Explorar Contenido Técnico &amp; Fórmulas</summary>
                    <div class="acc-content">
                        <div>
                            <span class="acc-section-title">📈 Fórmulas Analíticas EVM</span>
                            <div class="formula-box">
                                EV = %Físico_IA × BAC | CPI = EV / AC | SPI = EV / PV | CV = EV - AC | SV = EV - PV
                            </div>
                        </div>
                        <div>
                            <span class="acc-section-title">🛸 Captura de Realidad en Sitio</span>
                            Vuelos fotogramétricos con drones y cámaras 360°. Alineación de nubes de puntos mediante algoritmos ICP con mapas de calor de desviaciones.
                        </div>
                        <div>
                            <span class="acc-section-title">⚙️ Taller Práctico</span>
                            <ul class="workflow-steps">
                                <li>Vinculación de GUIDs de elementos IFC a la EDT de MS Project.</li>
                                <li>Simulación visual de la Curva S dinámica en Chart.js.</li>
                                <li>Detección de sobrecostos e imprevistos antes del cierre mensual.</li>
                            </ul>
                        </div>
                    </div>
                </details>

                <div class="day-pills">
                    <span class="day-pill">4D TimeLiner</span>
                    <span class="day-pill">5D Costos</span>
                    <span class="day-pill">EVM (CPI/SPI)</span>
                    <span class="day-pill">Curva S Chart.js</span>
                </div>

                <a href="./planificacion-4d-5d/" class="btn-day-action">
                    <span>⏱️</span> Portal Dedicado: Simulador Curva S &amp; EVM &rarr;
                </a>
            </div>

            <!-- DÍA 4 -->
            <div class="day-card">
                <div class="day-top-bar">
                    <span class="day-badge">Día 04 · Sábado 31-10-2026</span>
                    <span class="day-schedule">08:00 a 11:45 AM · 5h</span>
                </div>
                <h3 class="day-title">Agentes Autónomos de IA y Control de Obra (Speech-to-Report)</h3>
                <p class="day-objective">
                    Despliegue de agentes inteligentes para inspección en faena, automatización de minutas de campo por voz y auditoría preventiva de reclamos contractuales.
                </p>

                <details class="density-accordion">
                    <summary>Explorar Contenido Técnico &amp; Fórmulas</summary>
                    <div class="acc-content">
                        <div>
                            <span class="acc-section-title">🤖 Arquitectura Agéntica ConTech 2026</span>
                            Agentes con capacidad de ejecución de herramientas (*Tool Use*): extracción de entidades desde audios de WhatsApp dictados por capataces.
                        </div>
                        <div>
                            <span class="acc-section-title">⚖️ Prevención de Reclamos (Claims)</span>
                            Cotejo de bitácora diaria contra causales de extensión de plazo estipuladas en la Ley de Contrataciones Públicas y contratos FIDIC.
                        </div>
                        <div>
                            <span class="acc-section-title">⚙️ Taller Práctico</span>
                            <ul class="workflow-steps">
                                <li>Dictado de novedades de faena por voz y estructuración con IA.</li>
                                <li>Cálculo automatizado del PPC semanal (Last Planner System).</li>
                                <li>Validación bajo protocolo Human-in-the-Loop con firma digital.</li>
                            </ul>
                        </div>
                    </div>
                </details>

                <div class="day-pills">
                    <span class="day-pill">Speech-to-Report</span>
                    <span class="day-pill">LLMs en Obra</span>
                    <span class="day-pill">Auditoría Claims</span>
                    <span class="day-pill">Last Planner IA</span>
                </div>

                <a href="./ia-control-obra/" class="btn-day-action">
                    <span>🤖</span> Portal Dedicado: Asistente IA &amp; Bitácoras &rarr;
                </a>
            </div>

            <!-- DÍA 5 -->
            <div class="day-card">
                <div class="day-top-bar">
                    <span class="day-badge">Día 05 · Viernes 06-11-2026</span>
                    <span class="day-schedule">01:15 a 05:00 PM · 5h</span>
                </div>
                <h3 class="day-title">Eficiencia Solar, ASHRAE 55 y Gestión Circular de RCD</h3>
                <p class="day-objective">
                    Diseño bioclimático tropical en Guayana, dimensionamiento paramétrico de sistemas solares fotovoltaicos y valorización in-situ de residuos de construcción (RCD).
                </p>

                <details class="density-accordion">
                    <summary>Explorar Contenido Técnico &amp; Fórmulas</summary>
                    <div class="acc-content">
                        <div>
                            <span class="acc-section-title">☀️ Dimensionamiento Fotovoltaico Guayana</span>
                            <div class="formula-box">
                                P_pico = E_diario / (HSP × PR) | HSP = 5.0 kWh/m²/día | PR = 0.77
                            </div>
                        </div>
                        <div>
                            <span class="acc-section-title">♻️ Economía Circular de RCD in-situ</span>
                            Trituración en faena de residuos pétreos para bases granulares: ahorro comprobado superior al **68%** en fletes y botaderos.
                        </div>
                        <div>
                            <span class="acc-section-title">⚙️ Taller Práctico</span>
                            <ul class="workflow-steps">
                                <li>Dimensionamiento de generador solar fotovoltaico para cargas críticas.</li>
                                <li>Cálculo de confort adaptativo tropical según ASHRAE 55 a 26.5°C.</li>
                                <li>Estimación de sustitución de clínker por escoria GGBS (-45% CO2).</li>
                            </ul>
                        </div>
                    </div>
                </details>

                <div class="day-pills">
                    <span class="day-pill">HSP = 5.0 Guayana</span>
                    <span class="day-pill">ASHRAE 55</span>
                    <span class="day-pill">LEED v5 / EDGE</span>
                    <span class="day-pill">RCD in-situ (-68%)</span>
                </div>

                <a href="./energia-solar-sostenibilidad/" class="btn-day-action">
                    <span>☀️</span> Portal Dedicado: Calculador Solar Fotovoltaico &rarr;
                </a>
            </div>

            <!-- DÍA 6 -->
            <div class="day-card">
                <div class="day-top-bar">
                    <span class="day-badge" style="background:var(--emerald);">Día 06 · Sábado 07-11-2026</span>
                    <span class="day-schedule">08:00 a 11:45 AM · 5h</span>
                </div>
                <h3 class="day-title">War Room Integrador: Defensa de Grado Caso Edificio Guayana 12P</h3>
                <p class="day-objective">
                    Evaluación holística final (100% de la nota sobre 20 puntos). Defensa ejecutiva en simulación War Room frente a un panel directivo, integrando los 5 ejes del diplomado.
                </p>

                <details class="density-accordion">
                    <summary>Explorar Criterios de Evaluación &amp; Rúbrica</summary>
                    <div class="acc-content">
                        <div>
                            <span class="acc-section-title">🏛️ Caso Práctico Edificio Guayana 12P</span>
                            Torre corporativa de 12 niveles en Alta Vista, Puerto Ordaz. Integración de arquitectura, estructuras metálicas, HVAC, respaldo solar y gestión de RCD.
                        </div>
                        <div>
                            <span class="acc-section-title">📊 Rúbrica Analítica sobre 20 Puntos</span>
                            <ul class="workflow-steps">
                                <li><strong>Fase 1 (5 pts):</strong> Modelo federado openBIM IFC4.3 y CDE ISO 19650.</li>
                                <li><strong>Fase 2 (5 pts):</strong> Matriz de colisiones resuelta con tickets BCF 3.0.</li>
                                <li><strong>Fase 3 (5 pts):</strong> Simulación 4D/5D, Curva S y control EVM dinámico.</li>
                                <li><strong>Fase 4 (5 pts):</strong> Memoria bioclimática, solar y defensa oral War Room.</li>
                            </ul>
                        </div>
                    </div>
                </details>

                <div class="day-pills">
                    <span class="day-pill">War Room Colegiado</span>
                    <span class="day-pill">Rúbrica sobre 20 pts</span>
                    <span class="day-pill">Edificio Guayana 12P</span>
                    <span class="day-pill">Defensa Ejecutiva</span>
                </div>

                <a href="./taller-integrador/" class="btn-day-action featured-day">
                    <span>🏛️</span> Portal Dedicado: Rúbrica &amp; War Room Integrador &rarr;
                </a>
            </div>
        </div>

        <!-- REPOSITORIO DE DOSSIERS TÉCNICOS GENERADOS -->
        <div class="section-header-academic">
            <h2>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--navy-primary)" stroke-width="2.2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                Compendio de Investigaciones Aplicadas (Cátedra de Tecnología)
            </h2>
            <span class="section-subtext">Compendio investigativo de frontera desarrollado para la Cátedra de Tecnología y Sostenibilidad</span>
        </div>

        <div class="dossier-grid">
            <div class="dossier-item">
                <span class="dossier-icon">🏛️</span>
                <div class="dossier-meta">
                    <h4>01. openBIM, Gobernanza CDE e ISO 19650</h4>
                    <p>Revisión 2026 de la serie ISO 19650, interoperabilidad IFC 4.3 para infraestructura lineal y estándar BCF 3.0.</p>
                    <span class="dossier-tag">Investigación Aplicada · Cátedra UGMA</span>
                </div>
            </div>

            <div class="dossier-item">
                <span class="dossier-icon">🛰️</span>
                <div class="dossier-meta">
                    <h4>02. ConTech y Digitalización en Campo</h4>
                    <p>Drones autónomos (Drone-in-a-Box), LiDAR, Visión Artificial (YOLOv12-seg/ICP) y bitácoras de voz Speech-to-Report.</p>
                    <span class="dossier-tag">Investigación Aplicada · Cátedra UGMA</span>
                </div>
            </div>

            <div class="dossier-item">
                <span class="dossier-icon">🌿</span>
                <div class="dossier-meta">
                    <h4>03. Construcción Sostenible, LEED v5 &amp; EDGE</h4>
                    <p>50% descarbonización en LEED v5, certificación EDGE del Banco Mundial para América Latina y criterios ESG en licitaciones.</p>
                    <span class="dossier-tag">Investigación Aplicada · Cátedra UGMA</span>
                </div>
            </div>

            <div class="dossier-item">
                <span class="dossier-icon">☀️</span>
                <div class="dossier-meta">
                    <h4>04. Eficiencia Solar &amp; Confort Adaptativo</h4>
                    <p>Norma ASHRAE 55 a 26.5°C en Guayana, dimensionamiento paramétrico solar (5.0 HSP) y concretos con escoria GGBS.</p>
                    <span class="dossier-tag">Investigación Aplicada · Cátedra UGMA</span>
                </div>
            </div>

            <div class="dossier-item">
                <span class="dossier-icon">♻️</span>
                <div class="dossier-meta">
                    <h4>05. Gestión de Residuos (RCD) y Economía Circular</h4>
                    <p>Trituración in-situ de escombros, matriz económica con más del 68% de ahorro en fletes y auditoría de derribo openBIM.</p>
                    <span class="dossier-tag">Investigación Aplicada · Cátedra UGMA</span>
                </div>
            </div>

            <div class="dossier-item" style="border-color:#7dd3fc; background:#f0f9ff;">
                <span class="dossier-icon">👑</span>
                <div class="dossier-meta">
                    <h4>Compendio Maestro Integrador</h4>
                    <p>Documento rector que consolida los 5 ejes y articula la sinergia con los módulos de presupuestos, legal y Lean.</p>
                    <span class="dossier-tag">Investigación Aplicada · Cátedra UGMA</span>
                </div>
            </div>
        </div>

        <!-- INSTRUCTOR PROFILE -->
        <div class="instructor-card">
            <img src="../assets/img/profile.jpg" alt="Ing. Héctor Mota" class="instructor-img" onerror="this.src='/assets/img/profile.jpg'">
            <div class="instructor-bio">
                <h3>Ing. Héctor Mota Zorrilla</h3>
                <span class="role">Facilitador Académico · Consultor ConTech &amp; BIM Manager</span>
                <p>
                    Ingeniero Electricista egresado de la Universidad Central de Venezuela (UCV) con amplia experiencia en gerencia de proyectos de edificación, desarrollo de software técnico enfocado a la industria de la construcción (full-stack web y motores gráficos 3D), implementación de flujos openBIM bajo el estándar internacional ISO 19650 e integración de sistemas fotovoltaicos e inteligencia artificial. Ha sido ponente sobre Metodología BIM en la Escuela de Ingeniería de la UGMA, las VII Jornadas de Ingeniería Civil de la UCAB Guayana y el Colegio de Ingenieros de Venezuela.
                </p>
            </div>
        </div>

        <!-- ACTION BOX -->
        <div class="action-box">
            <h4>¿Deseas información académica o coordinar sesiones del Diplomado?</h4>
            <p>
                Comunícate directamente con el facilitador para consultar detalles sobre el contenido programático, software requerido (Navisworks, Synchro, BlenderBIM, IfcOpenShell), calendario de clases y acreditación de postgrado.
            </p>
            <a href="https://wa.me/584148873615?text=Hola%20Ing.%20H%C3%A9ctor%20Mota,%20deseo%20informaci%C3%B3n%20acad%C3%A9mica%20sobre%20el%20M%C3%B3dulo%20VI%20del%20Diplomado%20en%20Gerencia%20de%20Obras%20UGMA..." target="_blank" rel="noopener noreferrer" class="btn-action">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Contactar al Facilitador vía WhatsApp (0414-8873615)
            </a>
        </div>
    </div>

    <!-- MODAL DE CLASE DE REPASO INTERACTIVA (MÓDULOS I AL IV) -->
    <div class="repaso-modal-overlay" id="repasoModal" onclick="closeRepasoModal(event)">
        <div class="repaso-modal-content" onclick="event.stopPropagation()">
            <button type="button" class="repaso-modal-close" onclick="closeRepasoModal()">✕</button>
            <div id="repasoModalBody">
                <!-- Se llena dinámicamente con JavaScript -->
            </div>
        </div>
    </div>

    <!-- SCRIPT SIMULADOR DE DECISIÓN GERENCIAL (INSPIRACIÓN CLUB TIA) -->
    <script>
        let selectedOption = null;
        const stats = { 1: 14, 2: 8, 3: 78 }; // Porcentajes de consenso histórico en comités técnicos

        function selectDecision(optIndex) {
            selectedOption = optIndex;
            for (let i = 1; i <= 3; i++) {
                const btn = document.querySelectorAll('.dec-btn')[i - 1];
                if (i === optIndex) {
                    btn.classList.add('selected');
                } else {
                    btn.classList.remove('selected');
                }
            }
        }

        function submitDecision() {
            if (!selectedOption) {
                alert('Por favor seleccione una opción gerencial para emitir el dictamen.');
                return;
            }

            // Mostrar barras de consenso
            for (let i = 1; i <= 3; i++) {
                const wrap = document.getElementById('barWrap' + i);
                const fill = document.getElementById('barFill' + i);
                wrap.style.display = 'block';
                setTimeout(() => {
                    fill.style.width = stats[i] + '%';
                }, 50);
            }

            const resultBox = document.getElementById('decisionResult');
            const resultHeader = document.getElementById('resultHeader');
            const resultText = document.getElementById('resultText');
            const feedback = document.getElementById('voteFeedback');

            resultBox.classList.add('active');
            feedback.textContent = '✓ Voto registrado en la telemetría del War Room';

            if (selectedOption === 1) {
                resultHeader.innerHTML = '<span style="color:var(--rose);">⚠️ Dictamen Riesgoso: Opción A</span>';
                resultText.innerHTML = '<strong>Impacto Técnico y Financiero:</strong> Desviar los ductos por debajo de la viga tras el fraguado reducirá la altura libre de entrepiso en 45 cm, violando las ordenanzas municipales de habitabilidad urbana (Módulo III) y obligando a rediseñar cielos rasos no presupuestados. Generará una variación de costo negativa (CV < 0) e incumplimiento de gálibos.';
            } else if (selectedOption === 2) {
                resultHeader.innerHTML = '<span style="color:var(--rose);">🚫 Dictamen Crítico: Opción B</span>';
                resultText.innerHTML = '<strong>Impacto Estructural y Legal:</strong> Perforar el alma de una viga de transferencia de 85 m³ de concreto sin recálculo del proyectista estructural compromete la capacidad a cortante del elemento. Incurre en causal directa de <strong>responsabilidad decenal por ruina total o parcial</strong> bajo el Art. 1637 del Código Civil Venezolano, exponiendo al residente a inhabilitación civil y penal.';
            } else if (selectedOption === 3) {
                resultHeader.innerHTML = '<span style="color:var(--emerald);">✅ Dictamen Óptimo: Opción C (Estándar openBIM ISO 19650)</span>';
                resultText.innerHTML = '<strong>Impacto ConTech y Blindaje Contractual:</strong> Al paralizar el vaciado preventivamente y emitir un ticket <strong>BCF 3.0 en el CDE</strong>, se documenta la interferencia en el modelo federado. El proyectista ajusta el pasamuros estructural o reubica el ramal MEP en 12 horas. Se formaliza una extensión de plazo justificada sin penalidad económica, preservando la garantía decenal y la integridad del activo.';
            }
        }

        function resetDecision() {
            selectedOption = null;
            for (let i = 1; i <= 3; i++) {
                const btn = document.querySelectorAll('.dec-btn')[i - 1];
                btn.classList.remove('selected');
                const wrap = document.getElementById('barWrap' + i);
                const fill = document.getElementById('barFill' + i);
                wrap.style.display = 'none';
                fill.style.width = '0%';
            }
            document.getElementById('decisionResult').classList.remove('active');
            document.getElementById('voteFeedback').textContent = '';
        }

        // MOTOR DE CLASES DE REPASO INTERACTIVAS (MÓDULOS I AL IV)
        const repasoData = {
            1: {
                badge: "MÓDULO I · 20 HORAS ACADÉMICAS",
                tagClass: "tag-m1",
                prof: "Prof. Ing. José Ignacio Pérez",
                title: "Estructura Organizativa de una Obra Civil",
                intro: `
                    <p class="repaso-academic-p">
                        La organización formal de una obra de construcción constituye el andamiaje operativo y legal que determina el éxito en la materialización física del proyecto. En la práctica profesional venezolana, los conflictos en faena no suelen originarse por desconocimiento técnico de las resistencias de materiales, sino por la <strong>indefinición de jerarquías de toma de decisiones</strong>, solapamiento de funciones y la ausencia de protocolos claros entre el Comitente (Dueño de la Obra), la Inspección Técnica y la Empresa Contratista ejecutante.
                    </p>
                    <p class="repaso-academic-p">
                        El Inspector de Obras —amparado por la Ley de Ejercicio de la Ingeniería, Arquitectura y Profesiones Afines— actúa como los ojos y la garantía técnica del propietario. Sin embargo, su facultad resolutiva está estrictamente delimitada: cualquier modificación que altere la geometría sismorresistente, las especificaciones del concreto o el monto contractual exige la anuencia formal del Proyectista Estructural y la tramitación de adendas formales para evitar contingencias legales.
                    </p>
                `,
                files: [
                    { icon: "📄", title: "Manual de Inspección de Obras (CIV)", desc: "Guía deontológica y facultades legales del ingeniero inspector en Venezuela." },
                    { icon: "📑", title: "Modelos de Actas de Inicio, Paralización y Prórroga", desc: "Formatos oficiales para asentar hitos contractuales y eventos de fuerza mayor." },
                    { icon: "🏛️", title: "Organigramas de Faena Tipo (Edificación & Vialidad)", desc: "Estructuras matriciales y jerarquías de cuadrillas según tipología de obra." }
                ],
                interactiveTitle: "Simulador de Gobernanza de Faena & Matriz RACI",
                interactiveDesc: "Selecciona una contingencia crítica en obra para visualizar la distribución de responsabilidades formales y compararla con el flujo colaborativo openBIM:",
                interactiveHtml: `
                    <div style="margin-bottom:14px;">
                        <label style="display:block; font-size:12px; font-weight:700; color:var(--navy-primary); margin-bottom:6px;">Seleccionar Contingencia de Faena:</label>
                        <select id="raciSelect" onchange="updateRaciSim()" style="width:100%; padding:10px; border-radius:8px; border:1px solid var(--border); font-size:13px; font-weight:600; color:var(--navy-primary);">
                            <option value="acero">1. Modificación imprevista del acero de refuerzo en viga de carga</option>
                            <option value="lluvia">2. Paralización por evento hidro-meteorológico extremo (Lluvias en Guayana)</option>
                            <option value="valuacion">3. Aprobación y firma de Valuación de Avance Mensual</option>
                            <option value="colision">4. Detección de interferencia entre ducto de climatización y losa maciza</option>
                        </select>
                    </div>
                    <div id="raciDisplay" style="background:#ffffff; border:1px solid var(--border); border-radius:10px; padding:16px; font-size:12.5px; line-height:1.7;">
                    </div>
                `,
                bridgeTitle: "Salto Cuántico hacia el Módulo V (ConTech & BIM - Ing. Héctor Mota)",
                bridgeDesc: `
                    En el esquema analógico tradicional, estas 4 decisiones se dilatan entre 3 y 14 días a través de libros de órdenes físicos y reuniones dispersas. En el <strong>Módulo V</strong>, sustituimos este flujo burocrático por un <strong>Entorno Común de Datos (CDE ISO 19650)</strong> donde los roles evolucionan a <em>BIM Manager</em>, <em>Coordinador Interdisciplinar</em> y <em>CDE Information Manager</em>. Cada cambio técnico se resuelve en un ticket <strong>BCF 3.0 federado</strong> en menos de 24 horas, respaldado por una firma digital inmutable que blinda jurídicamente a la inspección.
                `
            },
            2: {
                badge: "MÓDULO II · 20 HORAS ACADÉMICAS",
                tagClass: "tag-m2",
                prof: "Prof. Ing. Rafael Angarita",
                title: "Planificación y Análisis Estratégico · Cómputos, APU & EVM",
                intro: `
                    <p class="repaso-academic-p">
                        El Módulo II constituye el pilar cuantitativo y financiero de la gerencia de obras. Basado en la doctrina canónica del Ing. <strong>Harry Osers</strong> y la rigurosa norma venezolana <strong>COVENIN 2000-87 / 2000-92</strong>, los participantes dominaron la formulación analítica celda por celda de planillas de cómputos métricos, deduciendo con precisión milimétrica recubrimientos en zapatas, solapes de cabillas y áreas efectivas de encofrado sin duplicidad de concreto.
                    </p>
                    <p class="repaso-academic-p">
                        Asimismo, se profundizó en la estructura del <strong>Análisis de Precios Unitarios (APU)</strong> y el cálculo dinámico del <strong>Factor de Costos Asociados al Salario (FCAS)</strong>, elemento de altísima sensibilidad en la economía venezolana para preservar el equilibrio financiero del contratista frente a beneficios laborales e inflación. Este instrumental culmina en el modelo matemático de la <strong>Curva S sigmoidal</strong> y el control por <strong>Valor Ganado (EVM: PV, EV, AC, CPI, SPI)</strong>.
                    </p>
                `,
                resumenPdf: "Resumen_Ejecutivo_Modulo_II_Costos_EVM_Angarita.pdf",
                files: [
                    { icon: "📘", title: "195681_CasaQuintaHarryOsers174pdf.pdf", desc: "Tratado maestro de cómputos métricos con planos estructurales E-1 a E-12.", url: "./descargas/modulos-previos/Planilla_Computos_Harry_Osers.xlsx" },
                    { icon: "📊", title: "EJEMPLO METODO DEL VALOR GANADO EN EXCEL.xlsx", desc: "Modelo financiero dinámico de Curva S con fórmulas automáticas de CPI y SPI.", url: "./descargas/modulos-previos/Ejemplo_Valor_Ganado_EVM.xlsx" },
                    { icon: "📈", title: "Modelo Matemático de la Curva S Sigmoidal P(t)=3t²-2t³", desc: "Formalización analítica del avance físico acumulado y calibración matemática.", url: "./descargas/modulos-previos/Modelo_Matematico_Curva_S.pdf" },
                    { icon: "💻", title: "Guía Técnica de Softwares (MaPreX, LuloWin NG, MS Project, Primavera P6, Procore)", desc: "Comparativa técnica de herramientas venezolanas e internacionales de costos y control.", url: "./descargas/modulos-previos/Guia_Softwares_Costos_Planificacion.pdf" },
                    { icon: "📐", title: "Planillas de Cómputos Harry Osers y Matrices APU COVENIN", desc: "Formatos oficiales de cubicación de concreto, acero y matrices de APU.", url: "./descargas/modulos-previos/Planilla_Computos_Harry_Osers.xlsx" }
                ],
                interactiveTitle: "Calculadora Paramétrica de APU y Factor FCAS (Doctrina Angarita)",
                interactiveDesc: "Ajusta las variables de la partida de concreto estructural para observar cómo el FCAS y el rendimiento de la cuadrilla definen el precio unitario y la Curva S:",
                interactiveHtml: `
                    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(130px, 1fr)); gap:10px; margin-bottom:14px;">
                        <div>
                            <label style="font-size:11px; font-weight:700; color:var(--navy-primary); display:block; margin-bottom:3px;">Materiales ($/m³):</label>
                            <input type="number" id="apuMat" value="85" step="5" oninput="calcApuSim()" style="width:100%; padding:6px; border-radius:6px; border:1px solid var(--border); font-family:var(--font-mono); font-size:12.5px;">
                        </div>
                        <div>
                            <label style="font-size:11px; font-weight:700; color:var(--navy-primary); display:block; margin-bottom:3px;">Equipos ($/m³):</label>
                            <input type="number" id="apuEq" value="18" step="2" oninput="calcApuSim()" style="width:100%; padding:6px; border-radius:6px; border:1px solid var(--border); font-family:var(--font-mono); font-size:12.5px;">
                        </div>
                        <div>
                            <label style="font-size:11px; font-weight:700; color:var(--navy-primary); display:block; margin-bottom:3px;">Cuadrilla MO ($/día):</label>
                            <input type="number" id="apuMo" value="65" step="5" oninput="calcApuSim()" style="width:100%; padding:6px; border-radius:6px; border:1px solid var(--border); font-family:var(--font-mono); font-size:12.5px;">
                        </div>
                        <div>
                            <label style="font-size:11px; font-weight:700; color:var(--navy-primary); display:block; margin-bottom:3px;">Rendimiento (m³/día):</label>
                            <input type="number" id="apuRend" value="4.5" step="0.5" oninput="calcApuSim()" style="width:100%; padding:6px; border-radius:6px; border:1px solid var(--border); font-family:var(--font-mono); font-size:12.5px;">
                        </div>
                        <div>
                            <label style="font-size:11px; font-weight:700; color:var(--navy-primary); display:block; margin-bottom:3px;">FCAS (% Salarial):</label>
                            <input type="number" id="apuFcas" value="450" step="50" oninput="calcApuSim()" style="width:100%; padding:6px; border-radius:6px; border:1px solid var(--border); font-family:var(--font-mono); font-size:12.5px;">
                        </div>
                    </div>
                    <div id="apuDisplay" style="background:#ffffff; border:1px solid var(--border); border-radius:10px; padding:14px; font-size:12.5px; line-height:1.65;">
                    </div>
                `,
                bridgeTitle: "Salto Cuántico hacia el Módulo V (ConTech & BIM - Ing. Héctor Mota)",
                bridgeDesc: `
                    En el Módulo II, cubicamos la Casa Quinta Harry Osers invirtiendo decenas de horas de cálculo manual celda por celda. En el <strong>Módulo V</strong>, importamos el modelo paramétrico <strong>IFC 4.3</strong> y extraemos el <strong>QTO exacto en milisegundos</strong> mediante operaciones booleanas CSG sin margen de error humano. Conectamos ese metadato al APU para alimentar automáticamente el <strong>BIM 5D y la Curva S certificada por telemetría con drones</strong>.
                `
            },
            3: {
                badge: "MÓDULO III · 30 HORAS ACADÉMICAS",
                tagClass: "tag-m3",
                prof: "Prof. Abg. Omar Enrique Martínez",
                title: "Normas y Responsabilidades Legales · Contratos & Art. 1637 CCV",
                intro: `
                    <p class="repaso-academic-p">
                        El Módulo III brinda la armadura de seguridad jurídica indispensable para el ejercicio ético y preventivo de la gerencia de obras. Los participantes examinaron la tipología contractual venezolana (Contratos a Precios Unitarios, Llave en Mano EPC y Suma Alzada), el régimen de licitaciones públicas, la Ley de Ejercicio de la Ingeniería (Decreto 444) y los causales de reclamo económico (<em>claims</em>) por variaciones extraordinarias de obra.
                    </p>
                    <p class="repaso-academic-p">
                        El núcleo neurálgico del módulo reside en la <strong>Responsabilidad Decenal consagrada en el Artículo 1637 del Código Civil Venezolano</strong>: durante diez años, el arquitecto y el constructor responden civil y penalmente si la edificación se arruina en todo o en parte, o presenta peligro inminente de ruina por defecto de construcción o vicio del suelo. A través del análisis del <em>Caso Práctico Proyecto Expansión Industrial Matanzas</em> en Puerto Ordaz, se estudió cómo documentar adecuadamente las órdenes de servicio para evitar la ruina financiera y judicial del profesional.
                    </p>
                `,
                files: [
                    { icon: "⚖️", title: "Normas de Construcción en Venezuela.pdf (23 págs)", desc: "Compendio exhaustivo de marco legal, contratos de construcción y COVENIN." },
                    { icon: "🏭", title: "CASO PRÁCTICO Proyecto Expansión Industrial Matanzas", desc: "Evaluación pericial aplicada de contingencias, penalizaciones y responsabilidades en Guayana." },
                    { icon: "📜", title: "El_Plano Estructural Legal.pdf (15 págs)", desc: "Tratamiento de riesgos contractuales, vicios ocultos y alcances del Art. 1637 CCV." },
                    { icon: "🎥", title: "Videos de Casos Legales en la Construcción (MP4)", desc: "El campo minado legal de las obras en Venezuela y responsabilidades penales del residente." }
                ],
                interactiveTitle: "Auditor Pericial de Responsabilidad Decenal (Art. 1637 CCV vs Caso Matanzas)",
                interactiveDesc: "Selecciona una patología o litigio estructural para emitir el dictamen pericial sobre quién asume la responsabilidad civil y cómo blindarse:",
                interactiveHtml: `
                    <div style="margin-bottom:14px;">
                        <label style="display:block; font-size:12px; font-weight:700; color:var(--navy-primary); margin-bottom:6px;">Seleccionar Patología o Litigio de Obra:</label>
                        <select id="legalSelect" onchange="evalLegalCase()" style="width:100%; padding:10px; border-radius:8px; border:1px solid var(--border); font-size:13px; font-weight:600; color:var(--navy-primary);">
                            <option value="suelo">Caso 1: Asentamiento diferencial severo por licuación de suelo tras 3 años</option>
                            <option value="concreto">Caso 2: Fisuración por cortante en viga de transferencia por fraguado deficiente a los 5 años</option>
                            <option value="planos">Caso 3: Omisión de tubería sanitaria en planos que obligó a demoler losa en faena</option>
                        </select>
                    </div>
                    <div id="legalDisplay" style="background:#ffffff; border:1px solid var(--border); border-radius:10px; padding:16px; font-size:12.5px; line-height:1.7;">
                    </div>
                `,
                bridgeTitle: "Salto Cuántico hacia el Módulo V (ConTech & BIM - Ing. Héctor Mota)",
                bridgeDesc: `
                    En juicios de obras bajo el método tradicional CAD, los expedientes probatorios suelen consistir en planos arrugados, versiones sin fecha y testimonios contradictorios. En el <strong>Módulo V</strong>, la implementación del <strong>Entorno Común de Datos (CDE ISO 19650)</strong> confiere <strong>plena fuerza probatoria inmutable</strong>: cada modelo federado, cada pase de tubería y cada orden de vaciado queda sellado con autor, fecha, hora y hash criptográfico en estado <em>Published</em>, blindando pericialmente al ingeniero ante cualquier reclamo decenal improcedente.
                `
            },
            4: {
                badge: "MÓDULO IV · 20 HORAS ACADÉMICAS",
                tagClass: "tag-m4",
                prof: "Prof. Esp. Ing. Diego Zambrano",
                title: "Control de Procesos e Informes · Lean Construction & LPS",
                intro: `
                    <p class="repaso-academic-p">
                        El Módulo IV traslada la ingeniería de producción industrial a la faena viva de la construcción mediante la filosofía <strong>Lean Construction</strong> (Compendio mayor de 100 páginas). Los participantes rompieron con la tradicional improvisación en campo mediante el sistema <strong>Last Planner System (LPS)</strong>, estableciendo una secuencia rigurosa entre la Planificación Maestra (hitos globales), la Planificación Intermedia (<em>Lookahead Planning</em> a 4-6 semanas para remover restricciones antes de que lleguen a la cuadrilla) y el Plan Semanal de Trabajo.
                    </p>
                    <p class="repaso-academic-p">
                        Asimismo, se abordó el indicador por excelencia de confiabilidad operativa: el <strong>Porcentaje de Asignaciones Cumplidas (PPC / PAC)</strong> y el análisis sistemático de causa raíz para erradicar las 8 pérdidas del Lean (<em>Muda</em>). El módulo integró los protocolos formales de control de calidad de concreto (rotura de probetas según normas ASTM/COVENIN, ensayo de cono de Abrams Slump) y la gestión preventiva de seguridad bajo el marco <strong>LOPCYMAT y COVENIN 2270</strong>.
                    </p>
                `,
                resumenPdf: "Resumen_Ejecutivo_Modulo_IV_Lean_Calidad_Zambrano.pdf",
                files: [
                    { icon: "🏡", title: "Caso Práctico: Vivienda Residencial Los Olivos (18 Tareas)", desc: "Diagramación PDM y determinación analítica de la Ruta Crítica de 63 días hábiles.", url: "./descargas/modulos-previos/Caso_Practico_Residencial_Los_Olivos.pdf" },
                    { icon: "🔍", title: "Peritaje Patológico: Losa de Techo Edificio San Antonio (Paseo Caroní)", desc: "Informe forense sobre deflexión y fisuración severa con implicaciones del Art. 1637 CCV.", url: "./descargas/modulos-previos/Peritaje_Patologia_Edificio_San_Antonio.pdf" },
                    { icon: "📑", title: "Manual SIGECOF de Formatos de Obra (168 páginas)", desc: "Manual oficial exhaustivo con libros de órdenes, actas de medición y control de valuaciones.", url: "./descargas/modulos-previos/Manual_Formatos_Obras_SIGECOF.pdf" },
                    { icon: "📕", title: "Lean Construction y la planificación operativa.pdf (100 págs)", desc: "Tratado exhaustivo de producción sin desperdicio, LPS y flujos de trabajo en faena.", url: "./descargas/modulos-previos/Lean_Construction_Planificacion_Operativa.pdf" },
                    { icon: "📋", title: "Informe de Inspección Estructural Apostadero-Amarilis", desc: "Auditoría pericial de control de procesos constructivos y protocolos de calidad.", url: "./descargas/modulos-previos/Informe_Inspeccion_Apostadero_Amarilis.pdf" }
                ],
                interactiveTitle: "Simulador Last Planner System (LPS) y Cálculo en Vivo de PPC/PAC",
                interactiveDesc: "Marca el estatus de las 6 actividades programadas para la semana 04 del Edificio Guayana y evalúa el diagnóstico de confiabilidad Lean:",
                interactiveHtml: `
                    <div style="background:#ffffff; border:1px solid var(--border); border-radius:10px; padding:14px; margin-bottom:14px;">
                        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:10px; padding-bottom:8px; border-bottom:1px solid var(--border);">
                            <span style="font-size:12px; font-weight:800; color:var(--navy-primary);">Actividad Programada (Semana 04):</span>
                            <span style="font-size:11px; font-weight:700; color:var(--text-light);">Estatus de Compromiso</span>
                        </div>
                        <div style="display:flex; flex-direction:column; gap:8px;" id="lpsTasksList">
                            <label style="display:flex; align-items:center; justify-content:space-between; font-size:12.5px; cursor:pointer;">
                                <span>1. Armado de acero longitudinal en vigas V-101 a V-104</span>
                                <input type="checkbox" id="lps1" checked onchange="calcLpsSim()">
                            </label>
                            <label style="display:flex; align-items:center; justify-content:space-between; font-size:12.5px; cursor:pointer;">
                                <span>2. Colocación de pases sanitarios de 4" en encofrado</span>
                                <input type="checkbox" id="lps2" checked onchange="calcLpsSim()">
                            </label>
                            <label style="display:flex; align-items:center; justify-content:space-between; font-size:12.5px; cursor:pointer;">
                                <span>3. Vaciado masivo de 45 m³ de concreto f'c = 280 kg/cm²</span>
                                <input type="checkbox" id="lps3" checked onchange="calcLpsSim()">
                            </label>
                            <label style="display:flex; align-items:center; justify-content:space-between; font-size:12.5px; cursor:pointer;">
                                <span>4. Toma de 6 probetas de concreto y ensayo de cono Slump</span>
                                <input type="checkbox" id="lps4" checked onchange="calcLpsSim()">
                            </label>
                            <label style="display:flex; align-items:center; justify-content:space-between; font-size:12.5px; cursor:pointer;">
                                <span>5. Desencofrado lateral de columnas y aplicación de membrana curadora</span>
                                <input type="checkbox" id="lps5" onchange="calcLpsSim()">
                            </label>
                            <label style="display:flex; align-items:center; justify-content:space-between; font-size:12.5px; cursor:pointer;">
                                <span>6. Levantamiento topográfico con estación total de ejes nivel 4</span>
                                <input type="checkbox" id="lps6" onchange="calcLpsSim()">
                            </label>
                        </div>
                    </div>
                    <div id="lpsDisplay" style="background:#ffffff; border:1px solid var(--border); border-radius:10px; padding:14px; font-size:12.5px; line-height:1.65;">
                    </div>
                `,
                bridgeTitle: "Salto Cuántico hacia el Módulo V (ConTech & BIM - Ing. Héctor Mota)",
                bridgeDesc: `
                    En el Módulo IV, el Last Planner System se gestiona mediante notas adhesivas (Post-its) y planillas de cálculo que se desactualizan al finalizar el turno. En el <strong>Módulo V</strong>, fusionamos el LPS con <strong>BIM 4D (Navisworks TimeLiner / Synchro)</strong>: vinculamos las tareas semanales directamente a los objetos 3D, generamos reportes de bitácora mediante transcripción de voz con IA (<em>Speech-to-Report</em>) y auditamos el avance real diario mediante nubes de puntos de drones y visión artificial.
                `
            }
        };

        function openRepasoModal(id) {
            const data = repasoData[id];
            if (!data) return;

            let filesHtml = '';
            if (data.resumenPdf) {
                filesHtml += `
                    <div style="grid-column: 1 / -1; margin-bottom: 6px;">
                        <a href="./descargas/modulos-previos/${data.resumenPdf}" download class="boveda-resumen-btn auth-protected-download" style="margin:0;">
                            <span>📥</span> Descargar Resumen Académico de Cátedra en PDF (Cátedra UGMA)
                        </a>
                    </div>
                `;
            }
            data.files.forEach(f => {
                const downloadBtn = f.url ? `<a href="${f.url}" download class="auth-protected-download" style="display:inline-flex; align-items:center; gap:4px; font-size:11px; font-weight:700; color:var(--blue-accent); text-decoration:none; margin-top:4px;"><span>📥</span> Descargar recurso</a>` : '';
                filesHtml += `
                    <div class="repaso-file-item">
                        <span class="repaso-file-icon">${f.icon}</span>
                        <div style="flex:1;">
                            <div style="font-weight:700; color:var(--navy-primary); font-size:12px; margin-bottom:2px;">${f.title}</div>
                            <div style="color:var(--text-muted); font-size:11.5px; line-height:1.4;">${f.desc}</div>
                            ${downloadBtn}
                        </div>
                    </div>
                `;
            });

            const bodyHtml = `
                <div style="margin-bottom:14px;">
                    <span class="retro-tag ${data.tagClass}" style="margin-bottom:6px;">${data.badge}</span>
                    <div style="font-size:13px; color:var(--text-light); font-weight:700;">${data.prof}</div>
                    <h2 style="font-size:24px; font-weight:800; color:var(--navy-primary); line-height:1.3; margin:6px 0 16px;">${data.title}</h2>
                </div>

                <div style="margin-bottom:20px;">
                    ${data.intro}
                </div>

                <div style="margin:24px 0 16px;">
                    <div style="font-size:13px; font-weight:800; color:var(--navy-primary); text-transform:uppercase; letter-spacing:0.04em; margin-bottom:10px; display:flex; align-items:center; gap:6px;">
                        <span>📦</span> Catálogo de Documentos de Classroom (Bóveda D:\\UGMA)
                    </div>
                    <div class="repaso-files-grid">
                        ${filesHtml}
                    </div>
                </div>

                <div class="repaso-interactive-box ${id === 1 ? 'box-blue' : (id === 2 ? '' : (id === 3 ? 'box-amber' : 'box-purple'))}">
                    <div style="font-size:15px; font-weight:800; color:var(--navy-primary); margin-bottom:6px; display:flex; align-items:center; gap:8px;">
                        <span>🔬</span> ${data.interactiveTitle}
                    </div>
                    <p style="font-size:13px; color:var(--text-muted); margin-bottom:14px;">${data.interactiveDesc}</p>
                    ${data.interactiveHtml}
                </div>

                <div class="repaso-bridge-box">
                    <div style="font-size:14.5px; font-weight:800; color:#38bdf8; margin-bottom:8px; display:flex; align-items:center; gap:8px;">
                        <span>🚀</span> ${data.bridgeTitle}
                    </div>
                    <p style="font-size:13px; color:#cbd5e1; line-height:1.7; margin:0;">${data.bridgeDesc}</p>
                </div>
            `;

            document.getElementById('repasoModalBody').innerHTML = bodyHtml;
            document.getElementById('repasoModal').style.display = 'flex';

            // Inicializar el simulador del módulo correspondiente
            if (id === 1) updateRaciSim();
            if (id === 2) calcApuSim();
            if (id === 3) evalLegalCase();
            if (id === 4) calcLpsSim();
        }

        function closeRepasoModal(e) {
            document.getElementById('repasoModal').style.display = 'none';
        }

        // SIMULADOR 1: MATRIZ RACI (MÓDULO I)
        function updateRaciSim() {
            const val = document.getElementById('raciSelect').value;
            const disp = document.getElementById('raciDisplay');
            if (val === 'acero') {
                disp.innerHTML = `
                    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(130px, 1fr)); gap:10px; margin-bottom:10px;">
                        <div style="background:#f1f5f9; padding:8px; border-radius:6px;"><strong>R (Ejecuta):</strong><br>Ing. Residente</div>
                        <div style="background:#f1f5f9; padding:8px; border-radius:6px;"><strong>A (Aprueba):</strong><br>Proyectista Estructural</div>
                        <div style="background:#f1f5f9; padding:8px; border-radius:6px;"><strong>C (Consulta):</strong><br>Ing. Inspector CIV</div>
                        <div style="background:#f1f5f9; padding:8px; border-radius:6px;"><strong>I (Informa):</strong><br>Comitente / Dueño</div>
                    </div>
                    <div style="color:var(--navy-primary);"><strong>Criterio Normativo:</strong> Ningún residente puede reducir el área de acero calculada (\(A_s\)). El Inspector debe exigir memorando firmado por el calculista antes de permitir el vaciado. En openBIM, este cambio se valida en el modelo federado mediante un ticket BCF 3.0.</div>
                `;
            } else if (val === 'lluvia') {
                disp.innerHTML = `
                    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(130px, 1fr)); gap:10px; margin-bottom:10px;">
                        <div style="background:#f1f5f9; padding:8px; border-radius:6px;"><strong>R (Ejecuta):</strong><br>Ing. Inspector CIV</div>
                        <div style="background:#f1f5f9; padding:8px; border-radius:6px;"><strong>A (Aprueba):</strong><br>Inspector & Residente</div>
                        <div style="background:#f1f5f9; padding:8px; border-radius:6px;"><strong>C (Consulta):</strong><br>Estación INAMEH</div>
                        <div style="background:#f1f5f9; padding:8px; border-radius:6px;"><strong>I (Informa):</strong><br>Comitente / Fianza</div>
                    </div>
                    <div style="color:var(--navy-primary);"><strong>Criterio Normativo:</strong> Se redacta de inmediato un <em>Acta de Paralización por Fuerza Mayor</em> debidamente foliada en bitácora para congelar el cómputo de días hábiles y evitar cobro indebido de multas contractuales.</div>
                `;
            } else if (val === 'valuacion') {
                disp.innerHTML = `
                    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(130px, 1fr)); gap:10px; margin-bottom:10px;">
                        <div style="background:#f1f5f9; padding:8px; border-radius:6px;"><strong>R (Ejecuta):</strong><br>Ing. Residente</div>
                        <div style="background:#f1f5f9; padding:8px; border-radius:6px;"><strong>A (Aprueba):</strong><br>Ing. Inspector CIV</div>
                        <div style="background:#f1f5f9; padding:8px; border-radius:6px;"><strong>C (Consulta):</strong><br>Dpto. Presupuestos</div>
                        <div style="background:#f1f5f9; padding:8px; border-radius:6px;"><strong>I (Informa):</strong><br>Administración / Banco</div>
                    </div>
                    <div style="color:var(--navy-primary);"><strong>Criterio Normativo:</strong> El Inspector verifica en sitio la medición de cómputos conforme a la norma COVENIN 2000. Una vez firmada, adquiere fuerza jurídica de título de cobro.</div>
                `;
            } else {
                disp.innerHTML = `
                    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(130px, 1fr)); gap:10px; margin-bottom:10px;">
                        <div style="background:#f1f5f9; padding:8px; border-radius:6px;"><strong>R (Ejecuta):</strong><br>Coordinador openBIM</div>
                        <div style="background:#f1f5f9; padding:8px; border-radius:6px;"><strong>A (Aprueba):</strong><br>Calculista + Sanitario</div>
                        <div style="background:#f1f5f9; padding:8px; border-radius:6px;"><strong>C (Consulta):</strong><br>Inspector de Obra</div>
                        <div style="background:#f1f5f9; padding:8px; border-radius:6px;"><strong>I (Informa):</strong><br>Cuadrilla Encofrado</div>
                    </div>
                    <div style="color:var(--navy-primary);"><strong>Criterio Normativo:</strong> En el flujo tradicional CAD esta colisión se resolvía picando la losa en obra. En el Módulo V se resuelve antes de vaciar emitiendo una incidencia BCF 3.0 en el modelo federado.</div>
                `;
            }
        }

        // SIMULADOR 2: APU Y FCAS (MÓDULO II)
        function calcApuSim() {
            const mat = parseFloat(document.getElementById('apuMat').value) || 0;
            const eq = parseFloat(document.getElementById('apuEq').value) || 0;
            const mo = parseFloat(document.getElementById('apuMo').value) || 0;
            const rend = parseFloat(document.getElementById('apuRend').value) || 1;
            const fcas = parseFloat(document.getElementById('apuFcas').value) || 0;

            const moUnit = mo / rend;
            const fcasAmount = moUnit * (fcas / 100);
            const totalMo = moUnit + fcasAmount;
            const costoDirecto = mat + eq + totalMo;
            const indirectos = costoDirecto * 0.15;
            const subtotal = costoDirecto + indirectos;
            const utilidad = subtotal * 0.10;
            const precioUnitario = subtotal + utilidad;

            document.getElementById('apuDisplay').innerHTML = `
                <div style="display:grid; grid-template-columns:1fr 1fr; gap:12px; margin-bottom:10px;">
                    <div>
                        • Mano de Obra Básica: <strong>$${moUnit.toFixed(2)}/m³</strong><br>
                        • Carga Social FCAS (${fcas}%): <strong>$${fcasAmount.toFixed(2)}/m³</strong><br>
                        • Total Mano de Obra: <strong style="color:var(--navy-primary);">$${totalMo.toFixed(2)}/m³</strong>
                    </div>
                    <div>
                        • Costo Directo Total: <strong>$${costoDirecto.toFixed(2)}/m³</strong><br>
                        • Gastos Generales (15%): <strong>$${indirectos.toFixed(2)}/m³</strong><br>
                        • Utilidad Contratista (10%): <strong>$${utilidad.toFixed(2)}/m³</strong>
                    </div>
                </div>
                <div style="background:#ecfdf5; border:1px solid #a7f3d0; padding:10px; border-radius:8px; display:flex; justify-content:space-between; align-items:center;">
                    <span style="font-weight:800; color:#065f46; font-size:13.5px;">PRECIO UNITARIO FINAL (COVENIN E-323):</span>
                    <span style="font-family:var(--font-mono); font-weight:800; font-size:18px; color:#047857;">$${precioUnitario.toFixed(2)} / m³</span>
                </div>
                <div style="font-size:11.5px; color:var(--text-light); margin-top:8px;">
                    *Sensibilidad EVM: El FCAS representa el ${(fcasAmount / costoDirecto * 100).toFixed(1)}% del costo directo de la partida. Si el rendimiento cae de ${rend} a ${(rend * 0.7).toFixed(1)} m³/día, el costo se incrementa en $${((mo / (rend * 0.7) * (1 + fcas/100)) - totalMo).toFixed(2)}/m³, deteriorando el CPI por debajo de 0.85.
                </div>
            `;
        }

        // SIMULADOR 3: RESPONSABILIDAD DECENAL (MÓDULO III)
        function evalLegalCase() {
            const val = document.getElementById('legalSelect').value;
            const disp = document.getElementById('legalDisplay');
            if (val === 'suelo') {
                disp.innerHTML = `
                    <div style="background:#fee2e2; border:1px solid #fecaca; color:#991b1b; padding:10px; border-radius:8px; margin-bottom:10px; font-weight:700;">
                        ⚖️ Dictamen Jurídico: Vicio del Suelo (Art. 1637 Código Civil de Venezuela)
                    </div>
                    <p style="margin-bottom:8px;"><strong>Sujeto Responsable:</strong> El Ingeniero Geotécnico que suscribió el estudio de suelos y el Constructor si este último inició faena sin exigir ensayos de penetración estándar (SPT) o si desatendió las recomendaciones de fundación profunda.</p>
                    <p style="margin-bottom:8px;"><strong>Plazo de Garantía Decenal:</strong> La ruina ocurrió al año 3 (dentro del lapso de 10 años). El propietario dispone de <strong>dos (2) años continuos</strong> a partir del asentamiento para incoar la demanda indemnizatoria ante tribunales civiles ordinarios.</p>
                    <div style="background:#f1f5f9; padding:8px; border-radius:6px; font-size:12px; color:var(--navy-primary);">
                        <strong>🛡️ Blindaje CDE ISO 19650:</strong> El Acta de Aceptación del Estudio de Suelo firmada en estado <em>Published</em> y el ensayo de densímetro nuclear As-Built liberan al Ingeniero Residente de culpa pericial.
                    </div>
                `;
            } else if (val === 'concreto') {
                disp.innerHTML = `
                    <div style="background:#fee2e2; border:1px solid #fecaca; color:#991b1b; padding:10px; border-radius:8px; margin-bottom:10px; font-weight:700;">
                        ⚖️ Dictamen Jurídico: Defecto de Construcción y Vicio de Materiales (Art. 1637 CCV)
                    </div>
                    <p style="margin-bottom:8px;"><strong>Sujeto Responsable:</strong> El Contratista y el Ingeniero Residente. Si el Inspector técnico aprobó el vaciado con probetas de concreto que no alcanzaron el f'c de diseño (f'c < 280 kg/cm² a los 28 días) sin exigir ensayos de esclerometría o núcleos diamantados, incurre en <strong>responsabilidad solidaria civil y disciplinaria ante el Tribunal Disciplinario del CIV</strong>.</p>
                    <p style="margin-bottom:8px;"><strong>Criterio de Ruina:</strong> La fisuración severa por cortante califica como <em>peligro evidente de ruina</em>, activando la reparación integral de la estructura a costo del constructor.</p>
                    <div style="background:#f1f5f9; padding:8px; border-radius:6px; font-size:12px; color:var(--navy-primary);">
                        <strong>🛡️ Blindaje CDE ISO 19650:</strong> Las actas digitales de rotura de cilindros con firma electrónica del laboratorio certificado son la única prueba admisible para deslindar culpas.
                    </div>
                `;
            } else {
                disp.innerHTML = `
                    <div style="background:#fef3c7; border:1px solid #fde68a; color:#92400e; padding:10px; border-radius:8px; margin-bottom:10px; font-weight:700;">
                        ⚖️ Dictamen Jurídico: Vicio de Proyecto vs. Negligencia de Inspección (Módulo III)
                    </div>
                    <p style="margin-bottom:8px;"><strong>Sujeto Responsable:</strong> El Proyectista Sanitario responde frente al Comitente por error u omisión de diseño. Sin embargo, si el Constructor demolió la losa sin notificar ni obtener orden de cambio del Inspector, el costo del re-trabajo lo asume el Contratista.</p>
                    <p style="margin-bottom:8px;"><strong>Reclamo Económico (Claim):</strong> Se tramita como <em>Obra Extraordinaria no Prevista</em> con recalculo de APU según las cláusulas de la Ley de Contrataciones Públicas.</p>
                    <div style="background:#f1f5f9; padding:8px; border-radius:6px; font-size:12px; color:var(--navy-primary);">
                        <strong>🛡️ Salto al Módulo V:</strong> En el modelo openBIM federado, este cruce es detectado automáticamente en preconstrucción mediante Clash Detection, con costo de corrección de $15 en oficina vs $3,500 en faena.
                    </div>
                `;
            }
        }

        // SIMULADOR 4: LAST PLANNER SYSTEM & PPC/PAC (MÓDULO IV)
        function calcLpsSim() {
            let completed = 0;
            for (let i = 1; i <= 6; i++) {
                if (document.getElementById('lps' + i).checked) {
                    completed++;
                }
            }
            const ppc = (completed / 6) * 100;
            const disp = document.getElementById('lpsDisplay');

            let badgeHtml = '';
            let diagText = '';
            if (ppc >= 80) {
                badgeHtml = '<span style="background:#dcfce7; color:#166534; font-weight:800; padding:4px 10px; border-radius:6px;">🟢 PPC: ' + ppc.toFixed(1) + '% · Óptimo Lean (Flujo Continuo)</span>';
                diagText = 'La faena mantiene un ritmo de producción altamente predecible. La cuadrilla avanza sin cuellos de botella y la ruta crítica del cronograma está protegida.';
            } else if (ppc >= 60) {
                badgeHtml = '<span style="background:#fef3c7; color:#92400e; font-weight:800; padding:4px 10px; border-radius:6px;">🟡 PPC: ' + ppc.toFixed(1) + '% · Alerta Media (Variabilidad Detectada)</span>';
                diagText = 'Existen restricciones no liberadas a tiempo en el Lookahead Planning (probablemente falta de materiales o retraso en inspección). Se requiere aplicar los 5 Porqués en la reunión semanal de compromiso.';
            } else {
                badgeHtml = '<span style="background:#fee2e2; color:#991b1b; font-weight:800; padding:4px 10px; border-radius:6px;">🔴 PPC: ' + ppc.toFixed(1) + '% · Falla Crítica (Riesgo de Atraso en Ruta Crítica)</span>';
                diagText = 'Menos del 60% de las promesas de trabajo se cumplieron. El efecto cascada generará demoras de fraguado y penalizaciones financieras. Se debe reprogramar el frente de trabajo inmediatamente.';
            }

            disp.innerHTML = `
                <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:8px; flex-wrap:wrap; gap:6px;">
                    <div>Asignaciones Logradas: <strong>${completed} de 6 tareas</strong></div>
                    <div>${badgeHtml}</div>
                </div>
                <div style="font-size:12.5px; color:var(--navy-primary); line-height:1.6;">
                    <strong>Diagnóstico Operativo:</strong> ${diagText}
                </div>
            `;
        }
    
        // ==========================================
        // SISTEMA DE AUTENTICACIÓN Y CONTROL DE ACCESO (FASE 2)
        // ==========================================
        const AUTH_KEY = 'ugma_student_session';

        function getAuthUser() {
            try {
                const data = localStorage.getItem(AUTH_KEY);
                return data ? JSON.parse(data) : null;
            } catch(e) {
                return null;
            }
        }

        function setAuthUser(user) {
            localStorage.setItem(AUTH_KEY, JSON.stringify(user));
            renderAuthState();
        }

        function logoutUser() {
            localStorage.removeItem(AUTH_KEY);
            renderAuthState();
        }

        function openAuthModal(tab = 'login', msg = '') {
            const modal = document.getElementById('authModal');
            const msgBox = document.getElementById('authContextMsg');
            if (msg) {
                msgBox.innerHTML = `<span>ℹ️</span> <strong>Aviso:</strong> ${msg}`;
                msgBox.style.display = 'block';
            } else {
                msgBox.style.display = 'none';
            }
            switchAuthTab(tab);
            modal.classList.add('active');
        }

        function closeAuthModal() {
            document.getElementById('authModal').classList.remove('active');
        }

        function switchAuthTab(tab) {
            const tabLogin = document.getElementById('tabLoginBtn');
            const tabReg = document.getElementById('tabRegisterBtn');
            const formLogin = document.getElementById('formLogin');
            const formReg = document.getElementById('formRegister');

            if (tab === 'login') {
                tabLogin.classList.add('active');
                tabReg.classList.remove('active');
                formLogin.style.display = 'block';
                formReg.style.display = 'none';
            } else {
                tabLogin.classList.remove('active');
                tabReg.classList.add('active');
                formLogin.style.display = 'none';
                formReg.style.display = 'block';
            }
        }

        function handleLoginSubmit(e) {
            e.preventDefault();
            const email = document.getElementById('loginEmail').value.trim();
            const name = email.split('@')[0].replace('.', ' ').toUpperCase();
            const user = {
                name: `Ing. ${name}`,
                email: email,
                role: 'Alumno UGMA',
                ci: 'V-Oficial'
            };
            setAuthUser(user);
            closeAuthModal();
        }

        function handleRegisterSubmit(e) {
            e.preventDefault();
            const name = document.getElementById('regName').value.trim();
            const email = document.getElementById('regEmail').value.trim();
            const ci = document.getElementById('regCi').value.trim();
            const prof = document.getElementById('regProf').value.trim();

            const user = {
                name: name.startsWith('Ing.') || name.startsWith('Arq.') ? name : `Ing. ${name}`,
                email: email,
                ci: ci,
                role: `${prof} · Alumno UGMA`
            };
            setAuthUser(user);
            closeAuthModal();
        }

        function handleDemoLogin() {
            const demoUser = {
                name: 'Ing. Carlos Mendoza',
                email: 'carlos.mendoza@alumnos.ugma.edu.ve',
                ci: 'V-20.123.456 (CIV 214.502)',
                role: 'Participante Oficial · Diplomado Gerencia'
            };
            setAuthUser(demoUser);
            closeAuthModal();
        }

        
        function toggleMobileMenu() {
            const overlay = document.getElementById('mobileDrawerOverlay');
            const drawer = document.getElementById('mobileDrawer');
            if (!overlay || !drawer) return;
            const isOpen = drawer.classList.contains('active');
            if (isOpen) {
                drawer.classList.remove('active');
                overlay.classList.remove('active');
            } else {
                drawer.classList.add('active');
                overlay.classList.add('active');
            }
        }

        function renderAuthState() {
            const user = getAuthUser();
            const navAuth = document.getElementById('navAuthArea');
            const heroBanner = document.getElementById('heroAuthBanner');
            const heroTitle = document.getElementById('heroAuthTitle');
            const heroDesc = document.getElementById('heroAuthDesc');
            const heroBtns = document.getElementById('heroAuthButtons');
            const bovedaCurtain = document.getElementById('bovedaLockCurtain');

            if (user) {
                // Estado Autenticado
                if (navAuth) {
                    navAuth.innerHTML = `
                        <div class="user-profile-badge">
                            <span>🟢</span>
                            <span>${user.name}</span>
                        </div>
                        <button type="button" class="btn-auth-logout" onclick="logoutUser()" title="Cerrar sesión">
                            Cerrar Sesión
                        </button>
                    `;
                }
                if (heroBanner) {
                    heroBanner.classList.add('authenticated');
                    heroBanner.style.background = '#f0fdf4';
                    heroBanner.style.borderColor = '#86efac';
                    heroTitle.innerHTML = `¡Bienvenido al Aula Virtual, ${user.name}!`;
                    heroDesc.innerHTML = `Tu matrícula de participante está verificada. Tienes acceso irrestricto a todas las clases interactivas y a la Bóveda Centralizada de Descargas.`;
                    heroBtns.innerHTML = `
                        <a href="./boveda.html" class="btn-auth-action btn-auth-login" style="background:#047857; border-color:#047857; padding:12px 22px; font-size:14px; text-decoration:none;">
                            <span>🚀</span> ENTRAR A LA BÓVEDA Y AULA VIRTUAL ➜
                        </a>
                    `;
                }
                if (bovedaCurtain) {
                    bovedaCurtain.classList.add('unlocked');
                }
            } else {
                // Estado Invitado / No autenticado
                if (navAuth) {
                    navAuth.innerHTML = `
                        <button type="button" class="btn-auth-action btn-auth-login" onclick="openAuthModal('login')">
                            <span>🔐</span> Ingreso Alumnos
                        </button>
                        <button type="button" class="btn-auth-action btn-auth-register" onclick="openAuthModal('register')">
                            <span>📝</span> Registro
                        </button>
                    `;
                }
                if (heroBanner) {
                    heroBanner.classList.remove('authenticated');
                    heroTitle.innerHTML = `Portal Protegido · Área Exclusiva de Participantes UGMA`;
                    heroDesc.innerHTML = `Regístrate como participante del Diplomado o inicia sesión para habilitar el acceso a las 6 Sesiones de Trabajo y descargar todos los expedientes de la Bóveda Centralizada.`;
                    heroBtns.innerHTML = `
                        <button type="button" class="btn-auth-action btn-auth-login" onclick="openAuthModal('login')">
                            <span>🔑</span> Iniciar Sesión
                        </button>
                        <button type="button" class="btn-auth-action btn-auth-register" onclick="openAuthModal('register')">
                            <span>📝</span> Registrarse
                        </button>
                        <button type="button" class="btn-auth-demo" style="width:auto; margin:0; padding:7px 14px;" onclick="handleDemoLogin()">
                            <span>⚡</span> Acceso Rápido Demo
                        </button>
                    `;
                }
                if (bovedaCurtain) {
                    bovedaCurtain.classList.remove('unlocked');
                }
            }
        }

        // Verificación de descargas: si el usuario no ha iniciado sesión, ofrece registrarse
        document.addEventListener('click', function(e) {
            const target = e.target.closest('.auth-protected-download');
            if (target && !getAuthUser()) {
                // Si hace clic en un archivo protegido sin estar autenticado, abre el modal pero NO bloquea si el usuario ya está autenticado
                e.preventDefault();
                openAuthModal('login', 'Por favor ingresa o pulsa "Acceso Rápido Alumno Demo" para habilitar las descargas.');
            }
        });

        // Inicializar estado de autenticación al cargar
        document.addEventListener('DOMContentLoaded', function() {
            renderAuthState();
        });
    
    
        // Auto-abrir modal de registro si no está autenticado al ingresar a boveda.html
        document.addEventListener('DOMContentLoaded', function() {
            renderAuthState();
            if (!getAuthUser()) {
                openAuthModal('login', 'Identifícate como alumno o pulsa "Acceso Rápido Demo (1-Click)" para habilitar todas las descargas de la Bóveda.');
            }
        });
    
    </script>

    <!-- MODAL DE AUTENTICACIÓN Y REGISTRO DE ALUMNOS UGMA -->
    <div id="authModal" class="auth-modal-overlay">
        <div class="auth-modal-box">
            <button type="button" class="repaso-modal-close" onclick="closeAuthModal()">✕</button>

            <div style="display:flex; align-items:center; gap:10px; margin-bottom:16px;">
                <span style="font-size:26px;">🏛️</span>
                <div>
                    <h3 style="font-size:18px; font-weight:800; color:var(--navy-primary); margin:0;">Diplomado en Gerencia de Obras</h3>
                    <span style="font-size:12px; color:var(--text-light); font-weight:600;">Postgrado UGMA · Control de Acceso Académico</span>
                </div>
            </div>

            <div id="authContextMsg" style="display:none; background:#f0f9ff; border:1px solid #bae6fd; padding:10px 12px; border-radius:8px; font-size:12px; color:#0369a1; margin-bottom:16px;">
            </div>

            <div class="auth-tabs-row">
                <button type="button" id="tabLoginBtn" class="auth-tab-btn active" onclick="switchAuthTab('login')">Iniciar Sesión</button>
                <button type="button" id="tabRegisterBtn" class="auth-tab-btn" onclick="switchAuthTab('register')">Registrarse como Alumno</button>
            </div>

            <!-- FORMULARIO DE INICIO DE SESIÓN -->
            <form id="formLogin" onsubmit="handleLoginSubmit(event)">
                <label style="display:block; font-size:12px; font-weight:700; color:var(--navy-primary); margin-bottom:4px;">Correo Institucional o Personal:</label>
                <input type="email" id="loginEmail" required class="auth-field-input" placeholder="ejemplo: ingeniero@ugma.edu.ve">

                <label style="display:block; font-size:12px; font-weight:700; color:var(--navy-primary); margin-bottom:4px;">Contraseña de Acceso:</label>
                <input type="password" id="loginPass" required class="auth-field-input" placeholder="••••••••">

                <button type="submit" class="btn-auth-submit">
                    <span>🔑</span> Entrar al Aula Virtual
                </button>

                <button type="button" class="btn-auth-demo" onclick="handleDemoLogin()">
                    <span>⚡</span> Acceso Inmediato Alumno Demo (1-Click)
                </button>
            </form>

            <!-- FORMULARIO DE REGISTRO DE ALUMNO -->
            <form id="formRegister" style="display:none;" onsubmit="handleRegisterSubmit(event)">
                <label style="display:block; font-size:12px; font-weight:700; color:var(--navy-primary); margin-bottom:4px;">Nombres y Apellidos:</label>
                <input type="text" id="regName" required class="auth-field-input" placeholder="ej: Ing. Carlos Mendoza">

                <div style="display:grid; grid-template-columns:1fr 1fr; gap:10px;">
                    <div>
                        <label style="display:block; font-size:12px; font-weight:700; color:var(--navy-primary); margin-bottom:4px;">C.I. / N° CIV:</label>
                        <input type="text" id="regCi" required class="auth-field-input" placeholder="V-18.450.210">
                    </div>
                    <div>
                        <label style="display:block; font-size:12px; font-weight:700; color:var(--navy-primary); margin-bottom:4px;">Especialidad:</label>
                        <input type="text" id="regProf" required class="auth-field-input" placeholder="Ingeniería Civil / Arq.">
                    </div>
                </div>

                <label style="display:block; font-size:12px; font-weight:700; color:var(--navy-primary); margin-bottom:4px;">Correo Electrónico:</label>
                <input type="email" id="regEmail" required class="auth-field-input" placeholder="alumno@ugma.edu.ve">

                <label style="display:block; font-size:12px; font-weight:700; color:var(--navy-primary); margin-bottom:4px;">Crear Contraseña:</label>
                <input type="password" id="regPass" required class="auth-field-input" placeholder="Mínimo 6 caracteres">

                <button type="submit" class="btn-auth-submit" style="background:#0284c7;">
                    <span>📝</span> Completar Registro e Ingresar
                </button>
            </form>
        </div>
    </div>
    
</body>
</html>
