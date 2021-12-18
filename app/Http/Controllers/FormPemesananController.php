<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormPemesanan;

class FormPemesananController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pelanggan.pemesanan');
    }
}
