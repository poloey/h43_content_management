<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
Use Faker\Factory;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Factory::create();
     foreach (range(1, Helpers::NUMBER_OF_POSTS) as $i) {
       DB::table('posts')->insert([
          'user_id' => rand(1, count(Helpers::USERS)),
          'title' => $faker->sentence,
          'category_id' => rand(1, count(Helpers::CATEGORIES)),
          'content' => $faker->paragraph(35),
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
     }
    }
}

