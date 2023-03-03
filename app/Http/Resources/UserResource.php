<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'email_verified' => date_format($this->email_verified_at, "d-m-Y"),
            'created_at' => date_format($this->created_at, "d-m-Y"),
            'updated_at' => date_format($this->updated_at, "d-m-Y"),
        ];
    }
}
