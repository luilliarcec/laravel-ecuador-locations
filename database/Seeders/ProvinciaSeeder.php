<?php

namespace Luilliarcec\EcuadorLocations\Database\Seeders;

use Illuminate\Database\Seeder;
use Luilliarcec\EcuadorLocations\Models\Provincia;

class ProvinciaSeeder extends Seeder
{
    public function run()
    {
        Provincia::insert(
            ['id' => 1, 'code' => '01', 'name' => 'AZUAY'],
            ['id' => 2, 'code' => '02', 'name' => 'BOLÍVAR'],
            ['id' => 3, 'code' => '03', 'name' => 'CAÑAR'],
            ['id' => 4, 'code' => '04', 'name' => 'CARCHI'],
            ['id' => 5, 'code' => '05', 'name' => 'COTOPAXI'],
            ['id' => 6, 'code' => '06', 'name' => 'CHIMBORAZO'],
            ['id' => 7, 'code' => '07', 'name' => 'EL ORO'],
            ['id' => 8, 'code' => '08', 'name' => 'ESMERALDAS'],
            ['id' => 9, 'code' => '09', 'name' => 'GUAYAS'],
            ['id' => 10, 'code' => '10', 'name' => 'IMBABURA'],
            ['id' => 11, 'code' => '11', 'name' => 'LOJA'],
            ['id' => 12, 'code' => '12', 'name' => 'LOS RÍOS'],
            ['id' => 13, 'code' => '13', 'name' => 'MANABÍ'],
            ['id' => 14, 'code' => '14', 'name' => 'MORONA SANTIAGO'],
            ['id' => 15, 'code' => '15', 'name' => 'NAPO'],
            ['id' => 16, 'code' => '16', 'name' => 'PASTAZA'],
            ['id' => 17, 'code' => '17', 'name' => 'PICHINCHA'],
            ['id' => 18, 'code' => '18', 'name' => 'TUNGURAHUA'],
            ['id' => 19, 'code' => '19', 'name' => 'ZAMORA CHINCHIPE'],
            ['id' => 20, 'code' => '20', 'name' => 'GALÁPAGOS'],
            ['id' => 21, 'code' => '21', 'name' => 'SUCUMBÍOS'],
            ['id' => 22, 'code' => '22', 'name' => 'ORELLANA'],
            ['id' => 23, 'code' => '23', 'name' => 'SANTO DOMINGO DE LOS TSÁCHILAS'],
            ['id' => 24, 'code' => '24', 'name' => 'SANTA ELENA'],
        );
    }
}
