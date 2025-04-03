<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{

    public function index()
    {
        // Get the authenticated user's ID
        $userId = Auth::id();

        // Retrieve pending bookings with related service data
        $pendingBookings = Booking::where('user_id', $userId)
            ->where('status', 'pending')
            ->with('service')
            ->latest()
            ->get();

        // Calculate subtotal (sum of all services' prices * quantities)
        $subtotal = $pendingBookings->sum(function($booking) {
            return $booking->price_at_booking * $booking->quantity;
        });

        // Calculate tax (assuming 12% tax rate)
        $taxRate = 0.12;
        $taxAmount = $subtotal * $taxRate;

        // Calculate total
        $total = $subtotal + $taxAmount;

        return view('public.bookings.index', compact('pendingBookings', 'subtotal', 'taxAmount', 'total'));
    }

    public function destroy($id)
{
    // Find the booking that belongs to the current user
    $booking = Booking::where('id', $id)
        ->where('user_id', Auth::id())
        ->firstOrFail();

    // Delete the booking
    $booking->delete();

    return redirect()->route('bookings.index')
        ->with('success', 'Item removed from cart successfully');
}
}
