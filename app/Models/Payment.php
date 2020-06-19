<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
    'customer_number',
    'checkNumber',
    'payment_date',
    'amount',];
}
