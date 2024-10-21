<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function dashboard()
    {
        session(['active' => 'dashboard']);
        session(['page_title' => 'Dashboard']);
        return view('dashboard'); // Ganti dengan nama view Anda
    }
}
