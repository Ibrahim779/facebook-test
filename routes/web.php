<?php


use App\Http\Controllers\Site\AuthController;
use Illuminate\Support\Facades\Auth;
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
*/
Route::middleware('guest')->group(function () {

    Route::view('login', 'site.auth.login')->name('loginForm');

    Route::post('login', [AuthController::class, 'login'])->name('login');

    Route::view('register', 'site.auth.register')->name('registerForm');

    Route::post('register', [AuthController::class, 'login'])->name('register');

});

Route::middleware('auth')->group(function(){

});
//test
Route::view('/posts', 'site.index');
Route::view('/users', 'site.users.show');
Route::view('/followers', 'site.users.followers');

