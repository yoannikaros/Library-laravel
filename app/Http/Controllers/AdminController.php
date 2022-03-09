<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function handleLogin(Request $request)
    {

        if (Auth::attempt($request->only('username', 'password'), $request->remember)) {
            return redirect()->intended();
        }

        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('adminLogin'));
    }

    public function login()
    {
        return view('admin.auth.login');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
