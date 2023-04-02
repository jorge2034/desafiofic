<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ComunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
        'Las Condes'=>['description1','direccion1','telefono1','lgn1','lat1'],
        'Puente Alto'=>['description2','direccion2','telefono2','lgn2','lat2'],
        'La Florida'=>['description3','direccion3','telefono3','lgn3','lat3']
        ];
        foreach($data as $key => $value){
            DB::table('comunas')->insert([
                'name' => $key,
                'description'=>$value[0],
                'direction'=>$value[1],
                'phone'=>$value[2],
                'lgn'=>$value[3],
                'lat'=>$value[4],
            ]);
        }
    }
}
