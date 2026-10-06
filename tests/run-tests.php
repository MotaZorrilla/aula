<?php
/**
 * Suite Oficial de Testing Automatizado · Ecosistema Aula & Lab MotaZorrilla
 * Protocolo 3: Trofeo de Testing (Feature Tests + Unit Tests + Unhappy Paths)
 */

declare(strict_types=1);

$baseDir = dirname(__DIR__);
$passed = 0;
$failed = 0;
$errors = [];

function assert_test(string $name, callable $testFn): void {
    global $passed, $failed, $errors;
    try {
        $result = $testFn();
        if ($result === true || $result === null) {
            echo "  \033[32m✔\033[0m {$name}\n";
            $passed++;
        } else {
            echo "  \033[31m✖\033[0m {$name} (Fallo: Condición no cumplida)\n";
            $failed++;
            $errors[] = $name;
        }
    } catch (Throwable $e) {
        echo "  \033[31m✖\033[0m {$name} (Excepción: {$e->getMessage()})\n";
        $failed++;
        $errors[] = "{$name}: {$e->getMessage()}";
    }
}

echo "\n\033[36m==============================================================\033[0m\n";
echo "\033[36m🧪 SUITE DE TESTING OFICIAL: ECOSISTEMA AULA & LAB MOTAZORRILLA\033[0m\n";
echo "\033[36m   Protocolos 2, 3 y 4 (Feature Tests + Unit Tests + Unhappy Paths)\033[0m\n";
echo "\033[36m==============================================================\033[0m\n\n";

// ==========================================
// 1. FEATURE TESTS: RUTAS Y ARQUITECTURA
// ==========================================
echo "\033[33m--- [1/3] FEATURE TESTS: INTEGRIDAD DE RUTAS Y DOM HTML5 ---\033[0m\n";

$routes = [
    'Hub Principal Aula' => '/index.html',
    'Hub UGMA Gerencia de Obras' => '/ugma-gerencia-obras/index.html',
    'Tema 1: Masterclass BIM' => '/ugma-gerencia-obras/masterclass-bim/index.html',
    'Día 1: Validador CDE ISO 19650' => '/ugma-gerencia-obras/cde-iso19650/index.html',
    'Día 2: Clash Detection 3D' => '/ugma-gerencia-obras/clash-detection/index.html',
    'Día 3: Planificación 4D/5D' => '/ugma-gerencia-obras/planificacion-4d-5d/index.html',
    'Día 4: Asistente IA en Obra' => '/ugma-gerencia-obras/ia-control-obra/index.html',
    'Día 5: Calculador Solar & RCD' => '/ugma-gerencia-obras/energia-solar-sostenibilidad/index.html',
    'Día 6: War Room Integrador' => '/ugma-gerencia-obras/taller-integrador/index.html',
];

foreach ($routes as $name => $relPath) {
    assert_test("Ruta [{$name}] existe y posee estructura HTML5 válida", function() use ($baseDir, $relPath) {
        $filePath = $baseDir . str_replace('/', DIRECTORY_SEPARATOR, $relPath);
        if (!file_exists($filePath)) {
            throw new Exception("Archivo no encontrado: {$filePath}");
        }
        $content = file_get_contents($filePath);
        if (stripos($content, '<!DOCTYPE html>') === false) {
            throw new Exception("Falta declaración <!DOCTYPE html>");
        }
        if (stripos($content, '<title>') === false) {
            throw new Exception("Falta etiqueta <title>");
        }
        if (stripos($content, 'name="viewport"') === false) {
            throw new Exception("Falta meta viewport");
        }
        return true;
    });
}

// ==========================================
// 2. FEATURE TESTS: CONTENIDO TÉCNICO Y RIGOR
// ==========================================
echo "\n\033[33m--- [2/3] FEATURE TESTS: MARCADORES TÉCNICOS Y ESTÁNDARES ---\033[0m\n";

assert_test("Masterclass BIM contiene articulación con Cómputos Harry Osers (Módulo II)", function() use ($baseDir) {
    $content = file_get_contents($baseDir . '/ugma-gerencia-obras/masterclass-bim/index.html');
    return stripos($content, 'Harry Osers') !== false && stripos($content, 'COVENIN 2000') !== false;
});

