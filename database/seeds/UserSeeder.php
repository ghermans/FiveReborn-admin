<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Create the default user.
     *
     * @return void
     */
    public function run()
    {
      $data['name']  = 'Administrator';
      $data['username']  = 'admin';
      $data['email']     = 'demo@example.com';
      $data['password']  = bcrypt('admin');
      $user = User::create($data);
    }
}
