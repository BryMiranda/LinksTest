<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookLoan extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'request_at',
        'assigned_at',
        'returned_at',
        'request_user_id',
        'copies_number',
        'loan_user_id'
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function requestUser()
    {
        return $this->belongsTo(User::class);
    }

    public function loanUser()
    {
        return $this->belongsTo(User::class);
    }
}
