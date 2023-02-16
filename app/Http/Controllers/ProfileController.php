<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.profile.index');
    }

    public function update_informasi(Request $request)
    {
        try {
            User::where('id', Auth::user()->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'no_hp' => $request->no_hp,
            ]);
            return redirect()->back()->with('success', 'Informasi telah diupdate');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

    public function update_password(Request $request)
    {
        $request->validate([
            'password_lama' => ['required', 'min:8'],
            'password_baru' => ['required', 'min:8'],
        ],
        [
            'password_lama.min' => 'Password lama minimal 8 karakter',
            'password_baru.min' => 'Password baru minimal 8 karakter',
        ]);

        if(!Hash::check($request->password_lama, auth()->user()->password)){
            return back()->with("info", "Password lama salah");
        }

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->password_baru)
        ]);

        return back()->with("success", "Password telah diubah");
    }

    public function update_avatar(Request $request)
    {
        $request->validate([
            'avatar' => 'required','mimes:png,jpg,jpeg,JPG',
        ]);

        $date = date('Ymd His gis');

        try {
            $produk = User::find(Auth::user()->id);

            if($request->hasFile('avatar')){
                $request->file('avatar')->move('admin/mannatthemes.com/zoogler/horizontal/assets/images/users/', $date.$request->file('avatar')->getClientOriginalName());
                $produk->avatar = $date.$request->file('avatar')->getClientOriginalName();
                $produk->save();
            }

            return redirect()->back()->with('success', 'Avatar telah diupdate');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', 'Avatar gagal diupdate');
        }
    }
}
