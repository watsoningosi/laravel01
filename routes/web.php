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

1
Route::get('/', function () {
    return view('welcome');
});
2
Route::get('/welcome', function () {
    return view('welcome');
});
3
 Route::get('test', function () {
    return view('test');
});
4
Route::get('/', function () {
    $name = request('name');

 return view('test', [
    'name' => $name
 ]);
});
5
Route::get('/posts/{post}', function ($post) {
    //data store
    $posts = [
        '1' => 'hello to discovery',
        '2' => 'peanut humper episode yeah',
        '3' => 'cyril figus , jerry smith'

    ];
    if (!array_key_exists($post, $posts)) {
        abort(404, 'No post found');
    }

    return view('post', [
        'post' => $posts[$post]
    ]);
});
*/


Route::get('/posts/{post}', 'App\Http\Controllers\PostsController@show');
