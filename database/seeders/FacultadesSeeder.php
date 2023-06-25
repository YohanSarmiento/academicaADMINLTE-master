<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FacultadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos=[
            [
                'codFacultad'=>'10',
                'nomFacultad'=>'Ingenieria',
            ],
            [
                'codFacultad'=> '20',
                'nomFacultad'=>'Medicina',
                
            ],
            [
                'codFacultad'=> '30',
                'nomFacultad'=>'Derecho',
            ],
            [
                'codFacultad'=> '40',
                'nomFacultad'=>'Ciencias Exactas',
            ],
            [
                'codFacultad'=> '50',
                'nomFacultad'=>'Ciencias Economicas',
            ],
        ];
        DB::table('facultades')->insert($datos);
    }
}
