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

    public function scopeSearchByAuthor($query, $author)
    {
        return $query->when($author, function ($query, $author) {
            return $query->whereHas('bookFeatures', function ($query) use ($author) {
                $query->where('type', 'author')
                    ->where('value', $author);
            });
        });
    }

    public function scopeSearchByEditorial($query, $editorial)
    {
        return $query->when($editorial, function ($query, $editorial) {
            return $query->whereHas('bookFeatures', function ($query) use ($editorial) {
                $query->where('type', 'editorial')
                    ->where('value', $editorial);
            });
        });
    }

    public function scopeSearchByTheme($query, $theme)
    {
        return $query->when($theme, function ($query, $theme) {
            return $query->whereHas('bookFeatures', function ($query) use ($theme) {
                $query->where('type', 'theme')
                    ->where('value', $theme);
            });
        });
    }
}
