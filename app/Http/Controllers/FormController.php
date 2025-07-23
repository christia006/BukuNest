<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function register()
    {
        return view('auth.register'); // tampilkan form register
    }

    public function welcome(Request $request)
    {
        // Simpan data ke session atau database (contoh session)
        session([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'gender' => $request->input('gender'),
            'nationality' => $request->input('nationality'),
            'languages' => $request->input('language', []),
            'bio' => $request->input('bio'),
        ]);

        // Redirect ke login page
        return redirect()->route('login')->with('success', 'Register success! Please login.');
    }

    public function login()
    {
        return view('auth.login'); // tampilkan halaman login
    }

    public function doLogin(Request $request)
    {
        // Contoh login sederhana (hardcode, nanti ganti pakai Auth)
        $email = $request->input('email');
        $password = $request->input('password');

        if($email === 'user@example.com' && $password === 'password') {
            // Simpan session user
            session(['logged_in' => true, 'user_email' => $email]);

            // Redirect ke home page (pakai app.blade.php template)
            return redirect()->route('home');
        }

        return redirect()->route('login')->with('error', 'Email or password incorrect');
    }
}
