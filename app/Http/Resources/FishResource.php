<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FishResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'weight' => $this->weight,
            'rate' => $this->rate,
            'amount' => $this->amount,
            'details' => $this->details,
            //for relation
            //'category' => $this->category->name,
            //'photo' => $this->photo?asset('storage/'.$this->photo):'',
        ];
    }
}
