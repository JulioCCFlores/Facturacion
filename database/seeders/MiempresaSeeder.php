<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MiempresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('miempresa')->insert([
            [
                'razon_social' => 'Empresa Ejemplo S.A. de C.V.',
                'rfc' => 'EXA123456789',
                'calle' => 'Av. Ejemplo 123',
                'codigo_postal' => '12345',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Puedes agregar más registros aquí si es necesario
        ]);
    }
}
