<?php

namespace App\Http\Controllers;
use App\Models\Peserta;
use App\Models\Provinsi;
use App\Models\Acara;
use App\Models\Donatur;
use Mail;
use App\Mail\MailRegistrasiAcara;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RegistrasiAcaraCont extends Controller
{
    public function index($slug_acara)
    {
        $acara = Acara::where('slug',$slug_acara)->first();
        $dt_prop = Provinsi::all();
        return view('layout.raw2',compact('dt_prop','acara'));
    }

    public function regis()
    {

    }
    
    public function tes()
    {
        $dt_prop = Provinsi::all();
        return view('layout.raw2',compact('dt_prop'));
    }

    

    public function store(Request $request)
    {
        $data_acara = Acara::where('id',$request->acara_id)->first();
        $tgl        = $data_acara->tanggal;
        $acara_id   = $request->acara_id;
        $name       = $request->name;
        $provinsi   = $request->provinsi_id;
        $kabupaten  = $request->kabupaten_id;
        $kecamatan  = $request->kecamatan_id;
        $telp       = $request->telp;
        $email      = $request->email;

                // $data["email"] = $request->email;
                // $data["title"] = "From tilawatipusat.com";
                // $data["body"] = "This is Demooo Pendaftaran";
                // $data["tes"] = "{{asset('')}}";
                // $files = [
                //     public_path('files/160031367318.pdf'),
                //     public_path('files/1599882252.png'),
                // ];
    
                // Mail::send('tilawatipusat.emails.online_registrasi', $data, function($message)use($data, $files) {
                // Mail::send('layout.email', $data, function($message)use($data) {
                //     $message->to($data["email"], $data["email"])
                //             ->subject($data["title"]);
        
                //     // foreach ($files as $file){
                //     //     $message->attach($file);
                //     // }
                    
                // });
        //peserta
        $peserta    = Peserta::where('name',$name)->where('acara_id', $acara_id)->where('telp',$telp)->first();
        if ($peserta == null) {
            # code...
            $data_peserta = Peserta::updateOrCreate(
                [
                  'id' => $request->id
                ],
                [
                    'acara_id' => $acara_id,
                    'tanggal'=> $tgl,
                    'name' => $name,
                    'email' => $request->email,
                    'telp' => $telp,
                    'provinsi_id' => $provinsi,
                    'kabupaten_id' => $kabupaten,
                    'kecamatan_id' => $request->kecamatan_id,
                ]
            );

            Donatur::updateOrCreate(
                [
                  'id' => $request->id
                ],
                [
                    'peserta_id' => $data_peserta->id,
                    'data'       => $request->donatur,
                ]
            );
          
            return response()->json(
                [
                  'success' => 'Peserta Baru Berhasil Ditambahkan!',
                  'message' => 'Peserta Baru Berhasil Ditambahkan!'
                ]
            );

        }else{

            return response()->json(
                [
                  'error'   => 'Peserta Telah Terdaftar!',
                  'message' => 'Peserta Telah Terdaftar!'
                ]
            );
        }
    }
}
