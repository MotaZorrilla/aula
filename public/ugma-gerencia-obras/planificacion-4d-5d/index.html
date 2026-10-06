<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planificación 4D y Control de Costos 5D (EVM) · Postgrado UGMA</title>

    <meta name="title" content="Planificación 4D y Control de Costos 5D (EVM) · Postgrado UGMA">
    <meta name="description" content="Simulación constructiva 4D, cubicaciones 5D y análisis de Valor Ganado (EVM: CPI, SPI, Curvas S) por el Ing. Héctor Mota.">
    <meta name="keywords" content="BIM 4D, BIM 5D, EVM, Valor Ganado, Curva S, Synchro Pro, UGMA, CPI, SPI, Héctor Mota">
    <meta name="author" content="Héctor Mota Zorrilla">
    <meta name="theme-color" content="#ffffff">

    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="shortcut icon" href="/favicon.ico">

    <!-- Fonts -->
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
            
            --emerald: #047857;
            --emerald-light: #d1fae5;
            --amber: #b45309;
            --amber-light: #fef3c7;
            --rose: #e11d48;
            --rose-light: #ffe4e6;

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
            transform: translateY(-2px scale(1.02));
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

        /* HEADER */
        .page-header {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 38px 36px;
            margin-bottom: 36px;
            box-shadow: var(--shadow-md);
            background-image: linear-gradient(135deg, rgba(241, 245, 249, 0.6) 0%, rgba(255, 255, 255, 1) 100%);
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

        /* CONTENT CARDS */
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

        /* SIMULATOR LAYOUT */
        .evm-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 24px;
            margin: 24px 0;
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
        .ctrl-group input {
            width: 100%;
            padding: 9px 12px;
            border-radius: 8px;
            border: 1px solid var(--border);
            font-family: var(--font-mono);
            font-size: 14px;
            background: #ffffff;
            color: var(--navy-primary);
        }
        .chart-box {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 20px;
            position: relative;
            height: 380px;
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
        }
        .kpi-label { font-size: 11px; font-weight: 700; color: var(--text-light); text-transform: uppercase; }
        .kpi-val { font-size: 20px; font-weight: 800; font-family: var(--font-mono); margin-top: 4px; }
        .kpi-sub { font-size: 11px; color: var(--text-muted); margin-top: 2px; }

        /* DIAGNOSIS BANNER */
        .diagnosis-box {
            padding: 16px 20px;
            border-radius: 12px;
            margin-top: 18px;
            display: flex;
            align-items: center;
            gap: 14px;
        }
        .diag-ok { background: var(--emerald-light); border: 1px solid #a7f3d0; color: #065f46; }
        .diag-warn { background: var(--amber-light); border: 1px solid #fde68a; color: #78350f; }
        .diag-bad { background: var(--rose-light); border: 1px solid #fecdd3; color: #9f1239; }

        /* CODE BLOCK */
        .code-block-academic {
            background: #0f172a;
            color: #f8fafc;
            border-radius: 12px;
            padding: 20px;
            font-family: var(--font-mono);
            font-size: 13px;
            overflow-x: auto;
            margin: 20px 0;
            border: 1px solid #1e293b;
        }
        .code-block-academic pre { font-family: inherit; }

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
            <a href="https://motazorrilla.com/" target="_blank" rel="noopener noreferrer" title="Volver al Portal Oficial motazorrilla.com" class="brand-logo-link">
                <img src="/assets/img/logo-mota-zorrilla.jpg" alt="MotaZorrilla Logo Oficial" class="brand-full-logo">
            </a>
        </div>

        <!-- HEADER -->
        <div class="page-header">
            <div class="badge-row">
                <span class="badge">Eje Temático 03 · 5 Horas</span>
                <span class="badge badge-academic">Control de Gestión &amp; EVM · Postgrado UGMA</span>
            </div>
            <h1 class="page-title">Planificación Cuatridimensional (4D) y Control Presupuestario (5D)</h1>
            <p class="page-subtitle">
                Integración de cronogramas y estructuras de desglose de trabajo (EDT/WBS) con la maqueta paramétrica. Análisis analítico mediante la Metodología de Valor Ganado (Earned Value Management - EVM), Curvas S dinámicas y líneas de balance.
            </p>
        </div>

        <!-- SIMULATOR SECTION -->
        <div class="content-card">
            <h2 class="section-title">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--navy-primary)" stroke-width="2.2"><path d="M3 3v18h18"></path><path d="M18.7 8l-5.1 5.2-2.8-2.7L7 14.3"></path></svg>
                1. Simulador Gráfico de Curvas S y Diagnóstico de Valor Ganado (EVM)
            </h2>
            <p class="academic-p">
                Ajusta las variables contractuales de la obra en el panel de control. El motor calculará dinámicamente las Curvas S de <strong>Valor Planificado (PV)</strong>, <strong>Valor Ganado (EV)</strong> y <strong>Costo Real (AC)</strong>, así como los índices de desempeño <strong>CPI</strong> (Cost Performance Index) y <strong>SPI</strong> (Schedule Performance Index):
            </p>

            <div class="evm-grid">
                <div class="evm-inputs">
                    <div class="ctrl-group">
                        <label for="bacInput">Presupuesto al Cierre (BAC en USD $):</label>
                        <input type="number" id="bacInput" value="1200000" step="50000" oninput="updateEVM()">
                    </div>
                    <div class="ctrl-group">
                        <label for="plannedProgress">Avance Físico Planificado a la Fecha (%):</label>
                        <input type="range" id="plannedProgress" min="10" max="90" value="50" oninput="updateEVM()">
                        <span id="plannedProgVal" style="font-family:var(--font-mono); font-size:12px; font-weight:700; color:var(--blue-accent);">50% Planificado</span>
                    </div>
                    <div class="ctrl-group">
                        <label for="realProgress">Avance Físico Real Ejecutado (%):</label>
                        <input type="range" id="realProgress" min="10" max="90" value="42" oninput="updateEVM()">
                        <span id="realProgVal" style="font-family:var(--font-mono); font-size:12px; font-weight:700; color:var(--emerald);">42% Ejecutado Real</span>
                    </div>
                    <div class="ctrl-group">
                        <label for="acInput">Costo Real Incurrido (AC en USD $):</label>
                        <input type="number" id="acInput" value="560000" step="20000" oninput="updateEVM()">
                    </div>
                </div>

                <div class="chart-box">
                    <canvas id="evmCanvas"></canvas>
                </div>
            </div>

            <!-- KPIS -->
            <div class="kpi-row">
                <div class="kpi-card">
                    <div class="kpi-label">Valor Planificado (PV)</div>
                    <div class="kpi-val" id="pvVal" style="color:var(--blue-accent);">$600,000</div>
                    <div class="kpi-sub">Trabajo programado</div>
                </div>
                <div class="kpi-card">
                    <div class="kpi-label">Valor Ganado (EV)</div>
                    <div class="kpi-val" id="evVal" style="color:var(--emerald);">$504,000</div>
                    <div class="kpi-sub">Trabajo completado</div>
                </div>
                <div class="kpi-card">
                    <div class="kpi-label">Índice Costo (CPI)</div>
                    <div class="kpi-val" id="cpiVal" style="color:#b45309;">0.90</div>
                    <div class="kpi-sub">EV / AC</div>
                </div>
                <div class="kpi-card">
                    <div class="kpi-label">Índice Cronograma (SPI)</div>
                    <div class="kpi-val" id="spiVal" style="color:#e11d48;">0.84</div>
                    <div class="kpi-sub">EV / PV</div>
                </div>
                <div class="kpi-card">
                    <div class="kpi-label">Costo Proyectado (EAC)</div>
                    <div class="kpi-val" id="eacVal" style="color:var(--navy-primary);">$1,333,333</div>
                    <div class="kpi-sub">Estimado al término</div>
                </div>
            </div>

            <!-- DIAGNOSIS -->
            <div id="diagBox" class="diagnosis-box diag-bad">
                <div style="font-size:24px;">⚠️</div>
                <div>
                    <strong id="diagTitle">Alerta Gerencial: Proyecto con Retraso y Sobrecosto</strong>
                    <div style="font-size:13.5px;" id="diagDesc">
                        El proyecto gasta más de lo presupuestado (CPI: 0.90 &lt; 1.0) y avanza a menor ritmo del previsto (SPI: 0.84 &lt; 1.0). Se recomienda aplicar compresión de cronograma (Fast-Tracking) y auditoría de desperdicios en obra.
                    </div>
                </div>
            </div>
        </div>

        <!-- THEORY SECTION -->
        <div class="content-card">
            <h2 class="section-title">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--navy-primary)" stroke-width="2.2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                2. Fundamentos de Gestión 4D/5D en la Práctica Profesional
            </h2>
            <p class="academic-p">
                <strong>BIM 4D (Tiempo):</strong> La vinculación de los objetos paramétricos con la Estructura de Desglose de Trabajo (EDT/WBS) en herramientas como <i>Bentley Synchro Pro</i> o <i>Navisworks TimeLiner</i> permite simular visualmente la logística de grúas, acopios de materiales y frentes de trabajo, eliminando cuellos de botella antes del inicio físico de actividades.
            </p>
            <p class="academic-p">
                <strong>BIM 5D (Costo):</strong> La extracción automatizada de cómputos métricos (QTO) vincula cada elemento con la base de datos de Análisis de Precios Unitarios (APU). Cualquier modificación en el diseño actualiza instantáneamente el presupuesto contractual, eliminando las discrepancias entre planos y hojas de cubicación manuales.
            </p>
        </div>

        <!-- CODE SECTION -->
        <div class="content-card">
            <h2 class="section-title">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--navy-primary)" stroke-width="2.2"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                3. Script Python: Cálculo Automatizado de Métricas EVM
            </h2>
            <p class="academic-p">
                El siguiente fragmento de código procesa datos de avance semanal y genera las proyecciones de costo al cierre (EAC):
            </p>

            <div class="code-block-academic">
<pre><code class="language-python">def calcular_evm(bac, avance_planificado_pct, avance_real_pct, costo_real):
    pv = bac * (avance_planificado_pct / 100.0)
    ev = bac * (avance_real_pct / 100.0)
    ac = costo_real

    cv = ev - ac  # Variación de Costo
    sv = ev - pv  # Variación de Cronograma
    
    cpi = ev / ac if ac > 0 else 1.0
    spi = ev / pv if pv > 0 else 1.0
    
    eac = bac / cpi if cpi > 0 else bac
    vac = bac - eac  # Variación a la Conclusión

    return {
        "PV": pv, "EV": ev, "AC": ac,
        "CPI": round(cpi, 2), "SPI": round(spi, 2),
        "EAC": round(eac, 2), "VAC": round(vac, 2)
    }

# Ejemplo para obra de $1.2M USD
resultado = calcular_evm(1200000, 50, 42, 560000)
print(f"Diagnóstico: CPI={resultado['CPI']} | SPI={resultado['SPI']} | Proyección EAC=${resultado['EAC']:,.2f}")
</code></pre>
            </div>
        </div>

        <!-- CTA FOOTER -->
        <div class="page-footer-action">
            <h3 style="font-size:22px; font-weight:800; color:var(--navy-primary); margin-bottom:8px;">
                ¿Deseas implementar modelos de control 4D/5D en tus obras?
            </h3>
            <p style="font-size:14.5px; color:var(--text-muted); margin-bottom:20px;">
                Contacta directamente al Ing. Héctor Mota para consultorías en Synchro Pro, Navisworks y control presupuestario EVM.
            </p>
            <a href="https://wa.me/584148873615?text=Hola%20Ing.%20H%C3%A9ctor%20Mota,%20deseo%20m%C3%A1s%20detalles%20sobre%20el%20m%C3%B3dulo%204D/5D%20EVM%20del%20Diplomado%20UGMA..." target="_blank" rel="noopener noreferrer" class="btn-action-green">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Contactar al Facilitador vía WhatsApp (0414-8873615)
            </a>
        </div>

    </div>

    <!-- SCRIPT CHART.JS EVM -->
    <script>
        let evmChart = null;

        function initEVMChart() {
            const ctx = document.getElementById('evmCanvas').getContext('2d');
            const weeks = ['Sem 1', 'Sem 2', 'Sem 3', 'Sem 4', 'Sem 5', 'Sem 6', 'Sem 7', 'Sem 8', 'Sem 9', 'Sem 10'];

            evmChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: weeks,
                    datasets: [
                        {
                            label: 'Valor Planificado (PV)',
                            data: [50, 120, 220, 360, 500, 680, 850, 1000, 1120, 1200],
                            borderColor: '#0284c7',
                            backgroundColor: 'transparent',
                            borderWidth: 2.5,
                            tension: 0.3,
                            pointRadius: 4
                        },
                        {
                            label: 'Valor Ganado (EV)',
                            data: [40, 100, 180, 300, 420, null, null, null, null, null],
                            borderColor: '#047857',
                            backgroundColor: 'rgba(4, 120, 87, 0.08)',
                            borderWidth: 3,
                            tension: 0.3,
                            pointRadius: 5,
                            fill: true
                        },
                        {
                            label: 'Costo Real (AC)',
                            data: [45, 115, 210, 380, 560, null, null, null, null, null],
                            borderColor: '#e11d48',
                            backgroundColor: 'transparent',
                            borderWidth: 2.5,
                            borderDash: [5, 5],
                            tension: 0.3,
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
                        legend: { position: 'top', labels: { color: '#0f172a' } }
                    }
                }
            });
        }

        function updateEVM() {
            const bac = parseFloat(document.getElementById('bacInput').value) || 0;
            const plannedProg = parseFloat(document.getElementById('plannedProgress').value) || 0;
            const realProg = parseFloat(document.getElementById('realProgress').value) || 0;
            const ac = parseFloat(document.getElementById('acInput').value) || 0;

            document.getElementById('plannedProgVal').innerText = plannedProg + '% Planificado';
            document.getElementById('realProgVal').innerText = realProg + '% Ejecutado Real';

            const pv = bac * (plannedProg / 100);
            const ev = bac * (realProg / 100);

            const cpi = ac > 0 ? (ev / ac) : 1.0;
            const spi = pv > 0 ? (ev / pv) : 1.0;
            const eac = cpi > 0 ? (bac / cpi) : bac;

            document.getElementById('pvVal').innerText = '$' + Math.round(pv).toLocaleString('en-US');
            document.getElementById('evVal').innerText = '$' + Math.round(ev).toLocaleString('en-US');
            document.getElementById('cpiVal').innerText = cpi.toFixed(2);
            document.getElementById('spiVal').innerText = spi.toFixed(2);
            document.getElementById('eacVal').innerText = '$' + Math.round(eac).toLocaleString('en-US');

            const diagBox = document.getElementById('diagBox');
            const diagTitle = document.getElementById('diagTitle');
            const diagDesc = document.getElementById('diagDesc');

            if (cpi >= 1.0 && spi >= 1.0) {
                diagBox.className = 'diagnosis-box diag-ok';
                diagTitle.innerText = 'Proyecto Saludable: En Tiempo y por Debajo del Presupuesto';
                diagDesc.innerText = `El proyecto avanza eficientemente con CPI (${cpi.toFixed(2)}) >= 1.0 y SPI (${spi.toFixed(2)}) >= 1.0. El costo final proyectado representa ahorros financieros.`;
            } else if (cpi >= 1.0 && spi < 1.0) {
                diagBox.className = 'diagnosis-box diag-warn';
                diagTitle.innerText = 'Precaución: Proyecto con Retraso pero con Ahorro de Costo';
                diagDesc.innerText = `El costo está bajo control (CPI: ${cpi.toFixed(2)}), pero existe desfase en el cronograma (SPI: ${spi.toFixed(2)}). Se requiere reforzar cuadrillas clave.`;
            } else if (cpi < 1.0 && spi >= 1.0) {
                diagBox.className = 'diagnosis-box diag-warn';
                diagTitle.innerText = 'Precaución: Proyecto en Tiempo pero con Sobrecosto';
                diagDesc.innerText = `El ritmo de avance físico se cumple (SPI: ${spi.toFixed(2)}), pero se están devengando costos por encima del presupuesto (CPI: ${cpi.toFixed(2)}).`;
            } else {
                diagBox.className = 'diagnosis-box diag-bad';
                diagTitle.innerText = 'Alerta Gerencial: Proyecto con Retraso y Sobrecosto Crítico';
                diagDesc.innerText = `Se gasta más de lo presupuestado (CPI: ${cpi.toFixed(2)}) y se avanza a menor ritmo (SPI: ${spi.toFixed(2)}). Proyección de sobrecosto al cierre: +$${Math.round(eac - bac).toLocaleString('en-US')}.`;
            }
        }

        window.addEventListener('DOMContentLoaded', () => {
            initEVMChart();
            updateEVM();
        });
    </script>
</body>
</html>
