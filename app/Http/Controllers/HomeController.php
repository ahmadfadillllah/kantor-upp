<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home.index');
    }

    public function kontak()
    {
        return view('home.kontak');
    }

    public function kontak_post(Request $request)
    {
        // dd($request->all());

        try {
            Kontak::create([
                'nama_lengkap' => $request->nama_lengkap,
                'email' => $request->email,
                'no_hp' => $request->no_hp,
                'subject' => $request->subject,
                'pesan' => $request->pesan,
            ]);

            return redirect()->back()->with('success', 'Pesan telah terkirim, terimakasih');
        } catch (\Throwable $th) {
            return redirect()->back()->with('success', $th->getMessage());
        }
    }
}
