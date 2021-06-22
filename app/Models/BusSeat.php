<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusSeat extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'bus_id',
        'seat_number',
        'price',
    ];

    public function bus()
    {
        return $this->hasOne(Bus::class, 'id', 'bus_id');
    }

    public function busScheduleBooking()
    {
        return $this->hasOne(BusScheduleBooking::class, 'id', 'bus_schedule_booking_id');
    }

}
