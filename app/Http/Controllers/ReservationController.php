<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        Auth::user()->reservations()->create([
            'room_id' => $request->room_id,
            'phone_number' => $request->phone_number
        ]);

        return redirect('/sendMessage/'.$request->phone_number);
        return $request;
        $notification = array(
            'message' => 'Your Reservation created',
            'alert-type' => 'success'
        );
    }


    public function your_reservations()
    {
        $rooms = Auth::user()->rooms;

        return view('reservations.your_reservations', compact('rooms'));
    }

    public function your_trips()
    {
        $trips = Auth::user()->reservations;

        return view('reservations.your_trips', compact('trips'));
    }
}
