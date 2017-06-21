<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SemuaProdukController extends Controller
{
    public function semua_produk()
	{
    return view('semua');
	}
}
