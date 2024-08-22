<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimpuestosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Timpuestos')->insert([
            ['nombre' => 'IVA'],
            ['nombre' => 'IEPS'],
            // Agrega más registros si es necesario
        ]);
    }
}
