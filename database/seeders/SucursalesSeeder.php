<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SucursalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucursales')->insert([
            ['id' => 1, 'nombre' => '001 Yolomecatl (Oficinas)'],
            ['id' => 2, 'nombre' => '002 Nochixtlan (Oficinas)'],
            ['id' => 3, 'nombre' => '003 Oaxaca/Arteaga (Oficinas)'],
            ['id' => 4, 'nombre' => '005 Huajuapan (Oficinas)'],
            ['id' => 5, 'nombre' => '006 Nicananduta (Oficinas)'],
            ['id' => 6, 'nombre' => '007 Coixtlahuaca (Oficinas)'],
            ['id' => 7, 'nombre' => '008 Tepelmeme (Oficinas)'],
            ['id' => 8, 'nombre' => '010 Tezoatlan (Oficinas)'],
            ['id' => 9, 'nombre' => '012 Ajalpan (Oficinas)']
        ]);
    }
}
