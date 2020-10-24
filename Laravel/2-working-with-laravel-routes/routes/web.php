<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome', [
        'page_title' => 'Hello world',
        'display_content' => false,
        'employees' => [[
            'name' => 'Bob'
        ], [
            'name' => 'Bingo'
        ], [
            'name' => 'Berta'
        ]]
    ]);
})->name('home');


Route::get('/posts', function () {
    return view('posts', [
        'page_title' => 'Posts'
    ]);
})->name('posts');

Route::get('/posts/create', function () {
    return view('create-post', [
        'page_title' => 'Create new post'
    ]);
})->name('create-post');

Route::post('/posts/create', function () {
    return view('create-post', [
        'page_title' => 'Create new post'
    ]);
})->name('create-post');
