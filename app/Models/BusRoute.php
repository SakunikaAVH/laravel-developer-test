<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusRoute extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function route()
    {
        return $this->hasOne(Route::class, 'id', 'route_id');
    }

    public function buses()
    {
        return $this->hasMany(Bus::class);
    }

    public function busSchedules()
    {
        return $this->hasMany(BusSchedule::class);
    }

}
