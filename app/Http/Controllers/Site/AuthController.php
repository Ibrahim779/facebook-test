<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        if (!Auth::attempt($request->only(['email', 'password']))) {
            return back()->withErrors('email or password is not correct');
        }

        return redirect()->route('site.index');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('site.loginForm');
    }
}