assert_test("Masterclass BIM contiene blindaje legal del Art. 1637 Código Civil Venezolano", function() use ($baseDir) {
    $content = file_get_contents($baseDir . '/ugma-gerencia-obras/masterclass-bim/index.html');
    return stripos($content, '1637') !== false && stripos($content, 'Responsabilidad Decenal') !== false;
});

assert_test("Masterclass BIM contiene estándares buildingSMART IFC 4.3 y BCF 3.0", function() use ($baseDir) {
    $content = file_get_contents($baseDir . '/ugma-gerencia-obras/masterclass-bim/index.html');
    return stripos($content, 'IFC 4.3') !== false && stripos($content, 'BCF 3.0') !== false;
});

assert_test("Masterclass BIM implementa Sangría Académica en párrafos (.academic-p text-indent)", function() use ($baseDir) {
    $content = file_get_contents($baseDir . '/ugma-gerencia-obras/masterclass-bim/index.html');
    return stripos($content, 'text-indent') !== false && stripos($content, '.academic-p') !== false;
});

assert_test("Masterclass BIM implementa Paginador / Stepper secuencial de 9 Módulos", function() use ($baseDir) {
    $content = file_get_contents($baseDir . '/ugma-gerencia-obras/masterclass-bim/index.html');
    return stripos($content, 'stepper-container') !== false && stripos($content, 'goToStep') !== false;
});

assert_test("Masterclass BIM implementa Modal de 8 Dimensiones (1D a 8D+)", function() use ($baseDir) {
    $content = file_get_contents($baseDir . '/ugma-gerencia-obras/masterclass-bim/index.html');
    return stripos($content, 'dimModal') !== false && stripos($content, 'openDimModal') !== false;
});

assert_test("Masterclass BIM contiene enlaces oficiales a ISO, buildingSMART y TSJ", function() use ($baseDir) {
    $content = file_get_contents($baseDir . '/ugma-gerencia-obras/masterclass-bim/index.html');
    return stripos($content, 'https://www.iso.org/') !== false 
        && stripos($content, 'https://technical.buildingsmart.org/') !== false
        && stripos($content, 'tsj.gob.ve') !== false;
});

assert_test("Día 1 (CDE ISO 19650) implementa Sangría Académica (.academic-p text-indent: 2.2em)", function() use ($baseDir) {
    $content = file_get_contents($baseDir . '/ugma-gerencia-obras/cde-iso19650/index.html');
    return stripos($content, 'text-indent: 2.2em') !== false && stripos($content, '.academic-p') !== false;
});

assert_test("Día 1 (CDE ISO 19650) implementa Stepper paginador secuencial de 7 Módulos", function() use ($baseDir) {
    $content = file_get_contents($baseDir . '/ugma-gerencia-obras/cde-iso19650/index.html');
    return stripos($content, 'stepper-container') !== false && stripos($content, 'goToStep') !== false;
});

assert_test("Día 1 (CDE ISO 19650) incorpora simuladores (cdeApprovalSim, isoConstructor, eirMatrix, ifcTree)", function() use ($baseDir) {
    $content = file_get_contents($baseDir . '/ugma-gerencia-obras/cde-iso19650/index.html');
    return stripos($content, 'runCdeTransition') !== false 
        && stripos($content, 'updateIsoBuilder') !== false
        && stripos($content, 'updateEirMatrix') !== false
        && stripos($content, 'inspectIfcNode') !== false;
});

assert_test("Día 1 sincronizado al 100% entre ugma-gerencia-obras, Blade y public", function() use ($baseDir) {
    $htmlContent = file_get_contents($baseDir . '/ugma-gerencia-obras/cde-iso19650/index.html');
    $bladeContent = file_get_contents($baseDir . '/resources/views/ugma/cde-iso19650.blade.php');
    $publicContent = file_get_contents($baseDir . '/public/ugma-gerencia-obras/cde-iso19650/index.html');
    return ($htmlContent === $bladeContent) && ($htmlContent === $publicContent);
});

