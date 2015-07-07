<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\App\Post::truncate();

    	$faker = \Faker\Factory::create('zh_TW');

        foreach(range(1, 20) as $id) {
        	\App\Post::create([
        		'title' => $faker->sentence,
        		'sub_title' => $faker->sentence,
        		'content' => $faker->paragraph,
        		'is_feature' => rand(0, 1),
        		'page_view' => rand(0, 200),
        		'created_at' => Carbon\Carbon::now()->subDays(20 - $id),
        		'updated_at' => Carbon\Carbon::now()->subDays(20 - $id),
        	]);
        }
    }
}
