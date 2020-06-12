<?php

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
    return view('index');
});

Route::get('login', function () {
    echo "fail";
    
})->name('check-fail');


Route::get('checktoken', function () {
echo "successfully";
})->middleware('check-token');

//Get Detail Post
Route::get('detail', function () {
    return view('Post.detail');
});
//Get Trang List coment
Route::get('comment', function () {
    return view('Comment.comment');
});
//Get file thêm Post
Route::Get('post','PostController@index');

Route::Post('post.create','PostController@create')->name('post.create');