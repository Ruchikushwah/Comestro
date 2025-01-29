<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Tickets extends Model
{
    protected $guarded = [];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function problemCategory():HasOne
    {
        return $this->hasOne(ProblemCategory::class, 'id', 'problem_category_id');
    }
}
