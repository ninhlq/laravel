<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $fillable = [
        'lastname',
        'firtname',
        'jobTitle',
        'email',];
}
