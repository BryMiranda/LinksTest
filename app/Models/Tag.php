<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
    ];

    public function bookFeatures()
    {
        return $this->belongsToMany(BookFeature::class);
    }

    public function searchByDescription($description)
    {
        return $this->where('description', 'like', '%' . $description . '%')->get();
    } 
}
