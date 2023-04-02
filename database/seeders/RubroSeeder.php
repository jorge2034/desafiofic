<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RubroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['Pastelería','Minimarket','Electrónica'];
        foreach($data as $value){
            DB::table('rubros')->insert([
                'name' => $value
            ]);
        }

    }
}
