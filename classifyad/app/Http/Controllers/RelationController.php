<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\User;

class RelationController extends Controller
{
    public function index () {
        // many-to-many relationship
        // $posts = Post::with('tags')->get();
        // return view('index', compact('posts'));


        // many to many relationship 2
        // $post = Post::find(1);
        // $post->tags()->detach(1);

        // $tags = Tag::with('posts')->get();
        // return view('index', compact('tags'));

        $post = Post::find(2);
        // $tag = Tag::find(1);
        // $post->tags()->sync([1,2,3]);  // 1의 tag를 가진 것들을 제외하고 모두 삭제.
        $post->tags()->attach(2);  

    }
}

