<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <title>Módulo II: Costos, Cómputos Harry Osers y EVM · Diplomado Gerencia UGMA</title>
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
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.08);
            --shadow-hover: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
        * { margin:0; padding:0; box-sizing:border-box; font-family: var(--font-sans); }
        body { background: var(--bg); color: var(--text-main); min-height: 100vh; padding: 20px 16px 80px; line-height: 1.6; }
        .container { max-width: 1180px; margin: 0 auto; }

        /* TOP NAVIGATION */
        .top-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 28px;
            padding-bottom: 16px;
            border-bottom: 1px solid var(--border);
            position: relative;
        }
        .nav-left-cluster {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
        }
        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--navy-primary);
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
            background: #ffffff;
            padding: 8px 16px;
            border-radius: 9999px;
            border: 1px solid var(--border);
            box-shadow: var(--shadow-sm);
            transition: all 0.2s ease;
        }
        .back-link:hover { color: var(--blue-accent); border-color: var(--blue-accent); transform: translateX(-2px); }
        .nav-right-cluster { display: flex; align-items: center; gap: 10px; }

        /* HAMBURGER BUTTON (MOBILE) */
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

        /* MOBILE DRAWER OVERLAY */
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
        .drawer-links-group {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }
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
        .drawer-link.active { background: #e0f2fe; color: #0369a1; font-weight: 700; }

        @media (max-width: 860px) {
            .nav-right-cluster { display: none !important; }
            .hamburger-btn { display: inline-flex; align-items: center; justify-content: center; }
        }

        /* BUTTONS & BADGES */
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
        .btn-auth-login { background: var(--navy-primary); color: #ffffff; border: 1px solid var(--navy-primary); }
        .btn-auth-login:hover { background: var(--navy-surface); transform: translateY(-1px); }
        .btn-auth-register { background: #f0f9ff; color: var(--blue-accent); border: 1px solid #bae6fd; }
        .btn-auth-register:hover { background: var(--blue-accent); color: #ffffff; transform: translateY(-1px); }
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
        .btn-auth-logout:hover { background: #ef4444; color: #ffffff; }

        /* MODULO HERO */
        .academic-hero {
            background: #ffffff;
            border: 1.5px solid var(--border);
            border-radius: 20px;
            padding: 38px 34px;
            margin-bottom: 34px;
            position: relative;
            box-shadow: var(--shadow-md);
            background-image: linear-gradient(135deg, rgba(241, 245, 249, 0.6) 0%, #ffffff 100%);
        }
        .academic-tag {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 5px 14px;
            border-radius: 9999px;
            font-size: 11.5px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.04em;
            margin-bottom: 14px;
        }
        .academic-p {
            font-size: 15px;
            color: var(--text-muted);
            line-height: 1.85;
            text-indent: 2.2em;
            text-align: justify;
            margin-bottom: 18px;
        }
        .academic-p strong { color: var(--navy-primary); font-weight: 700; }

        /* CARDS & GRIDS */
        .content-card {
            background: #ffffff;
            border: 1.5px solid var(--border);
            border-radius: 18px;
            padding: 28px;
            margin-bottom: 28px;
            box-shadow: var(--shadow-sm);
        }
        .content-card h3 {
            font-size: 18px;
            font-weight: 800;
            color: var(--navy-primary);
            margin-bottom: 14px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .downloads-box {
            background: #f8fafc;
            border: 1.5px solid #cbd5e1;
            border-radius: 16px;
            padding: 26px;
            margin-top: 26px;
        }
        .download-item-link {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 13px 18px;
            margin-bottom: 10px;
            text-decoration: none;
            color: var(--navy-primary);
            font-size: 13.5px;
            font-weight: 600;
            transition: all 0.2s ease;
        }
        .download-item-link:hover {
            border-color: var(--blue-accent);
            background: #f0f9ff;
            color: var(--blue-accent);
            transform: translateX(3px);
        }
        .btn-download-primary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            width: 100%;
            padding: 13px 20px;
            background: var(--navy-primary);
            color: #ffffff;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 700;
            text-decoration: none;
            margin-bottom: 18px;
            transition: all 0.2s ease;
            box-shadow: var(--shadow-sm);
        }
        .btn-download-primary:hover {
            background: var(--blue-accent);
            transform: translateY(-1px);
            box-shadow: var(--shadow-md);
        }

        /* MODAL DE AUTENTICACIÓN */
        .auth-modal-overlay {
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(15, 23, 42, 0.7);
            backdrop-filter: blur(5px);
            z-index: 3000;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .auth-modal-overlay.active { display: flex; }
        .auth-modal-box {
            background: #ffffff;
            border-radius: 20px;
            max-width: 500px;
            width: 100%;
            padding: 34px 28px;
            position: relative;
            box-shadow: var(--shadow-hover);
            border: 1px solid var(--border);
        }
        .modal-close-btn {
            position: absolute;
            top: 18px; right: 18px;
            background: var(--surface-subtle);
            border: none;
            width: 32px; height: 32px;
            border-radius: 50%;
            font-size: 16px;
            color: var(--text-muted);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s;
        }
        .modal-close-btn:hover { background: #fee2e2; color: #dc2626; }
        .auth-input-field {
            width: 100%;
            padding: 10px 14px;
            border-radius: 8px;
            border: 1px solid var(--border);
            font-size: 13.5px;
            margin-bottom: 12px;
            outline: none;
            transition: all 0.2s;
        }
        .auth-input-field:focus { border-color: var(--blue-accent); box-shadow: 0 0 0 3px rgba(2, 132, 199, 0.15); }
        .btn-submit-form {
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
        }
        .btn-submit-form:hover { background: var(--navy-surface); }

        /* SIMULADORES */
        .sim-box {
            background: #f8fafc;
            border: 1.5px solid var(--border);
            border-radius: 14px;
            padding: 22px;
            margin-top: 18px;
        }
        .sim-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 16px;
            padding-bottom: 10px;
            border-bottom: 1px solid var(--border);
        }

        .tag-m2 { background: #ecfdf5; color: #047857; border: 1px solid #a7f3d0; }
        .formula-box {
            background: #f8fafc;
            border-left: 4px solid var(--emerald);
            padding: 14px 18px;
            margin: 14px 0;
            border-radius: 0 10px 10px 0;
            font-family: var(--font-mono);
            font-size: 13.5px;
            color: var(--navy-primary);
        }
        .software-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 12px;
            margin: 16px 0;
        }
        .software-card {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 16px;
            transition: all 0.2s ease;
        }
        .software-card:hover { border-color: var(--emerald); transform: translateY(-2px); box-shadow: var(--shadow-sm); }
    </style>
</head>
<body>
    <div class="container">
        
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


        <!-- ACADEMIC HERO -->
        <header class="academic-hero">
            <span class="academic-tag tag-m2">Módulo II · Cátedra UGMA · 20 Horas Académicas</span>
            <h1 style="font-size:28px; font-weight:800; color:var(--navy-primary); margin-bottom:12px;">Estimación de Costos, Cómputos de Harry Osers y Gestión del Valor Ganado (EVM)</h1>
            <p style="font-size:14px; color:var(--text-light); margin-bottom:18px;">
                <strong>Facilitador:</strong> Prof. Ing. Rafael Angarita &nbsp;|&nbsp; 
                <strong>Unidad Curricular:</strong> Presupuestos, Análisis de Precios Unitarios, Curva S Matemática y Control Físico-Financiero &nbsp;|&nbsp;
                <strong>Diplomado en Planificación y Gerencia de Obras</strong>
            </p>
            <p class="academic-p">
                La viabilidad económica de una obra de ingeniería reposa en la exactitud de sus cómputos métricos y en la disciplina analítica de sus matrices de costo. Este módulo consolida el estándar riguroso de cómputos de Harry Osers conforme a la norma COVENIN 2000, desglosa la ingeniería de precios unitarios con el Factor de Costos Asociados al Salario (FCAS), introduce la formulación matemática de la Curva S y establece el estándar internacional de Gestión del Valor Ganado (EVM ANSI/PMI).
            </p>
            <div style="display:flex; gap:10px; flex-wrap:wrap; margin-top:20px;">
                <a href="#descargas-m2" class="btn-auth-action" style="background:var(--navy-primary); color:#ffffff;">📥 Materiales de Descarga</a>
                <a href="#simulador-apu" class="btn-auth-action" style="background:#ecfdf5; color:#047857; border:1px solid #a7f3d0;">⚡ Simulador APU y EVM</a>
                <a href="./modulo-3-marco-legal.html" class="btn-auth-action btn-auth-register">Siguiente: Módulo III (Legal) &rarr;</a>
            </div>
        </header>

        <!-- SECCIÓN 1: CÓMPUTOS MÉTRICOS DE HARRY OSERS Y COVENIN 2000 -->
        <article class="content-card">
            <h3><span>📐</span> 1. Metodología de Cómputos Métricos de Harry Osers (Norma COVENIN 2000)</h3>
            <p class="academic-p">
                El método del ilustre profesor Harry Osers constituye el pilar indiscutible de la cubicación en Venezuela. Su principio rector radica en el <strong>desglose jerárquico no redundante</strong>: ninguna dimensión debe medirse dos veces ni omitirse en los cruces estructurales. En estructuras de concreto armado, los cómputos de encofrado, acero de refuerzo y concreto se deducen a ejes limpios, restando los volúmenes de intersección entre vigas y columnas para evitar sobreestimaciones presupuestarias que distorsionen las licitaciones.
            </p>
            <p class="academic-p">
                La norma COVENIN 2000-1992 ("Sector Construcción: Mediciones y Codificación de Partidas para Estudios, Proyectos y Construcción") codifica de manera unívoca cada partida: desde las obras preliminares (código E1), pasando por movimientos de tierra (E2), hasta estructuras (E3), permitiendo una correlación matemática directa entre planos técnicos, planillas de medición y libros de valuación de obra.
            </p>
        </article>

        <!-- SECCIÓN 2: APU Y FCAS -->
        <article class="content-card" id="simulador-apu">
            <h3><span>💰</span> 2. Análisis de Precios Unitarios (APU) y Factor de Costos Salariales (FCAS)</h3>
            <p class="academic-p">
                El Precio Unitario de una partida no es un valor empírico, sino la suma ponderada de Costos Directos e Indirectos. Los Costos Directos integran los <strong>Materiales</strong> (afectados por factores de desperdicio del 5% al 10%), los <strong>Equipos</strong> (con su costo horario de posesión y operación COP, calculando depreciación amortizada, combustible, lubricantes y mantenimiento preventivo) y la <strong>Mano de Obra</strong>, la cual se cuantifica según el Tabulador Oficial del Colegio de Ingenieros de Venezuela (CIV) y la convención colectiva de la construcción.
            </p>
            <p class="academic-p">
                El <strong>FCAS (Factor de Costos Asociados al Salario)</strong> en Venezuela puede oscilar entre el 250% y más del 500% del salario básico, incorporando prestaciones sociales, bono de alimentación, dotación de uniformes, seguros de hospitalización (HCM) y pasivos laborales exigidos por la LOTTT. Sobre los Costos Directos se aplican los Costos Indirectos: Gastos de Administración de Obra (10% a 15%), Gastos Generales de Oficina Central, Imprevistos y la Utilidad Empresarial gravada (usualmente 10% a 12%).
            </p>

            <div class="sim-box">
                <div class="sim-header">
                    <div>
                        <strong style="color:var(--navy-primary); font-size:15px;">Calculadora Paramétrica de APU (Vaciado de Concreto f'c=250 kg/cm²)</strong>
                        <div style="font-size:12px; color:var(--text-muted);">Ajusta el rendimiento diario de la cuadrilla y el FCAS para calcular el precio unitario por m³</div>
                    </div>
                    <span style="font-size:12px; padding:4px 10px; border-radius:9999px; background:#ecfdf5; color:var(--emerald); font-weight:700;">COVENIN E313.110.000</span>
                </div>

                <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(200px, 1fr)); gap:14px; margin-bottom:14px;">
                    <div>
                        <label style="font-size:12px; font-weight:700; color:var(--navy-primary); display:block; margin-bottom:4px;">Rendimiento Cuadrilla (m³/día):</label>
                        <input type="number" id="apuRendimiento" value="18" min="5" max="50" class="auth-input-field" oninput="recalcApuMod2()">
                    </div>
                    <div>
                        <label style="font-size:12px; font-weight:700; color:var(--navy-primary); display:block; margin-bottom:4px;">FCAS Aplicable (%):</label>
                        <input type="number" id="apuFcas" value="320" min="100" max="800" class="auth-input-field" oninput="recalcApuMod2()">
                    </div>
                    <div>
                        <label style="font-size:12px; font-weight:700; color:var(--navy-primary); display:block; margin-bottom:4px;">Gastos Generales + Utilidad (%):</label>
                        <input type="number" id="apuIndirectos" value="25" min="10" max="45" class="auth-input-field" oninput="recalcApuMod2()">
                    </div>
                </div>

                <div style="background:#ffffff; border:1px solid var(--border); border-radius:10px; padding:16px; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:12px;">
                    <div>
                        <span style="font-size:12px; color:var(--text-light); display:block;">Costo Directo Unitario Estimado:</span>
                        <strong id="apuDirectoVal" style="font-size:18px; color:var(--navy-primary);">$142.50 USD/m³</strong>
                    </div>
                    <div>
                        <span style="font-size:12px; color:var(--text-light); display:block;">Precio Unitario Total con Indirectos:</span>
                        <strong id="apuTotalVal" style="font-size:22px; color:var(--emerald);">$178.13 USD/m³</strong>
                    </div>
                </div>
            </div>
        </article>

        <!-- SECCIÓN 3: MODELO MATEMÁTICO DE LA CURVA S -->
        <article class="content-card">
            <h3><span>📈</span> 3. Formulación Matemática de la Curva S Teórica</h3>
            <p class="academic-p">
                El ritmo de avance y devengo financiero de una obra de construcción no es lineal, sino que sigue una función sigmoidea (Curva S). En la cátedra del Prof. Angarita se analiza la función polinómica cúbica normalizada:
            </p>
            <div class="formula-box">
                P(t) = 3t² - 2t³ &emsp; con &emsp; 0 &le; t &le; 1
            </div>
            <p class="academic-p">
                Esta ecuación matemática modela con precisión la física de obra: la primera derivada o velocidad de inversión <em>v(t) = 6t - 6t²</em> alcanza su punto de máxima aceleración en <em>t = 0.5</em> (cuando se ha transcurrido el 50% del plazo previsto), instante en el cual la segunda derivada se anula <em>a(t) = 6 - 12t = 0</em>, marcando el punto de inflexión. Todo retraso anterior a <em>t = 0.5</em> compromete exponencialmente la culminación del proyecto.
            </p>
        </article>

        <!-- SECCIÓN 4: GESTIÓN DEL VALOR GANADO (EVM ANSI/PMI) -->
        <article class="content-card">
            <h3><span>📊</span> 4. Gestión del Valor Ganado (EVM ANSI/PMI)</h3>
            <p class="academic-p">
                El estándar de Valor Ganado (Earned Value Management) trasciende la simple comparación contable entre lo gastado y lo presupuestado al introducir el valor del trabajo físico realmente ejecutado. Sus variables cardinales son:
            </p>
            <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(220px, 1fr)); gap:12px; margin:14px 0;">
                <div style="background:var(--surface-subtle); padding:14px; border-radius:10px;">
                    <strong style="color:var(--navy-primary);">PV (Planned Value)</strong>
                    <p style="font-size:12px; color:var(--text-muted); margin:4px 0 0;">Costo presupuestado del trabajo planificado a la fecha de corte.</p>
                </div>
                <div style="background:var(--surface-subtle); padding:14px; border-radius:10px;">
                    <strong style="color:var(--emerald);">EV (Earned Value)</strong>
                    <p style="font-size:12px; color:var(--text-muted); margin:4px 0 0;">Costo presupuestado del trabajo físicamente ejecutado (avance real &times; BAC).</p>
                </div>
                <div style="background:var(--surface-subtle); padding:14px; border-radius:10px;">
                    <strong style="color:var(--rose);">AC (Actual Cost)</strong>
                    <p style="font-size:12px; color:var(--text-muted); margin:4px 0 0;">Costo real incurrido y facturado para ejecutar el trabajo a la fecha.</p>
                </div>
            </div>
            <div class="formula-box">
                CPI = EV / AC &emsp;|&emsp; SPI = EV / PV &emsp;|&emsp; EAC = BAC / CPI &emsp;|&emsp; VAC = BAC - EAC
            </div>
            <p class="academic-p">
                Un <strong>CPI &lt; 1.0</strong> indica sobrecosto financiero, mientras que un <strong>SPI &lt; 1.0</strong> evidencia retraso de cronograma. El pronóstico de cierre <em>EAC (Estimate at Completion)</em> proyecta matemáticamente el costo final si se mantiene la tendencia operativa actual.
            </p>
        </article>

        <!-- SECCIÓN 5: ECOSISTEMA DE SOFTWARES -->
        <article class="content-card">
            <h3><span>💻</span> 5. Ecosistema de Softwares de Costos y Planificación</h3>
            <p class="academic-p">
                La cátedra evalúa las herramientas del mercado para seleccionar la plataforma idónea según la escala del proyecto:
            </p>
            <div class="software-grid">
                <div class="software-card">
                    <strong style="color:var(--navy-primary); font-size:15px; display:block; margin-bottom:4px;">MaPreX (Venezuela)</strong>
                    <p style="font-size:12px; color:var(--text-muted); margin-bottom:8px;">Referente nacional para APUs con bases de datos adaptadas a la realidad de materiales y mano de obra venezolana.</p>
                    <span style="font-size:11px; font-weight:700; color:var(--blue-accent);">Presupuestos &bull; Valuaciones</span>
                </div>
                <div class="software-card">
                    <strong style="color:var(--navy-primary); font-size:15px; display:block; margin-bottom:4px;">LuloWin</strong>
                    <p style="font-size:12px; color:var(--text-muted); margin-bottom:8px;">Software clásico para contratistas del sector público y formulación de cuadros de cierre fiscal.</p>
                    <span style="font-size:11px; font-weight:700; color:var(--emerald);">Sector Público &bull; Fórmulas Polinómicas</span>
                </div>
                <div class="software-card">
                    <strong style="color:var(--navy-primary); font-size:15px; display:block; margin-bottom:4px;">Primavera P6</strong>
                    <p style="font-size:12px; color:var(--text-muted); margin-bottom:8px;">Estándar corporativo en petroquímica y megaminería para redes CPM de más de 10.000 actividades y asignación de recursos.</p>
                    <span style="font-size:11px; font-weight:700; color:var(--purple);">Gestión de Portafolios &bull; CPM</span>
                </div>
                <div class="software-card">
                    <strong style="color:var(--navy-primary); font-size:15px; display:block; margin-bottom:4px;">Procore</strong>
                    <p style="font-size:12px; color:var(--text-muted); margin-bottom:8px;">Ecosistema cloud con conectores para finanzas, control de subcontratos y seguimiento móvil en campo.</p>
                    <span style="font-size:11px; font-weight:700; color:var(--rose);">Cloud ConTech &bull; Finanzas Móviles</span>
                </div>
            </div>
        </article>

        <!-- SECCIÓN 6: ARTICULACIÓN CON MÓDULO V -->
        <article class="content-card" style="border-color:#a7f3d0; background:#f0fdf4;">
            <h3 style="color:#166534;"><span>🚀</span> 6. Salto Tecnológico hacia el Módulo V: openBIM 5D y Visión Artificial</h3>
            <p class="academic-p">
                En el Módulo V transformamos los cómputos métricos manuales en <strong>Extracción Paramétrica QTO (Quantity Take-Off)</strong> directamente desde archivos IFC 4.3. Adicionalmente, el registro del avance físico (EV) deja de ser una estimación ocular y se certifica semanalmente mediante nubes de puntos de drones con Visión Artificial (YOLO/ICP), logrando curvas S dinámicas y auditoría instantánea de desviaciones.
            </p>
        </article>

        <!-- BÓVEDA DE DESCARGAS DE ESTE MÓDULO -->
        <section class="downloads-box" id="descargas-m2">
            <h3 style="font-size:18px; font-weight:800; color:var(--navy-primary); margin-bottom:14px; display:flex; align-items:center; gap:8px;">
                <span>📂</span> Expediente de Cátedra y Descargas del Módulo II
            </h3>
            <p style="font-size:13.5px; color:var(--text-muted); margin-bottom:18px;">
                Descarga las planillas de cómputos de Harry Osers, modelos matemáticos de la Curva S y las hojas de trabajo de Valor Ganado facilitadas por el Prof. Rafael Angarita. Requiere registro previo de alumno.
            </p>

            <a href="./descargas/modulos-previos/Resumen_Ejecutivo_Modulo_II_Costos_EVM_Angarita.pdf" download class="btn-download-primary auth-protected-download">
                <span>📥</span> Descargar Resumen Académico de Cátedra (PDF)
            </a>

            <div style="display:flex; flex-direction:column; gap:8px;">
                <a href="./descargas/modulos-previos/Planilla_Computos_Harry_Osers.xlsx" download class="download-item-link auth-protected-download">
                    <span>📊 Planilla Oficial de Cómputos Métricos · Harry Osers</span>
                    <span style="font-size:11px; color:var(--text-light); background:#f1f5f9; padding:3px 8px; border-radius:6px;">18 KB · XLSX</span>
                </a>
                <a href="./descargas/modulos-previos/Modelo_Matematico_Curva_S.pdf" download class="download-item-link auth-protected-download">
                    <span>📈 Formulación Matemática de la Curva S Teórica P(t)=3t²-2t³</span>
                    <span style="font-size:11px; color:var(--text-light); background:#f1f5f9; padding:3px 8px; border-radius:6px;">2.1 MB · PDF</span>
                </a>
                <a href="./descargas/modulos-previos/Guia_Softwares_Costos_Planificacion.pdf" download class="download-item-link auth-protected-download">
                    <span>💻 Guía Comparativa de Softwares de Costos (MaPreX, P6, Project, Procore)</span>
                    <span style="font-size:11px; color:var(--text-light); background:#f1f5f9; padding:3px 8px; border-radius:6px;">190 KB · PDF</span>
                </a>
                <a href="./descargas/modulos-previos/Ejemplo_Valor_Ganado_EVM.xlsx" download class="download-item-link auth-protected-download">
                    <span>📊 Plantilla de Simulación y Curvas EVM ANSI/PMI</span>
                    <span style="font-size:11px; color:var(--text-light); background:#f1f5f9; padding:3px 8px; border-radius:6px;">189 KB · XLSX</span>
                </a>
            </div>
        </section>

        <!-- NAVEGACIÓN INFERIOR ENTRE MÓDULOS -->
        <div style="display:flex; justify-content:space-between; align-items:center; margin-top:36px; padding-top:20px; border-top:1px solid var(--border);">
            <a href="./modulo-1-organizacion.html" class="back-link">&larr; Módulo I: Organización</a>
            <a href="./modulo-3-marco-legal.html" class="back-link" style="background:var(--navy-primary); color:#ffffff; border-color:var(--navy-primary);">
                Módulo III: Marco Legal (Abg. Martínez) &rarr;
            </a>
        </div>

        
        <footer style="margin-top: 60px; padding-top: 24px; border-top: 1px solid var(--border); text-align: center; font-size: 13px; color: var(--text-light);">
            <p><strong>Universidad Nororiental Gran Mariscal de Ayacucho (UGMA)</strong> · Decanato de Postgrado e Investigación</p>
            <p style="margin-top:4px;">Diplomado en Planificación y Gerencia de Obras · Módulo V: Tecnología y Sostenibilidad · Facilitador: Ing. Héctor Mota Zorrilla</p>
            <p style="margin-top:6px; font-size:11.5px; color:#94a3b8;">Plataforma Educativa de Posgrado · Puerto Ordaz, Venezuela</p>
        </footer>

    </div>

    
    <!-- MODAL DE ACCESO / REGISTRO PARA ALUMNOS -->
    <div id="authModal" class="auth-modal-overlay">
        <div class="auth-modal-box">
            <button type="button" class="modal-close-btn" onclick="closeAuthModal()">✕</button>
            <div style="display:flex; align-items:center; gap:10px; margin-bottom:14px;">
                <span style="font-size:24px;">🏛️</span>
                <div>
                    <h3 style="font-size:17px; font-weight:800; color:var(--navy-primary); margin:0;">Diplomado en Gerencia de Obras</h3>
                    <span style="font-size:12px; color:var(--text-light); font-weight:600;">Control de Acceso a Recursos y Bóveda</span>
                </div>
            </div>
            <div id="authContextMsg" style="display:none; background:#f0f9ff; border:1px solid #bae6fd; padding:10px 12px; border-radius:8px; font-size:12px; color:#0369a1; margin-bottom:14px;"></div>
            
            <div style="display:flex; border-bottom:2px solid var(--border); margin-bottom:18px; gap:8px;">
                <button type="button" id="tabLoginBtn" style="flex:1; padding:8px; font-size:13.5px; font-weight:700; background:none; border:none; cursor:pointer; border-bottom:2px solid var(--navy-primary); color:var(--navy-primary);" onclick="switchAuthTab('login')">Iniciar Sesión</button>
                <button type="button" id="tabRegisterBtn" style="flex:1; padding:8px; font-size:13.5px; font-weight:500; background:none; border:none; cursor:pointer; color:var(--text-muted);" onclick="switchAuthTab('register')">Registrarse</button>
            </div>

            <form id="formLogin" onsubmit="handleLoginSubmit(event)">
                <label style="display:block; font-size:12px; font-weight:700; color:var(--navy-primary); margin-bottom:4px;">Correo Electrónico:</label>
                <input type="email" id="loginEmail" required class="auth-input-field" placeholder="ingeniero@ugma.edu.ve">
                <label style="display:block; font-size:12px; font-weight:700; color:var(--navy-primary); margin-bottom:4px;">Contraseña:</label>
                <input type="password" id="loginPass" required class="auth-input-field" placeholder="••••••••">
                <button type="submit" class="btn-submit-form">Entrar al Aula y Bóveda</button>
                <button type="button" class="btn-submit-form" style="margin-top:10px; background:#ecfdf5; color:var(--emerald); border:1px solid #a7f3d0;" onclick="handleDemoLogin()">⚡ Entrar como Alumno (Demo 1-Click)</button>
            </form>

            <form id="formRegister" style="display:none;" onsubmit="handleRegisterSubmit(event)">
                <label style="display:block; font-size:12px; font-weight:700; color:var(--navy-primary); margin-bottom:4px;">Nombres y Apellidos:</label>
                <input type="text" id="regName" required class="auth-input-field" placeholder="Ing. María Salazar">
                <div style="display:grid; grid-template-columns:1fr 1fr; gap:8px;">
                    <div>
                        <label style="display:block; font-size:12px; font-weight:700; color:var(--navy-primary); margin-bottom:4px;">C.I. / N° CIV:</label>
                        <input type="text" id="regCi" required class="auth-input-field" placeholder="V-19.540.231">
                    </div>
                    <div>
                        <label style="display:block; font-size:12px; font-weight:700; color:var(--navy-primary); margin-bottom:4px;">Especialidad:</label>
                        <input type="text" id="regProf" required class="auth-input-field" placeholder="Ing. Civil / Arq.">
                    </div>
                </div>
                <label style="display:block; font-size:12px; font-weight:700; color:var(--navy-primary); margin-bottom:4px;">Correo Electrónico:</label>
                <input type="email" id="regEmail" required class="auth-input-field" placeholder="alumno@ugma.edu.ve">
                <label style="display:block; font-size:12px; font-weight:700; color:var(--navy-primary); margin-bottom:4px;">Contraseña:</label>
                <input type="password" id="regPass" required class="auth-input-field" placeholder="Mínimo 6 caracteres">
                <button type="submit" class="btn-submit-form" style="background:#0284c7;">Crear Cuenta e Ingresar</button>
            </form>
        </div>
    </div>


    <script>
        
        const AUTH_KEY = 'ugma_student_session';
        const STUDENTS_KEY = 'ugma_registered_students';
        const LOCKS_KEY = 'ugma_module_locks';
        const DILEMA_KEY = 'ugma_dilema_config';

        function getAuthUser() {
            try {
                const data = localStorage.getItem(AUTH_KEY);
                return data ? JSON.parse(data) : null;
            } catch(e) { return null; }
        }

        function setAuthUser(user) {
            localStorage.setItem(AUTH_KEY, JSON.stringify(user));
            try {
                let list = JSON.parse(localStorage.getItem(STUDENTS_KEY) || '[]');
                if (!list.some(s => s.email === user.email)) {
                    list.push({ ...user, date: new Date().toLocaleDateString('es-VE') });
                    localStorage.setItem(STUDENTS_KEY, JSON.stringify(list));
                }
            } catch(e) {}
            renderAuthState();
        }

        function logoutUser() {
            localStorage.removeItem(AUTH_KEY);
            renderAuthState();
            window.location.reload();
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

        function openAuthModal(tab = 'login', msg = '') {
            const modal = document.getElementById('authModal');
            const msgBox = document.getElementById('authContextMsg');
            if (msgBox) {
                if (msg) {
                    msgBox.innerHTML = `<span>ℹ️</span> <strong>Aviso:</strong> ${msg}`;
                    msgBox.style.display = 'block';
                } else {
                    msgBox.style.display = 'none';
                }
            }
            switchAuthTab(tab);
            if (modal) modal.classList.add('active');
        }

        function closeAuthModal() {
            const modal = document.getElementById('authModal');
            if (modal) modal.classList.remove('active');
        }

        function switchAuthTab(tab) {
            const tabLogin = document.getElementById('tabLoginBtn');
            const tabReg = document.getElementById('tabRegisterBtn');
            const formLogin = document.getElementById('formLogin');
            const formReg = document.getElementById('formRegister');
            if (!tabLogin || !tabReg) return;
            if (tab === 'login') {
                tabLogin.style.borderBottom = '2px solid var(--navy-primary)';
                tabLogin.style.fontWeight = '700';
                tabReg.style.borderBottom = 'none';
                tabReg.style.fontWeight = '500';
                if (formLogin) formLogin.style.display = 'block';
                if (formReg) formReg.style.display = 'none';
            } else {
                tabReg.style.borderBottom = '2px solid var(--navy-primary)';
                tabReg.style.fontWeight = '700';
                tabLogin.style.borderBottom = 'none';
                tabLogin.style.fontWeight = '500';
                if (formLogin) formLogin.style.display = 'none';
                if (formReg) formReg.style.display = 'block';
            }
        }

        function handleLoginSubmit(e) {
            e.preventDefault();
            const email = document.getElementById('loginEmail').value.trim();
            const name = email.split('@')[0].replace('.', ' ').toUpperCase();
            setAuthUser({ name: `Ing. ${name}`, email: email, role: 'Alumno UGMA', ci: 'V-Oficial' });
            closeAuthModal();
        }

        function handleRegisterSubmit(e) {
            e.preventDefault();
            const name = document.getElementById('regName').value.trim();
            const email = document.getElementById('regEmail').value.trim();
            const ci = document.getElementById('regCi').value.trim();
            const prof = document.getElementById('regProf').value.trim();
            setAuthUser({
                name: name.startsWith('Ing.') || name.startsWith('Arq.') ? name : `Ing. ${name}`,
                email: email, ci: ci, role: `${prof} · Alumno UGMA`
            });
            closeAuthModal();
        }

        function handleDemoLogin() {
            setAuthUser({
                name: 'Ing. Carlos Mendoza',
                email: 'carlos.mendoza@alumnos.ugma.edu.ve',
                ci: 'V-20.123.456 (CIV 214.502)',
                role: 'Participante · Diplomado Gerencia'
            });
            closeAuthModal();
        }

        function renderAuthState() {
            const user = getAuthUser();
            const navAuth = document.getElementById('navAuthArea');
            const drawerUser = document.getElementById('drawerUserStatus');

            if (user) {
                if (navAuth) {
                    navAuth.innerHTML = `
                        <div class="user-profile-badge">
                            <span>🟢</span>
                            <span>${user.name}</span>
                        </div>
                        <button type="button" class="btn-auth-logout" onclick="logoutUser()">Cerrar Sesión</button>
                    `;
                }
                if (drawerUser) {
                    drawerUser.innerHTML = `
                        <div style="font-size:11px; font-weight:800; color:var(--emerald); text-transform:uppercase; margin-bottom:4px;">🟢 Sesión de Alumno Activa</div>
                        <div style="font-weight:700; color:var(--navy-primary); font-size:13.5px;">${user.name}</div>
                        <div style="font-size:11.5px; color:var(--text-light); margin-bottom:10px;">${user.ci || 'Alumno Registrado'}</div>
                        <button type="button" class="btn-auth-logout" style="width:100%; text-align:center; padding:6px;" onclick="logoutUser()">Cerrar Sesión</button>
                    `;
                }
            } else {
                if (navAuth) {
                    navAuth.innerHTML = `
                        <button type="button" class="btn-auth-action btn-auth-login" onclick="openAuthModal('login')"><span>🔐</span> Ingreso</button>
                        <button type="button" class="btn-auth-action btn-auth-register" onclick="openAuthModal('register')"><span>📝</span> Registro</button>
                    `;
                }
                if (drawerUser) {
                    drawerUser.innerHTML = `
                        <div style="font-size:11px; font-weight:800; color:var(--text-light); text-transform:uppercase; margin-bottom:4px;">🔒 Modo Invitado (Sin Registrar)</div>
                        <p style="font-size:12px; color:var(--text-muted); margin-bottom:10px;">Regístrate para descargar materiales y acceder al aula virtual.</p>
                        <div style="display:flex; flex-direction:column; gap:6px;">
                            <button type="button" class="btn-auth-action btn-auth-login" style="width:100%; justify-content:center;" onclick="toggleMobileMenu(); openAuthModal('login');">Iniciar Sesión</button>
                            <button type="button" class="btn-auth-action btn-auth-register" style="width:100%; justify-content:center;" onclick="toggleMobileMenu(); openAuthModal('register');">Registrarse</button>
                            <button type="button" class="btn-auth-action" style="width:100%; justify-content:center; background:#ecfdf5; color:var(--emerald); border:1px solid #a7f3d0;" onclick="toggleMobileMenu(); handleDemoLogin();">⚡ Acceso Demo (1-Click)</button>
                        </div>
                    `;
                }
            }
        }

        // Descargas protegidas
        document.addEventListener('click', function(e) {
            const target = e.target.closest('.auth-protected-download');
            if (target && !getAuthUser()) {
                e.preventDefault();
                openAuthModal('login', 'Debes registrarte o iniciar sesión para descargar los archivos de cátedra de este módulo.');
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            renderAuthState();
        });


        function recalcApuMod2() {
            const rend = parseFloat(document.getElementById('apuRendimiento').value) || 18;
            const fcas = parseFloat(document.getElementById('apuFcas').value) || 320;
            const ind = parseFloat(document.getElementById('apuIndirectos').value) || 25;

            const mat = 95.0;
            const eq = 25.0;
            const moDia = 120.0 * (1 + (fcas / 100));
            const moUnit = moDia / rend;
            const cd = mat + eq + moUnit;
            const total = cd * (1 + (ind / 100));

            document.getElementById('apuDirectoVal').textContent = '$' + cd.toFixed(2) + ' USD/m³';
            document.getElementById('apuTotalVal').textContent = '$' + total.toFixed(2) + ' USD/m³';
        }
    </script>
</body>
</html>
