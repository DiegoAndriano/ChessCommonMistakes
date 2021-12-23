<?php

namespace Database\Factories;

use App\Models\Corredor;
use App\Models\Franquicia;
use Illuminate\Database\Eloquent\Factories\Factory;

class CorredorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Corredor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'franquicia_id' => Franquicia::factory()->create(),
            'nombre' => $this->faker->name,
            'email' => $this->faker->email,
            'cpi' => $this->faker->numberBetween(1000, 9999),
            'cmcpsi' => $this->faker->numberBetween(1000, 9999),
        ];
    }
}
