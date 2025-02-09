<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuoteItem extends Model
{
    protected $fillable = ['quote_id', 'name', 'quantity', 'price'];

    public function quote()
    {
        return $this->belongsTo(Quote::class);
    }
}

