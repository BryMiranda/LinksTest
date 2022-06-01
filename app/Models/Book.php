<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'ISBN',
        'title',
        'subtitle',
        'status',
        'version',
        'copies_number',
        'made_at'
    ];

    public function bookFeatures()
    {
        return $this->belongsToMany(BookFeature::class);
    }

    public function bookRegistries()
    {
        return $this->hasMany(BookRegistry::class);
    }

    public function bookLoans()
    {
        return $this->hasMany(BookLoan::class);
    }

    public function scopeActive($query)
    {
        return $query->where('active', true);
    }
}
