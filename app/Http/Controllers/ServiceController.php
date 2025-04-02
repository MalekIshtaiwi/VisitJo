<?php

namespace App\Http\Controllers;

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
            })->get();
        }

        return view('public.services.services-home', compact('categories'));
    }

    public function showType($id){
        $type = ServiceType::findOrFail($id);
        $services = Service::where('service_type_id', $id)->get();
        return view('public.services.index',[
            'services' => $services,
            'type' => $type,
        ]);
    }

    public function show(Service $service){
        return view('public.services.show',[
            'service'  => $service,
        ]);
    }
}
