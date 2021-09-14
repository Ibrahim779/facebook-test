<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'User_Info'=> new UserPostResource($this->user),
            'IdOfPost'=>$this->id,
            'BodyOfPost'=>$this->body,
        ];
    }
}
