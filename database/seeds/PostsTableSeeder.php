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
        foreach(range(1, 20) as $id) {
        	\App\Post::create([
        		'title' => '假文章標題 - '.$id,
        		'sub_title' => '假文章副標題',
        		'content' => '假文章內容',
        		'is_feature' => false,
        		'page_view' => 10,
        	]);
        }
    }
}
