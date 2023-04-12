<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\User;
use App\Mail\kirimEmail;
use App\Models\resident;
use App\Models\webprofile;
use App\Mail\ActivationMail;
use App\Models\desa_profile;
use App\Models\kt_structure;
use Illuminate\Http\Request;
use App\Models\pkk_structure;
use App\Exports\residentImport;
use App\Mail\AkunDesaDiHapus;
use App\Mail\FormatSalah;
use App\Models\public_facility;
use App\Models\lembaga_structure;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class DataAdminController extends Controller
{  
    public function DataAdmin()
    {
        $data = User::where('status', 'pending')->with('provinsi','kabupaten','kecamatan')->paginate(4);


        $data2 = User::where('status', 'aktif')->with('provinsi','kabupaten','kecamatan')->paginate(4);

        return view('webadmin.data_admin',compact('data', 'data2'));

    }

    public function deleteadmin($id){
        $user = User::find($id);
        Mail::to($user->email)->send(new AkunDesaDiHapus());
        $data = User::Find($id)->delete();
        return redirect('dataadmin');
    }

  


    public function updateStatus($id)
{
    $data = User::find($id);

    if ($data->status == 'pending') {
        $data->status = 'aktif';

        Mail::to($data->email)->send(new kirimEmail());
        $user = desa_profile::create([
            'user_id' => $id,
            'gambar1' => 'gambarprof/desacontoh123.jfif',
            'gambar2' => 'gambarprof/desacontoh123.jfif',
            'gambar3' => 'gambarprof/desacontoh123.jfif',
            'sejarah' => 'buat sejarah desa dan ini adalah contoh sejarah desa',
            'visi' => 'ini adalah visi desa',
            'misi' => 'ini adalah misi desa',
        ]);

        $user = public_facility::create([
            'user_id' => $id,
            'rw'=> 0,
            'rt'=> 0,
            'paud'=> 0,
            'tk'=> 0,
            'sd'=> 0,
            'smp'=> 0,
            'sma'=> 0,
            'rumah'=> 0,
            'puskesmas'=> 0,
            'kesehatan'=> 0,
            'posyandu'=> 0,
            'kb'=> 0,
            'dokter'=> 0,
            'bidan'=> 0,
        ]);

        $user = resident::create([
            'user_id' => $id,
            'nama' => 'Contoh Nama',
            'tanggal' =>'2017-01-01',
            'jk' => 'Laki-Laki',
            'agama' => 'Budha',
            'alamat' => 'Bumi',
            'pendidikan' => 'Sarjana/D4',
            'status' => 'Sudah',
            
        ]);

        $user = pkk_structure::create([
            'user_id' => $id,
            'id_jabatan' => '1',
            'nama' => 'contoh nama',
            'gambar' => 'gambarpkk/contoh1.png',
            
        ]);
        $user = pkk_structure::create([
            'user_id' => $id,
            'id_jabatan' => '2',
            'nama' => 'contoh nama',
            'gambar' => 'gambarpkk/contoh2.png',
            
        ]);
        $user = pkk_structure::create([
            'user_id' => $id,
            'id_jabatan' => '3',
            'nama' => 'contoh nama',
            'gambar' => 'gambarpkk/contoh3.png',
            
        ]);
        $user = pkk_structure::create([
            'user_id' => $id,
            'id_jabatan' => '4',
            'nama' => 'contoh nama',
            'gambar' => 'gambarpkk/contoh4.png',
            
        ]);
        $user = pkk_structure::create([
            'user_id' => $id,
            'id_jabatan' => '5',
            'nama' => 'contoh nama',
            'gambar' => 'gambarpkk/contoh5.png',
            
        ]);

        // $user = pkk_structure::create([
        //     'user_id' => $id,
        //     'id_jabatan' => '5',
        //     'nama' => 'contoh nama',
        //     'gambar' => 'contoh.png',
            
        // ]);

        $user = lembaga_structure::create([
            'user_id' => $id,
            'gambar' => 'strukturdesa/struktur.png',
        ]);
        $user = kt_structure::create([
            'user_id' => $id,
            'id_jabatan' => '1',
            'nama' => 'contoh nama',
            'gambar' => 'gambarkt/contohgam1.jpeg',
        ]);
        $user = kt_structure::create([
            'user_id' => $id,
            'id_jabatan' => '2',
            'nama' => 'contoh nama',
            'gambar' => 'gambarkt/contohgam2.jpeg',
        ]);
        $user = kt_structure::create([
            'user_id' => $id,
            'id_jabatan' => '3',
            'nama' => 'contoh nama',
            'gambar' => 'gambarkt/contohgam3.jpeg',
        ]);
        $user = kt_structure::create([
            'user_id' => $id,
            'id_jabatan' => '4',
            'nama' => 'contoh nama',
            'gambar' => 'gambarkt/contohgam4.jpeg',
        ]);
        $user = kt_structure::create([
            'user_id' => $id,
            'id_jabatan' => '5',
            'nama' => 'contoh nama',
            'gambar' => 'gambarkt/contohgam5.jpeg',
        ]);

       

    }

    $data->save();

    return redirect()->back();
}




public function show($id)
{
    $user = User::find($id);
// dd($user);
    return view('webadmin.lihat_desa',['data'=>$user]);
}
public function komen(Request $request,$id)
{
    $user = User::find($id);
    Mail::to($user->email)->send(new FormatSalah());
    $user->update([
        'komen' => $request->komen,
    ]);
    return redirect()->back();
}
public function search1(Request $request)
    {
        $keyword = $request->search1;
        $data = User::where('name', 'LIKE', '%' . $keyword .'%')->where('status','pending')
        ->paginate(4);
        $data2 = User::where('status', 'aktif')->paginate(4);
        return view('webadmin.data_admin', compact('data', 'data2'));
    }
    public function search2(Request $request)
    {
        $keyword = $request->search2;
        $data2 = User::where('name', 'LIKE', '%' . $keyword .'%')->where('status','aktif')
        ->paginate(4);
        $data = User::where('status', 'pending')->paginate(4);
        return view('webadmin.data_admin', compact('data2', 'data'));
    }
   
}
