<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluación Práctica Integrada: Semana 1 (Día 1 y 2) · Postgrado UGMA</title>
    <meta name="description" content="Módulo de Evaluación Práctica Interactiva en openBIM ISO 19650, Curva MacLeamy, Clash Detection 3D y Generador de Tickets BCF 3.0. Diplomado en Gerencia de Obras UGMA.">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">

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
            --emerald: #047857;
            --emerald-light: #d1fae5;
            --amber: #b45309;
            --amber-light: #fef3c7;
            --rose: #be123c;
            --rose-light: #ffe4e6;
            --font-sans: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
            --font-mono: 'JetBrains Mono', monospace;
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.07);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.08);
        }

        * { margin:0; padding:0; box-sizing:border-box; font-family: var(--font-sans); }
        body { background: var(--bg); color: var(--text-main); min-height: 100vh; padding: 24px 16px 80px; line-height: 1.6; }
        .container { max-width: 1040px; margin: 0 auto; }
        .academic-p { text-indent: 2.2em; text-align: justify; margin-bottom: 12px; }

        /* HEADER NAV */
        .top-nav { display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px; padding-bottom: 16px; border-bottom: 1px solid var(--border); flex-wrap: wrap; gap: 12px; }
        .back-link { display: inline-flex; align-items: center; gap: 8px; color: var(--navy-primary); text-decoration: none; font-size: 13.5px; font-weight: 700; background: #ffffff; padding: 8px 16px; border-radius: 9999px; border: 1px solid var(--border); box-shadow: var(--shadow-sm); }
        .badge-live { display: inline-flex; align-items: center; gap: 6px; padding: 6px 14px; border-radius: 9999px; background: #ecfdf5; color: var(--emerald); font-size: 12px; font-weight: 800; border: 1px solid #a7f3d0; text-transform: uppercase; letter-spacing: 0.05em; }

        /* HERO CARD */
        .hero-banner { background: linear-gradient(135deg, var(--navy-dark) 0%, var(--navy-primary) 100%); color: #ffffff; padding: 32px 28px; border-radius: 20px; margin-bottom: 28px; box-shadow: var(--shadow-lg); position: relative; overflow: hidden; }
        .hero-banner::after { content: ''; position: absolute; top: -50%; right: -20%; width: 360px; height: 360px; background: radial-gradient(circle, rgba(2,132,199,0.2) 0%, transparent 70%); border-radius: 50%; pointer-events: none; }
        .hero-subtitle { font-size: 12px; font-weight: 800; color: #38bdf8; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 8px; }
        .hero-title { font-size: 28px; font-weight: 800; line-height: 1.25; margin-bottom: 12px; letter-spacing: -0.02em; }
        .hero-desc { font-size: 14.5px; color: #cbd5e1; max-width: 820px; margin-bottom: 18px; }
        .hero-meta { display: flex; flex-wrap: wrap; gap: 14px; font-size: 13px; color: #94a3b8; font-weight: 600; }
        .hero-meta span { display: inline-flex; align-items: center; gap: 6px; }

        /* STUDENT IDENTIFICATION BAR */
        .identity-bar { background: var(--surface); border: 1px solid var(--border); border-radius: 16px; padding: 20px 24px; margin-bottom: 28px; box-shadow: var(--shadow-sm); display: grid; grid-template-columns: 1fr 1fr auto; gap: 16px; align-items: center; }
        .input-group label { display: block; font-size: 12px; font-weight: 700; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 6px; }
        .input-group input { width: 100%; padding: 10px 14px; border: 1.5px solid var(--border); border-radius: 10px; font-size: 14px; font-weight: 600; color: var(--text-main); outline: none; transition: border-color 0.2s; }
        .input-group input:focus { border-color: var(--blue-accent); }
        .identity-timer { text-align: center; background: var(--surface-subtle); padding: 10px 18px; border-radius: 12px; border: 1px solid var(--border); }
        .timer-val { font-family: var(--font-mono); font-size: 20px; font-weight: 800; color: var(--navy-primary); }

        /* SECTION CARDS */
        .eval-section { background: var(--surface); border: 1px solid var(--border); border-radius: 18px; padding: 28px; margin-bottom: 28px; box-shadow: var(--shadow-sm); transition: transform 0.2s ease; }
        .section-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; padding-bottom: 14px; border-bottom: 1.5px solid var(--surface-subtle); flex-wrap: wrap; gap: 10px; }
        .section-tag { display: inline-flex; align-items: center; gap: 8px; font-size: 12px; font-weight: 800; text-transform: uppercase; letter-spacing: 0.05em; padding: 5px 12px; border-radius: 8px; }
        .tag-day1 { background: #e0f2fe; color: #0369a1; }
        .tag-day2 { background: #ede9fe; color: #6d28d9; }
        .section-score-badge { font-family: var(--font-mono); font-size: 13px; font-weight: 800; background: var(--surface-subtle); padding: 6px 14px; border-radius: 9999px; color: var(--navy-primary); border: 1px solid var(--border); }

        /* QUESTION BLOCKS */
        .question-box { background: #fafafa; border: 1px solid var(--border); border-radius: 14px; padding: 20px; margin-bottom: 20px; }
        .q-title { font-size: 15.5px; font-weight: 700; color: var(--navy-primary); margin-bottom: 10px; display: flex; align-items: flex-start; gap: 10px; }
        .q-number { background: var(--navy-surface); color: #ffffff; width: 24px; height: 24px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-size: 12px; font-weight: 800; flex-shrink: 0; }
        .q-desc { font-size: 13.5px; color: var(--text-muted); margin-bottom: 14px; }

        /* OPTIONS LIST */
        .options-grid { display: grid; gap: 10px; margin-top: 12px; }
        .option-label { display: flex; align-items: center; gap: 12px; padding: 12px 16px; background: var(--surface); border: 2px solid var(--border); border-radius: 12px; cursor: pointer; font-size: 13.5px; font-weight: 600; color: var(--text-main); transition: all 0.2s ease; }
        .option-label:hover { border-color: var(--blue-accent); background: #f0f9ff; }
        .option-label input[type="radio"] { accent-color: var(--blue-accent); width: 18px; height: 18px; }
        .option-label.selected { border-color: var(--blue-accent); background: #f0f9ff; }

        /* MACLEAMY CALCULATOR INTERACTIVE */
        .macleamy-sim { background: #ffffff; border: 1px solid #bfdbfe; border-radius: 14px; padding: 20px; margin-top: 12px; }
        .sim-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px; }
        .sim-col { background: var(--surface-subtle); padding: 16px; border-radius: 12px; border: 1px solid var(--border); }
        .sim-col-title { font-size: 12.5px; font-weight: 800; text-transform: uppercase; margin-bottom: 8px; color: var(--navy-primary); }
        .sim-amount { font-family: var(--font-mono); font-size: 22px; font-weight: 800; }
        .cost-low { color: var(--emerald); }
        .cost-high { color: var(--rose); }
        .sim-ratio-box { text-align: center; background: #f0fdf4; border: 1px solid #86efac; padding: 14px; border-radius: 12px; margin-bottom: 14px; }
        .ratio-num { font-size: 26px; font-weight: 900; color: var(--emerald); font-family: var(--font-mono); }

        /* BCF GENERATOR BOX */
        .bcf-builder-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; margin-top: 12px; }
        .bcf-inputs { display: flex; flex-direction: column; gap: 12px; }
        .bcf-field label { display: block; font-size: 11.5px; font-weight: 700; color: var(--text-muted); text-transform: uppercase; margin-bottom: 4px; }
        .bcf-field input, .bcf-field select, .bcf-field textarea { width: 100%; padding: 9px 12px; border: 1.5px solid var(--border); border-radius: 8px; font-size: 13px; font-weight: 600; outline: none; }
        .bcf-field input:focus, .bcf-field select:focus, .bcf-field textarea:focus { border-color: var(--blue-accent); }
        .bcf-preview-box { background: #0b132b; color: #f8fafc; border-radius: 12px; padding: 16px; font-family: var(--font-mono); font-size: 12px; overflow-x: auto; max-height: 310px; border: 1px solid #1e293b; line-height: 1.5; }
        .bcf-preview-box pre { margin: 0; white-space: pre-wrap; word-break: break-all; }

        /* SUBMIT ACTION BAR */
        .action-bar { background: var(--surface); border: 1px solid var(--border); border-radius: 18px; padding: 24px; box-shadow: var(--shadow-md); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px; margin-top: 32px; }
        .btn-submit { background: linear-gradient(135deg, #0284c7 0%, #0369a1 100%); color: #ffffff; border: none; padding: 14px 32px; border-radius: 12px; font-size: 15px; font-weight: 800; cursor: pointer; box-shadow: var(--shadow-md); transition: all 0.2s ease; display: inline-flex; align-items: center; gap: 10px; }
        .btn-submit:hover { transform: translateY(-2px); box-shadow: var(--shadow-lg); background: #0284c7; }
        .btn-submit:disabled { opacity: 0.6; cursor: not-allowed; transform: none; }

        /* RESULTS MODAL */
        .modal-overlay { position: fixed; inset: 0; background: rgba(15, 23, 42, 0.75); backdrop-filter: blur(4px); display: none; align-items: center; justify-content: center; z-index: 9999; padding: 20px; }
        .modal-card { background: #ffffff; border-radius: 20px; max-width: 580px; width: 100%; padding: 32px; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25); border: 1px solid var(--border); text-align: center; }
        .grade-circle { width: 100px; height: 100px; border-radius: 50%; background: #ecfdf5; border: 4px solid var(--emerald); color: var(--emerald); display: inline-flex; flex-direction: column; align-items: center; justify-content: center; font-size: 32px; font-weight: 900; font-family: var(--font-mono); margin-bottom: 18px; }

        @media (max-width: 768px) {
            .identity-bar { grid-template-columns: 1fr; }
            .sim-grid { grid-template-columns: 1fr; }
            .bcf-builder-grid { grid-template-columns: 1fr; }
            .action-bar { flex-direction: column; align-items: stretch; text-align: center; }
            .btn-submit { justify-content: center; width: 100%; }
        }
    </style>
</head>
<body>

<div class="container">
    <!-- TOP NAVIGATION -->
    <header class="top-nav">
        <a href="/ugma-gerencia-obras/" class="back-link">
            <span>←</span> Volver al Hub Principal UGMA
        </a>
        <div style="display:flex; align-items:center; gap:12px;">
            <span class="badge-live">● Semana 1 · Evaluación Oficial</span>
            <a href="/ugma-gerencia-obras/admin.html" style="font-size:13px; font-weight:700; color:var(--text-muted); text-decoration:none;">👨‍🏫 Panel Facilitador</a>
        </div>
    </header>

    <!-- HERO BANNER -->
    <div class="hero-banner">
        <div class="hero-subtitle">Universidad Nororiental Privada "Gran Mariscal de Ayacucho" · Postgrado</div>
        <h1 class="hero-title">Evaluación Práctica Integrada: Semana 1 (Día 1 y Día 2)</h1>
        <p class="hero-desc">
            Prueba de desempeño interactivo en modelado paramétrico openBIM ISO 19650, impacto de costos según la Curva de MacLeamy, detección de interferencias 3D (Hard vs Soft Clashes) y emisión formal de incidencias bajo el estándar buildingSMART BCF 3.0.
        </p>
        <div class="hero-meta">
            <span>📊 Escala: 0 a 20 Puntos (Vigesimal)</span>
            <span>⏱️ Tiempo Estimado: 25 - 35 minutos</span>
            <span>📜 Ponderación: 30% Cómputo Parcial</span>
            <span>⚖️ Blindaje: Art. 1637 Código Civil Venezolano</span>
        </div>
    </div>

    <!-- STUDENT IDENTITY BAR -->
    <div class="identity-bar">
        <div class="input-group">
            <label for="evalStudentName">Nombre y Apellido del Participante</label>
            <input type="text" id="evalStudentName" placeholder="Ej. Ing. Rafael Salazar" required>
        </div>
        <div class="input-group">
            <label for="evalStudentEmail">Correo Electrónico Institucional / Personal</label>
            <input type="email" id="evalStudentEmail" placeholder="alumno@ugma.edu.ve" required>
        </div>
        <div class="identity-timer">
            <div style="font-size:11px; font-weight:700; color:var(--text-light); text-transform:uppercase;">Tiempo en Evaluación</div>
            <div class="timer-val" id="evalTimer">00:00</div>
        </div>
    </div>

    <form id="evaluationForm" onsubmit="event.preventDefault(); submitEvaluation();">
        <!-- ========================================== -->
        <!-- SECCIÓN 1: DÍA 1 · OPENBIM & ISO 19650     -->
        <!-- ========================================== -->
        <section class="eval-section">
            <div class="section-header">
                <span class="section-tag tag-day1">📘 PARTE I · DÍA 1: INTRODUCCIÓN A BIM & ISO 19650</span>
                <span class="section-score-badge">10.0 PUNTOS MÁX.</span>
            </div>

            <!-- RETO 1: CDE CONTAINER TRANSITION -->
            <div class="question-box">
                <div class="q-title">
                    <span class="q-number">1</span>
                    <span>Transición de Contenedores de Información en el CDE (ISO 19650-2)</span>
                </div>
                <p class="q-desc academic-p">
                    Durante el seguimiento del proyecto Residencial Los Olivos, el equipo estructural ha completado el modelado paramétrico de las fundaciones continuas. Para que las disciplinas de instalaciones sanitarias y arquitectura puedan consultar el trazado sin alterar el archivo fuente, ¿hacia cuál estado de información debe transicionar el contenedor y bajo qué esquema de interoperabilidad debe compartirse formalmente?
                </p>
                <div class="options-grid">
                    <label class="option-label">
                        <input type="radio" name="day1_q1_cde_state" value="wip_to_shared_ifc" required>
                        <span>De <strong>WIP (Work in Progress)</strong> a <strong>Shared (Compartido)</strong>, exportado bajo esquema neutral <strong>buildingSMART IFC 4.3</strong> con pasarela de aprobación técnica.</span>
                    </label>
                    <label class="option-label">
                        <input type="radio" name="day1_q1_cde_state" value="wip_to_published_dwg">
                        <span>Directamente a <strong>Published (Publicado)</strong> en plano vectorial DWG 2D sin someter a validación de consorcio.</span>
                    </label>
                    <label class="option-label">
                        <input type="radio" name="day1_q1_cde_state" value="keep_wip_closed">
                        <span>Mantenerlo indefinidamente en <strong>WIP</strong> en el disco duro local del calculista y compartirlo por correo electrónico en formato propietario cerrado.</span>
                    </label>
                </div>
            </div>

            <!-- RETO 2: MACLEAMY COST RATIO SIMULATOR -->
            <div class="question-box">
                <div class="q-title">
                    <span class="q-number">2</span>
                    <span>Simulador Paramétrico de Impacto Económico · Curva de MacLeamy</span>
                </div>
                <p class="q-desc academic-p">
                    Interfiera un cambio de trazado de tubería de 6" que cruza una viga. Ajuste el escenario para comprobar la disparidad entre resolver la modificación en el gemelo digital en fase preliminar frente a demoler el elemento vaciado en obra:
                </p>

                <div class="macleamy-sim">
                    <div class="sim-grid">
                        <div class="sim-col">
                            <div class="sim-col-title">Fase 1: Detección en Gemelo Digital (Oficina Técnica)</div>
                            <div class="sim-amount cost-low">$87.50 USD</div>
                            <div style="font-size:12px; color:var(--text-light); margin-top:4px;">1.5 Horas Modelador BIM · Cero desperdicio en cancha</div>
                        </div>
                        <div class="sim-col">
                            <div class="sim-col-title">Fase 2: Detección en Faena (Vaciado en Sitio)</div>
                            <div class="sim-amount cost-high">$3,150.00 USD</div>
                            <div style="font-size:12px; color:var(--text-light); margin-top:4px;">Demolición $1,200 + Cuadrilla 3 días $1,950 + Parada de Concretera</div>
                        </div>
                    </div>

                    <div class="sim-ratio-box">
                        <div style="font-size:12px; font-weight:800; text-transform:uppercase; color:#166534; margin-bottom:4px;">Factor de Sobrecosto Evitado (Cost Escalation Ratio)</div>
                        <div class="ratio-num">36.0x</div>
                        <div style="font-size:12.5px; color:#15803d; font-weight:600;">Resolver en modelo antes de obra ahorra un 97.2% del costo de contingencia.</div>
                    </div>

                    <div style="margin-top:14px;">
                        <label style="font-size:12.5px; font-weight:700; color:var(--navy-primary); display:block; margin-bottom:6px;">
                            Indique el ratio multiplicador verificado y confirme la justificación técnica:
                        </label>
                        <select name="day1_q2_cost_ratio" id="macleamyRatioSelect" style="width:100%; padding:10px 14px; border:1.5px solid var(--border); border-radius:10px; font-weight:600;" required>
                            <option value="">Seleccione el ratio verificado...</option>
                            <option value="36.0">Ratio 36.0x (Ahorro superior al 95% resolviendo en etapas de diseño preliminar)</option>
                            <option value="1.0">Ratio 1.0x (El costo de modificación es idéntico en diseño que en obra)</option>
                            <option value="5.0">Ratio 5.0x (Impacto marginal según cronograma tradicional)</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- RETO 3: RESPONSABILIDAD DECENAL ART 1637 -->
            <div class="question-box">
                <div class="q-title">
                    <span class="q-number">3</span>
                    <span>Blindaje Legal del Inspector y Constructor (Art. 1637 Código Civil Venezolano)</span>
                </div>
                <p class="q-desc academic-p">
                    El Art. 1637 del Código Civil consagra la responsabilidad decenal (10 años) por ruina total o parcial proveniente de vicio de construcción o suelo. ¿Cuál es el protocolo CDE exigible al facilitador y al residente de obra para garantizar la trazabilidad inmutable de las aprobaciones geotécnicas?
                </p>
                <div class="options-grid">
                    <label class="option-label">
                        <input type="radio" name="day1_q3_ccv_protocol" value="registro_inmutable_cde" required>
                        <span>Registro de minutas, actas de ensayo de compresión y órdenes de servicio en el <strong>Contenedor Shared/Published con firma digital y hash criptográfico</strong> en la bitácora CDE.</span>
                    </label>
                    <label class="option-label">
                        <input type="radio" name="day1_q3_ccv_protocol" value="acuerdos_verbales">
                        <span>Acuerdos verbales en campo entre el residente y el maestro de obra sin asentar en planos record ("As-Built").</span>
                    </label>
                    <label class="option-label">
                        <input type="radio" name="day1_q3_ccv_protocol" value="caducidad_inmediata">
                        <span>Esperar la recepción provisional para desechar todas las bitácoras digitales ya que la responsabilidad caduca a las 48 horas.</span>
                    </label>
                </div>
            </div>
        </section>

        <!-- ========================================== -->
        <!-- SECCIÓN 2: DÍA 2 · CLASH & BCF 3.0 FAENA   -->
        <!-- ========================================== -->
        <section class="eval-section">
            <div class="section-header">
                <span class="section-tag tag-day2">📙 PARTE II · DÍA 2: CLASH DETECTION & BCF 3.0 EN CAMPO</span>
                <span class="section-score-badge">10.0 PUNTOS MÁX.</span>
            </div>

            <!-- RETO 4: HARD VS SOFT CLASH AUDIT -->
            <div class="question-box">
                <div class="q-title">
                    <span class="q-number">4</span>
                    <span>Auditoría de Interferencias Espaciales 3D (Hard vs Soft Clash)</span>
                </div>
                <p class="q-desc academic-p">
                    En la federación de modelos de la torre de postgrado, se detectan dos eventos en el piso técnico:
                    <strong>Evento A:</strong> Un ducto galvanizado de extracción de 400mm atraviesa longitudinalmente el alma de la viga perimetral VP-101.
                    <strong>Evento B:</strong> El mismo ducto pasa a solo 4 cm de una bandeja portacables de media tensión, violando la distancia mínima de 25 cm para disipación térmica y mantenimiento según COVENIN 200.
                </p>

                <div style="display:grid; grid-template-columns:1fr 1fr; gap:14px; margin-top:10px;">
                    <div style="background:#ffffff; border:1.5px solid var(--border); border-radius:12px; padding:14px;">
                        <label style="font-size:12px; font-weight:800; color:var(--rose); text-transform:uppercase; display:block; margin-bottom:6px;">Dictamen Evento A (Ducto vs Viga)</label>
                        <select name="day2_q4_clash1" style="width:100%; padding:8px 10px; border-radius:8px; border:1.5px solid var(--border); font-weight:600;" required>
                            <option value="">Clasifique Evento A...</option>
                            <option value="hard_clash">Hard Clash (Colisión Física Geométrica Crítica)</option>
                            <option value="soft_clash">Soft Clash (Infracción de Tolerancia)</option>
                            <option value="no_clash">Sin conflicto</option>
                        </select>
                    </div>

                    <div style="background:#ffffff; border:1.5px solid var(--border); border-radius:12px; padding:14px;">
                        <label style="font-size:12px; font-weight:800; color:var(--amber); text-transform:uppercase; display:block; margin-bottom:6px;">Dictamen Evento B (Ducto vs Bandeja)</label>
                        <select name="day2_q4_clash2" style="width:100%; padding:8px 10px; border-radius:8px; border:1.5px solid var(--border); font-weight:600;" required>
                            <option value="">Clasifique Evento B...</option>
                            <option value="soft_clash">Soft Clash / Clearance (Infracción de Espacio y Mantenimiento)</option>
                            <option value="hard_clash">Hard Clash (Intersección de Sólidos)</option>
                            <option value="no_clash">Sin conflicto</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- RETO 5: BCF 3.0 LIVE GENERATOR -->
            <div class="question-box">
                <div class="q-title">
                    <span class="q-number">5</span>
                    <span>Generador en Vivo de Incidencias BCF 3.0 (buildingSMART)</span>
                </div>
                <p class="q-desc academic-p">
                    Configure la incidencia para notificar formalmente al consorcio. Observe cómo el código BCF 3.0 estandarizado se compila en tiempo real en la consola adyacente:
                </p>

                <div class="bcf-builder-grid">
                    <div class="bcf-inputs">
                        <div class="bcf-field">
                            <label>Título de la Incidencia (Topic Title)</label>
                            <input type="text" id="bcfTitle" value="Interferencia Crítica: Ducto HVAC vs Viga VP-101" oninput="updateBcfPreview()">
                        </div>
                        <div class="bcf-field">
                            <label>Nivel de Prioridad (Priority)</label>
                            <select id="bcfPriority" onchange="updateBcfPreview()">
                                <option value="Critical">Critical (Paraliza Faena / Vaciado)</option>
                                <option value="Major">Major (Requiere Rediseño Menor)</option>
                                <option value="Normal">Normal</option>
                            </select>
                        </div>
                        <div class="bcf-field">
                            <label>Disciplina Asignada (Assigned To)</label>
                            <select id="bcfAssigned" onchange="updateBcfPreview()">
                                <option value="coordinador.estructural@ugma.edu.ve">Ingeniería Estructural (Calculista)</option>
                                <option value="coordinador.mep@ugma.edu.ve">Ingeniería Mecánica (HVAC)</option>
                                <option value="residente.obra@ugma.edu.ve">Ingeniero Residente en Sitio</option>
                            </select>
                        </div>
                        <div class="bcf-field">
                            <label>Orden Técnica Propuesta</label>
                            <textarea id="bcfComment" rows="2" oninput="updateBcfPreview()">Desviar trazado bajo fondo de viga con codo a 45° preservando gálibo mínimo de 2.40m.</textarea>
                        </div>
                    </div>

                    <div>
                        <div style="font-size:11.5px; font-weight:700; color:var(--text-light); text-transform:uppercase; margin-bottom:6px;">
                            💻 Payload BCF 3.0 Generado (openBIM XML/JSON)
                        </div>
                        <div class="bcf-preview-box">
                            <pre id="bcfCodeOutput">Generando estructura BCF 3.0...</pre>
                        </div>
                        <input type="hidden" name="bcf_ticket_code" id="bcfTicketHidden">
                    </div>
                </div>
            </div>

            <!-- RETO 6: LEAN LOOKAHEAD PLANNING -->
            <div class="question-box">
                <div class="q-title">
                    <span class="q-number">6</span>
                    <span>Coordinación en Faena bajo Principios Lean Construction (Last Planner System)</span>
                </div>
                <p class="q-desc academic-p">
                    Para que una colisión resuelta en oficina técnica no provoque detención de cuadrillas de cabilleros ni sobrecostos por tiempos muertos, ¿con cuánta anticipación debe liberarse el paquete de trabajo en el plan intermedio (Lookahead Planning)?
                </p>
                <div class="options-grid">
                    <label class="option-label">
                        <input type="radio" name="day2_q6_lean_plan" value="lookahead_3_semanas" required>
                        <span>En la ventana de <strong>3 a 6 Semanas (Lookahead Plan)</strong>, verificando que las restricciones de ingeniería, permisología y materiales estén 100% levantadas antes del Plan Semanal.</span>
                    </label>
                    <label class="option-label">
                        <input type="radio" name="day2_q6_lean_plan" value="el_mismo_dia">
                        <span>El mismo día del vaciado a las 06:00 AM improvisando la solución con la cuadrilla.</span>
                    </label>
                    <label class="option-label">
                        <input type="radio" name="day2_q6_lean_plan" value="sin_anticipacion">
                        <span>No hace falta planificar con anticipación porque el contrato de obra siempre contempla costos imprevistos sin límite.</span>
                    </label>
                </div>
            </div>
        </section>

        <!-- SUBMIT BAR -->
        <div class="action-bar">
            <div>
                <div style="font-size:16px; font-weight:800; color:var(--navy-primary);">¿Listo para Formalizar la Entrega?</div>
                <div style="font-size:13px; color:var(--text-light);">Tu evaluación quedará registrada con fecha, hora y huella técnica en el panel del facilitador.</div>
            </div>
            <button type="submit" class="btn-submit" id="btnSubmitEval">
                <span>🚀 Formalizar Entrega de Evaluación</span>
            </button>
        </div>
    </form>
</div>

<!-- MODAL RESULTADOS -->
<div class="modal-overlay" id="evalModal">
    <div class="modal-card">
        <div class="grade-circle" id="modalGrade">20</div>
        <h2 style="font-size:24px; font-weight:800; color:var(--navy-primary); margin-bottom:8px;" id="modalVerdict">¡Excelente Desempeño!</h2>
        <p style="font-size:14px; color:var(--text-muted); margin-bottom:20px;" id="modalMessage">
            Tu evaluación práctica ha sido registrada con éxito en el servidor de la UGMA.
        </p>

        <div style="background:var(--surface-subtle); border:1px solid var(--border); border-radius:14px; padding:16px; text-align:left; font-size:13px; margin-bottom:24px;">
            <div style="display:flex; justify-content:space-between; margin-bottom:8px;">
                <span style="color:var(--text-light); font-weight:600;">Participante:</span>
                <span style="font-weight:700; color:var(--navy-primary);" id="modalStudentName">-</span>
            </div>
            <div style="display:flex; justify-content:space-between; margin-bottom:8px;">
                <span style="color:var(--text-light); font-weight:600;">Puntaje Día 1 (openBIM / CDE):</span>
                <span style="font-weight:700; color:var(--blue-accent);" id="modalScoreDay1">0 / 10 Pts</span>
            </div>
            <div style="display:flex; justify-content:space-between; margin-bottom:8px;">
                <span style="color:var(--text-light); font-weight:600;">Puntaje Día 2 (Clash / BCF):</span>
                <span style="font-weight:700; color:var(--emerald);" id="modalScoreDay2">0 / 10 Pts</span>
            </div>
            <div style="display:flex; justify-content:space-between; border-top:1px solid var(--border); padding-top:8px;">
                <span style="font-weight:800; color:var(--navy-primary);">Calificación Total:</span>
                <span style="font-weight:900; font-size:15px; color:var(--emerald);" id="modalTotalScore">0 / 20 Pts</span>
            </div>
        </div>

        <div style="display:flex; gap:12px; justify-content:center;">
            <a href="/ugma-gerencia-obras/" class="btn-submit" style="background:#0f2942; text-decoration:none; padding:12px 24px; font-size:13.5px;">
                Volver al Hub
            </a>
            <button type="button" onclick="closeModal()" style="background:#f1f5f9; border:1px solid var(--border); color:var(--text-main); font-weight:700; padding:12px 20px; border-radius:12px; cursor:pointer;">
                Cerrar
            </button>
        </div>
    </div>
</div>

<script>
    // TIMER IN EVALUATION
    let secondsElapsed = 0;
    const timerElem = document.getElementById('evalTimer');
    setInterval(() => {
        secondsElapsed++;
        const mins = String(Math.floor(secondsElapsed / 60)).padStart(2, '0');
        const secs = String(secondsElapsed % 60).padStart(2, '0');
        timerElem.innerText = `${mins}:${secs}`;
    }, 1000);

    // AUTOFILL STUDENT PROFILE FROM STORAGE
    window.addEventListener('DOMContentLoaded', () => {
        try {
            const rawUser = localStorage.getItem('ugma_user');
            if (rawUser) {
                const user = JSON.parse(rawUser);
                if (user.name) document.getElementById('evalStudentName').value = user.name;
                if (user.email) document.getElementById('evalStudentEmail').value = user.email;
            }
        } catch (e) {}

        updateBcfPreview();

        // Radio visual feedback
        document.querySelectorAll('input[type="radio"]').forEach(radio => {
            radio.addEventListener('change', () => {
                const name = radio.getAttribute('name');
                document.querySelectorAll(`input[name="${name}"]`).forEach(r => {
                    r.closest('.option-label').classList.remove('selected');
                });
                if (radio.checked) {
                    radio.closest('.option-label').classList.add('selected');
                }
            });
        });
    });

    // SIMULADOR PARAMÉTRICO CURVA DE MACLEAMY
    function calcMacLeamy(designCost = 87.50, fieldCost = 3150.00) {
        const ratio = (fieldCost / designCost);
        const ratioFixed = ratio.toFixed(1);
        const savingsPct = (((fieldCost - designCost) / fieldCost) * 100).toFixed(1);
        return {
            designCost,
            fieldCost,
            ratio: ratioFixed,
            savingsPct
        };
    }

    // BCF 3.0 LIVE PREVIEW GENERATOR
    function generateBcfXml() {
        return updateBcfPreview();
    }

    function updateBcfPreview() {
        const title = document.getElementById('bcfTitle').value || 'Incidencia';
        const priority = document.getElementById('bcfPriority').value || 'Critical';
        const assigned = document.getElementById('bcfAssigned').value || 'coordinador@ugma.edu.ve';
        const comment = document.getElementById('bcfComment').value || '';
        const now = new Date().toISOString();
        const guid = 'bcf-' + Math.random().toString(36).substring(2, 10) + '-ugma';

        const bcfXml = '<' + '?xml version="1.0" encoding="UTF-8"?>\n' +
`<bcf:Topic Guid="${guid}" TopicType="Clash" TopicStatus="Open" xmlns:bcf="http://www.buildingsmart-tech.org/bcf">
  <bcf:Title>${escapeXml(title)}</bcf:Title>
  <bcf:Priority>${priority}</bcf:Priority>
  <bcf:AssignedTo>${assigned}</bcf:AssignedTo>
  <bcf:CreationDate>${now}</bcf:CreationDate>
  <bcf:CreationAuthor>Ing. Participante (UGMA ConTech)</bcf:CreationAuthor>
  <bcf:Viewpoint Guid="vp-001">
    <bcf:CameraViewPoint X="124.50" Y="48.20" Z="14.80" />
    <bcf:CameraDirection X="-0.70" Y="-0.70" Z="0.10" />
  </bcf:Viewpoint>
  <bcf:Comment Guid="comm-01">
    <bcf:Date>${now}</bcf:Date>
    <bcf:Author>${assigned}</bcf:Author>
    <bcf:Comment>${escapeXml(comment)}</bcf:Comment>
  </bcf:Comment>
</bcf:Topic>`;

        document.getElementById('bcfCodeOutput').innerText = bcfXml;
        document.getElementById('bcfTicketHidden').value = bcfXml;
    }

    function escapeXml(unsafe) {
        return unsafe.replace(/[<>&'"]/g, function (c) {
            switch (c) {
                case '<': return '&lt;';
                case '>': return '&gt;';
                case '&': return '&amp;';
                case '\'': return '&apos;';
                case '"': return '&quot;';
            }
        });
    }

    // FORM SUBMISSION
    async function submitEvaluation() {
        const name = document.getElementById('evalStudentName').value.trim();
        const email = document.getElementById('evalStudentEmail').value.trim();
        const btn = document.getElementById('btnSubmitEval');

        if (!name || !email) {
            alert('Por favor ingrese su Nombre y Correo Institucional.');
            return;
        }

        const formData = new FormData(document.getElementById('evaluationForm'));
        const answers = {
            day1_q1_cde_state: formData.get('day1_q1_cde_state'),
            day1_q2_cost_ratio: formData.get('day1_q2_cost_ratio'),
            day1_q3_ccv_protocol: formData.get('day1_q3_ccv_protocol'),
            day2_q4_clash1: formData.get('day2_q4_clash1'),
            day2_q4_clash2: formData.get('day2_q4_clash2'),
            day2_q6_lean_plan: formData.get('day2_q6_lean_plan')
        };
        const bcfTicket = document.getElementById('bcfTicketHidden').value;

        btn.disabled = true;
        btn.innerHTML = '<span>⏳ Evaluando y Registrando...</span>';

        let sessionToken = localStorage.getItem('ugma_session_token');
        if (!sessionToken) {
            sessionToken = 'ugma_tok_' + Math.random().toString(36).substring(2) + Date.now();
            localStorage.setItem('ugma_session_token', sessionToken);
        }

        try {
            const res = await fetch('/ugma-gerencia-obras/api/evaluacion/submit', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
                body: JSON.stringify({
                    student_name: name,
                    student_email: email,
                    session_token: sessionToken,
                    time_spent_seconds: secondsElapsed,
                    answers: answers,
                    bcf_ticket_code: bcfTicket
                })
            });

            const data = await res.json();

            if (data.success) {
                document.getElementById('modalGrade').innerText = data.total_score;
                document.getElementById('modalStudentName').innerText = data.student_name;
                document.getElementById('modalScoreDay1').innerText = `${data.score_day1} / 10 Pts`;
                document.getElementById('modalScoreDay2').innerText = `${data.score_day2} / 10 Pts`;
                document.getElementById('modalTotalScore').innerText = `${data.total_score} / 20 Pts`;
                document.getElementById('modalVerdict').innerText = `Veredicto: ${data.verdict}`;
                document.getElementById('modalMessage').innerText = `Tu examen de Día 1 y 2 ha sido formalizado exitosamente y registrado en la base de datos del facilitador.`;
                document.getElementById('evalModal').style.display = 'flex';
            } else {
                alert('Hubo un error al procesar la evaluación. Intente nuevamente.');
            }
        } catch (err) {
            alert('Error de conexión con el servidor. Verifique su red.');
        } finally {
            btn.disabled = false;
            btn.innerHTML = '<span>🚀 Formalizar Entrega de Evaluación</span>';
        }
    }

    function closeModal() {
        document.getElementById('evalModal').style.display = 'none';
    }
</script>

</body>
</html>
