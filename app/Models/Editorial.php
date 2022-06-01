<?php

namespace App\Models;

use App\Models\Tag;

class Editorial extends Tag
{
    public function getName()
    {
        return $this->description;
    }
}
