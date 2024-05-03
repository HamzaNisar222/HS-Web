<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function family()
    {
        return $this->belongsTo(Family::class);
    }
}
