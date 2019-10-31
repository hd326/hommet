<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyImages extends Model
{
    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
