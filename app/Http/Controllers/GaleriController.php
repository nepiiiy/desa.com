<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\galery;
use App\Models\gallery;
use App\Models\gambar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

        $cover = Storage::disk('public')->put('covergaleri', $request->file('cover'));



        // $fotoside = implode(',',$files);
        $gallery  = new gallery();
        $request->validate([
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
        $gallery->judul = $request->judul;
        $gallery->tanggal = $request->tanggal;
        $gallery->cover=$cover;

        $gallery->user_id = Auth::user()->id;
        $gallery->save();

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $totalGambar = count($gambar);
            if ($totalGambar > 12) {
                return redirect()->back()->withErrors(['gambar' => 'Gambar yang diperbolehkan maksimal 12']);
            }
            foreach ($gambar as $image) {
                $filename = Str::random(10) . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/imggaleri', $filename);
                $imageModel = new gambar();
                $imageModel->gambar= $filename;
                $imageModel->gallery_id = $gallery->id;
                $imageModel->save();
            }
        }



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
        $data = gallery::findOrFail($id);

        $data->update([
            "judul" => $request->judul,
            "tanggal" => $request->tanggal,
        ]);

        if ($request->hasFile('cover')) {
            $cover = Storage::disk('public')->put('covergaleri', $request->file('cover'));
            $data->update([
                'cover' => $cover,
            ]);
        }


        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            foreach ($gambar as $image) {
                $filename = Str::random(10) . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/imggaleri', $filename);
                $imageModel = new gambar();
                $imageModel->gambar = $filename;
                $imageModel->gallery_id = $data->id;
                $imageModel->save();
            }
        }



            $data->save();


        alert()->success('Sukses', 'Galeri berhasil di edit');
        return redirect('galeri')->with('success', 'Images Update Successfully');
    }

    public function editGambar(Request $request, $id)
{
    $gambar = gambar::findOrFail($id);

    if ($request->hasFile('gambar')) {

        Storage::disk('public')->delete('imggaleri/' . $gambar->gambar);


        $filename = Str::random(10) . '.' . $request->gambar->getClientOriginalExtension();
        $request->gambar->storeAs('public/imggaleri', $filename);
        $gambar->gambar = $filename;
        $gambar->save();

        return redirect()->back()->with('success', 'Gambar berhasil diupdate.');
    }

    return redirect()->back()->with('error', 'Terjadi kesalahan. Silahkan coba lagi.');
}

public function hapusGambar($id)
{
    $gambar = gambar::findOrFail($id);
    $file_path = public_path().'/storage/imggaleri/'.$gambar->gambar;
    if(file_exists($file_path)) {
        unlink($file_path);
    }
    $gambar->delete();
    return redirect()->back()->with('success', 'Gambar berhasil dihapus.');
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
