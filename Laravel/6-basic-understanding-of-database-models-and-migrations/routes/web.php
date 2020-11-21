<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\PostController;
use App\Models\Posts;

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


Route::get('/', [PostController::class, 'home'])->name('home');
Route::get('/posts', [PostController::class, 'getAll'])->name('posts');
Route::get('/posts/create', [PostController::class, 'create'])->name('create-post');

Route::post('/posts/create', function (Request $request) {
    $post_title = $request->input('title');
    $post_name = $request->input('name');
    $post_content = $request->input('content');

    $validatedData = Validator::make($request->all(), [
        'title' => 'required|min:5|max:255',
        'name' => 'min:2|max:50',
        'content' => 'required|min:10',
    ]);

    if (!$validatedData->fails()) {
        $posts = new Posts();
        $posts->title = $request->input('title');
        $posts->name = $request->input('name');
        $posts->content = $request->input('content');
        $posts->save();
    }

    return view('create-post', [
        'page_title' => 'Create new post',
        'title' => $post_title,
        'name' => $post_name,
        'content' => $post_content,
        'errors' => $validatedData->errors()
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
