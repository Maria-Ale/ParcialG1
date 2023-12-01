<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos =[
            [
                'referencia'=> '12340',
                'nombre'=> 'Zapatillas',
                'decripcion'=> 'Caballero',
                'color'=> 'Negro',
                'precioUnitario'=> 550000,
                'observacion'=> 'ninguna',
                'foto'=> 'foto1',
                'marca'=> 12345,

            ],
    
            [
                'referencia'=> '12341',
                'nombre'=> 'Camiseta Oversiza',
                'decripcion'=> 'Dama',
                'color'=> 'Lila y Blanco',
                'precioUnitario'=> 50000,
                'observacion'=> 'ninguna',
                'foto'=> 'foto1',
                'marca'=> 12346,
            ],
    
            [
                'referencia'=> '12342',
                'nombre'=> 'Morral Caballero',
                'decripcion'=> 'Tamaño Mediano',
                'color'=> 'Negro y Blanco',
                'precioUnitario'=> 120000,
                'observacion'=> 'ninguna',
                'foto'=> 'foto1',
                'marca'=> 12347,
            ],
    
            [
                'referencia'=> '12343',
                'nombre'=> 'Zapatillas Deportivas',
                'decripcion'=> 'Dama',
                'color'=> 'Azul',
                'precioUnitario'=> 650000,
                'observacion'=> 'ninguna',
                'foto'=> 'foto1',
                'marca'=> 12348,
            ],
            [
                'referencia'=> '12344',
                'nombre'=> 'Caramañola',
                'decripcion'=> '1200 cc',
                'color'=> 'Negro Marcado',
                'precioUnitario'=> 35000,
                'observacion'=> 'ninguna',
                'foto'=> 'foto1',
                'marca'=> 12349,
            ],
    
         ];
         DB::table('articulo')->insert($datos);  
    }
}

