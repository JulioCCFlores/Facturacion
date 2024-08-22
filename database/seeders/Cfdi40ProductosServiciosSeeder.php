<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Cfdi40ProductosServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cfdi_40_productos_servicios')->insert([
            ['id' => '01010101', 'texto' => 'No existe en el catálogo', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => '', 'similares' => 'Público en general'],
            ['id' => '10101500', 'texto' => 'Animales vivos de granja', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => '', 'similares' => ''],
            ['id' => '10101501', 'texto' => 'Gatos vivos', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => '', 'similares' => ''],
            ['id' => '10101502', 'texto' => 'Perros', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => '', 'similares' => ''],
            ['id' => '10101504', 'texto' => 'Visón', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => '', 'similares' => ''],
            ['id' => '10101505', 'texto' => 'Ratas', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => '', 'similares' => ''],
            ['id' => '10101506', 'texto' => 'Caballos', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => 'Equinos, Potrancas, Potras, Potrillos, Potros, Yeguas', 'similares' => ''],
            ['id' => '10101507', 'texto' => 'Ovejas', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => 'Borregos, Carneros', 'similares' => ''],
            ['id' => '10101508', 'texto' => 'Cabras', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => 'Borregos cimarrones, Cabritos, Cabros, Carnero de las Rocosas, Chivas, Chivatos, Chivos, Irascos, Machos cabríos, Chivos', 'similares' => ''],
            ['id' => '10101509', 'texto' => 'Asnos', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => 'Borricos, Burros', 'similares' => ''],
            ['id' => '10101510', 'texto' => 'Ratones', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => '', 'similares' => ''],
            ['id' => '10101511', 'texto' => 'Cerdos', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => 'Cerdo montés, Chanchos, Chanchos almizcleros, Chanchos de monte, Cochinillos, Cochinos, Cochinos de monte, Cuche, Cuinos, Gorrinos, Jabalíes americanos, Lechones, Cochinos de monte, Pecaríes, Porcinos, Puercos, Puercos de monte, Tayatos', 'similares' => ''],
            ['id' => '10101512', 'texto' => 'Conejos', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => 'Liebres', 'similares' => ''],
            ['id' => '10101513', 'texto' => 'Cobayas o conejillos de indias', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => 'Chanchito de Indias, Cobayos, Cuilo, Cuyo', 'similares' => ''],
            ['id' => '10101514', 'texto' => 'Primates', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => 'Changos, Chimpancés, Gorilas, Lémures, Macacos, Micos, Monos, Orangutanes, Simios, Monos', 'similares' => ''],
            ['id' => '10101515', 'texto' => 'Armadillos', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => 'Toches', 'similares' => ''],
            ['id' => '10101516', 'texto' => 'Ganado vacuno', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => 'Bueyes, Búfalos, Cebús, Otros vacunos o bovinos, Toros, Vacas', 'similares' => ''],
            ['id' => '10101517', 'texto' => 'Camellos', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => 'Dromedarios', 'similares' => ''],
            ['id' => '10101600', 'texto' => 'Pájaros y aves de corral vivos', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => '', 'similares' => ''],
            ['id' => '10101601', 'texto' => 'Pollos vivos', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => 'Gallinas, Gallinas de guinea, Gallos, Pintadas, Pollitos', 'similares' => ''],
            ['id' => '10101602', 'texto' => 'Patos vivos', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => '', 'similares' => ''],
            ['id' => '10101603', 'texto' => 'Pavos vivos', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => 'Gallipavos, Guajolotes, Pavos salvajes', 'similares' => ''],
            ['id' => '10101604', 'texto' => 'Gansos vivos', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => '', 'similares' => ''],
            ['id' => '10101605', 'texto' => 'Faisanes vivos', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => '', 'similares' => ''],
            ['id' => '10101700', 'texto' => 'Peces vivos', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => '', 'similares' => ''],
            ['id' => '10101701', 'texto' => 'Salmones vivos', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => '', 'similares' => ''],
            ['id' => '10101702', 'texto' => 'Trucha viva', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => '', 'similares' => ''],
            ['id' => '10101703', 'texto' => 'Tilapia viva', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => 'Mojarra', 'similares' => ''],
            ['id' => '10101704', 'texto' => 'Carpa viva', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => '', 'similares' => ''],
            ['id' => '10101705', 'texto' => 'Anguilas vivas', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => '', 'similares' => ''],
            ['id' => '10101800', 'texto' => 'Mariscos e invertebrados acuáticos vivos', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => '', 'similares' => ''],
            ['id' => '10101801', 'texto' => 'Camarón vivo', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => 'Esquilas', 'similares' => ''],
            ['id' => '10101802', 'texto' => 'Almejas vivas', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => '', 'similares' => ''],
            ['id' => '10101803', 'texto' => 'Mejillones vivos', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => '', 'similares' => ''],
            ['id' => '10101804', 'texto' => 'Ostras vivas', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => '', 'similares' => ''],
            ['id' => '10101805', 'texto' => 'Cangrejos vivos', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => '', 'similares' => ''],
            ['id' => '10101806', 'texto' => 'Abulones vivos', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => 'Orejas de mar', 'similares' => ''],
            ['id' => '10101807', 'texto' => 'Pulpo vivo', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => 'Octópodo', 'similares' => ''],
            ['id' => '10101808', 'texto' => 'Calamar vivo', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => '', 'similares' => ''],
            ['id' => '10101809', 'texto' => 'Sanguijuelas', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => 'Hirudineas, Hirudos, Hirudíneo', 'similares' => ''],
            ['id' => '10101900', 'texto' => 'Insectos vivos', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => '', 'similares' => ''],
            ['id' => '10101901', 'texto' => 'Mariposas', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => '', 'similares' => ''],
            ['id' => '10101902', 'texto' => 'Escarabajos', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => 'Mariquitas, Sanjuaneros', 'similares' => ''],
            ['id' => '10101903', 'texto' => 'Abejas', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => '', 'similares' => ''],
            ['id' => '10101904', 'texto' => 'Gusanos de seda', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => 'Crisálida, Larva, Oruga', 'similares' => ''],
            ['id' => '10102000', 'texto' => 'Animales salvajes vivos', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => '', 'similares' => ''],
            ['id' => '10102001', 'texto' => 'Elefantes', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => 'Paquidermos', 'similares' => ''],
            ['id' => '10102002', 'texto' => 'Zorros vivos', 'vigencia_desde' => '2022-01-01', 'estimulo_frontera' => 'Zorras', 'similares' => ''],
        ]);
    }
}
