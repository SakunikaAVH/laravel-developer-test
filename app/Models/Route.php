<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'node_one',
        'node_two',
        'route_number',
        'distance',
        'time',
    ];

    public function busRoutes()
    {
        return $this->belongsToMany(Bus::class, 'bus_routes', 'route_id', 'bus_id');
        // belongsToMany is used for many to many relationships, second parameter is the name of the pivot table, 
        // 3rd parameter is the column name in pivot table which maps with the current model id, 
        // 4th parameter is the column name in pivot table which maps with the other related model id.
    }

}
