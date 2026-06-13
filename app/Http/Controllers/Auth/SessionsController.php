<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SessionsController extends Controller
{
   
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]);

        if(Auth::attempt($validate)){
            $request->session()->regenerate();
            return redirect(route('ideasIndex'));
        }

        return back()->withErrors([
            'password' => 'wrong creds'
        ]);
    }

    public function destroy()
    {
        Auth::logout();

        return redirect(route('ideasIndex'));
    }
}
