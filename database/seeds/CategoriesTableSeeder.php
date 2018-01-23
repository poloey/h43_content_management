<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
Use Faker\Factory;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Factory::create();
     foreach (range(1, count(Helpers::CATEGORIES)) as $i) {
       DB::table('categories')->insert([
         'name' => Helpers::CATEGORIES[$i - 1],
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
     }
    }
}

