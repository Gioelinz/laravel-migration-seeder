<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $fillable = [
        'company',
        'departure_station',
        'arrive_station',
        'departure_hour',
        'arrive_hour',
        'train_code',
        'carriages',
        'in_time',
        'cancelled',
    ];
}