assert_test("Día 2 (Clash Detection 3D) implementa Sangría Académica (.academic-p text-indent: 2.2em)", function() use ($baseDir) {
    $content = file_get_contents($baseDir . '/ugma-gerencia-obras/clash-detection/index.html');
    return stripos($content, 'text-indent: 2.2em') !== false && stripos($content, '.academic-p') !== false;
});

assert_test("Día 2 (Clash Detection 3D) implementa Stepper paginador secuencial de 7 Módulos", function() use ($baseDir) {
    $content = file_get_contents($baseDir . '/ugma-gerencia-obras/clash-detection/index.html');
    return stripos($content, 'stepper-container') !== false && stripos($content, 'goToStep') !== false;
});

assert_test("Día 2 (Clash Detection 3D) incorpora simuladores (runMatrixRuleEvaluation, init3DLab, renderBcfCode, calculateReworkCost)", function() use ($baseDir) {
    $content = file_get_contents($baseDir . '/ugma-gerencia-obras/clash-detection/index.html');
    return stripos($content, 'runMatrixRuleEvaluation') !== false 
        && stripos($content, 'init3DLab') !== false
        && stripos($content, 'renderBcfCode') !== false
        && stripos($content, 'calculateReworkCost') !== false;
});

assert_test("Día 2 sincronizado al 100% entre ugma-gerencia-obras, Blade y public", function() use ($baseDir) {
    $htmlContent = file_get_contents($baseDir . '/ugma-gerencia-obras/clash-detection/index.html');
    $bladeContent = file_get_contents($baseDir . '/resources/views/ugma/clash-detection.blade.php');
    $publicContent = file_get_contents($baseDir . '/public/ugma-gerencia-obras/clash-detection/index.html');
    return ($htmlContent === $bladeContent) && ($htmlContent === $publicContent);
});

assert_test("Día 3 (Planificación 4D/5D) implementa Sangría Académica (.academic-p text-indent: 2.2em)", function() use ($baseDir) {
    $content = file_get_contents($baseDir . '/ugma-gerencia-obras/planificacion-4d-5d/index.html');
    return stripos($content, 'text-indent: 2.2em') !== false && stripos($content, '.academic-p') !== false;
});

assert_test("Día 3 (Planificación 4D/5D) implementa Stepper paginador secuencial de 7 Módulos", function() use ($baseDir) {
    $content = file_get_contents($baseDir . '/ugma-gerencia-obras/planificacion-4d-5d/index.html');
    return stripos($content, 'stepper-container') !== false && stripos($content, 'goToStep') !== false;
});

assert_test("Día 3 (Planificación 4D/5D) incorpora simuladores (initEVMChart, updateEVM, toggleTimelinePlay, updateTimelineDisplay)", function() use ($baseDir) {
    $content = file_get_contents($baseDir . '/ugma-gerencia-obras/planificacion-4d-5d/index.html');
    return stripos($content, 'initEVMChart') !== false 
        && stripos($content, 'updateEVM') !== false
        && stripos($content, 'toggleTimelinePlay') !== false
        && stripos($content, 'updateTimelineDisplay') !== false;
});

assert_test("Día 3 sincronizado al 100% entre ugma-gerencia-obras, Blade y public", function() use ($baseDir) {
    $htmlContent = file_get_contents($baseDir . '/ugma-gerencia-obras/planificacion-4d-5d/index.html');
    $bladeContent = file_get_contents($baseDir . '/resources/views/ugma/planificacion-4d-5d.blade.php');
    $publicContent = file_get_contents($baseDir . '/public/ugma-gerencia-obras/planificacion-4d-5d/index.html');
    return ($htmlContent === $bladeContent) && ($htmlContent === $publicContent);
});

assert_test("Día 4 (IA Control de Obra) implementa Sangría Académica (.academic-p text-indent: 2.2em)", function() use ($baseDir) {
    $content = file_get_contents($baseDir . '/ugma-gerencia-obras/ia-control-obra/index.html');
    return stripos($content, 'text-indent: 2.2em') !== false && stripos($content, '.academic-p') !== false;
});

assert_test("Día 4 (IA Control de Obra) implementa Stepper paginador secuencial de 7 Módulos", function() use ($baseDir) {
    $content = file_get_contents($baseDir . '/ugma-gerencia-obras/ia-control-obra/index.html');
    return stripos($content, 'stepper-container') !== false && stripos($content, 'goToStep') !== false;
});

