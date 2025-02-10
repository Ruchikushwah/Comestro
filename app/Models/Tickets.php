<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Tickets extends Model
{
    protected $guarded = [];
    
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function problemCategory():BelongsTo
    {
        return $this->belongsTo(ProblemCategory::class, 'problem_category_id');
    }

    public function messages():HasMany{
        return $this->hasMany(Messages::class,"ticket_id","id");
    }
}
