<?php

namespace Tests\Feature;

use App\Models\Propiedad;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PropiedadTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function una_propiedad_puede_ser_creada()
    {
        $user = User::factory()->create();
        $this->signInAsUser($user);
        $this->seed();

        $attrs = [
            'estado_id' => 1,
            'tipo_transaccion_id' => 1,
        ];

        $this->get('/propiedad/create')->assertOk();

        $this->post('/propiedad', $attrs)->assertRedirect();
        $this->assertDatabaseHas('propiedads', $attrs);
    }

    /** @test */
    public function una_propiedad_puede_ser_editada()
    {
        $this->withoutExceptionHandling();
        $user = User::factory()->create();
        $this->signInAsUser($user);
        $this->seed();

        $prop = Propiedad::factory()->create();
        $this->get('/propiedad/edit')->assertOk();

        $attrs = [
            'estado_id' => 1,
            'tipo_transaccion_id' => 1,
            'comedor' => 3,
        ];

        $this->patch('/propiedad/' . $prop->id, $attrs)->assertRedirect();
        $this->assertDatabaseHas('propiedads', ['id' => 1, 'comedor' => 3]);
    }

    /** @test */
    public function una_propiedad_puede_ser_borrada()
    {
        $user = User::factory()->create();
        $this->signInAsUser($user);
        $this->seed();

        $prop = Propiedad::factory()->create();

        $this->delete('/propiedad/' . $prop->id)->assertRedirect();
        $this->assertDatabaseMissing('propiedads', ['id' => 1]);
    }
}
