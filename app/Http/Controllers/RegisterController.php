<?php

namespace App\Http\Controllers;

use App\Models\addres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Session;

class RegisterController extends Controller
{
    public function create()
    {
             
        return view('register');
    }

    public function simpan(Request $request)
    {
        // dd($request);
        $this->validate($request,
            [
                'name'=>'required',
                'email'=>'required|unique:users,email',
                'password'=>'required|min:4',
                'gambar'=>'required|mimetypes:application/pdf|max:10000',
                'logo'=>'required|image|mimes:jpeg,jpg,png',
                'kode_pos'=>'required|min:5|max:8',
                'kecamatan'=>'required',
                'kabupaten'=>'required',
                'provinsi'=>'required',
                'koordinat'=>'required'
            ],[
                'name.required'=>'Nama harus di isi',
                'password.required'=>'Password harus di isi',
                'password.min'=>'Password minimal 4 huruf',
                'password.confirmed' => 'Password tidak sama.',
                'kode_pos.min'=>'Kode pos minimal 5 angka',
                'kode_pos.max'=>'Kode pos minimal 8 angka',
                'email.unique'=>'Email ada yang sama',
                'gambar.mimetypes'=>'Persetujuan harus dalam bentuk pdf max 10000kb',
                'gambar.image'=>'Persetujuan harus berekstensi pdf',
                'logo.mimes'=>'Logo harus dalam bentuk JPEG, PNG, JPG, SVG',
                'logo.image'=>'Logo yang di inputkan harus gambar',
                
            ]

        );

        // dd('bb');
        
        $gambar = Storage::disk('public')->put('gpersetujuan', $request->file('gambar'));
        $logo = Storage::disk('public')->put('glogo', $request->file('logo'));

        $user = User::create([
            
        
            'name' => $request->name,
            'email' => $request->email,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'gambar' => $gambar,
            'logo' => $logo,
            'kecamatan' => $request->kecamatan,
            'kode_pos' => $request->kode_pos,
            'koordinat' => $request->koordinat,
            'password' => Hash::make($request->password),
            
        ]);
        return redirect('masuk')->with('status', 'Tunggu akun Anda akan aktif ketika sudah di kirim email');
    }

    public function peta()
    {
             
        return view('peta');
    }
    // public function actionregister(Request $request)
    // {
    //     $user = User::create([
    //         'email' => $request->email,
    //         'username' => $request->username,
    //         'password' => Hash::make($request->password),
    //         'role' => $request->role,
    //         'active' => 1
    //     ]);

    //     Session::flash('message', 'Register Berhasil. Akun Anda sudah Aktif silahkan Login menggunakan username dan password.');
    //     return redirect('register');
    // }
}