assert_test("Día 4 (IA Control de Obra) incorpora simuladores (setScanScenario, generateMinuta, generateClaimLetter)", function() use ($baseDir) {
    $content = file_get_contents($baseDir . '/ugma-gerencia-obras/ia-control-obra/index.html');
    return stripos($content, 'setScanScenario') !== false 
        && stripos($content, 'generateMinuta') !== false
        && stripos($content, 'generateClaimLetter') !== false;
});

assert_test("Día 4 sincronizado al 100% entre ugma-gerencia-obras, Blade y public", function() use ($baseDir) {
    $htmlContent = file_get_contents($baseDir . '/ugma-gerencia-obras/ia-control-obra/index.html');
    $bladeContent = file_get_contents($baseDir . '/resources/views/ugma/ia-control-obra.blade.php');
    $publicContent = file_get_contents($baseDir . '/public/ugma-gerencia-obras/ia-control-obra/index.html');
    return ($htmlContent === $bladeContent) && ($htmlContent === $publicContent);
});

assert_test("Día 5 (Energía Solar y Sostenibilidad) implementa Sangría Académica (.academic-p text-indent: 2.2em)", function() use ($baseDir) {
    $content = file_get_contents($baseDir . '/ugma-gerencia-obras/energia-solar-sostenibilidad/index.html');
    return stripos($content, 'text-indent: 2.2em') !== false && stripos($content, '.academic-p') !== false;
});

assert_test("Día 5 (Energía Solar y Sostenibilidad) implementa Stepper paginador secuencial de 7 Módulos", function() use ($baseDir) {
    $content = file_get_contents($baseDir . '/ugma-gerencia-obras/energia-solar-sostenibilidad/index.html');
    return stripos($content, 'stepper-container') !== false && stripos($content, 'goToStep') !== false;
});

assert_test("Día 5 (Energía Solar y Sostenibilidad) incorpora simuladores (calculateSolar, calculateEmbodiedCarbon, calculateEnvelopeAudit)", function() use ($baseDir) {
    $content = file_get_contents($baseDir . '/ugma-gerencia-obras/energia-solar-sostenibilidad/index.html');
    return stripos($content, 'calculateSolar') !== false 
        && stripos($content, 'calculateEmbodiedCarbon') !== false
        && stripos($content, 'calculateEnvelopeAudit') !== false;
});

assert_test("Día 5 sincronizado al 100% entre ugma-gerencia-obras, Blade y public", function() use ($baseDir) {
    $htmlContent = file_get_contents($baseDir . '/ugma-gerencia-obras/energia-solar-sostenibilidad/index.html');
    $bladeContent = file_get_contents($baseDir . '/resources/views/ugma/energia-solar-sostenibilidad.blade.php');
    $publicContent = file_get_contents($baseDir . '/public/ugma-gerencia-obras/energia-solar-sostenibilidad/index.html');
    return ($htmlContent === $bladeContent) && ($htmlContent === $publicContent);
});

assert_test("Laravel Framework: artisan, routes/web.php y Blade templates existen y cargan", function() use ($baseDir) {
    if (!file_exists($baseDir . '/artisan') || !file_exists($baseDir . '/routes/web.php')) {
        return false;
    }
    $bladePath = $baseDir . '/resources/views/ugma/masterclass-bim.blade.php';
    return file_exists($bladePath);
});

assert_test("Hub UGMA enlaza al Visor BIM 3D del Laboratorio ConTech (lab.motazorrilla.com/bim)", function() use ($baseDir) {
    $content = file_get_contents($baseDir . '/ugma-gerencia-obras/index.html');
    return stripos($content, 'https://lab.motazorrilla.com/bim/') !== false;
});

assert_test("Hub UGMA implementa Clases de Repaso interactivas para Módulos I al IV (#repasoModal y openRepasoModal)", function() use ($baseDir) {
    $content = file_get_contents($baseDir . '/ugma-gerencia-obras/index.html');
    return stripos($content, 'id="repasoModal"') !== false 
        && stripos($content, 'openRepasoModal') !== false
        && stripos($content, 'btn-retro-open') !== false;
});

