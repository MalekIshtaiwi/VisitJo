<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WishlistItem;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{


    public function index()
    {
        // Get the authenticated user's ID
        $userId = Auth::id();

        if (!$userId) {
            return redirect()->route('login')->with('error', 'Please login to book a service');
        }
        // Retrieve wishlist items with their associated services
        $wishlistItems = WishlistItem::where('user_id', $userId)
            ->with('service')
            ->get();

        // Extract the services from the wishlist items for the view
        $services = $wishlistItems->map(function($item) {
            return $item->service;
        });

        return view('public.wishlist.index', compact('services'));
    }

    public function destroy($serviceId)
    {
        $userId = Auth::id();

        WishlistItem::where('user_id', $userId)
            ->where('service_id', $serviceId)
            ->delete();

        return redirect()->route('wishlist.index')
            ->with('success', 'Service removed from wishlist successfully');
    }
    public function addToWishlist(Request $request)
    {
        $serviceId = $request->input('service_id');

        // Check if item already exists in wishlist
        $existingItem = WishlistItem::where('user_id', Auth::id())
            ->where('service_id', $serviceId)
            ->first();

        if ($existingItem) {
            // Item already in wishlist - you could remove it (toggle functionality)
            $existingItem->delete();
            return redirect()->back()->with('success', 'Item removed from wishlist');
        } else {
            // Add new item to wishlist
            WishlistItem::create([
                'user_id' => Auth::id(),
                'service_id' => $serviceId
            ]);
            return redirect()->back()->with('success', 'Item added to wishlist');
        }
    }
}
