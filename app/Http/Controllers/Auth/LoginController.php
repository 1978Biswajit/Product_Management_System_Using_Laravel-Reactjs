<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/dashboard'); // লগইন সফল হলে
        }

        return back()->withErrors(['email' => 'Invalid credentials']); // ভুল হলে
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}

