<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderLine extends Model
{

    protected $fillable = [
        'product_id', 'order_id', 'quantity', 'amount',
    ];

    public function order()
    {
        return $this->belongsTo('App\Order');
    }

}