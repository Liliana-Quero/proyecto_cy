<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;



class DatosPersonalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //guardar un solo registro
        DB::table('users')->insert([
          'name' => 'Administrador Yolomecatl',
          'email' => 'admin@yolomecatl.com',
          'role' => 'admin',
          'username'=> 'Administrador',
          'password' => bcrypt('admin12345'),
        ]);

        

         
    }
}