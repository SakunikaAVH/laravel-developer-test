<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'type',
        'vehicle_number',
    ];

    public function busRoutes()
    {
        return $this->belongsToMany(Route::class, 'bus_routes', 'bus_id', 'route_id');
        // belongsToMany is used for many to many relationships, second parameter is the name of the pivot table, 
        // 3rd parameter is the column name in pivot table which maps with the current model id, 
        // 4th parameter is the column name in pivot table which maps with the other related model id.
    }

    public function busSeates()
    {
        return $this->hasMany(BusSeat::class);
    }

}
