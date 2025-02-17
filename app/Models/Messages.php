<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{

    protected $guarded = [];

    public function ticket(){
        $this->belongsTo(Tickets::class, "id","ticket_id");
    }
}
