<?php

use Illuminate\Database\Seeder;

class TweetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=0; $i <1900 ; $i++)
      {
        DB::table('tweets')->insert([
          'tweet' => str_random(110),
          'rt' => 8,
          'fav' => 12,
          'id_user' => 2,
          'image' => str_random(10),
      ]);
      }
    }
}
