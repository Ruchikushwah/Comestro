<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'quote_owner_id',
        'subject',
        'quote_stage',
        'team',
        'carrier',
        'deal_name',
        'valid_until',
        'contact_id',
        'account_id',
        'billing_street',
        'billing_city',
        'billing_state',
        'billing_code',
        'billing_country',
        'shipping_street',
        'shipping_city',
        'shipping_state',
        'shipping_code',
        'shipping_country',
        'sub_total',
        'discount',
        'tax',
        'total'
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'quote_owner_id');
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
    public function items()
    {
        return $this->hasMany(QuoteItem::class);
    }


    // public function account()
    // {
    //     return $this->belongsTo(Account::class);
    // }
}
