<?php


use App\Http\Controllers\Site\AuthController;
use App\Http\Controllers\Site\FriendRequestController;
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
    Route::get('/', [PostController::class, 'index'])->name('site.index');
    Route::resource('posts',PostController::class);
    Route::post('/posts/{post}/comments',[PostCommentsController::class,"store"])->name("posts.comments.store");
    Route::resource('users',UserController::class)->except(["store"]);
    Route::get('/users/{user}/friends', [UserController::class,"friends"])->name('users.friends');
    Route::post('/friends', [FriendRequestController::class,"store"])->name('friends.store');
    Route::delete('/friends/{friend}', [FriendRequestController::class,"destroy"])->name('friends.destroy');
    Route::patch('/friends/{friend}', [FriendRequestController::class,"update"])->name('friends.update');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});


