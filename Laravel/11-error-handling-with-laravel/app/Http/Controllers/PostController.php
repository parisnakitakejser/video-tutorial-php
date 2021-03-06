<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Exceptions\PostNotFoundException;

class PostController extends Controller
{
    function home() {
        return view('welcome', [
            'page_title' => 'Home'
        ]);
    }

    function view(Request $request, $id) {
        try {
            $post = Posts::where(['id' => $id])->with('comments')->firstOrFail();
        } catch (\Exception $exception) {
            throw new PostNotFoundException();
        }

        return view('post-view', [
            'page_title' => $post['title'],
            'post' => $post,
        ]);
    }

    function edit(Request $request, $id) {
        $post = Posts::find(['id' => $id])->first();

        return view('post-edit', [
            'page_title' => 'Edit: '. $post['title'],
            'post' => $post,
        ]);
    }

    function editPost(Request $request, $id) {
        $post = Posts::where(['id' => $id])->update([
            'title' => $request->input('title'),
            'name' => $request->input('name'),
            'content' => $request->input('content'),
        ]);

        return redirect()->route('view-post', ['id' => $id]);
    }

    function delete(Request $request, $id) {
        $post = Posts::where(['id' => $id])->delete();

        return redirect()->route('posts');
    }

    function getAll(Request $request) {
        return view('posts', [
            'page_title' => 'Posts',
            'posts' => Posts::orderBy('created_at', 'desc')->orderBy('id', 'desc')->paginate(5)
        ]);
    }

    function create() {
        return view('create-post', [
            'page_title' => 'Create new post'
        ]);
    }
}
