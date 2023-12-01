<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     $datos =[
        [
            'idMarca'=> '12345',
            'descripcion'=> 'Zapatillas Reebok', 
        ],

        [
            'idMarca'=> '12346',
            'descripcion'=> 'Camiseta Adidas', 
        ],

        [
            'idMarca'=> '12347',
            'descripcion'=> 'Morrales Nike', 
        ],

        [
            'idMarca'=> '12348',
            'descripcion'=> 'Zapatillas Puma', 
        ],
        [
            'idMarca'=> '12349',
            'descripcion'=> 'Caramañola FILA', 
        ],

     ];
     DB::table('Marca')->insert($datos);
     
    }
}
