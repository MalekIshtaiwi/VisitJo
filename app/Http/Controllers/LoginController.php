<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create(){
        return view('public.auth.login');
    }

    public function store(){
        //validate
       $attributes =  request()->validate([
            'email' => ['email' , 'required'],
            'password' => 'required',
        ]);
        //attempt
        if(!Auth::attempt($attributes)){
            throw ValidationException::withMessages([
                'email'=> 'Sorry, those credentials do not match',
            ]);
    }
    request()->session()->regenerate();
    //redirect
    return redirect('/');
}

    public function destroy(){
        Auth::logout();

        return redirect('/');
    }
}
