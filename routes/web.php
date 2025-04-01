<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

//Landing Page Route
Route::get("/", function () {
    return view("public.index");
})->name('/');



Route::get("/about", function () {
    return view("public.about");
})->name('about');


//Services routes
Route::get("/services-home",[ServiceController::class,'index'])->name('services-home');
Route::get("/index{id}",[ServiceController::class,'showType']);
Route::get("services/show{service}",[ServiceController::class,'show']);

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
