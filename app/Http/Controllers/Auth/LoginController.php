<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin.index'); 
            } else {
                return redirect()->route('dashboard'); 
            }
        }

        return back()->with('error', 'Invalid credentials.');
    }
}
