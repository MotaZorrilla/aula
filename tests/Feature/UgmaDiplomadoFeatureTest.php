<?php

namespace Tests\Feature;

use App\Models\UgmaStudent;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UgmaDiplomadoFeatureTest extends TestCase
{
    use RefreshDatabase;

    public function test_ugma_hub_renders_all_6_official_units_and_foundations(): void
    {
        $response = $this->get('/ugma-gerencia-obras');

        $response->assertStatus(200);
        $response->assertSee('UNIDAD 1: Introducción básica al BIM');
        $response->assertSee('UNIDAD 2: Tecnología y digitalización en campo');
        $response->assertSee('UNIDAD 3: Construcciones sostenibles');
        $response->assertSee('UNIDAD 4: Eficiencia energética y materiales ecológicos');
        $response->assertSee('UNIDAD 5: Gestión de residuos de obra');
        $response->assertSee('UNIDAD 6: Taller Integrador de Grado');

        $response->assertSee('Módulo I: Organización de Obras');
        $response->assertSee('Módulo II: Costos, APU');
        $response->assertSee('Módulo III: Marco Legal');
        $response->assertSee('Módulo IV: Lean, Calidad');

        $response->assertSee('Conocer sobre las herramientas tecnológicas digitales en el seguimiento y control de obras');
    }

    public function test_all_6_official_unit_routes_render_status_200(): void
    {
        $routes = [
            '/ugma-gerencia-obras/unidad-1-bim',
            '/ugma-gerencia-obras/unidad-2-digitalizacion-campo',
            '/ugma-gerencia-obras/unidad-3-construcciones-sostenibles',
            '/ugma-gerencia-obras/unidad-4-eficiencia-energetica-materiales',
            '/ugma-gerencia-obras/unidad-5-gestion-residuos-rcd',
            '/ugma-gerencia-obras/unidad-6-war-room-integrador',
        ];

        foreach ($routes as $route) {
            $response = $this->get($route);
            $response->assertStatus(200);
        }
    }

    public function test_all_4_foundation_routes_render_status_200(): void
    {
        $routes = [
            '/ugma-gerencia-obras/modulo-1-organizacion',
            '/ugma-gerencia-obras/modulo-2-costos-evm',
            '/ugma-gerencia-obras/modulo-3-marco-legal',
            '/ugma-gerencia-obras/modulo-4-lean-calidad',
        ];

        foreach ($routes as $route) {
            $response = $this->get($route);
            $response->assertStatus(200);
        }
    }

    public function test_boveda_and_admin_render_status_200(): void
    {
        $this->get('/ugma-gerencia-obras/boveda')->assertStatus(200);
        $this->get('/ugma-gerencia-obras/admin')->assertStatus(200);
        $this->get('/ugma-gerencia-obras/admin.html')->assertStatus(200);
        $this->get('/ugma-gerencia-obras/boveda.html')->assertStatus(200);
    }

    public function test_html_aliases_for_foundation_modules_render_status_200(): void
    {
        $aliases = [
            '/ugma-gerencia-obras/modulo-1-organizacion.html',
            '/ugma-gerencia-obras/modulo-2-costos-evm.html',
            '/ugma-gerencia-obras/modulo-3-marco-legal.html',
            '/ugma-gerencia-obras/modulo-4-lean-calidad.html',
        ];

        foreach ($aliases as $url) {
            $this->get($url)->assertStatus(200);
        }
    }

    public function test_hub_contains_prominent_teacher_console_and_summary_downloads(): void
    {
        $response = $this->get('/ugma-gerencia-obras');
        $response->assertStatus(200);
        $response->assertSee('Panel Facilitador');
        $response->assertSee('ING. HÉCTOR MOTA');
        $response->assertSee('admin.html');
        $response->assertSee('Resumen_Ejecutivo_Modulo_I_Organizacion_Perez.pdf');
        $response->assertSee('Resumen_Ejecutivo_Modulo_II_Costos_EVM_Angarita.pdf');
        $response->assertSee('Resumen_Ejecutivo_Modulo_III_Marco_Legal_Martinez.pdf');
        $response->assertSee('Resumen_Ejecutivo_Modulo_IV_Lean_Calidad_Zambrano.pdf');
        $response->assertDontSee('boveda-descargas');
    }

    public function test_student_registration_action_persists_valid_participant(): void
    {
        $payload = [
            'cedula' => 'V-20123456',
            'nombre' => 'Ing. María Corina González',
            'email' => 'm.gonzalez@ugma.edu.ve',
            'telefono' => '+584141234567',
            'specialty' => 'Ingeniería Civil e Inspección',
        ];

        $response = $this->postJson('/ugma-gerencia-obras/api/register', $payload);

        $response->assertStatus(201);
        $response->assertJson([
            'success' => true,
        ]);
        $response->assertJsonStructure([
            'success',
            'student' => ['id', 'cedula', 'nombre', 'email'],
            'token',
            'message',
        ]);

        $this->assertDatabaseHas('ugma_students', [
            'cedula' => 'V-20123456',
            'email' => 'm.gonzalez@ugma.edu.ve',
        ]);
    }

    public function test_student_registration_unhappy_path_validation_fails(): void
    {
        $response = $this->postJson('/ugma-gerencia-obras/api/register', [
            'cedula' => '',
            'nombre' => '',
            'email' => 'not-an-email',
        ]);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['cedula', 'nombre', 'email']);
    }

    public function test_war_room_decision_records_vote_and_computes_statistics(): void
    {
        $student = UgmaStudent::create([
            'cedula' => 'V-19888777',
            'nombre' => 'Ing. Juan Castillo',
            'email' => 'j.castillo@ugma.edu.ve',
        ]);

        $payload = [
            'option_selected' => 3,
            'student_id' => $student->id,
        ];

        $response = $this->postJson('/ugma-gerencia-obras/api/war-room/decision', $payload);

        $response->assertStatus(200);
        $response->assertJson([
            'success' => true,
            'total_votes' => 1,
            'dictamen' => [
                'type' => 'success',
            ],
        ]);

        $this->assertDatabaseHas('ugma_war_room_decisions', [
            'student_id' => $student->id,
            'option_selected' => 3,
        ]);
    }

    public function test_war_room_decision_unhappy_path_rejects_out_of_bounds_option(): void
    {
        $response = $this->postJson('/ugma-gerencia-obras/api/war-room/decision', [
            'option_selected' => 99,
        ]);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['option_selected']);
    }

    public function test_admin_login_authenticates_with_exact_credentials(): void
    {
        $validResponse = $this->postJson('/ugma-gerencia-obras/api/admin/login', [
            'email' => 'hector@motazorrilla.com',
            'password' => 'Baralo00.',
        ]);

        $validResponse->assertStatus(200);
        $validResponse->assertJson(['success' => true, 'role' => 'admin']);

        $invalidResponse = $this->postJson('/ugma-gerencia-obras/api/admin/login', [
            'email' => 'hector@motazorrilla.com',
            'password' => 'WrongPassword!',
        ]);

        $invalidResponse->assertStatus(401);
        $invalidResponse->assertJson(['success' => false]);
    }

    public function test_instructor_grading_evaluates_student_within_20_point_scale(): void
    {
        $student = UgmaStudent::create([
            'cedula' => 'V-18777666',
            'nombre' => 'Ing. Roberto Silva',
            'email' => 'r.silva@ugma.edu.ve',
        ]);

        $payload = [
            'student_id' => $student->id,
            'phase1_bim' => 5.0,
            'phase2_clash' => 4.5,
            'phase3_evm' => 4.5,
            'phase4_defense' => 4.5,
            'observations' => 'Excelente dominio de openBIM y CDE ISO 19650.',
        ];

        $response = $this->postJson('/ugma-gerencia-obras/api/admin/grade', $payload);

        $response->assertStatus(200);
        $response->assertJson([
            'success' => true,
            'grade' => [
                'total_grade' => 18.5,
                'status' => 'Sobresaliente',
            ],
        ]);

        $this->assertDatabaseHas('ugma_grades', [
            'student_id' => $student->id,
            'total_grade' => 18.5,
            'status' => 'Sobresaliente',
        ]);
    }

    public function test_instructor_grading_unhappy_path_rejects_phase_score_over_5(): void
    {
        $student = UgmaStudent::create([
            'cedula' => 'V-17666555',
            'nombre' => 'Ing. Diana Mendoza',
            'email' => 'd.mendoza@ugma.edu.ve',
        ]);

        $payload = [
            'student_id' => $student->id,
            'phase1_bim' => 9.5, // Invalid > 5.0
            'phase2_clash' => 4.0,
            'phase3_evm' => 4.0,
            'phase4_defense' => 4.0,
        ];

        $response = $this->postJson('/ugma-gerencia-obras/api/admin/grade', $payload);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['phase1_bim']);
    }

    public function test_admin_can_toggle_module_lock_state(): void
    {
        $response = $this->postJson('/ugma-gerencia-obras/api/admin/toggle-lock', [
            'module_key' => 'unidad-3',
            'is_locked' => true,
        ]);

        $response->assertStatus(200);
        $response->assertJson([
            'success' => true,
            'lock' => [
                'module_key' => 'unidad-3',
                'is_locked' => true,
            ],
        ]);

        $this->assertDatabaseHas('ugma_module_locks', [
            'module_key' => 'unidad-3',
            'is_locked' => true,
        ]);
    }
}
