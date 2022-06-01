<?php

namespace App;

use App\Models\Tag;

class Character extends Tag
{
    public function getName()
    {
        return $this->description;
    }
}
