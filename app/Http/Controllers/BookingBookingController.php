<?php

namespace App\Http\Controllers;

use App\Models\BookingBooking;
use Illuminate\Http\Request;

class BookingBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //TO get authenticated user object for auth protected rout use Auth::user()
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookingBooking  $bookingBooking
     * @return \Illuminate\Http\Response
     */
    public function show(BookingBooking $bookingBooking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookingBooking  $bookingBooking
     * @return \Illuminate\Http\Response
     */
    public function edit(BookingBooking $bookingBooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BookingBooking  $bookingBooking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookingBooking $bookingBooking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookingBooking  $bookingBooking
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookingBooking $bookingBooking)
    {
        //
    }
}
