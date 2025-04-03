<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Models\ServiceType;
use App\Models\Service;
use App\Models\Review;
class ServiceController extends Controller
{


    public function index()
    {
        // Get all categories
        $categories = ServiceCategory::all();

        // For each category, get the service types associated with it via services
        foreach ($categories as $category) {
            // Get all unique service types linked to this category through services
            $category->types = ServiceType::whereHas('services', function ($query) use ($category) {
                $query->where('service_category_id', $category->id);
            })->paginate(9);
        }

        return view('public.services.services-home', compact('categories'));
    }

    public function showType($id,$category_id)
    {
        $type = ServiceType::findOrFail($id);
        $services = Service::where('service_type_id', $id)->where('service_category_id',$category_id)->get();
        return view('public.services.index', [
            'services' => $services,
            'type' => $type,
        ]);
    }

    public function show(Service $service)
    {
        return view('public.services.show', [
            'service' => $service,
        ]);
    }

        public function store(Request $request)
        {
            // Validate the request
            $request->validate([
                'service_id' => 'required|exists:services,id',
                'quantity' => 'required|integer|min:1',
                'price_at_booking' => 'required|numeric'
            ]);

            // Get the authenticated user's ID
            $userId = Auth::id();

            // Check if user is authenticated
            if (!$userId) {
                return redirect()->route('login')->with('error', 'Please login to book a service');
            }

            // Get the service
            $service = Service::findOrFail($request->service_id);

            // Check if enough seats are available
            if ($service->total_available_seats < $request->quantity) {
                return back()->with('error', 'Not enough seats available');
            }

            // Create the booking
            $booking = new Booking();
            $booking->user_id = $userId;
            $booking->service_id = $request->service_id;
            $booking->quantity = $request->quantity;
            $booking->price_at_booking = $request->price_at_booking;
            $booking->status = 'pending';
            $booking->payment_status = 'pending';
            $booking->save();

            // Update available seats
            $service->total_available_seats -= $request->quantity;
            $service->save();

            return redirect('/');
        }

        public function search(Request $request)
        {
            // Get the currently active service type (if any)
            $type = null;
            if ($request->has('type_id')) {
                $type = ServiceType::findOrFail($request->type_id);
            } else {
                // Use the first service type as default if none specified
                $type = ServiceType::first();
            }

            // Start with a base service selection
            $servicesBuilder = Service::select('*');

            // Apply service type filter if it exists
            if ($type) {
                $servicesBuilder->where('service_type_id', $type->id);
            }

            // Apply location filter if provided
            if ($request->filled('location')) {
                $servicesBuilder->where('location', 'LIKE', '%' . $request->location . '%');
            }

            // Apply date range filter
            if ($request->filled('date_from') || $request->filled('date_to')) {
                // Default values if only one date is provided
                $dateFrom = $request->filled('date_from') ? $request->date_from : '1900-01-01';
                $dateTo = $request->filled('date_to') ? $request->date_to : '2099-12-31';

                // Find services where the service period overlaps with the requested period
                // For overlap to occur: service_start <= requested_end AND service_end >= requested_start
                $servicesBuilder->where(function($builder) use ($dateFrom, $dateTo) {
                    $builder->whereNotNull('start_datetime')
                            ->whereNotNull('end_datetime')
                            ->whereDate('start_datetime', '<=', $dateTo)  // Service starts before or on the requested end date
                            ->whereDate('end_datetime', '>=', $dateFrom); // Service ends after or on the requested start date
                });
            }

            // Get paginated results
            $services = $servicesBuilder->paginate(9);

            // Return view with services and type
            return view('public.services.index', compact('services', 'type'));
        }
}
