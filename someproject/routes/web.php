<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sarah', function () {
    return 'hello sarah';
});

Route::get('/array', function () {
    return ['array' => 'ok'];
});

Route::get('/test', function () {
    $name = request('name');
    return view('test', [
        'name' => request('name')
    ]);
});

Route::get('/posts/{post}', function ($post) {
    $posts = [
        'first' => 'Hello, first post',
        'second' => 'Hello, second post'
    ];

    if (!array_key_exists($post, $posts)) {
        abort(404, 'sorry not found');
    }

    return view('post', [
        'post' => $posts[$post] ?? 'nothing'
    ]);
});

Route::get('/posts1/{post}', 'PostsController@show');
