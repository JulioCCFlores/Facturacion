<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosTableSeeder extends Seeder
{
    public function run()
    {
        $estados = [
            ['id' => 'AGU', 'nombre' => 'Aguascalientes'],
            ['id' => 'BCN', 'nombre' => 'Baja California'],
            ['id' => 'BCS', 'nombre' => 'Baja California Sur'],
            ['id' => 'CAM', 'nombre' => 'Campeche'],
            ['id' => 'CHP', 'nombre' => 'Chiapas'],
            ['id' => 'CHH', 'nombre' => 'Chihuahua'],
            ['id' => 'COA', 'nombre' => 'Coahuila'],
            ['id' => 'COL', 'nombre' => 'Colima'],
            ['id' => 'CMX', 'nombre' => 'Ciudad de México'],
            ['id' => 'DUR', 'nombre' => 'Durango'],
            ['id' => 'GUA', 'nombre' => 'Guanajuato'],
            ['id' => 'GRO', 'nombre' => 'Guerrero'],
            ['id' => 'HID', 'nombre' => 'Hidalgo'],
            ['id' => 'JAL', 'nombre' => 'Jalisco'],
            ['id' => 'MEX', 'nombre' => 'Estado de México'],
            ['id' => 'MIC', 'nombre' => 'Michoacán'],
            ['id' => 'MOR', 'nombre' => 'Morelos'],
            ['id' => 'NAY', 'nombre' => 'Nayarit'],
            ['id' => 'NLE', 'nombre' => 'Nuevo León'],
            ['id' => 'OAX', 'nombre' => 'Oaxaca'],
            ['id' => 'PUE', 'nombre' => 'Puebla'],
            ['id' => 'QUE', 'nombre' => 'Querétaro'],
            ['id' => 'ROO', 'nombre' => 'Quintana Roo'],
            ['id' => 'SLP', 'nombre' => 'San Luis Potosí'],
            ['id' => 'SIN', 'nombre' => 'Sinaloa'],
            ['id' => 'SON', 'nombre' => 'Sonora'],
            ['id' => 'TAB', 'nombre' => 'Tabasco'],
            ['id' => 'TAM', 'nombre' => 'Tamaulipas'],
            ['id' => 'TLA', 'nombre' => 'Tlaxcala'],
            ['id' => 'VER', 'nombre' => 'Veracruz'],
            ['id' => 'YUC', 'nombre' => 'Yucatán'],
            ['id' => 'ZAC', 'nombre' => 'Zacatecas'],
        ];

        DB::table('estados')->insert($estados);
    }
}
