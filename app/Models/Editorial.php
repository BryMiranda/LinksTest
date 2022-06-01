<?php

namespace App;

use App\Models\Tag;

class Editorial extends Tag
{
    public function getName()
    {
        return $this->description;
    }
}
