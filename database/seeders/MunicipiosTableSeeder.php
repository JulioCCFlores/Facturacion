<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MunicipiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Ruta al archivo SQL
        $path = database_path('database/seeders/sql/cfdi_40_municipios.sql');
        // Leer el contenido del archivo SQL
        $sql = File::get($path);
        // Ejecutar el SQL
        DB::unprepared($sql);
    }
}
