<?php

namespace App\Http\Controllers;

use App\Models\DaftarSurat;
use Illuminate\Http\Request;

class AppController extends Controller
{
    //
    public function index()
    {
        return view('app.dashboard.index');
    }

    public function buat_surat()
    {
        $surat = DaftarSurat::all();
        return view('app.buat_surat.index', compact('surat'));
    }

    public function layanan()
    {
        return view('app.layanan.index');
    }
}
