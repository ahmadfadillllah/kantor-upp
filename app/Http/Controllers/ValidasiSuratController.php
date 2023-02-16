<?php

namespace App\Http\Controllers;

use App\Models\ValidasiSurat;
use Illuminate\Http\Request;

class ValidasiSuratController extends Controller
{
    public function index()
    {
        // $validasi = ValidasiSurat::all();
        return view('admin.validasi_surat.index');
    }
}
