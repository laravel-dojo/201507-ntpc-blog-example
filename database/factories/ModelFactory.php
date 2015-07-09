<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function ($faker) {
    return [
		'title' => $faker->sentence,
		'sub_title' => $faker->sentence,
		'content' => $faker->paragraph,
		'user_id' => rand(1, 2),
		'is_feature' => rand(0, 1),
		'page_view' => rand(0, 200),
		'created_at' => $faker->dateTime(),
		'updated_at' => $faker->dateTime(),
    ];
});

$factory->define(App\Comment::class, function ($faker) {
    return [
		'name' => $faker->name,
		'email' => $faker->email,
		'content' => $faker->paragraph,
		'post_id' => rand(1, 20),
		'created_at' => $faker->dateTime(),
		'updated_at' => $faker->dateTime(),
    ];
});