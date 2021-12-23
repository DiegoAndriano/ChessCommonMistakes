<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            EstadoSeeder::class,
            ServicioSeeder::class,
            TipoPropiedadSeeder::class,
            TipoTransaccionSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
