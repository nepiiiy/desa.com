<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class PariwisataController extends Controller
{
    public function pariwisata()
    {
        $data = tour::where('user_id',Auth::user()->id)->paginate(4);
        return view('admindesa.pariwisata', ['data' => $data]);
    }

    public function tambahpariwisata()
    {
        return view('admindesa.tambah_pariwisata');
    }


    public function uploadpariwisata(Request $request)
    {
        $request->validate(
            [
                'cover'     => 'required|image|mimes:png,jpeg,jpg,webp|max:2048',
                'judul'     => 'required',
                'gambar'    => 'required|image|mimes:png,jpeg,jpg,webp|max:2048',
                'alamat'=>'required',
                'isi'=>'required',

            ],[
                'cover.required'=>'Cover tidak boleh kosong',
                'cover.image'=>'File yang di upload harus berupa gambar',
                'cover.mimes'=>'File yang di upload harus berekstensi JPG, JPEG, PNG',
                'cover.max'=>'File yang di upload tidak lebih dari 2 MB',
                'judul.required'=>'Judul tidak boleh kosong',
                'gambar.required'=>'Gambar tidak boleh kosong',
                'gambar.image'=>'File yang di upload harus berupa gambar',
                'gambar.mimes'=>'File yang di upload harus berekstensi JPG, JPEG, PNG',
                'gambar.max'=>'File yang di upload tidak lebih dari 2 MB',
                'alamat.required'=>'Alamat tidak boleh kosong',
                'isi.required'=>'Isi Pariwisata tiak boleh kosong',
            ]
        );
        $gambar = Storage::disk('public')->put('coverpariwisata', $request->file('gambar'));
        $cover = Storage::disk('public')->put('coverpariwisata', $request->file('cover'));
        // $fotoside = implode(',',$files);
        $model  = new tour();
        $model->judul = $request->judul;
        $model->alamat = $request->alamat;
        $model->isi = $request->isi;
        $model->cover=$cover;
        $model->gambar = $gambar;
        $model->user_id = Auth::user()->id;
        $model->save();
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
        $request->validate(
            [
                'cover'     => 'nullable|image|mimes:png,jpeg,jpg,webp|max:2048',
                'judul'     => 'required',
                'gambar'    => 'nullable|image|mimes:png,jpeg,jpg,webp|max:2048',
                'alamat'=>'required',
                'isi'=>'required',

            ],[
                'cover.image'=>'File yang di upload harus berupa gambar',
                'cover.mimes'=>'File yang di upload harus berekstensi JPG, JPEG, PNG',
                'cover.max'=>'File yang di upload tidak lebih dari 2 MB',
                'judul.required'=>'Judul tidak boleh kosong',
                'gambar.image'=>'File yang di upload harus berupa gambar',
                'gambar.mimes'=>'File yang di upload harus berekstensi JPG, JPEG, PNG',
                'gambar.max'=>'File yang di upload tidak lebih dari 2 MB',
                'alamat.required'=>'Alamat tidak boleh kosong',
                'isi.required'=>'Isi Pariwisata tidak boleh kosong',
            ]
        );
        $data->update([

            "judul" => $request->judul,
            "alamat"=>$request->alamat,
            "isi" => $request->isi,

        ]);

        if ($request->hasFile('cover')) {
            Storage::delete('public/'.$data->cover);
            $cover = Storage::disk('public')->put('coverpariwisata', $request->file('cover'));
            $data->update([
                'cover' => $cover,
            ]);
        }
        if ($request->hasFile('gambar')) {
            Storage::delete('public/'.$data->gambar);
            $gambar = Storage::disk('public')->put('imgpariwisata', $request->file('gambar'));
            $data->update([
                'gambar' => $gambar,
            ]);
        }
        $data->update();
        alert()->success('Sukses','Pariwisata berhasil di edit');
        return redirect('pariwisata')->with('success', 'Images Update Successfully');
    }
    public function deletepariwisata($id)
    {
        $data = tour::find($id);
        $gambar = $data->gambar;
        Storage::delete('public/' . $gambar);
        $cover = $data->cover;
        Storage::delete('public/' . $cover);
        $data->delete();
        return redirect('pariwisata');
    }
}
