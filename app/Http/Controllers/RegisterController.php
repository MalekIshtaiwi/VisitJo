<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function create(){
        return view('public.auth.register');
    }

    public function store(){
        //validate
        $attributes = request()->validate([
            'name' => ['required'],
            'email'=> ['email','required'],
            'password'=> ['required', Password::min(8), 'confirmed'],
        ]);

        $user = User::create($attributes);

        Auth::login($user);

        return redirect('/');
    }
}
