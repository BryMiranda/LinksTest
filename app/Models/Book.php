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

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

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

    public function scopeStatusActive($query)
    {
        return $query->where('status', true);
    }

    public function scopeSearchByAuthor($query, $author)
    {
        return $query->when($author, function ($query, $author) {
            return $query->whereHas('tags', function ($query) use ($author) {
                $query->where('type', 'author');
            });
        });
    }

    public function scopeSearchByEditorial($query, $editorial)
    {
        return $query->when($editorial, function ($query, $editorial) {
            return $query->whereHas('tags', function ($query) use ($editorial) {
                $query->where('type', 'editorial');
            });
        });
    }

    public function scopeSearchByTheme($query, $theme)
    {
        return $query->when($theme, function ($query, $theme) {
            return $query->whereHas('tags', function ($query) use ($theme) {
                $query->where('type', 'theme');
            });
        });
    }
}
