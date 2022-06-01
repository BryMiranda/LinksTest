<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
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
            'ISBN' => $this->resource->ISBN,
            'title' => $this->resource->title,
            'subtitle' => $this->resource->subtitle,
            'status' => $this->resource->status,
            'version' => $this->resource->version,
            'copies_number' => $this->resource->copies_number,
            'made_at' => $this->resource->made_at,
        ];
    }
}
