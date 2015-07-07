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

        foreach(range(1, 20) as $id) {
        	\App\Post::create([
        		'title' => '假文章標題 - '.$id,
        		'sub_title' => '假文章副標題',
        		'content' => '假文章內容',
        		'is_feature' => rand(0, 1),
        		'page_view' => rand(0, 200),
        		'created_at' => Carbon\Carbon::now()->subDays(20 - $id),
        		'updated_at' => Carbon\Carbon::now()->subDays(20 - $id),
        	]);
        }
    }
}
