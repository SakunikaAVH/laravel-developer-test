<?php

namespace App\Http\Controllers;

use App\Models\BusScheduleBooking;
use Illuminate\Http\Request;

class BusScheduleBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BusScheduleBooking::all();
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
            'bus_seat_id' => 'required',
            'user_id' => 'required',
            'bus_schedule_id' => 'required',
            'seat_number' => 'required',
            'price' => 'required',
            'status' => 'required',
        ]);
    
        return BusScheduleBooking::create([
            'bus_seat_id' => request('bus_seat_id'),
            'user_id' => request('user_id'),
            'bus_schedule_id' => request('bus_schedule_id'),
            'seat_number' => request('seat_number'),
            'price' => request('price'),
            'status' => request('status'),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BusScheduleBooking  $busScheduleBooking
     * @return \Illuminate\Http\Response
     */
    public function show(BusScheduleBooking $busScheduleBooking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BusScheduleBooking  $busScheduleBooking
     * @return \Illuminate\Http\Response
     */
    public function edit(BusScheduleBooking $busScheduleBooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BusScheduleBooking  $busScheduleBooking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusScheduleBooking $busScheduleBooking)
    {
        request()->validate([
            'bus_seat_id' => 'required',
            'user_id' => 'required',
            'bus_schedule_id' => 'required',
            'seat_number' => 'required',
            'price' => 'required',
            'status' => 'required',
        ]);
    
        $success = $busScheduleBooking->update([
            'bus_seat_id' => request('bus_seat_id'),
            'user_id' => request('user_id'),
            'bus_schedule_id' => request('bus_schedule_id'),
            'seat_number' => request('seat_number'),
            'price' => request('price'),
            'status' => request('status'),
        ]);
    
        return [
            'success' => $success
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BusScheduleBooking  $busScheduleBooking
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusScheduleBooking $busScheduleBooking)
    {
        //
    }
}
