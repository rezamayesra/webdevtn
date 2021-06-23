<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $data = [
            'username' => $request->username,
            'password' => $request->password
        ];
        
        $admin = [
            'driver' => $request->session,
            'provider' => $request->admin
        ];

        $user = Auth::attempt($admin);
        if(Auth::check()){
            return redirect()->route('company.dashboard');
        }else{
            return back();
        }

        $user = Auth::attempt($data);
        if(Auth::check()){
            return redirect()->route('company.dashboard');
        }else{
            return back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
