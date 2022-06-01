<?php

namespace App;

use App\Models\Tag;

class Content extends Tag
{
    public function getContent()
    {
        return $this->description;
    }
}
