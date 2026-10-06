<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 3D: Detección de Interferencias & Auditoría BIM · Postgrado UGMA</title>

    <meta name="title" content="Laboratorio 3D: Detección de Interferencias & Auditoría BIM · Postgrado UGMA">
    <meta name="description" content="Laboratorio 3D interactivo en Three.js para detección de colisiones espaciales (Clash Detection), cálculo de tolerancias y exportación de tickets BCF 2.1. Facilitador: Ing. Héctor Mota.">
    <meta name="keywords" content="Clash Detection, Detección de Interferencias, BIM 3D, Three.js, BCF 2.1, Navisworks, UGMA, ConTech, Héctor Mota">
    <meta name="author" content="Héctor Mota Zorrilla">
    <meta name="theme-color" content="#ffffff">

    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="shortcut icon" href="/favicon.ico">

    <!-- Fonts -->
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
            
            --emerald: #047857;
            --emerald-light: #d1fae5;
            --rose: #e11d48;
            --rose-light: #ffe4e6;
            --amber: #b45309;
            --amber-light: #fef3c7;

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
            padding: 30px 20px 80px; 
            line-height: 1.65; 
            -webkit-font-smoothing: antialiased;
        }

        .container { max-width: 1140px; margin: 0 auto; }

        /* TOP NAVIGATION */
        .top-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 32px;
            padding-bottom: 18px;
            border-bottom: 1px solid var(--border);
        }
        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--navy-primary);
            text-decoration: none;
            font-size: 14px;
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

        /* HEADER */
        .page-header {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 38px 36px;
            margin-bottom: 36px;
            box-shadow: var(--shadow-md);
            background-image: linear-gradient(135deg, rgba(254, 242, 242, 0.3) 0%, rgba(255, 255, 255, 1) 100%);
        }
        .badge-row {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 12px;
        }
        .badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: var(--rose-light);
            color: var(--rose);
            border: 1px solid #fecdd3;
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
        .page-title {
            font-size: clamp(25px, 3.8vw, 35px);
            font-weight: 800;
            color: var(--navy-primary);
            margin-bottom: 12px;
            line-height: 1.25;
            letter-spacing: -0.02em;
        }
        .page-subtitle {
            font-size: 15.5px;
            color: var(--text-muted);
            max-width: 960px;
            line-height: 1.65;
        }

        /* 3D LAB WORKSPACE */
        .lab-workspace {
            display: grid;
            grid-template-columns: 1fr;
            gap: 24px;
            margin-bottom: 36px;
        }
        @media (min-width: 992px) {
            .lab-workspace {
                grid-template-columns: 7fr 5fr;
            }
        }
        .canvas-card {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 20px;
            box-shadow: var(--shadow-md);
            display: flex;
            flex-direction: column;
        }
        .canvas-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 14px;
            padding-bottom: 10px;
            border-bottom: 1px solid var(--border);
        }
        .canvas-title {
            font-size: 16px;
            font-weight: 800;
            color: var(--navy-primary);
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .canvas-container {
            width: 100%;
            height: 440px;
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

        /* CONTROL PANEL */
        .controls-card {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 26px;
            box-shadow: var(--shadow-md);
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .panel-heading {
            font-size: 18px;
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
            font-size: 13.5px;
            font-weight: 700;
            color: var(--navy-primary);
            margin-bottom: 6px;
        }
        .ctrl-group input[type="range"] {
            width: 100%;
        }
        .slider-val {
            font-family: var(--font-mono);
            font-size: 13px;
            color: var(--blue-accent);
            font-weight: 700;
            display: inline-block;
            margin-top: 4px;
        }

        /* STATUS BADGE */
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
        .status-box.clash-clear .status-icon { background: var(--emerald); color: #fff; }

        .btn-bcf-export {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 13px 20px;
            background: var(--navy-primary);
            color: #ffffff;
            font-weight: 700;
            font-size: 14px;
            border-radius: 10px;
            border: none;
            cursor: pointer;
            transition: all 0.25s;
            box-shadow: 0 4px 12px rgba(15, 41, 66, 0.2);
            text-decoration: none;
            width: 100%;
        }
        .btn-bcf-export:hover {
            background: #1e3a8a;
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(15, 41, 66, 0.3);
        }

        /* THEORY SECTION */
        .content-card {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 34px;
            margin-bottom: 32px;
            box-shadow: var(--shadow-sm);
        }
        .section-title {
            font-size: 21px;
            font-weight: 800;
            color: var(--navy-primary);
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .academic-p {
            font-size: 15px;
            color: var(--text-muted);
            margin-bottom: 16px;
            line-height: 1.7;
        }
        .academic-p strong { color: var(--text-main); font-weight: 700; }

        .typology-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 18px;
            margin: 24px 0;
        }
        .typology-card {
            background: var(--surface-subtle);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 20px;
        }
        .typology-card h4 {
            font-size: 16px;
            font-weight: 800;
            color: var(--navy-primary);
            margin-bottom: 8px;
        }
        .typology-card p {
            font-size: 13.5px;
            color: var(--text-muted);
            line-height: 1.55;
        }

        /* FOOTER */
        .page-footer-action {
            text-align: center;
            padding: 40px 20px;
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 18px;
            margin-top: 40px;
            box-shadow: var(--shadow-sm);
        }
        .btn-action-green {
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
        .btn-action-green:hover {
            background: #20ba59;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(37, 211, 102, 0.45);
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- TOP NAV -->
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

        <!-- HEADER -->
        <div class="page-header">
            <div class="badge-row">
                <span class="badge">Eje Temático 02 · 5 Horas</span>
                <span class="badge badge-academic">Laboratorio 3D WebGL · Postgrado UGMA</span>
            </div>
            <h1 class="page-title">Detección de Interferencias (Clash Detection) & Auditoría Espacial 3D</h1>
            <p class="page-subtitle">
                Entorno interactivo para la validación geométrica de modelos federados de edificación. Simulación en tiempo real de tolerancias espaciales entre estructuras de concreto y conductos mecánicos (MEP) con emisión de reportes BCF 2.1 estándar.
            </p>
        </div>

        <!-- INTERACTIVE 3D LAB -->
        <div class="lab-workspace">
            <div class="canvas-card">
                <div class="canvas-top">
                    <span class="canvas-title">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--blue-accent)" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><polygon points="12 8 8 12 12 16 12 8"></polygon><polygon points="12 8 16 12 12 16 12 8"></polygon></svg>
                        Visor Federado 3D (Estructura de Concreto vs Conducto HVAC)
                    </span>
                    <span style="font-size:12px; color:var(--text-light); font-family:var(--font-mono);">Three.js WebGL</span>
                </div>
                <div class="canvas-container">
                    <canvas id="webglCanvas"></canvas>
                    <div class="canvas-overlay-hint">🖱️ Arrastrar para rotar · Rueda para zoom · Clic derecho para desplazar</div>
                </div>
            </div>

            <!-- CONTROLS -->
            <div class="controls-card">
                <h3 class="panel-heading">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--navy-primary)" stroke-width="2.5"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                    Parámetros de Auditoría de Colisión
                </h3>

                <div class="ctrl-group">
                    <label for="ductHeightSlider">Elevación de Conducto HVAC (\(Z\) en mm):</label>
                    <input type="range" id="ductHeightSlider" min="2000" max="3200" value="2550" step="10" oninput="updateDuctElevation()">
                    <span class="slider-val" id="ductElevationText">2,550 mm (Nivel de Falso Techo)</span>
                </div>

                <div class="ctrl-group">
                    <label for="toleranceSlider">Tolerancia Mínima de Holgura (Clearance):</label>
                    <input type="range" id="toleranceSlider" min="0" max="150" value="50" step="5" oninput="updateTolerance()">
                    <span class="slider-val" id="toleranceText">50 mm de aislamiento requerido</span>
                </div>

                <!-- DYNAMIC STATUS -->
                <div id="clashStatusBox" class="status-box clash-active">
                    <div class="status-icon" id="statusIcon">⚠️</div>
                    <div>
                        <strong id="statusTitle">¡Colisión Detectada (Hard Clash)!</strong>
                        <div style="font-size:12.5px;" id="statusDesc">El conducto HVAC intersecta la viga estructural de concreto V-101.</div>
                    </div>
                </div>

                <button class="btn-bcf-export" onclick="exportBCF()">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                    Exportar Reporte BCF 2.1 (JSON)
                </button>
            </div>
        </div>

        <!-- THEORY SECTION -->
        <div class="content-card">
            <h2 class="section-title">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--navy-primary)" stroke-width="2.2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline></svg>
                Tipología de Colisiones y Matriz de Tolerancias en Gerencia de Obras
            </h2>
            <p class="academic-p">
                La auditoría de modelos en preconstrucción previene la improvisación de pases y roturas en campo. En un proyecto de edificación, las colisiones se clasifican en tres categorías técnicas fundamentales:
            </p>

            <div class="typology-grid">
                <div class="typology-card">
                    <h4>1. Hard Clash (Interferencia Geométrica Directa)</h4>
                    <p>Ocurre cuando dos sólidos ocupan el mismo volumen en el espacio euclidiano (ej. una viga de concreto atravesada por un conducto metálico sin pasamuro diseñado).</p>
                </div>
                <div class="typology-card">
                    <h4>2. Soft Clash / Clearance (Violación de Holgura)</h4>
                    <p>Elementos que no se tocan físicamente pero violan las distancias mínimas normativas de aislamiento térmico, mantenimiento o seguridad contra incendios.</p>
                </div>
                <div class="typology-card">
                    <h4>3. Time / 4D Workflow Clash (Conflicto Constructivo)</h4>
                    <p>Interferencias dinámicas en el cronograma: cuando una cuadrilla debe vaciar una losa antes de que la maquinaria instale las bajantes sanitarias soterradas.</p>
                </div>
            </div>

            <p class="academic-p">
                <strong>Estándar de Intercambio BCF (BIM Collaboration Format):</strong> En lugar de transferir gigabytes de maquetas completas para reportar un error, el protocolo BCF (ISO 21597) envía un paquete liviano con coordenadas de la cámara, vector de visualización, IDs universales (GUIDs) de los elementos involucrados, fotografía del conflicto y asignación formal de responsable.
            </p>

            <div style="margin-top: 24px; padding: 20px 24px; background: #f0f9ff; border: 1.5px solid #bae6fd; border-radius: 14px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px;">
                <div style="max-width: 680px;">
                    <h4 style="font-size: 16px; font-weight: 800; color: #0369a1; margin-bottom: 4px; display: flex; align-items: center; gap: 8px;">
                        <span>⚠️</span> Gestor de Incidencias BCF 2.1 &amp; Visor IFC en el Laboratorio ConTech
                    </h4>
                    <p style="font-size: 13.5px; color: #475569; margin: 0; line-height: 1.5;">
                        Explora la gestión real de colisiones espaciales, tickets de interferencia y modelos federados completos en el <strong>BIM Hub</strong> oficial en <strong>lab.motazorrilla.com/bim</strong> (Pestaña "Incidencias BCF").
                    </p>
                </div>
                <a href="https://lab.motazorrilla.com/bim/" target="_blank" rel="noopener noreferrer" style="display: inline-flex; align-items: center; gap: 8px; padding: 10px 20px; background: #0284c7; color: #ffffff; font-size: 13.5px; font-weight: 700; border-radius: 10px; text-decoration: none; box-shadow: 0 4px 12px rgba(2, 132, 199, 0.25); transition: all 0.2s;">
                    Abrir Visor &amp; BCF en el Lab &rarr;
                </a>
            </div>
        </div>

        <!-- CTA FOOTER -->
        <div class="page-footer-action">
            <h3 style="font-size:22px; font-weight:800; color:var(--navy-primary); margin-bottom:8px;">
                ¿Consultas sobre este Laboratorio o la Metodología de Auditoría 3D?
            </h3>
            <p style="font-size:14.5px; color:var(--text-muted); margin-bottom:20px;">
                Contacta directamente al facilitador para acceder a los modelos federados completos en Navisworks Manage y Revit.
            </p>
            <a href="https://wa.me/584148873615?text=Hola%20Ing.%20H%C3%A9ctor%20Mota,%20deseo%20m%C3%A1s%20detalles%20sobre%20el%20Laboratorio%203D%20Clash%20Detection%20UGMA..." target="_blank" rel="noopener noreferrer" class="btn-action-green">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Contactar al Facilitador vía WhatsApp (0414-8873615)
            </a>
        </div>

    </div>

    <!-- THREE.JS INTERACTION SCRIPT -->
    <script>
        let scene, camera, renderer, controls;
        let beamMesh, ductMesh, clashIndicator;
        let beamBox, ductBox;

        const BEAM_Y = 2.6; // meters
        const BEAM_HEIGHT = 0.5;
        const BEAM_BOTTOM = BEAM_Y - BEAM_HEIGHT/2; // 2.35m
        const BEAM_TOP = BEAM_Y + BEAM_HEIGHT/2;    // 2.85m

        function init3DLab() {
            const container = document.getElementById('webglCanvas');
            const width = container.clientWidth;
            const height = container.clientHeight;

            // Scene
            scene = new THREE.Scene();
            scene.background = new THREE.Color(0x0f172a);

            // Camera
            camera = new THREE.PerspectiveCamera(45, width / height, 0.1, 100);
            camera.position.set(4, 3.5, 5);

            // Renderer
            renderer = new THREE.WebGLRenderer({ canvas: container, antialias: true });
            renderer.setSize(width, height);
            renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
            renderer.shadowMap.enabled = true;

            // Controls
            controls = new THREE.OrbitControls(camera, renderer.domElement);
            controls.enableDamping = true;
            controls.dampingFactor = 0.05;
            controls.target.set(0, 2, 0);

            // Lighting
            const ambientLight = new THREE.AmbientLight(0xffffff, 0.6);
            scene.add(ambientLight);

            const dirLight = new THREE.DirectionalLight(0xffffff, 0.8);
            dirLight.position.set(5, 10, 7);
            dirLight.castShadow = true;
            scene.add(dirLight);

            // Floor Grid
            const gridHelper = new THREE.GridHelper(8, 16, 0x0284c7, 0x334155);
            scene.add(gridHelper);

            // Columns (Concrete)
            const colGeo = new THREE.BoxGeometry(0.4, 3.5, 0.4);
            const colMat = new THREE.MeshStandardMaterial({ color: 0x94a3b8, roughness: 0.8 });
            
            const col1 = new THREE.Mesh(colGeo, colMat);
            col1.position.set(-1.8, 1.75, 0);
            scene.add(col1);

            const col2 = new THREE.Mesh(colGeo, colMat);
            col2.position.set(1.8, 1.75, 0);
            scene.add(col2);

            // Structural Concrete Beam (V-101)
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

            // MEP HVAC Duct (Crosses perpendicular to the beam)
            const ductGeo = new THREE.BoxGeometry(0.5, 0.3, 3.5);
            const ductMat = new THREE.MeshStandardMaterial({ 
                color: 0x38bdf8, 
                metalness: 0.8, 
                roughness: 0.2 
            });
            ductMesh = new THREE.Mesh(ductGeo, ductMat);
            ductMesh.position.set(0, 2.55, 0);
            scene.add(ductMesh);

            // Clash Visual Highlight Sphere / Box
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

            // Bounding boxes
            beamBox = new THREE.Box3();
            ductBox = new THREE.Box3();

            window.addEventListener('resize', onWindowResize);
            animate();
            evaluateCollision();
        }

        function onWindowResize() {
            const container = document.getElementById('webglCanvas');
            camera.aspect = container.clientWidth / container.clientHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(container.clientWidth, container.clientHeight);
        }

        function animate() {
            requestAnimationFrame(animate);
            controls.update();
            if (clashIndicator.visible) {
                clashIndicator.rotation.y += 0.02;
            }
            renderer.render(scene, camera);
        }

        function updateDuctElevation() {
            const val = parseFloat(document.getElementById('ductHeightSlider').value);
            const meters = val / 1000;
            document.getElementById('ductElevationText').innerText = val.toLocaleString('en-US') + ' mm';
            ductMesh.position.y = meters;
            clashIndicator.position.y = meters;
            evaluateCollision();
        }

        function updateTolerance() {
            const tol = parseFloat(document.getElementById('toleranceSlider').value);
            document.getElementById('toleranceText').innerText = tol + ' mm de aislamiento requerido';
            evaluateCollision();
        }

        function evaluateCollision() {
            if (!beamMesh || !ductMesh) return;

            beamBox.setFromObject(beamMesh);
            ductBox.setFromObject(ductMesh);

            const toleranceMeters = parseFloat(document.getElementById('toleranceSlider').value) / 1000;
            
            // Expand duct box by tolerance
            const expandedDuctBox = ductBox.clone().expandByScalar(toleranceMeters);

            const isHardClash = beamBox.intersectsBox(ductBox);
            const isSoftClash = !isHardClash && beamBox.intersectsBox(expandedDuctBox);

            const statusBox = document.getElementById('clashStatusBox');
            const statusIcon = document.getElementById('statusIcon');
            const statusTitle = document.getElementById('statusTitle');
            const statusDesc = document.getElementById('statusDesc');

            if (isHardClash) {
                clashIndicator.visible = true;
                clashIndicator.material.color.setHex(0xe11d48);
                ductMesh.material.color.setHex(0xe11d48);
                statusBox.className = "status-box clash-active";
                statusIcon.innerText = "⚠️";
                statusTitle.innerText = "¡Colisión Directa Detectada (Hard Clash)!";
                statusDesc.innerText = "El conducto HVAC intersecta físicamente el volumen de la viga V-101. Requiere re-trazado o pasamuro estructural.";
            } else if (isSoftClash) {
                clashIndicator.visible = true;
                clashIndicator.material.color.setHex(0xb45309);
                ductMesh.material.color.setHex(0xf59e0b);
                statusBox.className = "status-box clash-active";
                statusBox.style.borderColor = "#fde68a";
                statusBox.style.background = "#fef3c7";
                statusBox.style.color = "#78350f";
                statusIcon.innerText = "📐";
                statusTitle.innerText = "Alerta de Holgura (Soft Clearance Clash)";
                statusDesc.innerText = "No hay contacto físico, pero no se cumple la distancia mínima de aislamiento térmico de " + (toleranceMeters*1000) + " mm.";
            } else {
                clashIndicator.visible = false;
                ductMesh.material.color.setHex(0x38bdf8);
                statusBox.className = "status-box clash-clear";
                statusBox.style.background = "";
                statusBox.style.borderColor = "";
                statusBox.style.color = "";
                statusIcon.innerText = "✅";
                statusTitle.innerText = "Coordinación Conforme (Espacio Libre)";
                statusDesc.innerText = "El conducto respeta la cota libre y la holgura de tolerancia. No se detectan interferencias.";
            }
        }

        function exportBCF() {
            const elevation = document.getElementById('ductHeightSlider').value;
            const tolerance = document.getElementById('toleranceSlider').value;
            
            const bcfTicket = {
                topic_id: "BCF-UGMA-2026-0042",
                title: "Interferencia Espacial: Viga V-101 vs Ducto HVAC",
                status: "Open",
                priority: "Critical",
                creation_date: new Date().toISOString(),
                author: "Ing. Héctor Mota Zorrilla (BIM Coordinator)",
                assigned_to: "Ingeniero Calculista / Proyectista HVAC",
                components: [
                    { ifc_guid: "2O2Fr$t4X7Zf8NOew3FL9m", type: "IfcBeam", name: "V-101 Concreto Armado" },
                    { ifc_guid: "1u3$kLmN18PvR0Qw2Z9xAa", type: "IfcDuctSegment", name: "Ducto_Extraccion_600x300" }
                ],
                camera_viewpoint: {
                    camera_position: { x: camera.position.x.toFixed(2), y: camera.position.y.toFixed(2), z: camera.position.z.toFixed(2) },
                    elevation_mm: elevation,
                    required_clearance_mm: tolerance
                },
                comment: "Se requiere coordinar pase de losa o bajar nivel de falso techo 120mm para evitar debilitamiento de acero estructural."
            };

            const dataStr = "data:text/json;charset=utf-8," + encodeURIComponent(JSON.stringify(bcfTicket, null, 2));
            const downloadAnchor = document.createElement('a');
            downloadAnchor.setAttribute("href", dataStr);
            downloadAnchor.setAttribute("download", "Ticket_BCF_Colision_UGMA_0042.json");
            document.body.appendChild(downloadAnchor);
            downloadAnchor.click();
            downloadAnchor.remove();
        }

        window.addEventListener('DOMContentLoaded', () => {
            init3DLab();
        });
    </script>
</body>
</html>
