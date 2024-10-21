<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Transaksi extends Controller
{
    public function index()
    {
        session(['active' => 'transaksi']);
        session(['page_title' => 'Transaksi']);
        return view('transaksi'); // Ganti dengan nama view Anda
    }
}
