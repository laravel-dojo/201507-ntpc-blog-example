<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\App\Comment::truncate();

    	$faker = \Faker\Factory::create('zh_TW');

        foreach(range(1, 20) as $id) {
        	\App\Comment::create([
        		'name' => $faker->name,
        		'email' => $faker->email,
        		'content' => $faker->paragraph,
        		'post_id' => rand(1, 20),
        		'created_at' => Carbon\Carbon::now()->subDays(20 - $id),
        		'updated_at' => Carbon\Carbon::now()->subDays(20 - $id),
        	]);
        }
    }
}
