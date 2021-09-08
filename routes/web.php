<?php


use App\Http\Controllers\Site\AuthController;
use App\Http\Controllers\Site\PostCommentsController;
use App\Http\Controllers\Site\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {

    Route::view('login', 'site.auth.login')->name('loginForm');

    Route::post('login', [AuthController::class, 'login'])->name('login');

    Route::view('register', 'site.auth.register')->name('registerForm');

    Route::post('register', [AuthController::class, 'login'])->name('register');

});

Route::middleware('auth')->group(function(){

});
//test
Route::get('/posts',[PostController::class,"index"])->name("posts.index");
Route::post('/posts',[PostController::class,"store"])->name("posts.store");
Route::post('/posts/{post}/comments',[PostCommentsController::class,"store"])->name("posts.comments.store");
Route::view('/users', 'site.users.show');
Route::view('/followers', 'site.users.followers');

