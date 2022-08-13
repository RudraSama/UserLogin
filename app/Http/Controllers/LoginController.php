<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    //
    public function create(){
        $user = \request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'location' => 'required',
            'phone' => 'required',
            'password' => 'required|min:8'
        ]);
        $user['password'] = bcrypt($user['password']);
        $user['isAdmin'] = 0;
        User::create($user);
        return redirect()->back()->withErrors(['msg' => 'Account Created, use your email and password to login']);


    }
    public function login(){
        $attributes = \request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if (auth()->attempt($attributes)){
            return redirect('/dashboard');
        }
        throw ValidationException::withMessages([
            'message' => 'Your provided credentials could not be verified'
        ]);

    }
    public function destory(){
        auth()->logout();
        return redirect('/');
    }
}
