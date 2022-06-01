<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motive extends Model
{
    use Sushi;
    public $incrementing = false;

    protected $keyType = 'string';

    protected $rows = [
        [
            'id' => 1,
            'motive' => 'migration',
        ],
        [
            'id' => 2,
            'description' => 'damage',
        ],
        [
            'id' => 3,
            'description' => 'donation',
        ],
        [
            'id' => 4,
            'description' => 'purchase',
        ]
    ];
}
