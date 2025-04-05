<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Validation\ValidationException;
class AdminLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.auth.login');
    }

    public function store()
{
    $attributes = request()->validate([
        'email' => ['email', 'required'],
        'password' => 'required',
    ]);

    if(!Auth::guard('admin')->attempt($attributes)){
        throw ValidationException::withMessages([
            'email'=> 'Admin credentials do not match',
        ]);
    }

    request()->session()->regenerate();
    //potential error
    return redirect('/dashboard');
}

    public function destroy()
    {
        Auth::guard('admin')->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/admin-login');
    }
}
