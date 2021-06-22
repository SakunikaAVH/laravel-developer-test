<?php

namespace App\Http\Controllers;

use App\Models\BusSeat;
use Illuminate\Http\Request;

class BusSeatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BusSeat::all();
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
            'bus_id' => 'required',
            'seat_number' => 'required',
            'price' => 'required',
        ]);
    
        return BusSeat::create([
            'bus_id' => request('bus_id'),
            'seat_number' => request('seat_number'),
            'price' => request('price'),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BusSeat  $busSeat
     * @return \Illuminate\Http\Response
     */
    public function show(BusSeat $busSeat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BusSeat  $busSeat
     * @return \Illuminate\Http\Response
     */
    public function edit(BusSeat $busSeat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BusSeat  $busSeat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusSeat $busSeat)
    {
        request()->validate([
            'bus_id' => 'required',
            'seat_number' => 'required',
            'price' => 'required',
        ]);
    
        $success = $busSeat->update([
            'bus_id' => request('bus_id'),
            'seat_number' => request('seat_number'),
            'price' => request('price'),
        ]);
    
        return [
            'success' => $success
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BusSeat  $busSeat
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusSeat $busSeat)
    {
        //
    }
}
