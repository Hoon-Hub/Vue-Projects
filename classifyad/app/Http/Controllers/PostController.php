<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;


class PostController extends Controller
{
    // get post
    public function getPost () {
        $post = Post::where('user_id', 1)->first();
        return $post;
    }

    //delete
    public function destroy ($id) {
        $post = Post::where('id', $id);
        $post->delete();
    }

    // update record
    public function update ($id) {
        // 2번 : update() 사용하기
        Post::where('id', $id)->update([
            'title'=>'updated title2',
            'body'=>'updated body2'
        ]);

        // 1번.
        // $post = Post::find($id);
        // $post->title = "updated title";
        // $post->body = "updated body";
        // $post->save();

    }

    // display one record
    public function show ($id) {
        $posts = Post::find($id);
        dd($posts);
    }


    //display records
    public function index () {
        // all 보다는 get 이 더 빠르기 때문에 get을 주로 사용한다.
        $posts = Post::where('id',1)->get();
        dd($posts);
    }

    // store post
    public function store () {
        Post::create([
            'title'=> $title = 'this is a title',
            'body'=> 'this is a body',
            'slug'=> Str::slug($title),
            'user_id' => 1
        ]);
    }
}
