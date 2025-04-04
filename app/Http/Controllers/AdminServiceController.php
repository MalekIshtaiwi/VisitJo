<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceType;
use Illuminate\Http\Request;

class AdminServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = ServiceCategory::with('services.serviceType')->get();
        return view("admin.services.index", compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = ServiceCategory::all();
        $types = ServiceType::all();

        return view('admin.services.create', compact('categories', 'types',));
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(StoreServiceRequest $request)
     {

         $category = ServiceCategory::where('name', $request->category_name)->firstOrFail();

         // Create a new Service instance
         $service = new Service();
         $service->service_category_id = $category->id;
         $service->service_type_id = $request->service_type_id;
         $service->name = $request->name;
         $service->description = $request->description;
         $service->price = $request->price;
         $service->start_datetime = $request->start_datetime;
         $service->end_datetime = $request->end_datetime;
         $service->location = $request->location;
         $service->total_available_seats = $request->total_available_seats;

         // Handle image upload if provided
         if ($request->hasFile('image_path')) {
             $service->image_path = $request->file('image_path')->store('services', 'public');
         }

         $service->save();

         return redirect()->route('services.index')->with('success', 'Service added successfully!');
     }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
