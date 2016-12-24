<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data['firstName'] = '';
      $data['lastName']  = 'Administrator';
      $data['username']  = 'admin';
      $data['email']     = 'demo@example.com';
      $data['password']  = bcrypt('admin');
      $user = User::create($data);
    }
}
