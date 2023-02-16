<?php

namespace App\Http\Controllers;

use App\Models\DaftarSurat;
use Illuminate\Http\Request;

class DaftarSuratController extends Controller
{
    public function index()
    {
        $surat = DaftarSurat::all();
        return view('admin.daftar_surat.index', compact('surat'));
    }

    public function insert(Request $request)
    {
        $request->validate([
            'file' => 'required','mimes:docx,doc,rtf',
        ]);

        $date = date('Ymd His gis');

        try {
            $surat = new DaftarSurat;
            $surat->nama_surat = $request->nama_surat;

            if($request->hasFile('file')){
                $request->file('file')->move('admin/mannatthemes.com/zoogler/horizontal/assets/images/users/', $date.$request->file('file')->getClientOriginalName());
                $surat->file = $date.$request->file('file')->getClientOriginalName();
            }
            $surat->save();

            return redirect()->back()->with('success', 'Surat telah ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            DaftarSurat::where('id', $id)->delete();

            return redirect()->back()->with('success', 'Surat telah dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }
}
