<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
    return view( 'auth.login'); // Ganti dengan nama view Anda
    }

    public function login_proses(Request $request)
{
    $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    // Pastikan membandingkan dengan teks biasa
    if ($user && $user->password === $request->password) {
        Auth::login($user);
        return redirect()->route('dashboard');
    } else {
        return redirect()->back()->with('failed', 'Email atau password salah.');
    }
}

}
