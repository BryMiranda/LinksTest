<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookFeature extends Model
{
    use HasFactory;

    protected $table = 'book_tags';

    protected $fillable = [
        'book_id',
        'tag_id',
        'value',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}
