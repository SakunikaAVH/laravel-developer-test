<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusSchedule extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function busRoute()
    {
        return $this->hasOne(BusRoute::class, 'id', 'bus_route_id');
    }

    public function busScheduleBookings()
    {
        return $this->hasMany(BusScheduleBooking::class);
    }

}
