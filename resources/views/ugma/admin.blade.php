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
            <div style="display:flex; gap:10px; border-bottom:2px solid var(--border); margin-bottom:24px; overflow-x:auto;">
                <button type="button" id="tabAdminStudents" class="tab-btn-admin active" onclick="switchAdminTab('students')">
                    👥 Alumnos Inscritos (<span id="studentsCountBadge">0</span>)
                </button>
                <button type="button" id="tabAdminLocks" class="tab-btn-admin" onclick="switchAdminTab('locks')">
                    🔒 Desbloqueo de Materiales
                </button>
                <button type="button" id="tabAdminPoll" class="tab-btn-admin" onclick="switchAdminTab('poll')">
                    ⚡ Dilemas War Room (En Vivo)
                </button>
                <button type="button" id="tabAdminGrades" class="tab-btn-admin" onclick="switchAdminTab('grades')">
                    🎯 Rúbrica y Calificaciones (0-20 pts)
                </button>
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
                            <button type="button" class="btn-auth-action" style="background:#f1f5f9; color:var(--navy-primary); border:1px solid var(--border);" onclick="resetStudentsDemo()">
                                <span>🔄</span> Restaurar Cátedra
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


        const ADMIN_SESSION_KEY = 'ugma_admin_session';
        const GRADES_KEY = 'ugma_student_grades';

        const DEFAULT_STUDENTS = [
            { name: 'Ing. Carlos Mendoza', email: 'carlos.mendoza@alumnos.ugma.edu.ve', ci: 'V-20.123.456 (CIV 214.502)', role: 'Ing. Civil · Alumno UGMA', date: '18/10/2026' },
            { name: 'Arq. Valentina Silva', email: 'valentina.silva@alumnos.ugma.edu.ve', ci: 'V-22.789.012 (CAV 8.910)', role: 'Arquitecta · Alumna UGMA', date: '19/10/2026' },
            { name: 'Ing. Roberto Briceño', email: 'roberto.briceno@alumnos.ugma.edu.ve', ci: 'V-18.456.789 (CIV 198.320)', role: 'Ing. de Costos · Alumno UGMA', date: '19/10/2026' },
            { name: 'Ing. María Elena Salazar', email: 'maria.salazar@alumnos.ugma.edu.ve', ci: 'V-21.345.678 (CIV 220.140)', role: 'Ing. Inspector · Alumna UGMA', date: '20/10/2026' }
        ];

        const COURSE_MODULES = [
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

        function resetStudentsDemo() {
            localStorage.setItem(STUDENTS_KEY, JSON.stringify(DEFAULT_STUDENTS));
            loadStudentsTable();
            populateStudentSelect();
            alert('Listado restaurado con los alumnos inscritos de cátedra.');
        }

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
                tbody.innerHTML = '<tr><td colspan="8" style="text-align:center; color:var(--text-light); padding:16px;">No hay calificaciones asentadas aún.</td></tr>';
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
            document.getElementById('tabAdminStudents').classList.remove('active');
            document.getElementById('tabAdminLocks').classList.remove('active');
            document.getElementById('tabAdminPoll').classList.remove('active');
            document.getElementById('tabAdminGrades').classList.remove('active');

            document.getElementById('adminTabContentStudents').style.display = 'none';
            document.getElementById('adminTabContentLocks').style.display = 'none';
            document.getElementById('adminTabContentPoll').style.display = 'none';
            document.getElementById('adminTabContentGrades').style.display = 'none';

            if (tab === 'students') {
                document.getElementById('tabAdminStudents').classList.add('active');
                document.getElementById('adminTabContentStudents').style.display = 'block';
            } else if (tab === 'locks') {
                document.getElementById('tabAdminLocks').classList.add('active');
                document.getElementById('adminTabContentLocks').style.display = 'block';
            } else if (tab === 'poll') {
                document.getElementById('tabAdminPoll').classList.add('active');
                document.getElementById('adminTabContentPoll').style.display = 'block';
            } else if (tab === 'grades') {
                document.getElementById('tabAdminGrades').classList.add('active');
                document.getElementById('adminTabContentGrades').style.display = 'block';
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            renderAdminView();
        });
    </script>
</body>
</html>
