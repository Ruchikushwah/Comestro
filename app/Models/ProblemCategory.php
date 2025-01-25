<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProblemCategory extends Model
{
    protected $guarded = [];

    public function tickets():HasMany
    {
        return $this->hasMany(Tickets::class);
    }
}
