<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            [
               
                    'razon_social' => 'Coca Cola ',
                    'rfc' => 'CDFJGS25462',
                    'representante' => 'Rosa mel cacho' ,
                    'numero_celular' => '729134562',                                                                                                    
                    'estatus' => 'Activo',
                    'created_at' => '2022-09-22 08:35:51',	
                    'updated_at' => '2022-09-22 08:35:51',
             ],
            [
               
                'razon_social' => 'Suavicremas',
                'rfc' => 'CDFJGS2HSFDF2',
                'representante' => 'Benito Camelo' ,
                'numero_celular' => '72919654',                                                                                                    
                'estatus' => 'Inactivo',
                'created_at' => '2022-09-22 08:35:51 ',	
                    'updated_at' => '2022-09-22 08:35:51',

            ],
                

        ]);
    }
}
