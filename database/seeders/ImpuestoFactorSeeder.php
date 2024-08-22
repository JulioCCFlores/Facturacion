<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImpuestoFactorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Impuesto_factor')->insert([
            ['nombre' => 'Tasa'],
            ['nombre' => 'Cuota'],
            // Agrega más registros si es necesario
        ]);
    }
}
