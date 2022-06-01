<?php

namespace App\Models;

use App\Models\Tag;

class Content extends Tag
{
    public function getContent()
    {
        return $this->description;
    }
}
