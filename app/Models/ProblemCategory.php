<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProblemCategory extends Model
{
    protected $guarded = [];

    public function tickets()
    {
        return $this->hasMany(Tickets::class);
    }
}
