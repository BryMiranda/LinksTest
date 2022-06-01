<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookLoanResource extends JsonResource
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
            'request_at' => $this->resource->request_at,
            'assigned_at' => $this->resource->assigned_at,
            'returned_at' => $this->resource->returned_at,
            'request_user_id' => $this->resource->request_user_id,
            'copies_number' => $this->resource->copies_number,
            'loan_user_id' => $this->resource->loan_user_id,
        ];
    }
}
