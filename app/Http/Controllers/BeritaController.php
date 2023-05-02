<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\desa_new;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class BeritaController extends Controller
{
    public function berita()
    {
        $data = desa_new::where('user_id',Auth::user()->id)->paginate(4);

        return view('admindesa.berita', ['data' => $data]);
    }

    public function tambahberita()
    {
        return view('admindesa.tambah_berita');
    }


    public function uploadberita(Request $request)
    {
        $request->validate(
            [
                'judul'     => 'required',
                'subjudul'  => 'required',
                'tanggal' => 'required',
                'isi' => 'required',
                'cover' => 'required|image|mimes:png,jpg,jpeg|max:2048|dimensions:max_width=815,max_height=623,min_width=800,min_height=600',
                'gambar' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            ],[
                'judul.required'=>'Judul harus di isi',
                'subjudul.required'=>'Subjudul harus di isi',
                'tanggal.required'=>'Tanggal harus di isi',
                'isi.required' => 'Isi berita tidak boleh kosong',
                'cover.required'=>'Cover harus di isi',
                'cover.image'=>'File yang di inputkan harus berupa gambar',
                'cover.mimes'=>'File yang di inputkan harus berekstensi JPG, JPEG, PNG',
                'cover.max'=>'File yang di inputkan tidak lebih dari 2 MB',
                'gambar.required'=>'Gambar harus di isi',
                'gambar.image'=>'File yang di inputkan harus berupa gambar',
                'cover.dimensions' => 'Ukuran gambar harus dari 800 x 600 piksel.',
                'gambar.mimes'=>'File yang di inputkan harus berekstensi JPG, JPEG, PNG',
                'gambar.max'=>'File yang di inputkan tidak lebih dari 2 MB',
            ]
        );
        $gambar = Storage::disk('public')->put('imgberita', $request->file('gambar'));
        $cover = Storage::disk('public')->put('coverberita', $request->file('cover'));

        // $fotoside = implode(',',$files);
        $model  = new desa_new();
        $model->judul = $request->judul;
        $model->subjudul = $request->subjudul;
        $model->tanggal = $request->tanggal;
        $model->isi = $request->isi;
        $model->cover = $cover;
        $model->gambar = $gambar;
        $model->user_id = Auth::user()->id;
        $model->save();
        alert()->success('Sukses','Berita berhasil di tambahakan');
        return redirect('berita')->with('success', 'Images uploaded successfully.');
    }
    public function edit($id)
    {
        $data = desa_new::findorfail($id);
        return view('admindesa.tampil_berita', compact('data'));
    }



    public function editberita(Request $request, $id)
    {

        $data = desa_new::findOrfail($id);
        $request->validate(
            [
                'judul'     => 'required',
                'subjudul'  => 'required',
                'tanggal' => 'required',
                'isi' => 'required',
                'cover' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
                'gambar' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            ],[
                'judul.required'=>'Judul harus di isi',
                'subjudul.required'=>'Subjudul harus di isi',
                'tanggal.required'=>'Tanggal harus di isi',
                'isi.required' => 'Masukkan isi berita',
                'cover.image'=>'File yang di inputkan harus berupa gambar',
                'cover.mimes'=>'File yang di inputkan harus berekstensi JPG, JPEG, PNG',
                'cover.max'=>'File yang di inputkan tidak lebih dari 2 MB',
                'gambar.image'=>'File yang di inputkan harus berupa gambar',
                'gambar.mimes'=>'File yang di inputkan harus berekstensi JPG, JPEG, PNG',
                'gambar.max'=>'File yang di inputkan tidak lebih dari 2 MB',
            ]
        );
        $data->update([

            "judul" => $request->judul,
            "subjudul" => $request->subjudul,
            "tanggal" => $request->tanggal,
            "isi" => $request->isi,

        ]);

        if($request->hasFile('cover')){
            Storage::delete('public/'.$data->cover);
            $cover = Storage::disk('public')->put('coverberita', $request->file('cover'));
            $data->update([
                'cover'=>$cover,
            ]);
        }

        if($request->hasFile('gambar')){
            Storage::delete('public/'.$data->gambar);
            $gambar = Storage::disk('public')->put('imgberita', $request->file('gambar'));
            $data->update([
                'gambar'=>$gambar,
            ]);
        }
        $data->update();
        alert()->success('Sukses','Galeri berhasil di edit');
        return redirect('berita')->with('success', 'Images Update Successfully');
    }
    public function deleteberita($id)
    {
        $data = desa_new::find($id);
        $gambar = $data->gambar;
        Storage::delete('public/' . $gambar);
        $cover = $data->cover;
        Storage::delete('public/' . $cover);
        $data->delete();
        return redirect('berita');
    }
}
