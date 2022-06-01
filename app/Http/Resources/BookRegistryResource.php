<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookRegistryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->resource->id,
            'book_id' => $this->resource->book_id,
            'copies_quantity' => $this->resource->copies_quantity,
            'type' => $this->resource->type,
            'motive' => $this->resource->motive,
        ];
    }
}
