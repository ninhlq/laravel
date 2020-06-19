<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'addressLine1',
        'phone',
        'contact_firstName',
        'contact_lastname',
        'city',
        'customer_name',
        'country',
    ];
  
}
