<?php

/*
|--------------------------------------------------------------------------
| Route Patterns
|--------------------------------------------------------------------------
| 
*/

Route::pattern('id', '[0-9]+');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'home.index', function() {
    return 'home.index';
}]);

Route::get('about', ['as' => 'about.index', function() {
    return 'about.index';
}]);

Route::get('posts', ['as' => 'posts.index', function() {
    return 'posts.index';
}]);

Route::get('hot', ['as' => 'posts.hot', function() {
    return 'posts.hot';
}]);

Route::get('random', ['as' => 'posts.random', function() {
    return 'posts.random';
}]);

Route::get('posts/{id}', ['as' => 'posts.show', function($id) {
    return 'posts.show: '.$id;
}]);

Route::get('posts/create', ['as' => 'posts.create', function() {
    return 'posts.create';
}]);

Route::post('posts', ['as' => 'posts.store', function() {
    return 'posts.store';
}]);

Route::get('posts/{id}/edit', ['as' => 'posts.edit', function($id) {
    return 'posts.edit: '.$id;
}]);

Route::patch('posts/{id}', ['as' => 'posts.update', function($id) {
    return 'posts.update: '.$id;
}]);

Route::delete('posts/{id}', ['as' => 'posts.destroy', function($id) {
    return 'posts.destroy: '.$id;
}]);

Route::post('posts/{id}/comment', ['as' => 'posts.comment', function($id) {
    return 'posts.comment: '.$id;
}]);
