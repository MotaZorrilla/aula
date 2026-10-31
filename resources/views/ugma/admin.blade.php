<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <title>Panel de Administración Docente · Módulo V UGMA</title>
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

        .admin-auth-gate {
            max-width: 460px;
            margin: 60px auto;
            background: #ffffff;
            border: 1.5px solid var(--border);
            border-radius: 20px;
            padding: 38px 30px;
            box-shadow: var(--shadow-lg);
            text-align: center;
        }
        .admin-dashboard { display: none; }
        .tab-btn-admin {
            padding: 10px 18px;
            font-size: 13.5px;
            font-weight: 700;
            background: none;
            border: none;
            border-bottom: 2px solid transparent;
            color: var(--text-muted);
            cursor: pointer;
            transition: all 0.2s ease;
        }
        .tab-btn-admin.active {
            border-bottom-color: var(--navy-primary);
            color: var(--navy-primary);
        }
        .admin-table {
            width: 100%;
            border-collapse: collapse;
            margin: 16px 0;
            font-size: 13px;
        }
        .admin-table th, .admin-table td {
            padding: 10px 14px;
            border: 1px solid var(--border);
            text-align: left;
        }
        .admin-table th {
            background: var(--surface-subtle);
            color: var(--navy-primary);
            font-weight: 700;
        }
        .switch-toggle {
            position: relative;
            display: inline-block;
            width: 48px;
            height: 24px;
        }
        .switch-toggle input { opacity: 0; width: 0; height: 0; }
        .slider-toggle {
            position: absolute;
            cursor: pointer;
            top: 0; left: 0; right: 0; bottom: 0;
            background-color: #cbd5e1;
            transition: .3s;
            border-radius: 24px;
        }
        .slider-toggle:before {
            position: absolute;
            content: "";
            height: 18px;
            width: 18px;
            left: 3px;
            bottom: 3px;
            background-color: white;
            transition: .3s;
            border-radius: 50%;
        }
        input:checked + .slider-toggle { background-color: var(--emerald); }
        input:checked + .slider-toggle:before { transform: translateX(24px); }
        .lock-item-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px 16px;
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 10px;
            margin-bottom: 10px;
        }
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


        <!-- PUERTA DE ACCESO DOCENTE EXCLUSIVO -->
        <div id="adminAuthGate" class="admin-auth-gate">
            <span style="font-size:48px; display:block; margin-bottom:12px;">⚙️</span>
            <h2 style="font-size:22px; font-weight:800; color:var(--navy-primary); margin-bottom:6px;">Panel Docente · Cátedra UGMA</h2>
            <p style="font-size:13px; color:var(--text-muted); margin-bottom:22px;">
                Acceso exclusivo para el Facilitador: <strong>Ing. Héctor Mota Zorrilla</strong>.
            </p>
            <div id="adminErrorMsg" style="display:none; background:#fee2e2; border:1px solid #fecaca; color:#991b1b; padding:10px; border-radius:8px; font-size:12px; margin-bottom:16px;">
                Credenciales incorrectas. Verifique su correo institucional y contraseña docente.
            </div>
            <form onsubmit="handleAdminLogin(event)" style="text-align:left;">
                <label style="display:block; font-size:12px; font-weight:700; color:var(--navy-primary); margin-bottom:4px;">Correo Docente:</label>
                <input type="email" id="adminEmail" required class="auth-input-field" placeholder="hector@motazorrilla.com">
                <label style="display:block; font-size:12px; font-weight:700; color:var(--navy-primary); margin-bottom:4px;">Contraseña:</label>
                <input type="password" id="adminPass" required class="auth-input-field" placeholder="••••••••">
                <button type="submit" class="btn-submit-form" style="margin-top:8px;">Ingresar al Panel de Control</button>
            </form>
            <div style="margin-top:18px; font-size:11.5px; color:var(--text-light);">
                Credencial de facilitador autorizada por el Decanato de Postgrado UGMA.
            </div>
        </div>

        <!-- DASHBOARD DOCENTE PRINCIPAL -->
        <div id="adminDashboard" class="admin-dashboard">
            <!-- HEADER DOCENTE -->
            <div class="academic-hero" style="padding:28px; margin-bottom:24px;">
                <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:14px;">
                    <div>
                        <div style="font-size:11px; font-weight:800; color:var(--emerald); text-transform:uppercase; letter-spacing:0.04em;">
                            🟢 Sesión Docente Activa · Cátedra Módulo V
                        </div>
                        <h2 style="font-size:24px; font-weight:800; color:var(--navy-primary); margin:4px 0;">
                            Ing. Héctor Mota Zorrilla
                        </h2>
                        <span style="font-size:13px; color:var(--text-muted);">
                            Facilitador Académico · Consultor ConTech &amp; BIM Manager · hector@motazorrilla.com
                        </span>
                    </div>
                    <div style="display:flex; gap:10px; align-items:center;">
                        <button type="button" class="btn-auth-logout" onclick="logoutAdmin()">Cerrar Sesión Docente</button>
                    </div>
                </div>
            </div>

            <!-- TABS DE NAVEGACIÓN DOCENTE -->
            <div style="display:flex; gap:10px; border-bottom:2px solid var(--border); margin-bottom:24px; overflow-x:auto; padding-bottom:4px;">
                <button type="button" id="tabAdminLive" class="tab-btn-admin active" onclick="switchAdminTab('live')">
                    🟢 Sala de Espera y Presencia (<span id="livePresenceBadge">0</span>)
                </button>
                <button type="button" id="tabAdminQuiz" class="tab-btn-admin" onclick="switchAdminTab('quiz')">
                    ⚡ Live Quiz Síncrono (Mentimeter)
                </button>
                <button type="button" id="tabAdminStudents" class="tab-btn-admin" onclick="switchAdminTab('students')">
                    👥 Alumnos Inscritos (<span id="studentsCountBadge">0</span>)
                </button>
                <button type="button" id="tabAdminLocks" class="tab-btn-admin" onclick="switchAdminTab('locks')">
                    🔒 Desbloqueo de Materiales
                </button>
                <button type="button" id="tabAdminPoll" class="tab-btn-admin" onclick="switchAdminTab('poll')">
                    🏛️ Dilemas War Room
                </button>
                <button type="button" id="tabAdminGrades" class="tab-btn-admin" onclick="switchAdminTab('grades')">
                    🎯 Rúbrica y Notas (0-20 pts)
                </button>
                <button type="button" id="tabAdminEvaluations" class="tab-btn-admin" onclick="switchAdminTab('evaluations')">
                    📋 Evaluaciones (<span id="evalCountBadge">0</span>)
                </button>
            </div>

                        <!-- CONTENIDO TAB LIVE: SALA DE ESPERA Y CONTROL DE PRESENCIA EN VIVO -->
            <div id="adminTabContentLive">
                <div class="content-card">
                    <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:12px; margin-bottom:16px;">
                        <div>
                            <h3 style="margin:0; display:flex; align-items:center; gap:8px;">
                                <span style="display:inline-block; width:10px; height:10px; border-radius:50%; background:#10b981; animation:pulse 2s infinite;"></span>
                                Sala de Espera y Control de Acceso en Tiempo Real
                            </h3>
                            <span style="font-size:12.5px; color:var(--text-muted);">Monitoreo de participantes conectados en vivo. El facilitador puede validarlos individualmente o en bloque para autorizar el acceso formal a la clase.</span>
                        </div>
                        <div style="display:flex; gap:8px; flex-wrap:wrap;">
                            <button type="button" class="btn-action-admin" style="background:#059669; color:#fff;" onclick="admitAllLiveStudents(true)">
                                <span>🟢</span> Admitir a Todos en el Aula
                            </button>
                            <button type="button" class="btn-action-admin" style="background:#dc2626; color:#fff;" onclick="admitAllLiveStudents(false)">
                                <span>🔒</span> Revocar Acceso a Todos
                            </button>
                            <button type="button" class="btn-action-admin" onclick="refreshLivePresences()">
                                <span>🔄</span> Actualizar
                            </button>
                        </div>
                    </div>

                    <div style="background:#f8fafc; border:1px solid var(--border); border-radius:12px; padding:14px; margin-bottom:16px; display:flex; gap:20px; flex-wrap:wrap;">
                        <div><strong>Participantes en Línea:</strong> <span id="liveTotalCount" style="color:var(--navy-primary); font-weight:800; font-size:16px;">0</span></div>
                        <div><strong>Admitidos en Clase:</strong> <span id="liveAdmittedCount" style="color:#059669; font-weight:800; font-size:16px;">0</span></div>
                        <div><strong>En Espera:</strong> <span id="liveWaitingCount" style="color:#d97706; font-weight:800; font-size:16px;">0</span></div>
                        <div style="margin-left:auto; font-size:12px; color:var(--text-light); display:flex; align-items:center; gap:6px;">
                            <span>⏱️ Sincronización automática cada 4 seg</span>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="admin-table">
                            <thead>
                                <tr>
                                    <th>Participante / Estudiante</th>
                                    <th>Correo Institucional</th>
                                    <th>Dirección IP</th>
                                    <th>Última Conexión</th>
                                    <th>Estado de Admisión</th>
                                    <th>Acción del Docente</th>
                                </tr>
                            </thead>
                            <tbody id="livePresenceTableBody">
                                <tr>
                                    <td colspan="6" style="text-align:center; padding:32px; color:var(--text-light);">
                                        Iniciando monitor de presencia en tiempo real...
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- CONTENIDO TAB QUIZ: MOTOR DE EVALUACIÓN INTERACTIVA TIPO MENTIMETER -->
            <div id="adminTabContentQuiz" style="display:none;">
                <div class="content-card">
                    <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:12px; margin-bottom:16px;">
                        <div>
                            <h3 style="margin:0; display:flex; align-items:center; gap:8px;">
                                <span>⚡</span> Motor de Live Quiz Interactivo (Tipo Mentimeter / Kahoot)
                            </h3>
                            <span style="font-size:12.5px; color:var(--text-muted);">
                                El facilitador lanza preguntas al aula en vivo. Se despliega un modal interactivo en las pantallas de todos los participantes conectados con temporizador, bonificación de velocidad y podio final.
                            </span>
                        </div>
                        <div style="display:flex; gap:8px; flex-wrap:wrap;">
                            <button type="button" class="btn-action-admin" style="background:#dc2626; color:#fff;" onclick="closeLiveQuestion()">
                                <span>⏹️</span> Cerrar Pregunta Activa
                            </button>
                            <button type="button" class="btn-action-admin" style="background:#ca8a04; color:#fff;" onclick="openPodiumView()">
                                <span>🏆</span> Ver Podio y Ganadores en Vivo
                            </button>
                        </div>
                    </div>

                    <!-- BANNER DE PREGUNTA EN VIVO ACTIVA -->
                    <div id="activeQuestionLiveBanner" style="display:none; background:#ecfdf5; border:2px solid #10b981; border-radius:14px; padding:18px; margin-bottom:20px;">
                        <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:10px;">
                            <div>
                                <span style="background:#10b981; color:#fff; font-size:10.5px; font-weight:800; padding:3px 8px; border-radius:9999px; text-transform:uppercase;">
                                    🔴 PREGUNTA ACTIVA EN LAS PANTALLAS DE LOS ALUMNOS
                                </span>
                                <h4 id="activeQuestionTitle" style="color:#065f46; font-size:16px; font-weight:800; margin:6px 0 2px;"></h4>
                                <span id="activeQuestionMeta" style="font-size:12px; color:#047857;"></span>
                            </div>
                            <div style="display:flex; align-items:center; gap:12px;">
                                <div style="text-align:right;">
                                    <div style="font-size:11px; color:#047857; font-weight:700;">RESPUESTAS REGISTRADAS</div>
                                    <div id="liveAnswersCount" style="font-size:24px; font-weight:800; color:#065f46;">0</div>
                                </div>
                                <button type="button" onclick="closeLiveQuestion()" class="btn-action-admin" style="background:#dc2626; color:#fff; padding:8px 14px;">
                                    Terminar Pregunta
                                </button>
                            </div>
                        </div>
                    </div>

                    <div style="margin-bottom:12px; font-weight:700; color:var(--navy-primary); font-size:14px;">
                        📚 Banco Oficial de 12 Preguntas Curadas (Unidades 1 a 6)
                    </div>

                    <div class="table-responsive">
                        <table class="admin-table">
                            <thead>
                                <tr>
                                    <th>Unidad</th>
                                    <th>Enunciado de la Pregunta</th>
                                    <th>Respuesta Correcta</th>
                                    <th>Tiempo</th>
                                    <th>Acción de Lanzamiento</th>
                                </tr>
                            </thead>
                            <tbody id="quizQuestionsTableBody">
                                <tr>
                                    <td colspan="5" style="text-align:center; padding:24px; color:var(--text-light);">
                                        Cargando banco de preguntas...
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <!-- CONTENIDO TAB 1: ALUMNOS INSCRITOS -->
            <div id="adminTabContentStudents">
                <div class="content-card">
                    <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:12px; margin-bottom:16px;">
                        <div>
                            <h3 style="margin:0;">Listado Oficial de Alumnos Registrados</h3>
                            <span style="font-size:12.5px; color:var(--text-muted);">Participantes del Diplomado en Gerencia de Obras con acceso a la bóveda</span>
                        </div>
                        <div style="display:flex; gap:8px;">
                            <button type="button" class="btn-auth-action" style="background:var(--emerald); color:#ffffff; border:none;" onclick="exportStudentsCSV()">
                                <span>📥</span> Exportar a CSV
                            </button>
                            <button type="button" class="btn-auth-action" style="background:#fee2e2; color:#b91c1c; border:1px solid #fecaca;" onclick="resetStudentsDemo()">
                                <span>🔄</span> Reiniciar Estudiantes
                            </button>
                        </div>
                    </div>

                    <div style="overflow-x:auto;">
                        <table class="admin-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre del Alumno</th>
                                    <th>C.I. / N° CIV</th>
                                    <th>Especialidad / Perfil</th>
                                    <th>Correo Electrónico</th>
                                    <th>Fecha Registro</th>
                                </tr>
                            </thead>
                            <tbody id="adminStudentsTableBody">
                                <!-- Poblado por JS -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- CONTENIDO TAB 2: DESBLOQUEO DE MATERIALES -->
            <div id="adminTabContentLocks" style="display:none;">
                <div class="content-card">
                    <h3><span>🔒</span> Control de Desbloqueo de Materiales y Clases</h3>
                    <p class="academic-p">
                        Como facilitador titular, puedes habilitar o restringir el acceso a los módulos previos o a las sesiones interactivas según el avance del cronograma académico de clases:
                    </p>

                    <div id="locksListContainer">
                        <!-- Poblado por JS -->
                    </div>
                </div>
            </div>

            <!-- CONTENIDO TAB 3: DILEMAS WAR ROOM -->
            <div id="adminTabContentPoll" style="display:none;">
                <div class="content-card">
                    <h3><span>⚡</span> Configurador de Dilemas y Crisis en Vivo (Sesión 6 War Room)</h3>
                    <p class="academic-p">
                        Modifica en tiempo real el escenario de crisis que enfrentarán los equipos de alumnos en el War Room Integrador. Los cambios surten efecto de inmediato en las pantallas de los participantes:
                    </p>

                    <form onsubmit="saveDilemaConfig(event)">
                        <label style="font-size:12px; font-weight:700; color:var(--navy-primary); display:block; margin-bottom:4px;">Título del Dilema de Crisis:</label>
                        <input type="text" id="dilemaTitleInput" required class="auth-input-field" value="Colapso de Suministro de Cemento en Vaciado Crítico de Losa">

                        <label style="font-size:12px; font-weight:700; color:var(--navy-primary); display:block; margin-bottom:4px;">Contexto del Escenario (Guayana):</label>
                        <textarea id="dilemaContextInput" rows="3" class="auth-input-field" style="height:auto;">Se detiene la planta productora de cemento con el 40% de la losa de entrepiso colada en una jornada a 34°C. El fraguado inicial comenzará en 45 minutos. Los equipos deben decidir la acción inmediata.</textarea>

                        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(240px, 1fr)); gap:12px; margin:12px 0;">
                            <div>
                                <label style="font-size:12px; font-weight:700; color:var(--navy-primary); display:block; margin-bottom:4px;">Opción A (Conservadora):</label>
                                <input type="text" id="dilemaOptA" class="auth-input-field" value="Detener vaciado y construir junta de construcción tratada con puente epóxico">
                            </div>
                            <div>
                                <label style="font-size:12px; font-weight:700; color:var(--navy-primary); display:block; margin-bottom:4px;">Opción B (Comercial):</label>
                                <input type="text" id="dilemaOptB" class="auth-input-field" value="Activar proveedor alterno de emergencia con sobrecosto del 35%">
                            </div>
                            <div>
                                <label style="font-size:12px; font-weight:700; color:var(--navy-primary); display:block; margin-bottom:4px;">Opción C (Técnica):</label>
                                <input type="text" id="dilemaOptC" class="auth-input-field" value="Aplicar aditivo retardador de fraguado y culminar con trompos de obra">
                            </div>
                        </div>

                        <button type="submit" class="btn-submit-form" style="background:var(--emerald);">💾 Publicar Dilema al War Room en Vivo</button>
                    </form>
                </div>
            </div>

            <!-- CONTENIDO TAB 4: CALIFICACIONES (0-20 PTS) -->
            <div id="adminTabContentGrades" style="display:none;">
                <div class="content-card">
                    <h3><span>🎯</span> Calificador de Alumnos y Rúbrica Vigesimal Oficial (0 a 20 pts)</h3>
                    <p class="academic-p">
                        Asigna calificaciones de cátedra a cada participante registrado en función de los cuatro criterios rectores del Módulo V (25% cada uno):
                    </p>

                    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(300px, 1fr)); gap:20px; margin-bottom:20px;">
                        <div>
                            <label style="font-size:12px; font-weight:700; color:var(--navy-primary); display:block; margin-bottom:4px;">Seleccionar Alumno a Calificar:</label>
                            <select id="gradeStudentSelect" class="auth-input-field" onchange="loadStudentGradeDraft()"></select>

                            <label style="font-size:12px; font-weight:700; color:var(--navy-primary); display:block; margin:12px 0 4px;">C1: Modelado openBIM IFC 4.3 &amp; BCF 3.0 (0 a 5 pts):</label>
                            <input type="range" id="gradeC1" min="0" max="5" step="0.1" value="4.8" style="width:100%;" oninput="recalcGradeRubric()">
                            <div style="display:flex; justify-content:space-between; font-size:12px; color:var(--text-muted);"><span id="gradeC1Val">4.8 pts</span><span>25%</span></div>

                            <label style="font-size:12px; font-weight:700; color:var(--navy-primary); display:block; margin:12px 0 4px;">C2: Vinculación Presupuestaria y Control EVM 4D/5D (0 a 5 pts):</label>
                            <input type="range" id="gradeC2" min="0" max="5" step="0.1" value="4.6" style="width:100%;" oninput="recalcGradeRubric()">
                            <div style="display:flex; justify-content:space-between; font-size:12px; color:var(--text-muted);"><span id="gradeC2Val">4.6 pts</span><span>25%</span></div>

                            <label style="font-size:12px; font-weight:700; color:var(--navy-primary); display:block; margin:12px 0 4px;">C3: Integración de IA y Bitácoras Predictivas (0 a 5 pts):</label>
                            <input type="range" id="gradeC3" min="0" max="5" step="0.1" value="4.9" style="width:100%;" oninput="recalcGradeRubric()">
                            <div style="display:flex; justify-content:space-between; font-size:12px; color:var(--text-muted);"><span id="gradeC3Val">4.9 pts</span><span>25%</span></div>

                            <label style="font-size:12px; font-weight:700; color:var(--navy-primary); display:block; margin:12px 0 4px;">C4: Eficiencia Solar y Cumplimiento Normativo (0 a 5 pts):</label>
                            <input type="range" id="gradeC4" min="0" max="5" step="0.1" value="4.7" style="width:100%;" oninput="recalcGradeRubric()">
                            <div style="display:flex; justify-content:space-between; font-size:12px; color:var(--text-muted);"><span id="gradeC4Val">4.7 pts</span><span>25%</span></div>
                        </div>

                        <div style="background:var(--surface-subtle); border:1.5px solid var(--border); border-radius:14px; padding:24px; display:flex; flex-direction:column; justify-content:space-between;">
                            <div>
                                <span style="font-size:11.5px; font-weight:800; text-transform:uppercase; color:var(--text-light); letter-spacing:0.04em;">Nota Acumulada Final:</span>
                                <div id="gradeFinalScore" style="font-size:46px; font-weight:800; color:var(--navy-primary); margin:6px 0;">19.0 / 20</div>
                                <div id="gradeVerdictBadge" style="display:inline-block; padding:6px 14px; border-radius:9999px; background:#dcfce7; color:#166534; font-size:12.5px; font-weight:800; margin-bottom:14px;">
                                    SOBRESALIENTE CON MENCIÓN HONORÍFICA
                                </div>
                                <p style="font-size:12px; color:var(--text-muted); line-height:1.6;">
                                    Esta calificación queda asentada en el libro de actas digital de la cátedra para su consignación formal ante el Decanato de Postgrado UGMA.
                                </p>
                            </div>
                            <button type="button" class="btn-submit-form" style="background:var(--navy-primary);" onclick="saveStudentGrade()">
                                💾 Asentar Calificación Oficial
                            </button>
                        </div>
                    </div>

                    <!-- TABLA DE ALUMNOS CALIFICADOS -->
                    <h4 style="font-size:14px; font-weight:700; color:var(--navy-primary); margin:20px 0 8px;">Acta de Calificaciones Asentadas:</h4>
                    <div style="overflow-x:auto;">
                        <table class="admin-table">
                            <thead>
                                <tr>
                                    <th>Alumno</th>
                                    <th>C1 (BIM)</th>
                                    <th>C2 (EVM)</th>
                                    <th>C3 (IA)</th>
                                    <th>C4 (Solar)</th>
                                    <th>Nota Final</th>
                                    <th>Veredicto</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>
                            <tbody id="gradedStudentsTableBody">
                                <!-- Poblado por JS -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- CONTENIDO TAB 7: EVALUACIONES DÍA 1 Y DÍA 2 -->
            <div id="adminTabContentEvaluations" style="display:none;">
                <div class="content-card">
                    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:16px; flex-wrap:wrap; gap:12px;">
                        <div>
                            <h3 style="margin:0;"><span>📋</span> Evaluaciones Prácticas y Entregas</h3>
                            <p style="font-size:13.5px; color:var(--text-muted); margin-top:4px;">
                                Seguimiento en tiempo real de exámenes de la Cátedra (Semana 1 openBIM/BCF y Unidad 4 Telecom Karuay-Waikirimá).
                            </p>
                        </div>
                        <div style="display:flex; gap:10px; align-items:center; flex-wrap:wrap;">
                            <select id="evalFilterCode" onchange="renderEvaluationsTable()" style="padding:8px 12px; border-radius:10px; border:1px solid #cbd5e1; font-size:12.5px; font-weight:700; background:#ffffff; color:var(--navy-primary); cursor:pointer;">
                                <option value="ALL">🔍 Todas las Evaluaciones</option>
                                <option value="EVAL-DIA-1-2">📋 Semana 1: openBIM &amp; BCF (20 Pts)</option>
                                <option value="EVAL-U4-TELECOM">📡 U4: Telecom Karuay-Waikirimá (20 Pts)</option>
                            </select>
                            <button type="button" id="btnToggleEvaluationCard" class="btn-refresh" style="background:#059669; color:#ffffff; border:1px solid #047857; font-weight:700;" onclick="toggleEvaluationCardStatus()">
                                <span id="btnToggleEvaluationCardIcon">🟢</span> <span id="btnToggleEvaluationCardText">Habilitar Tarjeta Semana 1</span>
                            </button>
                            <a href="/ugma-gerencia-obras/evaluacion-dia-1-2" target="_blank" style="display:inline-flex; align-items:center; gap:6px; background:#e0f2fe; color:#0369a1; text-decoration:none; padding:8px 14px; border-radius:10px; font-size:12.5px; font-weight:700; border:1px solid #bae6fd;">
                                📋 Abrir Semana 1 ↗
                            </a>
                            <a href="/ugma-gerencia-obras/eficiencia-energetica-materiales/#modulo-9-evaluacion" target="_blank" style="display:inline-flex; align-items:center; gap:6px; background:#fef3c7; color:#92400e; text-decoration:none; padding:8px 14px; border-radius:10px; font-size:12.5px; font-weight:700; border:1px solid #fde68a;">
                                📡 Abrir U4 Telecom ↗
                            </a>
                            <button type="button" class="btn-refresh" onclick="loadEvaluations()">
                                <span>🔄</span> Actualizar
                            </button>
                            <button type="button" class="btn-refresh" style="background:#fee2e2; color:#b91c1c; border:1px solid #fecaca;" onclick="resetEvaluationSubmissions()">
                                <span>🗑️</span> Reiniciar Exámenes
                            </button>
                        </div>
                    </div>

                    <!-- BANNER DE ESTADO DE LA TARJETA EN EL AULA DE ALUMNOS -->
                    <div id="evalCardStatusNotice" style="background:#f0fdf4; border:1px solid #86efac; border-radius:12px; padding:12px 18px; margin-bottom:18px; display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:12px; font-size:13px; color:#166534;">
                        <div style="display:flex; align-items:center; gap:10px;">
                            <span id="evalCardStatusDot" style="width:12px; height:12px; border-radius:50%; background:#10b981; display:inline-block; box-shadow:0 0 8px rgba(16,185,129,0.5);"></span>
                            <div>
                                <strong>Tarjeta en el Itinerario del Alumno:</strong>
                                <span id="evalCardStatusNoticeText" style="font-weight:700;">Habilitada para estudiantes inscritos</span>
                            </div>
                        </div>
                        <span style="font-size:12px; color:#15803d; background:rgba(34,197,94,0.15); padding:3px 10px; border-radius:6px; font-weight:600;">
                            «Evaluación Oficial · 20 Puntos (Semana 1)»
                        </span>
                    </div>

                    <!-- METRIC CARDS -->
                    <div class="stats-grid" style="margin-bottom:20px;">
                        <div class="stat-card">
                            <span class="stat-label">Total Entregas</span>
                            <span class="stat-value" id="evalStatTotal">0</span>
                        </div>
                        <div class="stat-card">
                            <span class="stat-label">Promedio General</span>
                            <span class="stat-value" id="evalStatAvg" style="color:var(--blue-accent);">0.0</span>
                        </div>
                        <div class="stat-card">
                            <span class="stat-label">Tasa de Aprobación</span>
                            <span class="stat-value" id="evalStatPass" style="color:var(--emerald);">0%</span>
                        </div>
                        <div class="stat-card">
                            <span class="stat-label">Nota Más Alta</span>
                            <span class="stat-value" id="evalStatMax" style="color:var(--navy-primary);">0.0</span>
                        </div>
                    </div>

                    <!-- TABLA DE ENTREGAS -->
                    <div style="overflow-x:auto;">
                        <table class="admin-table">
                            <thead>
                                <tr>
                                    <th>Participante</th>
                                    <th>Correo</th>
                                    <th>Evaluación</th>
                                    <th>Día 1 / Etapa 1</th>
                                    <th>Día 2 / Etapa 2</th>
                                    <th>Total (0-20)</th>
                                    <th>Estado</th>
                                    <th>Tiempo</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="evaluationsTableBody">
                                <tr>
                                    <td colspan="9" style="text-align:center; padding:24px; color:var(--text-light);">
                                        Cargando entregas de evaluación...
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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
        function escapeHtml(str) {
            if (str === null || str === undefined) return '';
            return String(str)
                .replace(/&/g, '&amp;')
                .replace(/</g, '&lt;')
                .replace(/>/g, '&gt;')
                .replace(/"/g, '&quot;')
                .replace(/'/g, '&#039;');
        }

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


        const ADMIN_SESSION_KEY = 'ugma_admin_session';
        const GRADES_KEY = 'ugma_student_grades';

        const DEFAULT_STUDENTS = [
            { name: 'Ing. Carlos Mendoza', email: 'carlos.mendoza@alumnos.ugma.edu.ve', ci: 'V-20.123.456 (CIV 214.502)', role: 'Ing. Civil · Alumno UGMA', date: '18/10/2026' },
            { name: 'Arq. Valentina Silva', email: 'valentina.silva@alumnos.ugma.edu.ve', ci: 'V-22.789.012 (CAV 8.910)', role: 'Arquitecta · Alumna UGMA', date: '19/10/2026' },
            { name: 'Ing. Roberto Briceño', email: 'roberto.briceno@alumnos.ugma.edu.ve', ci: 'V-18.456.789 (CIV 198.320)', role: 'Ing. de Costos · Alumno UGMA', date: '19/10/2026' },
            { name: 'Ing. María Elena Salazar', email: 'maria.salazar@alumnos.ugma.edu.ve', ci: 'V-21.345.678 (CIV 220.140)', role: 'Ing. Inspector · Alumna UGMA', date: '20/10/2026' }
        ];

        const COURSE_MODULES = [
            { id: 'evaluacion_dia_1_2', title: '📝 Evaluación Oficial · 20 Puntos (Semana 1: Días 1 y 2)', defaultUnlocked: true },
            { id: 'mod1', title: 'Módulo I: Organización y Gobernanza (Prof. Pérez)', defaultUnlocked: true },
            { id: 'mod2', title: 'Módulo II: Costos, APU y EVM (Prof. Angarita)', defaultUnlocked: true },
            { id: 'mod3', title: 'Módulo III: Marco Legal y Art. 1637 (Abg. Martínez)', defaultUnlocked: true },
            { id: 'mod4', title: 'Módulo IV: Lean Construction y Calidad (Prof. Zambrano)', defaultUnlocked: true },
            { id: 'ses1', title: 'Módulo V - Sesión 1: CDE e ISO 19650', defaultUnlocked: true },
            { id: 'ses2', title: 'Módulo V - Sesión 2: Clash Detection 3D', defaultUnlocked: true },
            { id: 'ses3', title: 'Módulo V - Sesión 3: Planificación 4D/5D EVM', defaultUnlocked: true },
            { id: 'ses4', title: 'Módulo V - Sesión 4: Asistente IA en Control de Obra', defaultUnlocked: true },
            { id: 'ses5', title: 'Módulo V - Sesión 5: Sostenibilidad y Solar', defaultUnlocked: true },
            { id: 'ses6', title: 'Módulo V - Sesión 6: War Room Integrador', defaultUnlocked: true }
        ];

        function checkAdminAuth() {
            try {
                const session = localStorage.getItem(ADMIN_SESSION_KEY);
                return session ? JSON.parse(session) : null;
            } catch(e) { return null; }
        }

        function handleAdminLogin(e) {
            e.preventDefault();
            const email = document.getElementById('adminEmail').value.trim();
            const pass = document.getElementById('adminPass').value.trim();

            if (email === 'hector@motazorrilla.com' && pass === 'Baralo00.') {
                localStorage.setItem(ADMIN_SESSION_KEY, JSON.stringify({
                    email: email,
                    role: 'Facilitador Titular',
                    time: new Date().toISOString()
                }));
                renderAdminView();
            } else {
                document.getElementById('adminErrorMsg').style.display = 'block';
            }
        }

        function logoutAdmin() {
            localStorage.removeItem(ADMIN_SESSION_KEY);
            window.location.reload();
        }

        function renderAdminView() {
            const admin = checkAdminAuth();
            const gate = document.getElementById('adminAuthGate');
            const dash = document.getElementById('adminDashboard');

            if (admin) {
                gate.style.display = 'none';
                dash.style.display = 'block';
                loadStudentsTable();
                loadLocksList();
                loadDilemaConfig();
                loadGradesTable();
                populateStudentSelect();
                recalcGradeRubric();
                fetchEvaluationCardStatus();
            } else {
                gate.style.display = 'block';
                dash.style.display = 'none';
            }
        }

        function getStudentsList() {
            try {
                let list = JSON.parse(localStorage.getItem(STUDENTS_KEY) || '[]');
                if (list.length === 0) {
                    list = [...DEFAULT_STUDENTS];
                    localStorage.setItem(STUDENTS_KEY, JSON.stringify(list));
                }
                return list;
            } catch(e) { return DEFAULT_STUDENTS; }
        }

        async function resetStudentsDemo() {
            if (!confirm('¿Estás seguro de reiniciar el listado de alumnos inscritos? Esto restablecerá los 4 alumnos oficiales de cátedra y limpiará la presencia en vivo.')) {
                return;
            }

            try {
                await fetch('/ugma-gerencia-obras/api/admin/reset-students', {
                    method: 'POST',
                    headers: { 'Accept': 'application/json', 'Content-Type': 'application/json' }
                });
            } catch(e) {
                console.warn('Reinicio offline en cliente:', e);
            }

            localStorage.setItem(STUDENTS_KEY, JSON.stringify(DEFAULT_STUDENTS));
            loadStudentsTable();
            populateStudentSelect();
            if (typeof refreshLivePresences === 'function') refreshLivePresences();
            alert('Listado de alumnos reiniciado exitosamente a los 4 estudiantes oficiales de cátedra.');
        }

        const resetStudentsList = resetStudentsDemo;

        function loadStudentsTable() {
            const list = getStudentsList();
            const tbody = document.getElementById('adminStudentsTableBody');
            document.getElementById('studentsCountBadge').textContent = list.length;
            if (!tbody) return;

            tbody.innerHTML = list.map((s, idx) => `
                <tr>
                    <td style="font-weight:700; color:var(--text-light);">${idx + 1}</td>
                    <td><strong>${s.name}</strong></td>
                    <td><code>${s.ci || 'V-Oficial'}</code></td>
                    <td>${s.role || 'Alumno UGMA'}</td>
                    <td><a href="mailto:${s.email}" style="color:var(--blue-accent); text-decoration:none;">${s.email}</a></td>
                    <td><span style="font-size:11.5px; color:var(--text-light);">${s.date || '20/10/2026'}</span></td>
                </tr>
            `).join('');
        }

        function exportStudentsCSV() {
            const list = getStudentsList();
            let csv = 'Nombre,Cedula_CIV,Rol_Especialidad,Correo,Fecha_Registro\n';
            list.forEach(s => {
                csv += `"${s.name}","${s.ci || ''}","${s.role || ''}","${s.email}","${s.date || ''}"\n`;
            });
            const blob = new Blob([csv], { type: 'text/csv;charset=utf-8;' });
            const link = document.createElement('a');
            link.href = URL.createObjectURL(blob);
            link.download = 'Alumnos_Inscritos_Diplomado_UGMA.csv';
            link.click();
        }

        function getLocksState() {
            try {
                return JSON.parse(localStorage.getItem(LOCKS_KEY) || '{}');
            } catch(e) { return {}; }
        }

        function loadLocksList() {
            const container = document.getElementById('locksListContainer');
            if (!container) return;
            const locks = getLocksState();

            container.innerHTML = COURSE_MODULES.map(m => {
                const isUnlocked = locks[m.id] !== undefined ? locks[m.id] : m.defaultUnlocked;
                return `
                    <div class="lock-item-row">
                        <div>
                            <strong style="color:var(--navy-primary); font-size:14px; display:block;">${m.title}</strong>
                            <span style="font-size:12px; color:${isUnlocked ? 'var(--emerald)' : 'var(--rose)'};">
                                ${isUnlocked ? '🟢 Desbloqueado para Alumnos' : '🔒 Restringido / Bloqueado'}
                            </span>
                        </div>
                        <label class="switch-toggle">
                            <input type="checkbox" ${isUnlocked ? 'checked' : ''} onchange="toggleModuleLock('${m.id}', this.checked)">
                            <span class="slider-toggle"></span>
                        </label>
                    </div>
                `;
            }).join('');
        }

        function toggleModuleLock(id, state) {
            const locks = getLocksState();
            locks[id] = state;
            localStorage.setItem(LOCKS_KEY, JSON.stringify(locks));
            if (id === 'evaluacion_dia_1_2') {
                localStorage.setItem(EVAL_CARD_KEY, state ? 'true' : 'false');
                renderEvaluationCardButtonState(state);
                fetch('/ugma-gerencia-obras/api/admin/toggle-eval-card', {
                    method: 'POST',
                    headers: { 'Accept': 'application/json', 'Content-Type': 'application/json' },
                    body: JSON.stringify({ enabled: state })
                }).catch(e => console.warn('Sync eval card lock error:', e));
            }
            loadLocksList();
        }

        function loadDilemaConfig() {
            try {
                const cfg = JSON.parse(localStorage.getItem(DILEMA_KEY) || '{}');
                if (cfg.title) document.getElementById('dilemaTitleInput').value = cfg.title;
                if (cfg.context) document.getElementById('dilemaContextInput').value = cfg.context;
                if (cfg.optA) document.getElementById('dilemaOptA').value = cfg.optA;
                if (cfg.optB) document.getElementById('dilemaOptB').value = cfg.optB;
                if (cfg.optC) document.getElementById('dilemaOptC').value = cfg.optC;
            } catch(e) {}
        }

        function saveDilemaConfig(e) {
            e.preventDefault();
            const cfg = {
                title: document.getElementById('dilemaTitleInput').value.trim(),
                context: document.getElementById('dilemaContextInput').value.trim(),
                optA: document.getElementById('dilemaOptA').value.trim(),
                optB: document.getElementById('dilemaOptB').value.trim(),
                optC: document.getElementById('dilemaOptC').value.trim(),
                timestamp: new Date().toLocaleTimeString('es-VE')
            };
            localStorage.setItem(DILEMA_KEY, JSON.stringify(cfg));
            alert('¡Dilema de War Room actualizado con éxito en tiempo real!');
        }

        function populateStudentSelect() {
            const list = getStudentsList();
            const sel = document.getElementById('gradeStudentSelect');
            if (!sel) return;
            sel.innerHTML = list.map(s => `<option value="${s.email}">${s.name} (${s.ci || 'V-Oficial'})</option>`).join('');
        }

        function recalcGradeRubric() {
            const c1 = parseFloat(document.getElementById('gradeC1').value) || 0;
            const c2 = parseFloat(document.getElementById('gradeC2').value) || 0;
            const c3 = parseFloat(document.getElementById('gradeC3').value) || 0;
            const c4 = parseFloat(document.getElementById('gradeC4').value) || 0;

            document.getElementById('gradeC1Val').textContent = c1.toFixed(1) + ' pts';
            document.getElementById('gradeC2Val').textContent = c2.toFixed(1) + ' pts';
            document.getElementById('gradeC3Val').textContent = c3.toFixed(1) + ' pts';
            document.getElementById('gradeC4Val').textContent = c4.toFixed(1) + ' pts';

            const total = c1 + c2 + c3 + c4;
            const totalStr = total.toFixed(1);
            document.getElementById('gradeFinalScore').textContent = totalStr + ' / 20';

            const badge = document.getElementById('gradeVerdictBadge');
            if (total >= 19.0) {
                badge.textContent = 'SOBRESALIENTE CON MENCIÓN HONORÍFICA';
                badge.style.background = '#dcfce7'; badge.style.color = '#166534';
            } else if (total >= 16.0) {
                badge.textContent = 'APROBADO DISTINGUIDO';
                badge.style.background = '#e0f2fe'; badge.style.color = '#0369a1';
            } else if (total >= 10.0) {
                badge.textContent = 'APROBADO REGULAR';
                badge.style.background = '#fef3c7'; badge.style.color = '#b45309';
            } else {
                badge.textContent = 'NO CONFORME / RECHAZADO';
                badge.style.background = '#fee2e2'; badge.style.color = '#991b1b';
            }
        }

        function saveStudentGrade() {
            const sel = document.getElementById('gradeStudentSelect');
            const studentEmail = sel.value;
            const studentName = sel.options[sel.selectedIndex].text;
            const c1 = parseFloat(document.getElementById('gradeC1').value);
            const c2 = parseFloat(document.getElementById('gradeC2').value);
            const c3 = parseFloat(document.getElementById('gradeC3').value);
            const c4 = parseFloat(document.getElementById('gradeC4').value);
            const total = (c1 + c2 + c3 + c4).toFixed(1);
            const verdict = document.getElementById('gradeVerdictBadge').textContent.trim();

            let grades = [];
            try { grades = JSON.parse(localStorage.getItem(GRADES_KEY) || '[]'); } catch(e) {}

            const existingIdx = grades.findIndex(g => g.email === studentEmail);
            const record = {
                email: studentEmail,
                name: studentName,
                c1: c1, c2: c2, c3: c3, c4: c4,
                total: total,
                verdict: verdict,
                date: new Date().toLocaleDateString('es-VE') + ' ' + new Date().toLocaleTimeString('es-VE')
            };

            if (existingIdx >= 0) {
                grades[existingIdx] = record;
            } else {
                grades.push(record);
            }

            localStorage.setItem(GRADES_KEY, JSON.stringify(grades));
            loadGradesTable();
            alert(`Calificación oficial asentada para ${studentName}: ${total} pts (${verdict})`);
        }

        function loadGradesTable() {
            const tbody = document.getElementById('gradedStudentsTableBody');
            if (!tbody) return;
            let grades = [];
            try { grades = JSON.parse(localStorage.getItem(GRADES_KEY) || '[]'); } catch(e) {}

            if (grades.length === 0) {
                tbody.innerHTML = '<tr><td colspan="9" style="text-align:center; color:var(--text-light); padding:16px;">No hay calificaciones asentadas aún.</td></tr>';
                return;
            }

            tbody.innerHTML = grades.map(g => `
                <tr>
                    <td><strong>${g.name}</strong></td>
                    <td>${g.c1}</td>
                    <td>${g.c2}</td>
                    <td>${g.c3}</td>
                    <td>${g.c4}</td>
                    <td><strong style="color:var(--navy-primary); font-size:14px;">${g.total}</strong></td>
                    <td><span style="font-size:11px; font-weight:700; color:var(--emerald);">${g.verdict}</span></td>
                    <td><span style="font-size:11px; color:var(--text-light);">${g.date}</span></td>
                </tr>
            `).join('');
        }

        function switchAdminTab(tab) {
            const tabs = ['live', 'quiz', 'students', 'locks', 'poll', 'grades', 'evaluations'];
            tabs.forEach(t => {
                const btn = document.getElementById('tabAdmin' + t.charAt(0).toUpperCase() + t.slice(1));
                const content = document.getElementById('adminTabContent' + t.charAt(0).toUpperCase() + t.slice(1));
                if (btn) btn.classList.remove('active');
                if (content) content.style.display = 'none';
            });

            const targetBtn = document.getElementById('tabAdmin' + tab.charAt(0).toUpperCase() + tab.slice(1));
            const targetContent = document.getElementById('adminTabContent' + tab.charAt(0).toUpperCase() + tab.slice(1));
            if (targetBtn) targetBtn.classList.add('active');
            if (targetContent) targetContent.style.display = 'block';

            if (tab === 'live') refreshLivePresences();
            if (tab === 'quiz') loadQuizQuestions();
            if (tab === 'evaluations') { loadEvaluations(); fetchEvaluationCardStatus(); }
        }

        // ==========================================
        // FUNCIONES DE CONTROL DE PRESENCIA EN VIVO
        // ==========================================
        let livePresenceTimer = null;

        async function refreshLivePresences() {
            try {
                const res = await fetch('/ugma-gerencia-obras/api/live-presence/list');
                const data = await res.json();
                if (data.success) {
                    renderLivePresenceTable(data.presences);
                    document.getElementById('livePresenceBadge').innerText = data.total_online;
                    document.getElementById('liveTotalCount').innerText = data.total_online;
                    document.getElementById('liveAdmittedCount').innerText = data.admitted_count;
                    document.getElementById('liveWaitingCount').innerText = data.total_online - data.admitted_count;
                }
            } catch (err) {
                console.error('Error fetching live presences:', err);
            }
        }

        function renderLivePresenceTable(presences) {
            const tbody = document.getElementById('livePresenceTableBody');
            if (!presences || presences.length === 0) {
                tbody.innerHTML = `<tr><td colspan="6" style="text-align:center; padding:28px; color:var(--text-light);">No hay participantes conectados en la sala en este momento.</td></tr>`;
                return;
            }

            tbody.innerHTML = presences.map(p => {
                const isAdmitted = !!p.is_admitted;
                const statusBadge = isAdmitted 
                    ? `<span style="background:#d1fae5; color:#065f46; font-size:11px; font-weight:800; padding:4px 10px; border-radius:9999px;">🟢 Admitido en Clase</span>`
                    : `<span style="background:#fef3c7; color:#92400e; font-size:11px; font-weight:800; padding:4px 10px; border-radius:9999px;">🟡 En Sala de Espera</span>`;

                const actionBtn = isAdmitted
                    ? `<button type="button" class="btn-action-admin" style="padding:4px 10px; font-size:11.5px; background:#ef4444; color:#fff;" onclick="toggleStudentAdmission(${p.id}, false)">Revocar</button>`
                    : `<button type="button" class="btn-action-admin" style="padding:4px 10px; font-size:11.5px; background:#10b981; color:#fff;" onclick="toggleStudentAdmission(${p.id}, true)">Admitir Alumno</button>`;

                const lastPingDate = new Date(p.last_ping).toLocaleTimeString();

                return `
                    <tr>
                        <td><strong>${escapeHtml(p.student_name)}</strong></td>
                        <td>${escapeHtml(p.student_email)}</td>
                        <td style="font-family:var(--font-mono); font-size:11.5px;">${escapeHtml(p.ip_address || 'Localhost')}</td>
                        <td><span style="font-size:12px; color:var(--text-muted);">${escapeHtml(lastPingDate)}</span></td>
                        <td>${statusBadge}</td>
                        <td>${actionBtn}</td>
                    </tr>
                `;
            }).join('');
        }

        async function toggleStudentAdmission(presenceId, status) {
            try {
                const res = await fetch('/ugma-gerencia-obras/api/live-presence/admit', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': '' },
                    body: JSON.stringify({ presence_id: presenceId, status: status })
                });
                const data = await res.json();
                if (data.success) {
                    refreshLivePresences();
                }
            } catch (err) {
                alert('Error al actualizar admisión');
            }
        }

        async function admitAllLiveStudents(status) {
            try {
                const res = await fetch('/ugma-gerencia-obras/api/live-presence/admit', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': '' },
                    body: JSON.stringify({ admit_all: true, status: status })
                });
                const data = await res.json();
                if (data.success) {
                    alert(data.message);
                    refreshLivePresences();
                }
            } catch (err) {
                alert('Error al admitir alumnos');
            }
        }

        // ==========================================
        // FUNCIONES DE LIVE QUIZ (MENTIMETER STYLE)
        // ==========================================
        let quizQuestionsCache = [];

        async function loadQuizQuestions() {
            try {
                const res = await fetch('/ugma-gerencia-obras/api/live-quiz/questions');
                const data = await res.json();
                if (data.success) {
                    quizQuestionsCache = data.questions;
                    renderQuizQuestionsTable(data.questions);
                    checkActiveQuizState();
                }
            } catch (err) {
                console.error('Error loading quiz questions:', err);
            }
        }

        function renderQuizQuestionsTable(questions) {
            const tbody = document.getElementById('quizQuestionsTableBody');
            if (!questions || questions.length === 0) {
                tbody.innerHTML = `<tr><td colspan="5" style="text-align:center; padding:24px;">No hay preguntas en el banco.</td></tr>`;
                return;
            }

            tbody.innerHTML = questions.map(q => {
                const options = Array.isArray(q.options) ? q.options : JSON.parse(q.options || '[]');
                const correctOptionText = options[q.correct_index] || 'No definida';
                const isActive = !!q.is_active;

                const actionBtn = isActive
                    ? `<button type="button" class="btn-action-admin" style="background:#dc2626; color:#fff;" onclick="closeLiveQuestion()">⏹️ En Pantalla (Cerrar)</button>`
                    : `<button type="button" class="btn-action-admin" style="background:#0284c7; color:#fff;" onclick="launchQuizQuestion(${q.id})">🚀 Lanzar al Aula</button>`;

                return `
                    <tr style="${isActive ? 'background:#ecfdf5;' : ''}">
                        <td><span style="font-size:11px; font-weight:800; background:#e0f2fe; color:#0369a1; padding:3px 8px; border-radius:6px;">Unidad ${q.unit_number}</span></td>
                        <td><strong>${q.question}</strong></td>
                        <td><span style="font-size:12px; color:#059669; font-weight:700;">✓ ${correctOptionText}</span></td>
                        <td>${q.time_limit_sec}s</td>
                        <td>${actionBtn}</td>
                    </tr>
                `;
            }).join('');
        }

        async function launchQuizQuestion(questionId) {
            try {
                const res = await fetch('/ugma-gerencia-obras/api/live-quiz/trigger', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': '' },
                    body: JSON.stringify({ question_id: questionId })
                });
                const data = await res.json();
                if (data.success) {
                    alert(data.message);
                    loadQuizQuestions();
                }
            } catch (err) {
                alert('Error al lanzar pregunta');
            }
        }

        async function closeLiveQuestion() {
            try {
                const res = await fetch('/ugma-gerencia-obras/api/live-quiz/trigger', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': '' },
                    body: JSON.stringify({ question_id: 0 })
                });
                const data = await res.json();
                if (data.success) {
                    alert(data.message);
                    loadQuizQuestions();
                }
            } catch (err) {
                alert('Error al cerrar pregunta');
            }
        }

        async function checkActiveQuizState() {
            try {
                const res = await fetch('/ugma-gerencia-obras/api/live-quiz/state');
                const data = await res.json();
                const banner = document.getElementById('activeQuestionLiveBanner');
                if (data.has_active_question && data.question) {
                    banner.style.display = 'block';
                    document.getElementById('activeQuestionTitle').innerText = data.question.question;
                    document.getElementById('activeQuestionMeta').innerText = `Unidad ${data.question.unit_number} · Límite: ${data.question.time_limit_sec}s`;
                    document.getElementById('liveAnswersCount').innerText = data.total_answers || 0;
                } else {
                    banner.style.display = 'none';
                }
            } catch (err) {}
        }

        async function openPodiumView() {
            try {
                const res = await fetch('/ugma-gerencia-obras/api/live-quiz/leaderboard');
                const data = await res.json();
                if (data.success) {
                    const modal = document.getElementById('podiumModal');
                    const winner = data.top_winner;
                    if (winner) {
                        document.getElementById('podiumWinnerName').innerText = winner.name;
                        document.getElementById('podiumWinnerScore').innerText = `${winner.total_score} Puntos (${winner.correct_count} aciertos · Promedio ${winner.avg_time_ms} ms)`;
                    } else {
                        document.getElementById('podiumWinnerName').innerText = 'Aún no hay respuestas registradas';
                        document.getElementById('podiumWinnerScore').innerText = '';
                    }

                    const tbody = document.getElementById('podiumLeaderboardBody');
                    tbody.innerHTML = (data.leaderboard || []).map((row, i) => {
                        const medal = i === 0 ? '🥇' : (i === 1 ? '🥈' : (i === 2 ? '🥉' : `#${i+1}`));
                        return `
                            <tr>
                                <td><strong style="font-size:14px;">${medal}</strong></td>
                                <td><strong>${row.name}</strong></td>
                                <td>${row.correct_count} / ${row.answers_count}</td>
                                <td>${row.avg_time_ms} ms</td>
                                <td><strong style="color:var(--emerald); font-size:14px;">${row.total_score} pts</strong></td>
                            </tr>
                        `;
                    }).join('');

                    modal.style.display = 'flex';
                }
            } catch (err) {
                alert('Error al cargar podio');
            }
        }

        function closePodiumModal() {
            document.getElementById('podiumModal').style.display = 'none';
        }

        // Polling de presencia en admin cada 4 segundos
        setInterval(function() {
            const liveTab = document.getElementById('adminTabContentLive');
            if (liveTab && liveTab.style.display !== 'none') {
                refreshLivePresences();
            }
            const quizTab = document.getElementById('adminTabContentQuiz');
            if (quizTab && quizTab.style.display !== 'none') {
                checkActiveQuizState();
            }
        }, 4000);


        document.addEventListener('DOMContentLoaded', function() {
            renderAdminView();
        });
    </script>
    <!-- MODAL DE PODIO Y GANADORES (MENTIMETER STYLE) -->
    <div id="podiumModal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(15,23,42,0.85); z-index:99999; align-items:center; justify-content:center; padding:16px;">
        <div style="background:#ffffff; border-radius:20px; max-width:650px; width:100%; padding:32px; box-shadow:0 25px 50px -12px rgba(0,0,0,0.3); text-align:center; position:relative;">
            <button type="button" onclick="closePodiumModal()" style="position:absolute; top:18px; right:18px; background:#f1f5f9; border:none; border-radius:50%; width:36px; height:36px; font-size:16px; cursor:pointer;">✕</button>
            
            <div style="font-size:42px; margin-bottom:8px;">🏆</div>
            <h2 style="font-size:24px; font-weight:800; color:var(--navy-primary); margin:0;">Podio Oficial del Aula en Vivo</h2>
            <p style="font-size:13.5px; color:var(--text-muted); margin:6px 0 20px;">Diplomado en Gerencia de Obras · Evaluación Síncrona UGMA</p>

            <div id="podiumTopWinnerBox" style="background:linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border:2px solid #f59e0b; border-radius:16px; padding:20px; margin-bottom:20px;">
                <span style="font-size:11px; font-weight:800; color:#b45309; text-transform:uppercase; letter-spacing:0.05em;">🥇 1er Lugar · Ganador del Reto</span>
                <h3 id="podiumWinnerName" style="font-size:22px; font-weight:800; color:#78350f; margin:6px 0;"></h3>
                <div id="podiumWinnerScore" style="font-size:15px; font-weight:700; color:#92400e;"></div>
            </div>

            <div class="table-responsive" style="max-height:260px; overflow-y:auto; margin-bottom:20px;">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Posición</th>
                            <th>Participante</th>
                            <th>Aciertos</th>
                            <th>Tiempo Promedio</th>
                            <th>Puntaje Total</th>
                        </tr>
                    </thead>
                    <tbody id="podiumLeaderboardBody">
                    </tbody>
                </table>
            </div>

            <button type="button" class="btn-action-admin" style="background:var(--navy-primary); color:#fff; padding:10px 24px;" onclick="closePodiumModal()">
                Cerrar Podio
            </button>
        </div>
    </div>

    <!-- MODAL INSPECTOR DE TICKET BCF 3.0 -->
    <div id="bcfInspectorModal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(15,23,42,0.8); z-index:99999; align-items:center; justify-content:center; padding:16px;">
        <div style="background:#ffffff; border-radius:20px; max-width:680px; width:100%; padding:28px; box-shadow:0 25px 50px -12px rgba(0,0,0,0.3); text-align:left; position:relative;">
            <button type="button" onclick="closeBcfInspectorModal()" style="position:absolute; top:18px; right:18px; background:#f1f5f9; border:none; border-radius:50%; width:36px; height:36px; font-size:16px; cursor:pointer;">✕</button>
            <div style="display:flex; align-items:center; gap:10px; margin-bottom:12px;">
                <span style="font-size:24px;">🔍</span>
                <div>
                    <h3 style="font-size:18px; font-weight:800; color:var(--navy-primary); margin:0;">Inspección de Incidencia BCF 3.0</h3>
                    <span id="bcfModalAuthor" style="font-size:12px; color:var(--text-light); font-weight:600;">Participante</span>
                </div>
            </div>
            <p style="font-size:13px; color:var(--text-muted); margin-bottom:14px;">
                Payload generado por el participante en cumplimiento del estándar buildingSMART BCF XML:
            </p>
            <div style="background:#0b132b; color:#38bdf8; border-radius:12px; padding:16px; font-family:var(--font-mono); font-size:12px; max-height:300px; overflow-y:auto; border:1px solid #1e293b;">
                <pre id="bcfModalCode" style="margin:0; white-space:pre-wrap; word-break:break-all;"></pre>
            </div>
            <div style="margin-top:20px; text-align:right;">
                <button type="button" class="btn-action-admin" style="background:#0f2942; color:#fff;" onclick="closeBcfInspectorModal()">
                    Cerrar Inspector
                </button>
            </div>
        </div>
    </div>

    <!-- MODAL CALIFICACIÓN Y FEEDBACK DOCENTE -->
    <div id="gradeEvalModal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(15,23,42,0.8); z-index:99999; align-items:center; justify-content:center; padding:16px;">
        <div style="background:#ffffff; border-radius:20px; max-width:540px; width:100%; padding:28px; box-shadow:0 25px 50px -12px rgba(0,0,0,0.3); text-align:left; position:relative;">
            <button type="button" onclick="closeGradeEvalModal()" style="position:absolute; top:18px; right:18px; background:#f1f5f9; border:none; border-radius:50%; width:36px; height:36px; font-size:16px; cursor:pointer;">✕</button>
            <div style="display:flex; align-items:center; gap:10px; margin-bottom:14px;">
                <span style="font-size:24px;">✏️</span>
                <div>
                    <h3 style="font-size:18px; font-weight:800; color:var(--navy-primary); margin:0;">Calificar Examen Día 1 y 2</h3>
                    <span id="gradeEvalStudentTitle" style="font-size:12.5px; color:var(--text-light); font-weight:600;">Participante</span>
                </div>
            </div>

            <input type="hidden" id="gradeEvalId">

            <div style="display:grid; grid-template-columns:1fr 1fr; gap:12px; margin-bottom:14px;">
                <div>
                    <label style="display:block; font-size:12px; font-weight:700; color:var(--navy-primary); margin-bottom:4px;">Nota Día 1 (Máx 10 Pts):</label>
                    <input type="number" id="gradeEvalDay1" min="0" max="10" step="0.5" class="auth-input-field" oninput="recalcEvalModalTotal()">
                </div>
                <div>
                    <label style="display:block; font-size:12px; font-weight:700; color:var(--navy-primary); margin-bottom:4px;">Nota Día 2 (Máx 10 Pts):</label>
                    <input type="number" id="gradeEvalDay2" min="0" max="10" step="0.5" class="auth-input-field" oninput="recalcEvalModalTotal()">
                </div>
            </div>

            <div style="background:#f8fafc; border:1px solid var(--border); border-radius:12px; padding:12px; margin-bottom:14px; display:flex; justify-content:space-between; align-items:center;">
                <span style="font-size:13px; font-weight:700; color:var(--navy-primary);">Calificación Vigesimal Total:</span>
                <span id="gradeEvalTotalDisplay" style="font-family:var(--font-mono); font-size:18px; font-weight:900; color:var(--emerald);">20.0 / 20 Pts</span>
            </div>

            <div style="margin-bottom:14px;">
                <label style="display:block; font-size:12px; font-weight:700; color:var(--navy-primary); margin-bottom:4px;">Estado de la Evaluación:</label>
                <select id="gradeEvalStatus" class="auth-input-field">
                    <option value="aprobado">Aprobado</option>
                    <option value="reprobado">Reprobado</option>
                    <option value="revisado">Revisado (Observaciones)</option>
                </select>
            </div>

            <div style="margin-bottom:20px;">
                <label style="display:block; font-size:12px; font-weight:700; color:var(--navy-primary); margin-bottom:4px;">Retroalimentación y Observaciones del Facilitador:</label>
                <textarea id="gradeEvalFeedback" rows="3" class="auth-input-field" placeholder="Excelente resolución del ticket BCF y justificación MacLeamy..."></textarea>
            </div>

            <div style="display:flex; justify-content:flex-end; gap:10px;">
                <button type="button" onclick="closeGradeEvalModal()" style="background:#f1f5f9; border:1px solid var(--border); padding:10px 18px; border-radius:10px; font-weight:700; cursor:pointer;">
                    Cancelar
                </button>
                <button type="button" class="btn-action-admin" style="background:#0284c7; color:#fff;" onclick="submitEvaluationGradeChange()">
                    💾 Guardar Calificación
                </button>
            </div>
        </div>
    </div>

    <script>
        // ==========================================
        // FUNCIONES DE EVALUACIONES (SEMANA 1 Y UNIDAD 4 TELECOM)
        // ==========================================
        let currentEvalSubmissions = [];

        async function loadEvaluations() {
            try {
                const res = await fetch('/ugma-gerencia-obras/api/evaluacion/submissions');
                const data = await res.json();
                if (data.success) {
                    currentEvalSubmissions = data.submissions || [];
                    document.getElementById('evalCountBadge').innerText = currentEvalSubmissions.length;
                    renderEvaluationsTable();
                }
            } catch (err) {
                console.error("Error al cargar evaluaciones:", err);
            }
        }

        function renderEvaluationsTable() {
            const filterEl = document.getElementById('evalFilterCode');
            const filterVal = filterEl ? filterEl.value : 'ALL';

            const filtered = currentEvalSubmissions.filter(s => {
                if (filterVal === 'ALL') return true;
                if (filterVal === 'EVAL-DIA-1-2') {
                    return !s.evaluation_code || s.evaluation_code === 'EVAL-DIA-1-2';
                }
                return s.evaluation_code === filterVal;
            });

            // Update stats
            const total = filtered.length;
            const avg = total > 0 ? (filtered.reduce((sum, s) => sum + (parseFloat(s.total_score) || 0), 0) / total).toFixed(1) : '0.0';
            const passCount = filtered.filter(s => (parseFloat(s.total_score) || 0) >= 10).length;
            const passRate = total > 0 ? ((passCount / total) * 100).toFixed(1) : '0';
            const maxScore = total > 0 ? Math.max(...filtered.map(s => parseFloat(s.total_score) || 0)).toFixed(1) : '0.0';

            document.getElementById('evalStatTotal').innerText = total;
            document.getElementById('evalStatAvg').innerText = avg + ' / 20';
            document.getElementById('evalStatPass').innerText = passRate + '%';
            document.getElementById('evalStatMax').innerText = maxScore + ' / 20';

            const tbody = document.getElementById('evaluationsTableBody');
            if (!tbody) return;

            if (filtered.length === 0) {
                tbody.innerHTML = '<tr><td colspan="9" style="text-align:center; padding:24px; color:var(--text-light);">No hay exámenes entregados para el filtro seleccionado.</td></tr>';
                return;
            }

            tbody.innerHTML = filtered.map(s => {
                const isApproved = (parseFloat(s.total_score) || 0) >= 10;
                const statusBadge = isApproved 
                    ? `<span style="display:inline-block; padding:3px 10px; border-radius:9999px; background:#ecfdf5; color:#047857; font-size:11px; font-weight:800; border:1px solid #a7f3d0;">APROBADO</span>`
                    : `<span style="display:inline-block; padding:3px 10px; border-radius:9999px; background:#fef2f2; color:#b91c1c; font-size:11px; font-weight:800; border:1px solid #fecaca;">REPROBADO</span>`;

                const mins = Math.floor((s.time_spent_seconds || 0) / 60);
                const secs = (s.time_spent_seconds || 0) % 60;
                const timeStr = `${mins}m ${secs}s`;

                const isTelecom = s.evaluation_code === 'EVAL-U4-TELECOM';
                const evalBadge = isTelecom
                    ? `<span style="display:inline-block; padding:3px 8px; border-radius:6px; background:#fef3c7; color:#92400e; font-size:10.5px; font-weight:800; border:1px solid #fde68a;">📡 U4 TELECOM</span>`
                    : `<span style="display:inline-block; padding:3px 8px; border-radius:6px; background:#e0f2fe; color:#0369a1; font-size:10.5px; font-weight:800; border:1px solid #bae6fd;">📋 SEMANA 1</span>`;

                const d1Label = isTelecom ? 'Etapa 1' : 'Día 1';
                const d2Label = isTelecom ? 'Etapa 2' : 'Día 2';
                const inspectBtnText = isTelecom ? '🔍 Respuestas' : '🔍 BCF';

                return `
                    <tr>
                        <td><strong style="color:var(--navy-primary); font-size:13.5px;">${escapeHtml(s.student_name || 'Sin Nombre')}</strong></td>
                        <td style="font-size:12px; color:var(--text-muted);">${escapeHtml(s.student_email || '')}</td>
                        <td>${evalBadge}</td>
                        <td style="font-family:var(--font-mono); font-weight:700; color:var(--blue-accent);">${s.score_day1} / 10 <span style="font-size:10px; color:var(--text-light); font-weight:400;">(${d1Label})</span></td>
                        <td style="font-family:var(--font-mono); font-weight:700; color:var(--emerald);">${s.score_day2} / 10 <span style="font-size:10px; color:var(--text-light); font-weight:400;">(${d2Label})</span></td>
                        <td><strong style="font-family:var(--font-mono); font-size:14px; color:var(--navy-primary);">${s.total_score} / 20</strong></td>
                        <td>${statusBadge}</td>
                        <td style="font-size:12px; font-family:var(--font-mono);">${timeStr}</td>
                        <td>
                            <div style="display:flex; gap:6px;">
                                <button type="button" class="btn-action-admin" style="padding:4px 8px; font-size:11.5px; background:#e0f2fe; color:#0369a1; border-color:#bae6fd;" onclick="showBcfTicketModal(${s.id})">
                                    ${inspectBtnText}
                                </button>
                                <button type="button" class="btn-action-admin" style="padding:4px 8px; font-size:11.5px; background:#f1f5f9; color:var(--text-main);" onclick="openGradeEvalModal(${s.id})">
                                    ✏️ Nota
                                </button>
                            </div>
                        </td>
                    </tr>
                `;
            }).join('');
        }

        function showBcfTicketModal(submissionId) {
            const sub = currentEvalSubmissions.find(s => s.id === submissionId);
            if (!sub) return;

            document.getElementById('bcfModalAuthor').innerText = `${sub.student_name} (${sub.student_email})`;
            if (sub.evaluation_code === 'EVAL-U4-TELECOM') {
                let ansDetails = '';
                if (sub.answers) {
                    ansDetails = `=== EXPEDIENTE TÉCNICO DE EVALUACIÓN U4: TELECOMUNICACIONES ===
` +
                                 `Emplazamiento: ${sub.answers.location || 'Karuay-Waikirimá'}
` +
                                 `Calificación: ${sub.total_score} / 20 pts
` +
                                 `Costo Estimado: $${(sub.answers.total_cost || 0).toLocaleString()} USD
` +
                                 `Plazo CPM: ${sub.answers.total_days || 0} días
` +
                                 `Pico Personal: ${sub.answers.peak_workers || 0} obreros (Campamento)
` +
                                 `Autonomía Baterías: ${sub.answers.backup_hours || 0} horas

` +
                                 `--- ELECCIONES SELECCIONADAS ---
` +
                                 JSON.stringify(sub.answers, null, 2);
                } else {
                    ansDetails = sub.bcf_ticket_code || 'Entrega registrada';
                }
                document.getElementById('bcfModalCode').innerText = ansDetails;
            } else {
                document.getElementById('bcfModalCode').innerText = sub.bcf_ticket_code || '<!-- No se generó código BCF en esta entrega -->';
            }
            document.getElementById('bcfInspectorModal').style.display = 'flex';
        }

        function closeBcfInspectorModal() {
            document.getElementById('bcfInspectorModal').style.display = 'none';
        }

        function openGradeEvalModal(submissionId) {
            const sub = currentEvalSubmissions.find(s => s.id === submissionId);
            if (!sub) return;

            document.getElementById('gradeEvalId').value = sub.id;
            document.getElementById('gradeEvalStudentTitle').innerText = `${sub.student_name} · ${sub.student_email}`;
            document.getElementById('gradeEvalDay1').value = sub.score_day1;
            document.getElementById('gradeEvalDay2').value = sub.score_day2;
            document.getElementById('gradeEvalStatus').value = sub.status || 'aprobado';
            document.getElementById('gradeEvalFeedback').value = sub.instructor_feedback || '';
            recalcEvalModalTotal();
            document.getElementById('gradeEvalModal').style.display = 'flex';
        }

        function closeGradeEvalModal() {
            document.getElementById('gradeEvalModal').style.display = 'none';
        }

        function recalcEvalModalTotal() {
            const s1 = parseFloat(document.getElementById('gradeEvalDay1').value) || 0;
            const s2 = parseFloat(document.getElementById('gradeEvalDay2').value) || 0;
            const total = Math.min(20, Math.max(0, s1 + s2));
            document.getElementById('gradeEvalTotalDisplay').innerText = total.toFixed(1) + ' / 20 Pts';
        }

        async function submitEvaluationGradeChange() {
            const id = document.getElementById('gradeEvalId').value;
            const s1 = parseFloat(document.getElementById('gradeEvalDay1').value) || 0;
            const s2 = parseFloat(document.getElementById('gradeEvalDay2').value) || 0;
            const status = document.getElementById('gradeEvalStatus').value;
            const feedback = document.getElementById('gradeEvalFeedback').value;

            try {
                const res = await fetch('/ugma-gerencia-obras/api/evaluacion/grade', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
                    body: JSON.stringify({
                        id: parseInt(id),
                        score_day1: s1,
                        score_day2: s2,
                        status: status,
                        instructor_feedback: feedback
                    })
                });
                const data = await res.json();
                if (data.success) {
                    alert(`Calificación actualizada exitosamente para ${data.student_name} (${data.total_score} Pts).`);
                    closeGradeEvalModal();
                    loadEvaluations();
                } else {
                    alert('Error al actualizar calificación.');
                }
            } catch (err) {
                alert('Error de conexión al guardar nota.');
            }
        }

        async function resetEvaluationSubmissions() {
            if (!confirm('¿Estás seguro de reiniciar todas las entregas de examen? Esta acción eliminará los exámenes registrados de la base de datos y restablecerá las métricas a cero.')) {
                return;
            }

            try {
                const res = await fetch('/ugma-gerencia-obras/api/evaluacion/reset', {
                    method: 'POST',
                    headers: { 'Accept': 'application/json', 'Content-Type': 'application/json' }
                });
                const data = await res.json();
                if (data.success) {
                    alert('Todas las entregas de examen han sido reiniciadas exitosamente.');
                    await loadEvaluations();
                } else {
                    alert('Inconveniente al reiniciar exámenes: ' + (data.message || 'Error en servidor'));
                }
            } catch(err) {
                console.error('Error al reiniciar evaluaciones:', err);
                alert('Error de conexión al reiniciar exámenes.');
            }
        }

        // ==========================================
        // CONTROL DE HABILITACIÓN DE TARJETA EVALUACIÓN (ALUMNOS INSCRITOS)
        // ==========================================
        const EVAL_CARD_KEY = 'ugma_evaluacion_card_enabled';

        async function fetchEvaluationCardStatus() {
            let enabled = true;
            try {
                const res = await fetch('/ugma-gerencia-obras/api/evaluacion/card-status');
                if (res.ok) {
                    const data = await res.json();
                    enabled = !!data.enabled;
                } else {
                    const local = localStorage.getItem(EVAL_CARD_KEY);
                    enabled = local !== null ? local === 'true' : true;
                }
            } catch(e) {
                const local = localStorage.getItem(EVAL_CARD_KEY);
                enabled = local !== null ? local === 'true' : true;
            }

            localStorage.setItem(EVAL_CARD_KEY, enabled ? 'true' : 'false');
            renderEvaluationCardButtonState(enabled);
            return enabled;
        }

        function renderEvaluationCardButtonState(enabled) {
            const btn = document.getElementById('btnToggleEvaluationCard');
            const icon = document.getElementById('btnToggleEvaluationCardIcon');
            const text = document.getElementById('btnToggleEvaluationCardText');
            const notice = document.getElementById('evalCardStatusNotice');
            const noticeText = document.getElementById('evalCardStatusNoticeText');
            const dot = document.getElementById('evalCardStatusDot');

            if (enabled) {
                if (btn) {
                    btn.style.background = '#059669';
                    btn.style.color = '#ffffff';
                    btn.style.borderColor = '#047857';
                }
                if (icon) icon.innerText = '🟢';
                if (text) text.innerText = 'Tarjeta Habilitada para Alumnos (Click para Inhabilitar)';
                if (notice) {
                    notice.style.background = '#f0fdf4';
                    notice.style.borderColor = '#86efac';
                    notice.style.color = '#166534';
                }
                if (dot) {
                    dot.style.background = '#10b981';
                    dot.style.boxShadow = '0 0 8px rgba(16,185,129,0.5)';
                }
                if (noticeText) noticeText.innerText = 'Habilitada para estudiantes inscritos';
            } else {
                if (btn) {
                    btn.style.background = '#f1f5f9';
                    btn.style.color = '#334155';
                    btn.style.borderColor = '#cbd5e1';
                }
                if (icon) icon.innerText = '🔒';
                if (text) text.innerText = 'Habilitar Tarjeta a Estudiantes Inscritos';
                if (notice) {
                    notice.style.background = '#fef2f2';
                    notice.style.borderColor = '#fecaca';
                    notice.style.color = '#991b1b';
                }
                if (dot) {
                    dot.style.background = '#ef4444';
                    dot.style.boxShadow = '0 0 8px rgba(239,68,68,0.5)';
                }
                if (noticeText) noticeText.innerText = 'Inhabilitada / En preparación (Alumnos no pueden acceder)';
            }
        }

        async function toggleEvaluationCardStatus() {
            const current = localStorage.getItem(EVAL_CARD_KEY) === 'true';
            const newTarget = !current;

            try {
                const res = await fetch('/ugma-gerencia-obras/api/admin/toggle-eval-card', {
                    method: 'POST',
                    headers: { 'Accept': 'application/json', 'Content-Type': 'application/json' },
                    body: JSON.stringify({ enabled: newTarget })
                });
                const data = await res.json();
                const effective = data.success ? data.enabled : newTarget;

                localStorage.setItem(EVAL_CARD_KEY, effective ? 'true' : 'false');

                // Sincronizar también con el estado de locks en localStorage
                const locks = getLocksState();
                locks['evaluacion_dia_1_2'] = effective;
                localStorage.setItem(LOCKS_KEY, JSON.stringify(locks));
                loadLocksList();

                renderEvaluationCardButtonState(effective);

                alert(effective
                    ? '¡Tarjeta de Evaluación Oficial habilitada exitosamente para todos los estudiantes inscritos!'
                    : 'Tarjeta de Evaluación Oficial inhabilitada para los alumnos.');
            } catch(err) {
                console.error('Error al conmutar estado de tarjeta:', err);
                localStorage.setItem(EVAL_CARD_KEY, newTarget ? 'true' : 'false');
                renderEvaluationCardButtonState(newTarget);
                alert('Estado actualizado en navegador: ' + (newTarget ? 'Habilitada' : 'Inhabilitada'));
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            fetchEvaluationCardStatus();
        });
    </script>

</body>
</html>
