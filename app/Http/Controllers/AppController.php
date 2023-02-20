<?php

namespace App\Http\Controllers;

use App\Models\DaftarSurat;
use App\Models\RequestSurat;
use Illuminate\Http\Request;
use Illuminate\Notifications\Messages\MailMessage;

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

    public function show(Request $request)
    {
        $surat = RequestSurat::where('email', $request->email)->where('status', 'Selesai')->get();

        if($surat->isEmpty()){
            return redirect()->back()->with('info', 'Data tidak ditemukan/belum diproses');
        }else{
            return view('app.layanan.show', compact('surat'));
        }
    }

    public function buat_surat_post(Request $request)
    {
        try {
            RequestSurat::create([
                'email' => $request->email,
                'no_hp' => $request->no_hp,
                'daftarsurat_id' => $request->daftarsurat_id,
                'nama' => $request->nama,
                'nama_panggilan_kapal' => $request->nama_panggilan_kapal,
                'status' => 'Proses',
            ]);

            (new MailMessage)
                ->greeting('Halo '. $request->nama .'!')
                ->line('Request surat telah kami terima!')
                ->line('Mohon pantai email atau no. Whatsapp anda jika surat telah selesai!');

                $accesskey= '8b77591fe1ae830044d4cd1f96923d84';
                $phone = $request->no_hp; //atau bisa menggunakan 62812xxxxxxx
                $message = 'Halo '. $request->nama .'!.. Request surat telah kami terima, Mohon pantai email atau no. Whatsapp anda jika surat telah selesai!';

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
                $message = 'Halo '. $request->nama .'!.. Request surat telah kami terima, Mohon pantai email atau no. Whatsapp anda jika surat telah selesai!';

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


            return redirect()->back()->with('success', 'Berhasil mengirim request, silahkan melihat email/No.Whatsapp anda untuk mengetahui jika PAS telah selesai');
        } catch (\Throwable $th) {
            return redirect()->back()->with('success', $th->getMessage());
        }
    }
}
