<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentStoreRequest;
use App\Http\Requests\PostStoreRequest;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostCommentsController extends Controller
{

    public function store(CommentStoreRequest $request,Post $post)
    {
//        $user_id=Auth::id();
        Comment::create($request->merge(["user_id"=>"1",
            "post_id"=>$post->id])->all());
        return back();
    }
}
