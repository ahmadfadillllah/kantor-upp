<?php

namespace App\Http\Controllers;

use App\Models\DaftarSurat;
use App\Models\Kontak;
use App\Models\RequestSurat;
use App\Models\User;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $user = User::all();
        $kontak = Kontak::all();
        $surat_masuk = RequestSurat::all()->where('status', 'Proses');
        $surat_keluar = RequestSurat::all()->where('status', 'Selesai');

        $suratmasuk_jan = RequestSurat::whereMonth('created_at', '1')
        ->where('status', 'Proses')->get()->count();

        $suratmasuk_feb = RequestSurat::whereMonth('created_at', '2')
        ->where('status', 'Proses')->get()->count();

        $suratmasuk_mar = RequestSurat::whereMonth('created_at', '3')
        ->where('status', 'Proses')->get()->count();

        $suratmasuk_apr = RequestSurat::whereMonth('created_at', '4')
        ->where('status', 'Proses')->get()->count();

        $suratmasuk_mei = RequestSurat::whereMonth('created_at', '5')
        ->where('status', 'Proses')->get()->count();

        $suratmasuk_jun = RequestSurat::whereMonth('created_at', '6')
        ->where('status', 'Proses')->get()->count();

        $suratmasuk_jul = RequestSurat::whereMonth('created_at', '7')
        ->where('status', 'Proses')->get()->count();

        $suratmasuk_agu = RequestSurat::whereMonth('created_at', '8')
        ->where('status', 'Proses')->get()->count();

        $suratmasuk_sep = RequestSurat::whereMonth('created_at', '9')
        ->where('status', 'Proses')->get()->count();

        $suratmasuk_okt = RequestSurat::whereMonth('created_at', '10')
        ->where('status', 'Proses')->get()->count();

        $suratmasuk_nov = RequestSurat::whereMonth('created_at', '11')
        ->where('status', 'Proses')->get()->count();

        $suratmasuk_des = RequestSurat::whereMonth('created_at', '12')
        ->where('status', 'Proses')->get()->count();

        $suratkeluar_jan = RequestSurat::whereMonth('created_at', '1')
        ->where('status', 'Selesai')->get()->count();

        $suratkeluar_feb = RequestSurat::whereMonth('created_at', '2')
        ->where('status', 'Selesai')->get()->count();

        $suratkeluar_mar = RequestSurat::whereMonth('created_at', '3')
        ->where('status', 'Selesai')->get()->count();

        $suratkeluar_apr = RequestSurat::whereMonth('created_at', '4')
        ->where('status', 'Selesai')->get()->count();

        $suratkeluar_mei = RequestSurat::whereMonth('created_at', '5')
        ->where('status', 'Selesai')->get()->count();

        $suratkeluar_jun = RequestSurat::whereMonth('created_at', '6')
        ->where('status', 'Selesai')->get()->count();

        $suratkeluar_jul = RequestSurat::whereMonth('created_at', '7')
        ->where('status', 'Selesai')->get()->count();

        $suratkeluar_agu = RequestSurat::whereMonth('created_at', '8')
        ->where('status', 'Selesai')->get()->count();

        $suratkeluar_sep = RequestSurat::whereMonth('created_at', '9')
        ->where('status', 'Selesai')->get()->count();

        $suratkeluar_okt = RequestSurat::whereMonth('created_at', '10')
        ->where('status', 'Selesai')->get()->count();

        $suratkeluar_nov = RequestSurat::whereMonth('created_at', '11')
        ->where('status', 'Selesai')->get()->count();

        $suratkeluar_des = RequestSurat::whereMonth('created_at', '12')
        ->where('status', 'Selesai')->get()->count();

        $semuaData = [
            $kontak->count(),
            $surat_masuk->count(),
            $surat_keluar->count(),
        ];

        $dataSuratMasuk = [
            $suratmasuk_jan,
            $suratmasuk_feb,
            $suratmasuk_mar,
            $suratmasuk_apr,
            $suratmasuk_mei,
            $suratmasuk_jun,
            $suratmasuk_jul,
            $suratmasuk_agu,
            $suratmasuk_sep,
            $suratmasuk_okt,
            $suratmasuk_nov,
            $suratmasuk_des
        ];

        $dataSuratKeluar = [
            $suratkeluar_jan,
            $suratkeluar_feb,
            $suratkeluar_mar,
            $suratkeluar_apr,
            $suratkeluar_mei,
            $suratkeluar_jun,
            $suratkeluar_jul,
            $suratkeluar_agu,
            $suratkeluar_sep,
            $suratkeluar_okt,
            $suratkeluar_nov,
            $suratkeluar_des
        ];

        return view('admin.dashboard.index', compact('user','kontak', 'surat_masuk', 'surat_keluar', 'semuaData', 'dataSuratMasuk', 'dataSuratKeluar'));
    }
}
