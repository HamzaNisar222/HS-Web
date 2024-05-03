<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function families()
    {
        return $this->hasMany(Family::class);
    }
}
