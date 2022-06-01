<?php

namespace App;

use App\Models\Tag;

class Themes extends Tag
{
    public function getThemes()
    {
        return $this->description;
    }
}
