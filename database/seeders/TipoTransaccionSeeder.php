<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoTransaccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_transaccions')->insert([
            'transaccion' => 'Venta',
        ]);
        DB::table('tipo_transaccions')->insert([
            'transaccion' => 'Alquiler',
        ]);
        DB::table('tipo_transaccions')->insert([
            'transaccion' => 'Alquiler Temporal',
        ]);
    }
}
