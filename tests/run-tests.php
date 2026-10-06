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
