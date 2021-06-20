<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusScheduleBooking extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function busSeats()
    {
        return $this->hasMany(BusSeat::class);
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function busSchedule()
    {
        return $this->hasOne(BusSchedule::class, 'id', ' bus_schedule_id');
    }

}
