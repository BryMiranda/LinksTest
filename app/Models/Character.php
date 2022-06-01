<?php

namespace App\Models;

use App\Models\Tag;

class Character extends Tag
{
    public function getName()
    {
        return $this->description;
    }
}
