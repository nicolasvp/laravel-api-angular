<?php

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
        DB::table('users')->insert([
          'name'    => 'Nicolas',
          'email'   => 'nicolas@wedev.cl',
          'password' => Hash::make('123123'),
          'is_verified' => 1
        ]);

        DB::table('user_verifications')->insert([
          'user_id'    => 1,
          'token'      =>  str_random(30)
        ]);
    }
}
