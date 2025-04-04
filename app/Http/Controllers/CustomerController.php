<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = User::whereHas('bookings')->get();
        return view('admin.customer.index', compact('customers'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $customer = User::whereHas('bookings')->findOrFail($id);
        // $category = Service::findOrFail($customer->category_id);
        // $service = Service::findOrFail($customer->service_id);
        // $desciption = Service::findOrFail($customer->desciption);
        // return view('admin.customer.show', compact('customer'));
        // dd('show page');
        $customer = User::with([
            'bookings.service.serviceCategory',
            'bookings.service.serviceType'
        ])->findOrFail($id);


        return view('admin.customer.show', compact('customer'));

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
