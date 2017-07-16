<?php

use Illuminate\Database\Seeder;

class Users_UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_user')->insert([
          'seguir_id' => 2,
          'user_id' => 1,
        ]);
    }
}
