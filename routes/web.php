<?php


use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

//Landing Page Route
Route::get("/", function () {
    return view("public.index");
})->name('/');



Route::get("/about", function () {
    return view("public.about");
})->name('about');


//Services routes
Route::get("/services-home", function () {
    return view("public.services.services-home");
})->name('services-home');

Route::get("/services", function () {
    return view("public.services.index");
})->name('services');

Route::get("/service", function () {
    return view(view: "public.services.show");
})->name('service');


//Contact Routes
Route::get("/contact", function () {
    return view("public.contact");
})->name('contact');


//Profile Routes
Route::get("/profile", function () {
    return view("public.profile");
})->name('profile');

Route::resource('admin',AdminController::class);
