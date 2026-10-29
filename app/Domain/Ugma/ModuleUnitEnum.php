<?php

namespace App\Domain\Ugma;

class ModuleUnitEnum
{
    public const COMPETENCY_GENERAL = 'Conocer sobre las herramientas tecnológicas digitales en el seguimiento y control de obras.';

    /**
     * Retorna las 6 Unidades Curriculares Oficiales aprobadas por la UGMA.
     */
    public static function getOfficialUnits(): array
    {
        return [
            'unidad-1' => [
                'number' => 1,
                'slug' => 'unidad-1-bim',
                'title' => 'UNIDAD 1: Introducción básica al BIM',
                'subtitle' => 'Fundamentos paramétricos, openBIM y Gobernanza CDE ISO 19650',
                'date' => 'Viernes 23-10-2026',
                'schedule' => '01:15 a 05:00 PM',
                'hours' => 5,
                'competency' => self::COMPETENCY_GENERAL,
                'syllabus' => [
                    'Definición del BIM y El uso del BIM.',
                    'Herramientas BIM y Aplicaciones en obra.',
                    'Diferencia entre BIM y CAD.',
                    'Diferentes niveles del BIM (Nivel 0 al 3).',
                ],
                'contech_tool' => 'Visor 3D WebGL (Three.js) + Validador CDE ISO 19650',
                'tag' => 'openBIM · ISO 19650',
                'color' => '#0284c7',
                'route' => 'ugma.unidad-1',
                'legacy_route' => 'ugma.cde-iso19650',
            ],
            'unidad-2' => [
                'number' => 2,
                'slug' => 'unidad-2-digitalizacion-campo',
                'title' => 'UNIDAD 2: Tecnología y digitalización en campo',
                'subtitle' => 'Dispositivos móviles, captura en tiempo real, drones e IA de voz',
                'date' => 'Sábado 24-10-2026',
                'schedule' => '08:00 a 11:45 AM',
                'hours' => 5,
                'competency' => self::COMPETENCY_GENERAL,
                'syllabus' => [
                    'Aplicaciones móviles para obra.',
                    'Dispositivos móviles en obra (tablets, drones, telemetría).',
                    'Uso de datos en campo.',
                    'Captura de datos en tiempo real y Clash Detection in-situ.',
                ],
                'contech_tool' => 'Asistente Speech-to-Report IA + Clash Detection 3D BCF',
                'tag' => 'Field Tech · IA Minutas',
                'color' => '#10b981',
                'route' => 'ugma.unidad-2',
                'legacy_route' => 'ugma.ia-control-obra',
            ],
            'unidad-3' => [
                'number' => 3,
                'slug' => 'unidad-3-construcciones-sostenibles',
                'title' => 'UNIDAD 3: Construcciones sostenibles',
                'subtitle' => 'Fundamentos, principios de diseño, certificaciones LEED/EDGE e impacto social',
                'date' => 'Viernes 30-10-2026',
                'schedule' => '01:15 PM a 05:45 PM',
                'hours' => 5,
                'competency' => 'Comprender y aplicar los fundamentos, principios y normativas de las construcciones sostenibles en proyectos de edificación.',
                'syllabus' => [
                    'Definición y fundamentos de la sostenibilidad en construcción.',
                    'Principios del diseño sostenible (bioclimática, ciclo de vida LCA y conservación).',
                    'Normas y certificaciones internacionales (LEED v5, BREEAM, EDGE Buildings e ISO).',
                    'Impacto social del uso de la sostenibilidad (calidad interior, bienestar y criterios ESG).',
                ],
                'contech_tool' => 'Matriz de Evaluación de Sostenibilidad LEED v5/EDGE & Criterios ESG',
                'tag' => 'LEED v5 · EDGE · ESG',
                'color' => '#059669',
                'route' => 'ugma.unidad-3',
                'legacy_route' => 'ugma.construcciones-sostenibles',
            ],
            'unidad-4' => [
                'number' => 4,
                'slug' => 'unidad-4-eficiencia-energetica-materiales',
                'title' => 'UNIDAD 4: Eficiencia energética y materiales ecológicos',
                'subtitle' => 'Auditoría HVAC trifásica vs monofásica, dimensionamiento solar 5.1 HSP y GGBS Sidor',
                'date' => 'Sábado 31-10-2026',
                'schedule' => '08:00 AM a 12:30 PM',
                'hours' => 5,
                'competency' => 'Evaluar estrategias de eficiencia energética, selección de materiales ecológicos y tecnologías aplicadas para el ahorro energético.',
                'syllabus' => [
                    'Fundamentos de la eficiencia energética y confort térmico adaptativo (ASHRAE 55).',
                    'Relación entre diseño arquitectónico, consumo energético y climatización HVAC.',
                    'Estrategias de eficiencia: HVAC trifásico vs monofásico (conductores, caída de tensión y pérdidas).',
                    'Materiales ecológicos en construcción y concretos bajos en carbono (escoria GGBS Sidor).',
                    'Tecnologías aplicadas para ahorro energético y dimensionamiento solar fotovoltaico.',
                    'Normativas que rigen las construcciones sostenibles (ASHRAE 90.1, CEN 200, LOSSE).',
                ],
                'contech_tool' => 'Simulador HVAC Trifásico vs Monofásico + Dimensionador Solar 5.1 HSP + GGBS',
                'tag' => 'HVAC 16 TR · Solar 5.1 HSP · GGBS',
                'color' => '#ea580c',
                'route' => 'ugma.unidad-4',
                'legacy_route' => 'ugma.eficiencia-energetica-materiales',
            ],
            'unidad-5' => [
                'number' => 5,
                'slug' => 'unidad-5-gestion-residuos-rcd',
                'title' => 'UNIDAD 5: Gestión de residuos de obra',
                'subtitle' => 'Economía circular, segregación de RCD, trituración y Ley de Basura',
                'date' => 'Viernes 06-11-2026',
                'schedule' => '01:15 a 05:00 PM',
                'hours' => 5,
                'competency' => self::COMPETENCY_GENERAL,
                'syllabus' => [
                    'Tipos de residuos en la construcción (RCD).',
                    'Reducción, reutilización y reciclaje de materiales.',
                    'Marco legal y normativo ambiental venezolano.',
                    'Ley de Gestión Integral de la Basura y valorización in-situ.',
                ],
                'contech_tool' => 'Matriz de Segregación RCD + Simulador Trituración (-68% fletes)',
                'tag' => 'Economía Circular · RCD',
                'color' => '#9333ea',
                'route' => 'ugma.unidad-5',
                'legacy_route' => 'ugma.energia-solar-sostenibilidad',
            ],
            'unidad-6' => [
                'number' => 6,
                'slug' => 'unidad-6-war-room-integrador',
                'title' => 'UNIDAD 6: Taller Integrador de Grado & War Room Virtual',
                'subtitle' => 'Simulación de crisis multidisciplinaria en vivo y evaluación holística',
                'date' => 'Sábado 07-11-2026',
                'schedule' => '08:00 a 11:45 AM',
                'hours' => 5,
                'competency' => self::COMPETENCY_GENERAL,
                'syllabus' => [
                    'Síntesis de competencias del Módulo V.',
                    'Simulación de comité de obra multidisciplinario en tiempo real.',
                    'Toma de decisiones ejecutiva del Caso Edificio Guayana 12P.',
                    'Defensa oral y evaluación sobre la rúbrica vigesimal de 20 puntos.',
                ],
                'contech_tool' => 'Simulador War Room Edificio Guayana 12P + Rúbrica 20 pts',
                'tag' => 'Defensa de Grado · 20 pts',
                'color' => '#dc2626',
                'route' => 'ugma.unidad-6',
                'legacy_route' => 'ugma.taller-integrador',
            ],
        ];
    }

