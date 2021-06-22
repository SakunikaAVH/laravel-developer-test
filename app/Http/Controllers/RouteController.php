<?php

namespace App\Http\Controllers;

use App\Models\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Route::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'node_one' => 'required',
            'node_two' => 'required',
            'route_number' => 'required',
            'distance' => 'required',
            'time' => 'required',
        ]);
    
        return Route::create([
            'node_one' => request('node_one'),
            'node_two' => request('node_two'),
            'route_number' => request('route_number'),
            'distance' => request('distance'),
            'time' => request('time'),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function show(Route $route)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function edit(Route $route)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Route $route)
    {
        request()->validate([
            'node_one' => 'required',
            'node_two' => 'required',
            'route_number' => 'required',
            'distance' => 'required',
            'time' => 'required',
        ]);
    
        $success = $route->update([
            'node_one' => request('node_one'),
            'node_two' => request('node_two'),
            'route_number' => request('route_number'),
            'distance' => request('distance'),
            'time' => request('time'),
        ]);
    
        return [
            'success' => $success
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function destroy(Route $route)
    {
        //
    }
}
