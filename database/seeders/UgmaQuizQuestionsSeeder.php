<?php

namespace Database\Seeders;

use App\Models\UgmaQuizQuestion;
use Illuminate\Database\Seeder;

class UgmaQuizQuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            // UNIDAD 1 (Viernes 23-10)
            [
                'unit_number' => 1,
                'question' => '¿Cuál es la diferencia técnica fundamental entre un dibujo CAD tradicional y un modelo paramétrico BIM?',
                'options' => [
                    'El CAD utiliza capas de color y el BIM únicamente escala de grises.',
                    'El CAD representa entidades gráficas vectoriales (líneas/arcos), mientras que el BIM maneja objetos paramétricos con información geométrica y alfanumérica conectada.',
                    'El BIM solo sirve para realizar recorridos virtuales y renders comerciales para mercadeo.',
                    'No existe diferencia sustancial, ambos son formatos propietarios de software cerrado.',
                ],
                'correct_index' => 1,
                'explanation' => 'BIM (Building Information Modeling) estructura una base de datos orientada a objetos con metadatos de costos, materiales y fases, superando el dibujo vectorial geométrico simple de CAD.',
                'time_limit_sec' => 30,
            ],
            [
                'unit_number' => 1,
                'question' => 'Según la norma internacional ISO 19650, ¿cuál es el estado de información que representa el trabajo en desarrollo no validado por otras disciplinas?',
                'options' => [
                    'Published (Publicado formalmente)',
                    'WIP - Work in Progress (Trabajo en Curso)',
                    'Shared (Compartido con el consorcio)',
                    'Archived (Histórico inmutable)',
                ],
                'correct_index' => 1,
                'explanation' => 'El contenedor WIP (Work In Progress) aloja la información que cada equipo de diseño está desarrollando antes de someterla a la pasarela de aprobación para pasar a Shared.',
                'time_limit_sec' => 25,
            ],
            [
                'unit_number' => 1,
                'question' => '¿Por qué la metodología openBIM reduce drásticamente los costos de reproceso según la Curva de MacLeamy?',
                'options' => [
                    'Porque traslada el esfuerzo de diseño y toma de decisiones a etapas tempranas, evitando demoliciones y cambios costosos en faena.',
                    'Porque elimina la necesidad de contar con inspectores de obra e ingenieros residentes en sitio.',
                    'Porque reduce automáticamente el salario del personal técnico de oficina técnica.',
                    'Porque sustituye el cálculo estructural manual por renderizado estético.',
                ],
                'correct_index' => 0,
                'explanation' => 'La Curva de MacLeamy demuestra que el costo de introducir modificaciones se incrementa exponencialmente en la fase constructiva frente a la fase de diseño preliminar.',
                'time_limit_sec' => 30,
            ],

            // UNIDAD 2 (Sábado 24-10)
            [
                'unit_number' => 2,
                'question' => 'En una auditoría de coordinación interdisciplinaria 3D (Clash Detection), ¿qué define una colisión tipo "Soft Clash"?',
                'options' => [
                    'La intersección física directa entre dos sólidos geométricos (ej. columna vs ducto).',
                    'La invasión de distancias mínimas de aislamiento térmico, vibración o gálibos de acceso para mantenimiento operativo.',
                    'Un error tipográfico en la codificación de la partida presupuestaria.',
                    'Un atraso financiero imputable al cronograma de desembolsos del cliente.',
                ],
                'correct_index' => 1,
                'explanation' => 'Los Soft Clashes o Clearance Clashes salvaguardan tolerancias de montaje, aislaciones acústicas y espacios de maniobra para el mantenimiento preventivo según normas COVENIN/ASHRAE.',
                'time_limit_sec' => 30,
            ],
            [
                'unit_number' => 2,
                'question' => '¿Cuál es la ventaja de comunicar incidencias de obra con el estándar BCF (BIM Collaboration Format) frente a minutas en PDF?',
                'options' => [
                    'Registra el GUID exacto del elemento, coordenadas 3D de la cámara, estado y disciplina responsable en un archivo neutro y ligero.',
                    'Permite enviar los planos impresos por mensajería instantánea sin conexión.',
                    'Exime al constructor de la responsabilidad decenal por ruina de obra.',
                    'Convierte automáticamente archivos DWG a modelos 3D sin modelado previo.',
                ],
                'correct_index' => 0,
                'explanation' => 'BCF (BIM Collaboration Format) desacopla la comunicación del modelo pesado, transmitiendo únicamente la incidencia con sus puntos de vista espaciales (buildingSMART).',
                'time_limit_sec' => 25,
            ],
            [
                'unit_number' => 2,
                'question' => '¿Qué beneficio operativo brinda la tecnología Speech-to-Report impulsada por IA en la inspección diaria de faena?',
                'options' => [
                    'Sustituye la firma y responsabilidad civil del ingeniero inspector colegiado.',
                    'Transcribe novedades por voz en campo, estructurándolas en minutas normalizadas y detectando riesgos de reclamo o atraso en tiempo real.',
                    'Emite automáticamente cheques de pago a los proveedores de concreto.',
                    'Modifica las ordenanzas municipales de zonificación urbana sin autorización.',
                ],
                'correct_index' => 1,
                'explanation' => 'La transcripción de voz con procesamiento de lenguaje natural agiliza la carga de bitácoras de campo, permitiendo a los residentes documentar contingencias en minutos.',
                'time_limit_sec' => 30,
            ],

            // UNIDAD 3 (Viernes 30-10)
            [
                'unit_number' => 3,
                'question' => '¿Qué umbral mínimo de ahorro cuantitativo exige la certificación EDGE Buildings para catalogar una edificación como sostenible?',
                'options' => [
                    'Ahorro del 5% en energía y 10% en mano de obra.',
                    'Ahorro mínimo del 20% en energía operativa, 20% en consumo de agua y 20% en energía incorporada en materiales.',
                    'Instalación obligatoria de turbinas eólicas en la cubierta de la edificación.',
                    'Uso exclusivo de madera certificada prescindiendo del acero estructural.',
                ],
                'correct_index' => 1,
                'explanation' => 'El estándar EDGE del IFC (Banco Mundial) fija una meta universal verificable del 20% de reducción en los tres ejes: energía, agua y carbono embebido.',
                'time_limit_sec' => 30,
            ],

            // UNIDAD 4 (Sábado 31-10)
            [
                'unit_number' => 4,
                'question' => 'En el dimensionamiento solar fotovoltaico para Guayana (HSP = 5.1 kWh/m²/día, PR = 0.77), ¿por qué se utiliza el confort adaptativo ASHRAE 55?',
                'options' => [
                    'Para sobredimensionar los equipos de aire acondicionado al doble de su capacidad.',
                    'Para determinar rangos térmicos aceptables en climas tropicales con ventilación natural, reduciendo la carga térmica y el consumo energético.',
                    'Para justificar la eliminación de ventanas y aberturas en la envolvente.',
                    'Para calcular el factor de depreciación fiscal de los inversores solares.',
                ],
                'correct_index' => 1,
                'explanation' => 'ASHRAE 55 (modelo adaptativo) ajusta las expectativas térmicas en regiones cálidas mediante flujos de aire, disminuyendo la demanda de climatización artificial.',
                'time_limit_sec' => 30,
            ],

            // UNIDAD 5 (Viernes 06-11)
            [
                'unit_number' => 5,
                'question' => '¿Qué impacto económico y logístico tiene la trituración y valorización in-situ de residuos pétreos (RCD) en faenas de construcción?',
                'options' => [
                    'Incrementa los costos de transporte al requerir más botaderos externos.',
                    'Genera ahorros superiores al 68% en fletes y disposición final, obteniendo agregados reciclados para subbases y rellenos.',
                    'No tiene ningún beneficio demostrable según la legislación ambiental.',
                    'Afecta negativamente la resistencia mecánica de todas las mezclas granulares.',
                ],
                'correct_index' => 1,
                'explanation' => 'La economía circular en obra reduce la huella de transporte y elimina tarifas de vertedero, convirtiendo escombros en material de relleno de ingeniería.',
                'time_limit_sec' => 30,
            ],

            // UNIDAD 6 / CASOS INTEGRALES
            [
                'unit_number' => 6,
                'question' => 'Si una obra presenta un índice de desempeño de costo CPI = 0.82 y de cronograma SPI = 1.15, ¿cuál es el dictamen gerencial bajo EVM?',
                'options' => [
                    'El proyecto marcha adelantado en tiempo (SPI > 1) pero registra un sobrecosto financiero significativo (CPI < 1).',
                    'El proyecto marcha atrasado en tiempo y con ahorros de presupuesto sustanciales.',
                    'El proyecto se encuentra en quiebra técnica e insolvencia inmediata.',
                    'El cronograma y presupuesto están perfectamente alineados al valor planificado (PV).',
                ],
                'correct_index' => 0,
                'explanation' => 'CPI < 1 indica que por cada dólar gastado solo se ha obtenido $0.82 de valor ganado (sobrecosto), mientras que SPI > 1 refleja avance físico por encima del plan.',
                'time_limit_sec' => 25,
            ],
            [
                'unit_number' => 6,
                'question' => 'Bajo el Artículo 1637 del Código Civil Venezolano, ¿durante cuántos años subsiste la responsabilidad por ruina total o parcial por vicio de construcción o suelo?',
                'options' => [
                    'Durante 1 año calendario posterior a la recepción provisional.',
                    'Durante 10 años (Responsabilidad Decenal) de forma solidaria entre arquitecto y constructor.',
                    'Durante 30 años sin prescripción legal.',
                    'Caduca al momento de cancelar la última valuación de obra.',
                ],
                'correct_index' => 1,
                'explanation' => 'El Art. 1637 del Código Civil consagra la responsabilidad decenal imperativa e irrenunciable para garantizar la indemnidad pública de obras de edificación.',
                'time_limit_sec' => 25,
            ],
            [
                'unit_number' => 6,
                'question' => 'En el War Room del Caso Edificio Guayana 12P, ante un conflicto de ductos en una viga de transferencia 48h antes del vaciado, la orden técnica óptima es:',
                'options' => [
                    'Paralizar el vaciado, emitir ticket BCF, federar modelos y relocalizar trazado preservando el Art. 1637 CCV y la prórroga justificada.',
                    'Perforar pases con broca diamantada en el alma de la viga durante el encofrado sin consulta estructural para evitar multas de la concretera.',
                    'Ignorar la colisión y desviar los ductos por debajo de la viga tras el fraguado violando los gálibos municipales de habitabilidad.',
                    'Abandonar la obra rescindiendo el contrato de forma unilateral sin aviso.',
                ],
                'correct_index' => 0,
                'explanation' => 'La práctica de ingeniería de rigor prioriza la integridad estructural y la trazabilidad en el CDE, evitando fallas por corte o vicios ocultos decenales.',
                'time_limit_sec' => 30,
            ],
        ];

        foreach ($questions as $q) {
            UgmaQuizQuestion::updateOrCreate(
                ['question' => $q['question']],
                $q
            );
        }
    }
}
