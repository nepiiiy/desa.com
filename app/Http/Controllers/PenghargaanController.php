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
        $files = [];
        $cover = Storage::disk('public')->put('coverpenghargaan', $request->file('cover'));
        if ($request->hasfile('gambar')) {
            foreach ($request->gambar as $file) {
                $name = Str::random(10) . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/imgpenghargaan/', $name);
                $files[] = $name;
            }
        }

        $model  = new desa_award();
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



        elseif (is_object($data) && property_exists($data, 'gambar')) {
            foreach ($data->gambar as $datas) {
                $gambar = $datas;
                Storage::delete('public/imgpenghargaan/' . $gambar);
            }
        }



        elseif ($request->hasfile('gambar')) {
            $keyarray1 =  array_keys($request->gambar);
            $gambar = [];

            $i = 0;

            foreach ($request->gambar as $file) {

                $name = Str::random(10) . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/imgpenghargaan/', $name);
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
