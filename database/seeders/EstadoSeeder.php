<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->insert([
            'estado' => 'Alquilado',
        ]);
        DB::table('estados')->insert([
            'estado' => 'Vendido',
        ]);
        DB::table('estados')->insert([
            'estado' => 'Reservado',
        ]);
        DB::table('estados')->insert([
            'estado' => 'Libre',
        ]);
    }
}
