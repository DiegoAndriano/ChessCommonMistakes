<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoPropiedadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_propiedads')->insert([
            'tipo' => 'Departamento',
        ]);
        DB::table('tipo_propiedads')->insert([
            'tipo' => 'PH',
        ]);
        DB::table('tipo_propiedads')->insert([
            'tipo' => 'Casa',
        ]);
        DB::table('tipo_propiedads')->insert([
            'tipo' => 'Terrenos y Lotes',
        ]);
        DB::table('tipo_propiedads')->insert([
            'tipo' => 'Cochera',
        ]);
        DB::table('tipo_propiedads')->insert([
            'tipo' => 'Local',
        ]);
        DB::table('tipo_propiedads')->insert([
            'tipo' => 'Oficina',
        ]);
        DB::table('tipo_propiedads')->insert([
            'tipo' => 'Consultorio',
        ]);
        DB::table('tipo_propiedads')->insert([
            'tipo' => 'Quinta',
        ]);
        DB::table('tipo_propiedads')->insert([
            'tipo' => 'Chacra',
        ]);
        DB::table('tipo_propiedads')->insert([
            'tipo' => 'Galpón',
        ]);
        DB::table('tipo_propiedads')->insert([
            'tipo' => 'Depósito',
        ]);
        DB::table('tipo_propiedads')->insert([
            'tipo' => 'Campo',
        ]);
        DB::table('tipo_propiedads')->insert([
            'tipo' => 'Fondo de Comercio',
        ]);
        DB::table('tipo_propiedads')->insert([
            'tipo' => 'Hotel o Edificio',
        ]);
        DB::table('tipo_propiedads')->insert([
            'tipo' => 'Otros',
        ]);
    }
}
