<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

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


Route::get('/posts', function (Request $request) {
    $page = ($request->query('page') ? $request->query('page') : 1);

    return view('posts', [
        'page_title' => 'Posts',
        'page' => $page
    ]);
})->name('posts');

Route::get('/posts/create', function () {
    return view('create-post', [
        'page_title' => 'Create new post'
    ]);
})->name('create-post');

Route::post('/posts/create', function (Request $request) {
    $post_title = $request->input('title');
    $post_content = $request->input('content');

    return view('create-post', [
        'page_title' => 'Create new post',
        'title' => $post_title,
        'content' => $post_content,
    ]);
})->name('create-post');

# API Routes:
Route::get('/api/posts', function (Request $request) {
    $format = ($request->query('format') ? $request->query('format') : 'json');

    if ($format === 'plain') {
        return response('api/posts working!', 200)
            ->header('Content-Type', 'text/plain');
    } elseif($format === 'json') {
        return response()->json([
            'content' => 'api/posts working!'
        ]);
    } else {
        return redirect()->route('home');
    }
});
