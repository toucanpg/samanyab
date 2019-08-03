<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ZoneResourse extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       // dd($this);
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'city'=>$this->toCity()->first()->name,
            'state'=>$this->toCity()->first()->toState()->first()->name,
        ];
    }
}