    /**
     * Retorna los 4 Módulos Previos de Cimientos del Diplomado.
     */
    public static function getFoundations(): array
    {
        return [
            'modulo-1' => [
                'number' => 'I',
                'slug' => 'modulo-1-organizacion',
                'title' => 'Módulo I: Organización de Obras',
                'instructor' => 'Ing. Domingo Pérez',
                'summary' => 'Organigramas matriciales, asignación de responsabilidades con Matriz RACI y gestión de las 6 fases del ciclo constructivo.',
                'tag' => 'Organización & RACI',
                'color' => '#2563eb',
                'route' => 'ugma.modulo-1',
            ],
            'modulo-2' => [
                'number' => 'II',
                'slug' => 'modulo-2-costos-evm',
                'title' => 'Módulo II: Costos, APU & EVM',
                'instructor' => 'Ing. Antonio Angarita',
                'summary' => 'Cómputos métricos Harry Osers, modelo analítico de Curva S y gestión financiera de Valor Ganado (EVM).',
                'tag' => 'Costos · EVM · Harry Osers',
                'color' => '#059669',
                'route' => 'ugma.modulo-2',
            ],
            'modulo-3' => [
                'number' => 'III',
                'slug' => 'modulo-3-marco-legal',
                'title' => 'Módulo III: Marco Legal & Art. 1637',
                'instructor' => 'Abg. / Ing. Jesús Martínez',
                'summary' => 'Ley de Contrataciones Públicas (LCP), contratos de obras y responsabilidad decenal por ruina estructural (Art. 1637 CCV).',
                'tag' => 'LCP · Art. 1637 CCV',
                'color' => '#d97706',
                'route' => 'ugma.modulo-3',
            ],
            'modulo-4' => [
                'number' => 'IV',
                'slug' => 'modulo-4-lean-calidad',
                'title' => 'Módulo IV: Lean, Calidad & Casos',
                'instructor' => 'Ing. Ricardo Zambrano',
                'summary' => 'Last Planner System (LPS), Caso Residencial Los Olivos (63 días ruta crítica), peritaje San Antonio y manual SIGECOF.',
                'tag' => 'Lean Construction · LPS',
                'color' => '#7c3aed',
                'route' => 'ugma.modulo-4',
            ],
        ];
    }
}
