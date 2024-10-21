<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabelBarang extends Controller
{
    public function index()
    {
        session(['active' => 'table_barang']);
        session(['page_title' => 'Tabel Barang']);
        return view('table_barang'); // Ganti dengan nama view Anda
    }
}
