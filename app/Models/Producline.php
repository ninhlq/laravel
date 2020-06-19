<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class producline extends Model
{
    protected $fillable = [
        'product_line',
        'text_description',
        'html_description',
        'phone',];
    }
