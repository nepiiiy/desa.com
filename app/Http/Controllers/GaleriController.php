<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\galery;
use App\Models\gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GaleriController extends Controller
{
    public function galeri()
    {
        $data = gallery::where('user_id',Auth::user()->id)->paginate(4);

        return view('admindesa.galeri', ['data' => $data]);
    }

    public function tambahgaleri()
    {
        return view('admindesa.tambah_galeri');
    }


    public function upload(Request $request)
    {
        $files = [];
        $cover = Storage::disk('public')->put('covergaleri', $request->file('cover'));
        if ($request->hasfile('gambar')) {
            foreach ($request->gambar as $file) {
                $name = Str::random(10) . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/galeri/', $name);
                $files[] = $name;
            }
        }
        // $fotoside = implode(',',$files);
        $model  = new gallery();
        $model->judul = $request->judul;
        $model->tanggal = $request->tanggal;
        $model->cover=$cover;
        $model->gambar = json_encode($files);
        $model->user_id = Auth::user()->id;
        $model->save();
        $this->validate(
            $request,
            [
                'gambar' => 'required|min:1|max:12 ',
                'judul' => 'required',
                'tanggal' => 'required',
                'cover' => 'required',

            ],[
                'judul.required'=>'Judul harus di isi',
                'tanggal.required'=>'Tanggal harus di isi',
                'cover.required'=>'Cover harus diisi',
                'gambar.required'=>'Gambar harus diisi',
                'gambar.max'=>'Gambar yang diperbolehkan maksimal 12',
            ]
        );

        alert()->success('Sukses','Galeri    berhasil di tambahakan');
        return redirect('galeri')->with('success', 'Images uploaded successfully.');
    }

    public function tampil($id)
    {
        $data = gallery::findorfail($id);
        // dd($data);
        return view('admindesa.tampil_galeri', compact('data'));
    }

    public function tampilgaleri(Request $request, $id)
    {

        $data = gallery::findOrfail($id);

        $data->update([
            "judul" => $request->judul,
            "tanggal" => $request->tanggal,

        ]);

        if($request->hasFile('cover')){
            $cover = Storage::disk('public')->put('covergaleri', $request->file('cover'));
            $data->update([
                'cover'=>$cover,
            ]);
        }

        elseif (is_object($data) && property_exists($data, 'gambar')) {
            foreach ($data->gambar as $datas) {
                $gambar = $datas;
                Storage::delete('public/galeri/' . $gambar);
            }
        }



        elseif ($request->hasfile('gambar')) {
            $keyarray1 =  array_keys($request->gambar);
            $gambar = [];

            $i = 0;

            foreach ($request->gambar as $file) {

                $name = Str::random(10) . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/galeri/', $name);
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
        return redirect('galeri')->with('success', 'Images Update Successfully');
    }
    public function deletegaleri($id)
    {
        $data = gallery::find($id);
        $gambar = $data->gambar;
        Storage::delete('public/' . $gambar);
        $cover = $data->cover;
        Storage::delete('public/' . $cover);
        $data->delete();
        return redirect('galeri');
    }
}
