<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookRegistryType extends Model
{
    use Sushi;
    public $incrementing = false;

    protected $keyType = 'string';

    protected $rows = [
        [
            'id' => 1,
            'motive' => 'ingress',
        ],
        [
            'id' => 2,
            'description' => 'egress',
        ]
    ];
}
