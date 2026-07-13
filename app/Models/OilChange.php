<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OilChange extends Model
{
    protected $fillable = [
        'current_odometer',
        'previous_oil_change_date',
        'previous_odometer'
    ];

    protected $casts = [
        'check_date' => 'date',
        'previous_oil_change_date' => 'date'
    ];
}
