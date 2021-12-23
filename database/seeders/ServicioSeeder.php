<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicios')->insert([
            'servicio' => 'Electricidad',
        ]);
        DB::table('servicios')->insert([
            'servicio' => 'Agua',
        ]);
        DB::table('servicios')->insert([
            'servicio' => 'Gas',
        ]);
        DB::table('servicios')->insert([
            'servicio' => 'Internet',
        ]);
        DB::table('servicios')->insert([
            'servicio' => 'Internet Fibra Optica',
        ]);
        DB::table('servicios')->insert([
            'servicio' => 'TV Cable',
        ]);
        DB::table('servicios')->insert([
            'servicio' => 'TV Aire',
        ]);
        DB::table('servicios')->insert([
            'servicio' => 'Desague',
        ]);
    }
}
