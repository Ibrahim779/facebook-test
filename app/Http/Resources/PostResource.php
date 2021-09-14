<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'body'=>$this->body,
            'comments'=> CommentResource::collection($this->comments),
            'user'=> new UserResource($this->user),
        ];
    }
}
