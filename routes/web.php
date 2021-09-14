<?php


use App\Http\Controllers\Site\AuthController;
use App\Http\Controllers\Site\PostCommentsController;
use App\Http\Controllers\Site\PostController;
use App\Http\Controllers\Site\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {

    Route::view('login', 'site.auth.login')->name('loginForm');

    Route::post('login', [AuthController::class, 'login'])->name('login');

    Route::view('register', 'site.auth.register')->name('registerForm');

    Route::post('register', [AuthController::class, 'register'])->name('register');

});

Route::middleware('auth')->group(function(){

});
//test
Route::resource('posts',PostController::class);
Route::post('/posts/{post}/comments',[PostCommentsController::class,"store"])->name("posts.comments.store");
///////////////////////////////////////////////////////
Route::resource('users',UserController::class)->only(["index","show"]);
///////////////////////////////////////////////////////////
Route::get('/friends', [UserController::class,"friends"]);

