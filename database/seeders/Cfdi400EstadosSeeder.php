<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Cfdi400EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cfdi_400_estados')->insert([
            ['estado' => 'Aguascalientes'],
            ['estado' => 'Baja California norte'],
            ['estado' => 'Baja California Sur'],
            ['estado' => 'Campeche'],
            ['estado' => 'Chihuahua'],
            ['estado' => 'Chiapas'],
            ['estado' => 'Ciudad de México'],
            ['estado' => 'Coahuila'],
            ['estado' => 'Colima'],
            ['estado' => 'Durango'],
            ['estado' => 'Guerrero'],
            ['estado' => 'Guanajuato'],
            ['estado' => 'Hidalgo'],
            ['estado' => 'Jalisco'],
            ['estado' => 'Estado de México'],
            ['estado' => 'Michoacán'],
            ['estado' => 'Morelos'],
            ['estado' => 'Nayarit'],
            ['estado' => 'Nuevo León'],
            ['estado' => 'Oaxaca'],
            ['estado' => 'Puebla'],
            ['estado' => 'Querétaro'],
            ['estado' => 'Quintana Roo'],
            ['estado' => 'Sinaloa'],
            ['estado' => 'San Luis Potosí'],
            ['estado' => 'Sonora'],
            ['estado' => 'Tabasco'],
            ['estado' => 'Tamaulipas'],
            ['estado' => 'Tlaxcala'],
            ['estado' => 'Veracruz'],
            ['estado' => 'Yucatán'],
            ['estado' => 'Zacatecas'],
        ]);
    }
}
