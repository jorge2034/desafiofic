<?php

namespace Database\Seeders;

use App\Models\Comuna;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentoRelacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $combinaciones = [
            [1,1,[10,11,2]],
            [1,2,[9,7,0]],
            [1,3,[12,6,0]],
            [2,1,[10,8,2]],
            [2,2,[9,7,1]],
            [2,3,[12,5,0]],
            [3,1,[1,3,4]],
            [3,2,[9,7,1]],
            [3,3,[12,5,1]],
        ];
        foreach($combinaciones as $value){
            $comuna = Comuna::find($value[0]);
            $comuna->rubros()->attach($value[1] ,['documento_id'=>$value[2][0]]);
            $comuna->rubros()->attach($value[1] ,['documento_id'=>$value[2][1]]);
            if( $value[2][2]!=0){
                $comuna->rubros()->attach($value[1] ,['documento_id'=>$value[2][2]]);
            }
        }
    }
}
