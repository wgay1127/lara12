<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogInController extends Controller
{
    public function login(Request $request)
        {
            $credentials = $request->only('email', 'password');
                if (Auth::attempt($credentials)) {
                    $request->session()->regenerate();
                    return redirect()->intended('admin');
                }
            return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
        }
        public function showloginform()
        {
            return view('login');
        }
}
