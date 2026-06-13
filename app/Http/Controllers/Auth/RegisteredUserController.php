<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(Request $request){
        $request->validate([
            'username' => ['required', 'regex:/^[^0-9]/', 'min:3', 'max:25'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);
        
        $user = User::create([
            'name' => request()->username,
            'email' => request()->email,
            'password' => Hash::make(request()->password),
        ]);

        Auth::login($user);

        return redirect(route('ideasIndex'));
    }
}
