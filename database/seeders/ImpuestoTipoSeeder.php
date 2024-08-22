<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImpuestoTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Impuesto_tipo')->insert([
            ['nombre' => 'General'],
            ['nombre' => 'Reducido'],
            // Agrega más registros si es necesario
        ]);
    }
}
