<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'organization' => 'required|string|max:255',
            'activity' => 'required|string|max:255',
            'scale' => 'required|string',
            'date' => 'required|date|unique:bookings,date',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $booking = new Booking;
        $booking->name = $request->name;
        $booking->organization = $request->organization;
        $booking->activity = $request->activity;
        $booking->scale = $request->scale;
        $booking->date = $request->date;
        $booking->save();

        return response()->json(['success' => 'Booking berhasil!'], 200);
    }
}