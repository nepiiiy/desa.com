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
        $files = [];
        $cover = Storage::disk('public')->put('coverberita', $request->file('cover'));
        if ($request->hasfile('gambar')) {
            foreach ($request->gambar as $file) {
                $name = Str::random(10) . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/imgberita/', $name);
                $files[] = $name;
            }
        }
        // $fotoside = implode(',',$files);
        $model  = new desa_new();
        $model->judul = $request->judul;
        $model->subjudul = $request->subjudul;
        $model->tanggal = $request->tanggal;
        $model->isi = $request->isi;
        $model->cover = $cover;
        $model->gambar = json_encode($files);
        $model->user_id = Auth::user()->id;
        $model->save();
        $this->validate(
            $request,
            [
                'judul'     => 'required',
                'subjudul'  => 'required',
                'tanggal' => 'required',
                'isi' => 'required',
                'cover' => 'required',
                'gambar' => 'required|min:3|max:3',
            ],[
                'judul.required'=>'Judul harus di isi',
                'subjudul.required'=>'Subjudul harus di isi',
                'tanggal.required'=>'Tanggal harus di isi',
                'isi.required' => 'Masukkan isi berita',
                'cover.required'=>'Cover harus diisi',
                'gambar.required'=>'Gambar harus diisi',
                'gambar.max'=>'Gambar yang diperbolehkan hanya 3',
                'gambar.min'=>'Gambar yang diperbolehkan hanya 3',
            ]
        );
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
        $data->update([

            "judul" => $request->judul,
            "subjudul" => $request->subjudul,
            "tanggal" => $request->tanggal,
            "isi" => $request->isi,

        ]);

        if($request->hasFile('cover')){
            $cover = Storage::disk('public')->put('coverberita', $request->file('cover'));
            $data->update([
                'cover'=>$cover,
            ]);
        }

        elseif (is_object($data) && property_exists($data, 'gambar')) {
            foreach ($data->gambar as $datas) {
                $gambar = $datas;
                Storage::delete('public/imgberita/' . $gambar);
            }
        }



        elseif ($request->hasfile('gambar')) {
            $keyarray1 =  array_keys($request->gambar);
            $gambar = [];

            $i = 0;

            foreach ($request->gambar as $file) {

                $name = Str::random(10) . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/imgberita/', $name);
                $gambar[$keyarray1[$i]] = $name;
                $i++;
            }


            $fotoin = json_decode($data->gambar);
           // dd($gambar);
            foreach ($keyarray1 as $key) {
                $fotoin[$key] = $gambar[$key];
            }

            $data->gambar = $fotoin;
            $data->save();
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
