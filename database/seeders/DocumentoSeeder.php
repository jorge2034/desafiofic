<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'Cédula de identidad',
            'Conformación de la sociedad',
            'Copia de traslado inicial de mercaderías',
            'Manual de buenas prácticas para la comercialización de productos',
            'Patente de manufactura de proveedores',
            'Patentes legales de productos en venta',
            'Permiso de autorización Sanitaria',
            'Permiso de manipulación de alimentos',
            'Permiso de manufactura de alimentos',
            'Permiso de obras',
            'Permiso de operatividad',
            'Permisos de importación',
        ];
        foreach($data as $value){
            DB::table('documentos')->insert([
                'name' => $value
            ]);
        }
    }
}
