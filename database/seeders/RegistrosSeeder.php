<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegistrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('registros')->insert([
            [
                'id' => 1,
                'sucursal_id' => 1,
                'trimestre_id' => 1,
                'topico_id' => 1,
                'nombre_socio' => 'JUAN PEREZ LOPEZ',
                'num_socio' => 9393,
                'fecha_colocacion' => '2023-01-18',
                'monto' => 89000.00,
                'plazo_evidencia' => '2023-01-31',
                'ref_credito' => 129219
            ], [
                'id' => 2,
                'sucursal_id' => 1,
                'trimestre_id' => 2,
                'topico_id' => 1,
                'nombre_socio' => 'MARICELA CARDENAS PACHECO',
                'num_socio' => 8835,
                'fecha_colocacion' => '2023-02-01',
                'monto' => 195000.00,
                'plazo_evidencia' => '2023-02-22',
                'ref_credito' => 754848
            ], [
                'id' => 3,
                'sucursal_id' => 1,
                'trimestre_id' => 3,
                'topico_id' => 1,
                'nombre_socio' => 'PATRICIO CRUZ CRUZ',
                'num_socio' => 8898,
                'fecha_colocacion' => '2023-01-28',
                'monto' => 450000.00,
                'plazo_evidencia' => '2023-02-15',
                'ref_credito' => 232323
            ], [
                'id' => 4,
                'sucursal_id' => 1,
                'trimestre_id' => 4,
                'topico_id' => 1,
                'nombre_socio' => 'LAURA JIMENEZ SANTOS',
                'num_socio' => 34345,
                'fecha_colocacion' => '2023-01-02',
                'monto' => 220000.00,
                'plazo_evidencia' => '2023-01-05',
                'ref_credito' => 6764457
            ], [
                'id' => 5,
                'sucursal_id' => 1,
                'trimestre_id' => 1,
                'topico_id' => 1,
                'nombre_socio' => 'PABLO SANTIAGO GARCIA',
                'num_socio' => 43400,
                'fecha_colocacion' => '2023-03-01',
                'monto' => 323000.00,
                'plazo_evidencia' => '2023-03-23',
                'ref_credito' => 8348743
            ], [
                'id' => 6,
                'sucursal_id' => 1,
                'trimestre_id' => 2,
                'topico_id' => 1,
                'nombre_socio' => 'CAROLINA RAMIREZ LOPEZ',
                'num_socio' => 88700,
                'fecha_colocacion' => '2023-01-11',
                'monto' => 280000.00,
                'plazo_evidencia' => '2023-01-27',
                'ref_credito' => 8584750
            ]
        ]);
    }
}
