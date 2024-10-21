<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabelUser extends Controller
{
    public function index()
    {
        session(['active' => 'table_user']);
        session(['page_title' => 'Tabel User']);
        return view('table_user'); // Ganti dengan nama view Anda
    }
}
