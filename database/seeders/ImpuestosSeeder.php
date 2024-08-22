<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImpuestosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('impuestos')->insert([
            [
                'nombre' => 'IVA General',
                'Impuesto' => 'IVA',
                'Tipo' => 'General',
                'Factor' => 'Tasa',
                'Tasa' => 0.16
            ],
            [
                'nombre' => 'IEPS General',
                'Impuesto' => 'IEPS',
                'Tipo' => 'General',
                'Factor' => 'Cuota',
                'Tasa' => 0.05
            ],
            // Agrega más registros si es necesario
        ]);
    }
}
