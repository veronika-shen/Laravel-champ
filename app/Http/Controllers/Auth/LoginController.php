<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController
{
    public function login(Request $request){
        return view('auth.login');
    }

    public function register(Request $request)
    {
        return view('auth.register');
    }

    public function authenticate(Request $request){
        $arr = $request->only(['email', 'password']);
        Auth::attempt($arr);
        return redirect()->route('products.index');
    }

    public function registerCreate(Request $request)
    {
        $user = User::create($request->only(['email', 'password', 'name']));
        Auth::login($user);
        return redirect()->route('products.index');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('products.index');
    }
}
