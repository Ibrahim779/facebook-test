<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('site.users.index',compact("users"));
    }
    public function friends()
    {
        $users = User::all();
        return view('site.users.followers',compact("users"));
    }

    public function show(User $user)
    {
        $posts=$user->posts()->get();
        return view("site.users.show",compact("posts"));
    }
}
