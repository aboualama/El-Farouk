<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = \App\Models\User::create([
        'name' => 'admin',
        'phone' => '0123456789',
        'email' => 'admin@gmail.com',
        'status' => 'مفعل',
        'password' => bcrypt('123456'),
        'email_verified_at' => now(),
      ]);

    //   $user->attachRole('admin');

    }
}