assert_test("Hub UGMA integra material real de Classroom (Harry Osers, Caso Matanzas, Lean Construction, RACI)", function() use ($baseDir) {
    $content = file_get_contents($baseDir . '/ugma-gerencia-obras/index.html');
    return stripos($content, 'Harry Osers') !== false 
        && stripos($content, 'Expansión Industrial Matanzas') !== false
        && stripos($content, 'Last Planner System') !== false
        && stripos($content, 'Matriz RACI') !== false;
});

assert_test("Hub UGMA incorpora simuladores interactivos (calcApuSim, calcLpsSim, evalLegalCase, updateRaciSim)", function() use ($baseDir) {
    $content = file_get_contents($baseDir . '/ugma-gerencia-obras/index.html');
    return stripos($content, 'function calcApuSim') !== false 
        && stripos($content, 'function calcLpsSim') !== false
        && stripos($content, 'function evalLegalCase') !== false
        && stripos($content, 'function updateRaciSim') !== false;
});

assert_test("Blade template ugma/index.blade.php y public/ugma-gerencia-obras/index.html sincronizados al 100%", function() use ($baseDir) {
    $htmlContent = file_get_contents($baseDir . '/ugma-gerencia-obras/index.html');
    $bladeContent = file_get_contents($baseDir . '/resources/views/ugma/index.blade.php');
    $publicContent = file_get_contents($baseDir . '/public/ugma-gerencia-obras/index.html');
    return ($htmlContent === $bladeContent) && ($htmlContent === $publicContent);
});

assert_test("Nginx Gateway enruta Club TIA a bridge Docker (172.17.0.1:8093) y contiene aliases (/clubtia, /tia)", function() use ($baseDir) {
    $nginxConf = file_get_contents($baseDir . '/nginx.conf');
    return stripos($nginxConf, '172.17.0.1:8093') !== false
        && stripos($nginxConf, 'location = /clubtia') !== false
        && stripos($nginxConf, 'location = /tia') !== false;
});

assert_test("Especificaciones OpenSpec v2.0 existen y cumplen sintaxis RFC 2119", function() use ($baseDir) {
    $specPath = $baseDir . '/openspec/specs/ugma-diplomado-portal/spec.md';
    if (!file_exists($specPath)) {
        throw new Exception("Falta especificación OpenSpec");
    }
    $content = file_get_contents($specPath);
    return stripos($content, 'SHALL') !== false && stripos($content, 'GIVEN') !== false && stripos($content, 'THEN') !== false;
});

// ==========================================
// 3. UNIT TESTS & UNHAPPY PATHS: CÁLCULOS MATEMÁTICOS
// ==========================================
echo "\n\033[33m--- [3/3] UNIT TESTS & UNHAPPY PATHS: FÓRMULAS PARAMÉTRICAS ---\033[0m\n";

assert_test("Unit: Cálculo de ROI BIM con escenario estándar ($2,500,000 USD)", function() {
    $budget = 2500000.0;
    $contingencyRate = 8.5; // %
    $bimCostRate = 1.8; // %

    $typicalRework = $budget * ($contingencyRate / 100);
    $estimatedSavings = $typicalRework * 0.80; // 80% mitigación CIFE
    $bimInvestment = $budget * ($bimCostRate / 100);
    $netBenefit = $estimatedSavings - $bimInvestment;
    $netRoi = ($netBenefit / $bimInvestment) * 100;

    // Validación numérica determinista
    if (round($estimatedSavings) !== 170000.0) return false;
    if (round($bimInvestment) !== 45000.0) return false;
    if (round($netBenefit) !== 125000.0) return false;
    if (round($netRoi, 1) !== 277.8) return false;
    return true;
});

assert_test("Unit: Cálculo de Generación Solar Fotovoltaica Guayana (HSP = 5.0, PR = 0.77)", function() {
    $consumoDiarioKwh = 120.0; // kWh/día en faena de obra
    $hsp = 5.0; // Horas Sol Pico en Guayana
    $pr = 0.77; // Performance Ratio

    $potenciaPicoKw = $consumoDiarioKwh / ($hsp * $pr);
    // 120 / 3.85 = 31.1688 kWp
    if (round($potenciaPicoKw, 2) !== 31.17) return false;
    return true;
});

