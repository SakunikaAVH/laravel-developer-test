<?php

namespace App\Http\Controllers;

use App\Models\BusSchedule;
use Illuminate\Http\Request;

class BusScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BusSchedule::all();
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
            'bus_route_id' => 'required|exists:bus_routes,id',
            'direction' => 'required',
            'start_timestamp' => 'required',
            'end_timestamp' => 'required',
        ]);
    
        return BusSchedule::create([
            'bus_route_id' => request('bus_route_id'),
            'direction' => request('direction'),
            'start_timestamp' => request('start_timestamp'),
            'end_timestamp' => request('end_timestamp'),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BusSchedule  $busSchedule
     * @return \Illuminate\Http\Response
     */
    public function show(BusSchedule $busSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BusSchedule  $busSchedule
     * @return \Illuminate\Http\Response
     */
    public function edit(BusSchedule $busSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BusSchedule  $busSchedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusSchedule $busSchedule)
    {
        request()->validate([
            'bus_route_id' => 'required|exists:bus_routes,id',
            'direction' => 'required',
            'start_timestamp' => 'required',
            'end_timestamp' => 'required',
        ]);
    
        $success = $busSchedule->update([
            'bus_route_id' => request('bus_route_id'),
            'direction' => request('direction'),
            'start_timestamp' => request('start_timestamp'),
            'end_timestamp' => request('end_timestamp'),
        ]);
    
        return [
            'success' => $success
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BusSchedule  $busSchedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusSchedule $busSchedule)
    {
        $success = $busSchedule->delete();

        return [
            'success' => $success
        ];
    }
}
