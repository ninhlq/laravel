<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'product_name',
        'product_line',
        'product_scale',
        'product_vendor',
        'product_description',
        'quantity_stock',
        'buy_price',
        'MSRP',
    ];
}
