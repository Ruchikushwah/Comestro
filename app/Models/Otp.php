<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Otp extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'otp', 'otp_expires_at'];
    public function isExpired(): bool
    {
        return Carbon::now()->greaterThan($this->otp_expires_at);
    }
}
