<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
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
      'name' => 'Liliana Quero',
      'email' => 'lquero@yolomecatl.com',
      'role' => 'admin',
      'username' => 'LilianaQ',
      'password' => bcrypt('admin12345'),
    ]);
  }
}
