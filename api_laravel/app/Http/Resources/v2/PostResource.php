<?php

namespace App\Http\Resources\v2;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        return[
            'ide'=>$this ->id,
            'post_name'=>$this->title,
            'post_excerpt' =>$this->content,
            'author'=>[
                'name'=>$this->user->name,
                'email'=>$this ->user->emal
            ],
            'published_at' =>$this->created_at
        ];
    }
}
