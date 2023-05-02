<?php

namespace App\Http\Controllers;

use App\Models\addres;
use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Session;

class RegisterController extends Controller
{
    public function create()
    {
        $provinsi = Province::all();
        return view('register')->with(['provinsi' => $provinsi]);
    }

    public function kekoordinat(Request $request)
    {
        $request->validate([
            'latitude'=>'required',

        ],[

            'latitude.required'=>'Anda harus memilih letak daerah anda',


        ]);


        $latitude = $request->input('latitude');
        $longtitude = $request->input('longtitude');

        return redirect()->route('daftar', ['latitude' => $latitude, 'longtitude' => $longtitude]);
    }

    public function getkabupaten(Request $request)
    {
        $id_provinsi = $request->id_provinsi;

        $kabupatens = Regency::where('province_id', $id_provinsi)->get();

        $option1 = "<option> Pilih Kabupaten...</option>";


        foreach ($kabupatens as $kabupaten) {
            $option1 .="<option value='$kabupaten->id'>$kabupaten->name</option>";
        }
        echo $option1;
    }

    public function getkecamatan(Request $request)
    {
        $id_kabupaten = $request->id_kabupaten;

        $kecamatans = District::where('regency_id', $id_kabupaten)->get();

        $option ="<option> Pilih Kecamatan...</option>";


        foreach ($kecamatans as $kecamatan) {
            $option .= "<option value='$kecamatan->id'>$kecamatan->name</option>";
        }
        echo $option;
    }



    public function simpan(Request $request)
    {
        // dd($request);
        $this->validate(
            $request,
            [
                'name' => 'required',
                'email' => 'required|unique:users,email',
                'password' => 'min:4|required_with:password_confirmation|same:password_confirmation',
                'password_cofirmation'=>'min:4',
                'gambar' => 'required|mimetypes:application/pdf|max:10000',
                'logo' => 'required|image|mimes:jpeg,jpg,png',
                'kode_pos' => 'required|min:5|max:8',
                'province_id'=>'required',
                'regency_id'=>'required',
                'district_id'=>'required',
            ],
            [
                'name.required' => 'Nama harus di isi',
                'password.required' => 'Password harus di isi',
                'password.min' => 'Password minimal 4 huruf',
                'password_cofirmation.min' => 'Konfirmasi Password minimal 4 huruf',
                'password.required_with'=>'Konfirmasi password harus sama dengan password',
                'password.same'=>'Konfirmasi password harus sama dengan password',
                'kode_pos.min' => 'Kode pos minimal 5 angka',
                'kode_pos.max' => 'Kode pos minimal 8 angka',
                'kode_pos.required'=>'Kode pos harus di isi',
                'email.required'=>'Email harus di isi',
                'email.unique' => 'Email ada yang sama',
                'gambar.mimetypes' => 'File persetujuan harus berekstensi PDF',
                'gambar.max'=>'Besar file persetujuan tidak lebih dari 10 MB',
                'gambar.required'=>'Persetujuan tidak boleh kosong',
                'logo.mimes' => 'Gambar harus dalam bentuk jpeg,png,jpg,svg',
                'logo.image' => 'Yang di inputkan harus gambar',
                'logo.required'=>'Logo tidak boleh kosong',
                'province_id.required'=>'Anda harus memilih salah satu',
                'regency_id.required'=>'Anda harus memilih salah satu',
                'district_id.required'=>'Anda harus memilih salah satu',

            ]

        );

        // dd('bb');

        $gambar = Storage::disk('public')->put('gpersetujuan', $request->file('gambar'));
        $logo = Storage::disk('public')->put('glogo', $request->file('logo'));

        $user = User::create([


            'name' => $request->name,
            'email' => $request->email,
            'latitude' => $request->latitude,
            'longtitude' => $request->longtitude,
            'gambar' => $gambar,
            'logo' => $logo,

            'kode_pos' => $request->kode_pos,
            'province_id'=> $request->province_id,
            'regency_id'=> $request->regency_id,
            'district_id'=> $request->district_id,
            'password' => Hash::make($request->password),

        ]);

        return redirect('masuk')->with('status', 'Tunggu akun anda akan aktif ketika sudah di kirim email');
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

