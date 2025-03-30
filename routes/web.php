<?php


use Illuminate\Support\Facades\Route;


Route::get("/", function () {
    return view("public.index");
})->name('/');

Route::get("/about", function () {
    return view("public.about");
})->name('about');

Route::get("/services", function () {
    return view("public.services.services-home");
})->name('services-home');

Route::get("/service", function () {
    return view(view: "public.services.show");
})->name('service');


Route::get("/contact", function () {
    return view("public.contact");
})->name('contact');

Route::get("/profile", function () {
    return view("public.profile");
})->name('profile');
