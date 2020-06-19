<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    protected $fillable = [
        'order_number',
        'product_code',
        'quantityOrdered',
        'priceEach',];}
