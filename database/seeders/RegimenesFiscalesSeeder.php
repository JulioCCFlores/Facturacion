<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegimenesFiscalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regimenes_fiscales')->insert([
            ['id' => '01', 'descripcion' => 'General de Ley Personas Morales'],
            ['id' => '03', 'descripcion' => 'Personas Morales con Fines no Lucrativos'],
            ['id' => '05', 'descripcion' => 'Sueldos y Salarios e Ingresos Asimilados a Salarios'],
            ['id' => '06', 'descripcion' => 'Arrendamiento'],
            ['id' => '07', 'descripcion' => 'Régimen de Enajenación o Adquisición de Bienes'],
            ['id' => '08', 'descripcion' => 'Demás ingresos'],
            ['id' => '10', 'descripcion' => 'Residentes en el Extranjero sin Establecimiento Permanente en México'],
            ['id' => '11', 'descripcion' => 'Ingresos por Dividendos (socios y accionistas)'],
            ['id' => '12', 'descripcion' => 'Personas Físicas con Actividades Empresariales y Profesionales'],
            ['id' => '14', 'descripcion' => 'Ingresos por intereses'],
            ['id' => '15', 'descripcion' => 'Régimen de los ingresos por obtención de premios'],
            ['id' => '16', 'descripcion' => 'Sin obligaciones fiscales'],
            ['id' => '20', 'descripcion' => 'Sociedades Cooperativas de Producción que optan por diferir sus ingresos'],
            ['id' => '21', 'descripcion' => 'Incorporación Fiscal'],
            ['id' => '22', 'descripcion' => 'Actividades Agrícolas, Ganaderas, Silvícolas y Pesqueras'],
            ['id' => '23', 'descripcion' => 'Opcional para Grupos de Sociedades'],
            ['id' => '24', 'descripcion' => 'Coordinados'],
            ['id' => '25', 'descripcion' => 'Régimen de las Actividades Empresariales con ingresos a través de Plataformas Tecnológicas'],
            ['id' => '26', 'descripcion' => 'Régimen Simplificado de Confianza'],
        ]);
    }
}
