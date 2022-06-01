<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookRegistry extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'copies_quantity',
        'type',
        'motive',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function highAndLowType()
    {
        return $this->belongsTo(HighAndLowType::class);
    }

    public function motive()
    {
        return $this->belongsTo(Motive::class);
    }
}
