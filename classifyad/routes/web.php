<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
    // $posts = Post::paginate(1);
    // return view('home', compact('posts'));

    return (Profile::find(1)->user);

    // 1:1 관계
    // user -> profile 
    // $user = User::find(1);
    // return ($user->profile->address);
    // $profile = new Profile;
    // $profile->address = "melbourne";
    // $user->profile()->save($profile);

});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/has-many', [App\Http\Controllers\RelationController::class, 'index']);

Route::get('/many-many', [App\Http\Controllers\RelationController::class, 'index']);




Route::get('/about-us', 'TestController@index')->name('about');
// Route::get('/about-us', [TestController::class, 'index']);

Route::group(['prefix'=>'account'], function () {
    Route::get('/register', 'TestController@register');
    Route::get('/login', 'TestController@login');
});

Route::get('/product', 'TestController@product');

Route::get('/test/create','TestController@create');
Route::post('/test/store', 'TestController@store')->name('test.store');


// post
Route::get('posts/store', 'PostController@store');
Route::get('posts', 'PostController@index');
Route::get('posts/{id}', 'PostController@show'); // find, findOrFail 사용
Route::get('/posts/update/{id}', 'PostController@update');
Route::get('/posts/delete/{id}', 'PostController@destroy');
Route::get('/show', 'PostController@getPost');