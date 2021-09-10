<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Http\Resources\CommentResource;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentApiController extends Controller
{
    public function index($post)
    {
      $comments = Comment::where('post_id', '=',$post)->get();
      return CommentResource::collection($comments);
    }
}
