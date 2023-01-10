<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrimistresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trimestre')->insert([
            [
                'id' => '1',
                'nombre' => 'Trimestre1',
                'fecha_inicial' => '2023-01-01',
                'fecha_final' => '2023-03-31',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => '2',
                'nombre' => 'Trimestre2',
                'fecha_inicial' => '2023-04-01',
                'fecha_final' => '2023-06-30',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => '3',
                'nombre' => 'Trimestre3',
                'fecha_inicial' => '2023-07-01',
                'fecha_final' => '2023-09-30',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => '4',
                'nombre' => 'Trimestre4',
                'fecha_inicial' => '2023-10-01',
                'fecha_final' => '2023-12-31',
                'created_at' => null,
                'updated_at' => null,
            ]
        ]);
    }
}
