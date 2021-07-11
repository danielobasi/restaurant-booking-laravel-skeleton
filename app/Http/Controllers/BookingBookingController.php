<?php

namespace App\Http\Controllers;

use App\Models\BookingBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //all variables from request can be got from the $request object
        //To get authenticated user object for auth protected rout use Auth::user()

        //get all bookings
        $data['bookings'] = BookingBooking::all();

        //get user bookings
        //$data['bookings'] = BookingBooking::where('user_id',Auth::user()->getAuthIdentifier())->get();

        //get user bookings in pages of 20 items
        //$data['bookings'] = BookingBooking::where('user_id',Auth::user()->getAuthIdentifier())->paginate(20);


        //uncomment return statement line.
        //put in the blade file that has the html template from resources/views folder
        //do not include extension .blade.php

        //return view('bookinglist',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //uncomment return statement line.
        //return the view that has the form to make a booking
        //return view('bookingform',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $booking = new BookingBooking();
        $booking->user_id = Auth::user()->getAuthIdentifier();
        //get the form variables from the request
        $booking->start_datetime = $request->startTime;
        $booking->end_datetime = $request->endTime;
        if ($booking->save()){
            return redirect()->back()->with('message','Booking created');
            //or return to any route
            return redirect()->route('nameofroute');
        }
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
        if ($booking = BookingBooking::where('id',$bookingBooking->id)->where('user_id',Auth::user()->getAuthIdentifier())->first()){
            //uncomment this line when you have added your template that displays a single booking
            //remember to update the name
            //return view('bookingform',$data);

        }

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
        if($booking = BookingBooking::where('id',$bookingBooking->id)
            ->where('user_id',Auth::user()->getAuthIdentifier())->first()){

            $booking = new BookingBooking();
            $booking->user_id = Auth::user()->getAuthIdentifier();
            //get the form variables from the request
            $booking->start_datetime = $request->startTime;
            $booking->end_datetime = $request->endTime;
            if ($booking->save()){
                return redirect()->back()->with('message','Booking updated');
            }

        }else{
            //booking not found or not your booking, can't modify
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookingBooking  $bookingBooking
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookingBooking $bookingBooking)
    {
        if ($booking = BookingBooking::where('id',$bookingBooking->id)->where('user_id',Auth::user()->getAuthIdentifier())->first()){
            $booking->delete();
            return redirect()->back()->with('message','Booking deleted');

        }else{
            //booking not found or not your booking, can't delete
        }
    }
}
