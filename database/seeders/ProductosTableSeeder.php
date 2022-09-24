<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('productos')->insert([
            [
               'producto' => 'Mantecadas',
               'descripcion' => 'Saben Cheveres',
               'precio' => 50,
               'existencias' => 10,
               'fotografia' => 'mantecadas.jpg',
               'tasa_iva' =>  16,
               'created_at' => '2022-09-22 11:00:01',	
                    'updated_at' => '2022-09-22 11:00:01',

            ],
            [
                'producto' => 'Cerveza',
               'descripcion' => 'No tomar en exceso y menos en viernes',
               'precio' => 30,
               'existencias' => 100,
               'fotografia' => 'cerveza.jpg',
               'tasa_iva' =>  10,
               'created_at' => '2022-09-22 11:00:01',	
                    'updated_at' => '2022-09-22 11:00:01',

            ]
            ]);
        
    }
}
