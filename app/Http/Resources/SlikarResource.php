<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SlikarResource extends JsonResource
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
            'Id: ' => $this->resource->id,
            'Ime: ' => $this->resource->ime,
            'Prezime: ' => $this->resource->prezime,
            'Godine: ' => $this->resource->godine,
            'Broj telefona: ' => $this->resource->broj_telefona,
        ];
    }
}