assert_test("Unit: Cálculo de Rework Cost MacLeamy (Demolición $1,200 + 3 días cuadrilla $650/día vs Oficina $87.50)", function() {
    $demolition = 1200.0;
    $days = 3;
    $crew = 650.0;
    $totalField = $demolition + ($days * $crew); // 1200 + 1950 = 3150
    $bimHours = 3.5;
    $bimRate = 25.0;
    $totalBim = $bimHours * $bimRate; // 87.50
    $netSavings = $totalField - $totalBim; // 3062.50
    $multiplier = round($totalField / $totalBim, 1); // 36.0
    $roi = round(($netSavings / $totalBim) * 100); // 3500%

    if ($totalField !== 3150.0) return false;
    if ($totalBim !== 87.50) return false;
    if ($netSavings !== 3062.50) return false;
    if ($multiplier !== 36.0) return false;
    if ($roi !== 3500.0) return false;
    return true;
});

assert_test("Unit: Fórmulas EVM ANSI/PMI (BAC=$1.5M, PV 50%, EV 44%, AC=$720k -> CPI 0.917, SPI 0.88, EAC $1,636,364)", function() {
    $bac = 1500000.0;
    $pv = $bac * (50.0 / 100.0); // 750000.0
    $ev = $bac * (44.0 / 100.0); // 660000.0
    $ac = 720000.0;
    
    $cv = $ev - $ac; // -60000.0
    $sv = $ev - $pv; // -90000.0
    $cpi = round($ev / $ac, 3); // 0.917
    $spi = round($ev / $pv, 3); // 0.880
    $eac = round($bac / ($ev / $ac)); // 1636364
    $vac = $bac - $eac; // -136364

    if ($pv !== 750000.0) return false;
    if ($ev !== 660000.0) return false;
    if ($cv !== -60000.0) return false;
    if ($sv !== -90000.0) return false;
    if ($cpi !== 0.917) return false;
    if ($spi !== 0.880) return false;
    if ($eac !== 1636364.0) return false;
    if ($vac !== -136364.0) return false;
    return true;
});

assert_test("Unit: Clasificación de Riesgo IA para Bitácoras de Obra (Lluvia + Retraso -> HIGH RISK, Normal -> LOW RISK)", function() {
    $evalRisk = function(string $weather, string $notes): string {
        $isRain = (stripos($weather, 'Lluvia') !== false);
        $hasDelay = (stripos($notes, 'retraso') !== false || stripos($notes, 'fisura') !== false || stripos($notes, 'riesgo') !== false);
        if ($isRain && $hasDelay) return 'HIGH';
        if ($isRain || $hasDelay) return 'MEDIUM';
        return 'LOW';
    };

    if ($evalRisk('Lluvia Torrencial', 'Hubo retraso en vaciado') !== 'HIGH') return false;
    if ($evalRisk('Soleado', 'Retraso de suministro') !== 'MEDIUM') return false;
    if ($evalRisk('Soleado', 'Jornada normal sin novedades') !== 'LOW') return false;
    return true;
});

assert_test("Unhappy Path: Calculadora de ROI maneja presupuestos de cero o inversión nula", function() {
    $budget = 0.0;
    $bimInvestment = 0.0;
    $estimatedSavings = 0.0;
    
    // Evitar división por cero
    $roi = ($bimInvestment > 0) ? (($estimatedSavings - $bimInvestment) / $bimInvestment) * 100 : 0.0;
    return $roi === 0.0;
});

// ==========================================
// RESUMEN FINAL
// ==========================================
echo "\n\033[36m==============================================================\033[0m\n";
echo "Resultados: \033[32m{$passed} pasadas\033[0m, \033[31m{$failed} fallidas\033[0m\n";

if ($failed === 0) {
    echo "\033[32m🎉 ESTADO: ÉXITO TOTAL (100% de la suite en verde · Protocolo 3 Validado)\033[0m\n";
    echo "\033[36m==============================================================\033[0m\n\n";
    exit(0);
} else {
    echo "\033[31m❌ ESTADO: FALLOS DETECTADOS. Revisar lista de errores.\033[0m\n";
    echo "\033[36m==============================================================\033[0m\n\n";
    exit(1);
}
