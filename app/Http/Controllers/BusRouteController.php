<?php

namespace App\Http\Controllers;

use App\Models\BusRoute;
use Illuminate\Http\Request;

class BusRouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BusRoute::all();
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
            'bus_id' => 'required|exists:buses,id',
            'route_id' => 'required|exists:routes,id',
            'status' => 'required',
        ]);
    
        return BusRoute::create([
            'bus_id' => request('bus_id'),
            'route_id' => request('route_id'),
            'status' => request('status'),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BusRoute  $busRoute
     * @return \Illuminate\Http\Response
     */
    public function show(BusRoute $busRoute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BusRoute  $busRoute
     * @return \Illuminate\Http\Response
     */
    public function edit(BusRoute $busRoute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BusRoute  $busRoute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusRoute $busRoute)
    {
        request()->validate([
            'bus_id' => 'required|exists:buses,id',
            'route_id' => 'required|exists:routes,id',
            'status' => 'required',
        ]);
    
        $success = $busRoute->update([
            'bus_id' => request('bus_id'),
            'route_id' => request('route_id'),
            'status' => request('status'),
        ]);
    
        return [
            'success' => $success
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BusRoute  $busRoute
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusRoute $busRoute)
    {
        $success = $busRoute->delete();

        return [
            'success' => $success
        ];
    }
}
