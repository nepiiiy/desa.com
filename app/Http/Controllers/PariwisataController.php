<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class PariwisataController extends Controller
{
    public function pariwisata()
    {
        $data = tour::where('user_id',Auth::user()->id)->paginate(3);
        return view('admindesa.pariwisata', ['data' => $data]);
    }

    public function tambahpariwisata()
    {
        return view('admindesa.tambah_pariwisata');
    }


    public function uploadpariwisata(Request $request)
    {
        $files = [];
        $cover = Storage::disk('public')->put('coverpariwisata', $request->file('cover'));
        if ($request->hasfile('gambar')) {
            foreach ($request->gambar as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path('/public/imgpariwisata/'), $name);
                $files[] = $name;
            }
        }
        // $fotoside = implode(',',$files);
        $model  = new tour();
        $model->judul = $request->judul;
        $model->alamat = $request->alamat;
        $model->isi = $request->isi;
        $model->cover=$cover;
        $model->gambar = json_encode($files);
        $model->user_id = Auth::user()->id;
        $model->save();
        $this->validate(
            $request,
            [
                'cover'     => 'required|image|mimes:png,jpeg,jpg,webp|max:2048',
                'judul'     => 'required',
                'gambar'    => 'required',
                'gambar'    => 'max:3|min:3'
            ]
        );
        alert()->success('Sukses','Pariwisata berhasil di tambahakan');
        return redirect('pariwisata')->with('success', 'Images uploaded successfully.');
    }
    public function editpar($id)
    {
        $data = tour::findorfail($id);
        return view('admindesa.tampil_pariwisata', compact('data'));
    }
    public function editpariwisata(Request $request, $id)
    {

        $data = tour::findOrfail($id);
        $data->update([

            "judul" => $request->judul,
            "subjudul" => $request->alamat,
            "isi" => $request->isi,
            "koordinat" => $request->koordinat,

        ]);

        if($request->hasFile('cover')){
            $cover = Storage::disk('public')->put('coverpariwisata', $request->file('cover'));
            $data->update([
                'cover'=>$cover,
            ]);
        }


        if ($request->hasfile('gambar')) {
            $keyarray1 =  array_keys($request->gambar);
            $gambar = [];
            // $hasil = array_combine($tes,$foto);
            $i = 0;
            foreach ($request->gambar as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path('/public/imgpariwisata/'), $name);
                $gambar[$keyarray1[$i]] = $name;
                $i++;
            }
            $fotoin = json_decode($data->gambar);
            // dd($foto);
            foreach ($keyarray1 as $key) {
                $fotoin[$key] = $gambar[$key];
            }
            $data->gambar = $fotoin;
            $data->save();
        }


        $data->update();
        alert()->success('Sukses','Pariwisata berhasil di edit');
        return redirect('pariwisata')->with('success', 'Images Update Successfully');
    }
    public function deletepariwisata($id)
    {
        $data = tour::find($id);
        $data->delete();
        return redirect('pariwisata');
    }
}