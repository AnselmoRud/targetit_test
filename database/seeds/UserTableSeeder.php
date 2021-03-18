<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $users = array( [
      'name' => 'Administrador',
      'email' => 'ATLBR@laravel.com',
      'password' => bcrypt('ATLBR2022')
      ] );
      foreach ($users as $key => $value) {
        User::create($value);
      }
    }
  }
