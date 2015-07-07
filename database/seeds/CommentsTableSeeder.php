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

        foreach(range(1, 20) as $id) {
        	\App\Comment::create([
        		'name' => '假留言者 - '.$id,
        		'email' => 'fake@fake-email.com',
        		'content' => '假回覆內容',
        	]);
        }
    }
}
