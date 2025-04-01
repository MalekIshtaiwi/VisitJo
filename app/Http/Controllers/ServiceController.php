<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Models\ServiceType;
class ServiceController extends Controller
{
    public function index(){
        $serviceCategory = ServiceCategory::get();

    }
}
