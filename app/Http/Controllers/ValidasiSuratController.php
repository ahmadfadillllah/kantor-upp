<?php

namespace App\Http\Controllers;

use App\Models\RequestSurat;
use Illuminate\Http\Request;
use App\Mail\sendEmail;
use Illuminate\Support\Facades\Mail;


class ValidasiSuratController extends Controller
{
    public function index()
    {
        $surat = RequestSurat::with('daftar_surat')->where('status', 'Proses')->get();
        return view('admin.validasi_surat.index', compact('surat'));
    }

    public function post(Request $request, $id)
    {
        try {
            $date = date('YmdHisgis');
            $surat = RequestSurat::find($id);
            $user = RequestSurat::where('id', $id)->first();

            $details = [
                'title' => 'Pesan dari Kantor UPP',
                'body' => 'Halo '. $user->nama .'!.. Request surat telah dipublish, Silahkan mendownload di halaman web!'
                ];

                Mail::to($user->email)->send(new sendEmail($details));

                $accesskey= '8b77591fe1ae830044d4cd1f96923d84';
                $phone = $user->no_hp; //atau bisa menggunakan 62812xxxxxxx
                $message = 'Halo '. $user->nama .'!.. Request surat telah dipublish, Silahkan mendownload di halaman web!';

                $curl = curl_init();
                curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://app.ruangwa.id/api/send_sms',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => 'accesskey='.$accesskey.'&number='.$phone.'&message='.$message,
                ));
                $response = curl_exec($curl);
                curl_close($curl);

                $token = "cakLiM7crm7EQTAzPf9UKbn8f5APTkk7Ro429f3egCkUvDjPwS";
                $phone= $request->no_hp;; //untuk group pakai groupid contoh: 62812xxxxxx-xxxxx
                $message = 'Halo '. $request->nama .'!.. Request surat telah dipublish, Silahkan mendownload di halaman web!';

                $curl = curl_init();
                curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://app.ruangwa.id/api/send_message',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => 'token='.$token.'&number='.$phone.'&message='.$message,
                ));
                $response = curl_exec($curl);
                curl_close($curl);

                $surat->status = 'Selesai';
                $surat->keterangan = $request->keterangan;
                if($request->hasFile('surat')){
                    $request->file('surat')->move('admin/mannatthemes.com/zoogler/horizontal/assets/images/users/', $date.$request->file('surat')->getClientOriginalName());
                    $surat->surat = $date.$request->file('surat')->getClientOriginalName();
                }
                $surat->save();

            return redirect()->back()->with('success', 'Berhasil mengirim ke request');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            RequestSurat::where('id', $id)->delete();

            return redirect()->back()->with('success', 'Request surat telah dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }
}
