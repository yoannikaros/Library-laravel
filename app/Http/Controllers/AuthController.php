<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{

    public function handleLogin(Request $request)
    {
        if (Auth::guard('member')->attempt($request->only('email', 'password'), $request->remember)) {
            return redirect()->intended();
        } else {
            throw ValidationException::withMessages([
                'error' => 'Kredensial yang Anda berikan tidak dapat diverifikasi.'
            ]);
        }

        return redirect()->back();
    }

    public function logout()
    {
        Auth::guard('member')->logout();
        return redirect(route('login'));
    }


    public function login()
    {
        return view('member.auth.login');
    }

    public function register()
    {
        return view('member.auth.register');
    }
}
