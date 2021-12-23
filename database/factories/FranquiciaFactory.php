<?php

namespace Database\Factories;

use App\Models\Franquicia;
use Illuminate\Database\Eloquent\Factories\Factory;

class FranquiciaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Franquicia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'barrio' => 'Caballito',
            'provincia' => 'CABA',
            'pais' => 'Argentina',
            'direccion' => 'Fiticia 123',
            'telefono' => '1234-5678',
            'email' => $this->faker->email,
        ];
    }
}
