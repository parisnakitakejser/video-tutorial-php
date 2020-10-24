<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostController extends Controller
{
    function home() {
        return view('welcome', [
            'page_title' => 'Home'
        ]);
    }

    function getAll(Request $request) {
        $post = new Posts();
        $posts = $post->getAll();

        $page = ($request->query('page') ? $request->query('page') : 1);

        return view('posts', [
            'page_title' => 'Posts',
            'posts' => $posts,
            'page' => $page
        ]);
    }

    function create() {
        return view('create-post', [
            'page_title' => 'Create new post'
        ]);
    }
}
