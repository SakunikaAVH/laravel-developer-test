<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function busRoute()
    {
        return $this->hasOne(BusRoute::class, 'id', 'bus_route_id');
    }

    public function busSeates()
    {
        return $this->hasMany(BusSeat::class);
    }

}
