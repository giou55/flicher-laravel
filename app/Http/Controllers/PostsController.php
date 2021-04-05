<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function home() { 
        return view('home');
    }

    public function post(Post $post) {
       return view('post', ['post' => $post]);
    }

    public function posts() {
        $posts = Post::all();
        return view('posts', ['posts' => $posts]);
    }

    public function edit_post(Post $post, Request $request) {
        if ($request->method()== 'POST') {
            $post->title = $request->get('title');
            $post->body = $request->get('body');
            if($post->save()) {
                return redirect('posts');
            } else {
                $msg = 'Κάτι πήγε στραβά, και το άρθρο δεν καταχωρήθηκε επιτυχώς.';
            }
        }
        if ($request->method()== 'GET') {
            $msg = "";
        }
        return view('edit_post', ['post' => $post]);
    }

    public function delete_post(Post $post) {
       $post->delete();
       return redirect('posts');
    }

    public function search(Request $request) {
        $q = $request->get('q');
        $posts = Post::where('title','like','%'.$q.'%')->orWhere('body','like','%'.$q.'%')->get();
        return view('posts', ['posts' => $posts]);
    }

    public function newpost(Request $request) {
        if ($request->method()== 'POST') {
            $post = new Post();
            $post->title = $request->get('title');
            $post->body = $request->get('body');
            if($post->save()) {
                return redirect('/posts');
            } else {
                $msg = 'Κάτι πήγε στραβά, και το άρθρο δεν καταχωρήθηκε επιτυχώς.';
            }
        }
        if ($request->method()== 'GET') {
            $msg = "";
        }
        return view('newpost', ['text' => $msg]);
    }
}