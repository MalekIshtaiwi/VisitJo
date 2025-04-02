<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
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


//Auth
Route::get('/register',[RegisterController::class,'create'])->name('register');

Route::post('/register',[RegisterController::class,'store'])->name('registerBtn');

Route::get('/login',[LoginController::class,'create'])->name('login');

Route::post('/login',[LoginController::class,'store'])->name('loginBtn');

Route::post('/logout',[LoginController::class,'destroy'])->name('logout');

//Profile

Route::resource('profile',ProfileController::class)->middleware('auth');
