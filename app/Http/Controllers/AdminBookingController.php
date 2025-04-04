<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class AdminBookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with(['user', 'service'])->latest()->paginate(10);
        return view('admin.bookings.index', compact('bookings'));
    }

    public function approve(Booking $booking)
    {
        $booking->update(['status' => 'confirmed']);
        return back()->with('success', 'Booking confirmed!');
    }

    public function reject(Booking $booking)
    {
        $booking->update(['status' => 'cancelled']);
        return back()->with('success', 'Booking cancelled!');
    }
}
