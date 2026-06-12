<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(Request $request){
        $request->validate([
            'username' => ['required', 'regex:/^[^0-9]/', 'min:3'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
            'password2' => ['required', 'same:password']
        ]);
        dd($request);
    }
}
