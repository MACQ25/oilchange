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
        'previous_oil_change_date' => 'date'
    ];

    public function needsOilChange(): bool
    {
        $milesDiff = $this -> current_odometer - $this-> previous_odometer;
        $timeDiff = $this -> previous_oil_change_date -> diffInMonths(now(), false);

        return $milesDiff >= 5000 || $timeDiff >= 6;
    }
}
