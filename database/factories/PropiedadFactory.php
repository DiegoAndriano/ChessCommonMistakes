<?php

namespace Database\Factories;

use App\Models\Estado;
use App\Models\Propiedad;
use App\Models\TipoPropiedad;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropiedadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Propiedad::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "estado_id" => Estado::first()->id,
            "tipo_transaccion_id" => TipoPropiedad::first()->id,
        ];
    }
}
