<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topicos')->insert([
            ['id' => '1', 'nombre' => 'CrediAuto'],
            ['id' => '2', 'nombre' => 'CrediCampo'],
            ['id' => '3', 'nombre' => 'CrediSolucion'],
            ['id' => '4', 'nombre' => 'CrediCumple'],
            ['id' => '5', 'nombre' => 'CrediMatico Inversion'],
            ['id' => '6', 'nombre' => 'CrediMatico Ahorro'],
            ['id' => '7', 'nombre' => 'CrediFacil'],
            ['id' => '8', 'nombre' => 'CrediLinea'],
            ['id' => '9', 'nombre' => 'CrediConstruye']
        ]);
    }
}
