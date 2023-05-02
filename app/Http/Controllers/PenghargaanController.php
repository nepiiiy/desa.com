<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\desa_award;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class PenghargaanController extends Controller
{
    public function penghargaan()
    {
        $data = desa_award::where('user_id', Auth::user()->id)->paginate(4);
        return view('admindesa.penghargaan', ['data' => $data]);
    }

    public function tambahpenghargaan()
    {
        return view('admindesa.tambah_penghargaan');
    }


    public function uploadpenghargaan(Request $request)
    {
        $request->validate(
            [
                'judul'     => 'required',
                'subjudul'  => 'required',
                'tanggal' => 'required',
                'isi' => 'required',
                'cover' => 'required|image|mimes:png,jpg,jpeg|max:2048|dimensions:max_width=815,max_height=623,min_width=760,min_height=560',
                'gambar' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            ],[
                'judul.required'=>'Judul harus di isi',
                'subjudul.required'=>'Subjudul harus di isi',
                'tanggal.required'=>'Tanggal harus di isi',
                'isi.required' => 'Masukkan isi berita',
                'cover.required'=>'Cover harus di isi',
                'cover.image'=>'File yang upload harus berupa gambar',
                'cover.mimes'=>'File yang di upload harus berekstensi JPG, JPEG, PNG',
                'cover.max'=>'File yang di upload tidak lebih dari 2 MB',
                'cover.dimensions' => 'Ukuran gambar min 800x600 px dan max 815x623 px',
                'gambar.required'=>'Gambar harus di isi',
                'gambar.image'=>'File yang upload harus berupa gambar',
                'gambar.mimes'=>'File yang di upload harus berekstensi JPG, JPEG, PNG',
                'gambar.max'=>'File yang di upload tidak lebih dari 2 MB',
            ]
        );
        $gambar = Storage::disk('public')->put('imgpenghargaan', $request->file('gambar'));
        $cover = Storage::disk('public')->put('coverpenghargaan', $request->file('cover'));

        $model  = new desa_award();
        $model->judul = $request->judul;
        $model->subjudul = $request->subjudul;
        $model->tanggal = $request->tanggal;
        $model->isi = $request->isi;
        $model->cover = $cover;
        $model->gambar = $gambar;
        $model->user_id = Auth::user()->id;
        $model->save();
        alert()->success('Sukses', 'Penghargaan berhasil di tambahakan');
        return redirect('penghargaan')->with('success', 'Images uploaded successfully.');
    }


    public function editpeng($id)
    {
        $data = desa_award::findorfail($id);
        return view('admindesa.tampil_penghargaan', compact('data'));
    }




    public function editpenghargaan(Request $request, $id)
    {
        $data = desa_award::findOrfail($id);
        $request->validate(
            [
                'judul'     => 'required',
                'subjudul'  => 'required',
                'tanggal' => 'required',
                'isi' => 'required',
                'cover' => 'nullable|image|mimes:png,jpg,jpeg|max:2048|dimensions:max_width=815,max_height=623,min_width=800,min_height=600',
                'gambar' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            ],[
                'judul.required'=>'Judul harus di isi',
                'subjudul.required'=>'Subjudul harus di isi',
                'tanggal.required'=>'Tanggal harus di isi',
                'isi.required' => 'Masukkan isi berita',
                'cover.image'=>'File yang upload harus berupa gambar',
                'cover.mimes'=>'File yang di upload harus berekstensi JPG, JPEG, PNG',
                'cover.max'=>'File yang di upload tidak lebih dari 2 MB',
                'cover.dimensions' => 'Ukuran gambar min 800x600 px dan max 815x623 px',
                'gambar.image'=>'File yang upload harus berupa gambar',
                'gambar.mimes'=>'File yang di upload harus berekstensi JPG, JPEG, PNG',
                'gambar.max'=>'File yang di upload tidak lebih dari 2 MB',
            ]
        );
        $data->update([

            "judul" => $request->judul,
            "subjudul" => $request->subjudul,
            "tanggal" => $request->tanggal,
            "isi" => $request->isi,

        ]);

        if ($request->hasFile('cover')) {
            $cover = Storage::disk('public')->put('coverpenghargaan', $request->file('cover'));
            $data->update([
                'cover' => $cover,
            ]);
        }

        if($request->hasFile('gambar')){
            Storage::delete('public/'.$data->gambar);
            $gambar = Storage::disk('public')->put('imgpenghargaan', $request->file('gambar'));
            $data->update([
                'gambar'=>$gambar,
            ]);
        }
        $data->update();
        alert()->success('Sukses', 'penghargaan berhasil di edit');
        return redirect('penghargaan')->with('success', 'Images Update Successfully');
    }



    public function deletepenghargaan($id)
    {
        $data = desa_award::find($id);
        $gambar = $data->gambar;
        Storage::delete('public/' . $gambar);
        $cover = $data->cover;
        Storage::delete('public/' . $cover);
        $data->delete();
        return redirect('penghargaan');
    }
}
