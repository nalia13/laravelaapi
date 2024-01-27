<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'street',
        'city_country'
    ];
}
