<?php

namespace App\Models;

use App\Models\Tag;

class Author extends Tag
{
    public function getName()
    {
        return $this->description;
    }
}
