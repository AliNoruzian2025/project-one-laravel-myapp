<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::resource('users', UserController::class);

Route::get('/', function () {
    return view('welcome');
});


Route::get('insert', function () {
    \App\Models\User::create([
        "name" => "ali",
        "email" => "t@t.com",
        "password" => bcrypt("test")
    ]);
});

Route::get('get', function () {
    $user = \App\Models\User::find(4);
    return $user;
});


Route::resource('users', UserController::class);


Route::resource('posts', PostController::class);


Route::resource('comments', CommentController::class);

Route::resource('posts', PostController::class);

Route::resource('posts.comments', CommentController::class);