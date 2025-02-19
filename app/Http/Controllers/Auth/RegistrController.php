<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrController
{
    public function create(){
        return view('auth.register');
    }

    public function store(Request $request){

        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);

        Auth::login($user);
        return redirect('/products');
    }
}
