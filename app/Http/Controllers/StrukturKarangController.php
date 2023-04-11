<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\kt_structure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;



class StrukturKarangController extends Controller
{
    public function strukturkarang()
    {
        $jabatan = Jabatan::all();
        $data = kt_structure::where('user_id',Auth::user()->id)->paginate(8);
        return view('admindesa.struktur_karang', compact('data', 'jabatan'));
    }
    public function tambahanggota(){
        $id = 5;
        $jabatan = Jabatan::find($id);
        $data = kt_structure::all();
        return view('admindesa.tambah-anggota', compact('jabatan','data'));
    }

    public function insertanggota(Request $request){
        $request->validate([
            'nama'=>'required',
            'gambar' => 'required|image|mimes:png,jpeg,jpg,webp|max:2048'
        ],[
            'nama.required'=>'Nama tidak boleh kosong',
            'gambar.required'=>'Gambar tidak boleh kosong',
            'gambar.image'=>'Yang di inputkan harus berupa gambar',
            'gambar.mimes'=>'File harus berekstensi PNG, JPEG, JPG, WEBP',
            'gambar.max'=>'Ukuran file tidak lebih dari 2 MB',
        ]);

        $nama = $request->nama;
        $gambar = Storage::disk('public')->put('gambarkt', $request->file('gambar'));

        $data= kt_structure::create([
            'id_jabatan' => $request->id_jabatan,
            'nama' => $nama,
            'gambar' => $gambar,
        ]);
        $data->user_id = Auth::user()->id;
        $data->save();
        alert()->success('Sukses','Data berhasil di tambahakan');
        return redirect('struktur_karang');
    }


    public function tampilkt($id){
        $data = kt_structure::find($id);
        return view('admindesa.tampil-strukturkt', compact('data'));
    }
    public function updatekt(Request $request, $id){
        $request->validate([
            'nama'=>'required',
            'gambar' => 'nullable|image|mimes:png,jpeg,jpg,webp|max:2048'
        ],[
            'nama.required'=>'Nama tidak boleh kosong',
            'gambar.image'=>'Yang di inputkan harus berupa gambar',
            'gambar.mimes'=>'File harus berekstensi PNG, JPEG, JPG, WEBP',
            'gambar.max'=>'Ukuran file tidak lebih dari 2 MB',
        ]);
        $kt = kt_structure::find($id);
        $data =kt_structure::find($id);
        $data->update ([
            'nama'=>$request->nama
        ]);
        if($request->hasFile('gambar')){
            $data = DB::table('kt_structures')->where('id',$id)->get();
            foreach($data as $datas){
            $gam = $datas->gambar;
            Storage::delete('public/'.$gam);
            }

            $gambar = Storage::disk('public')->put('gambarkt',$request->file('gambar'));
            $data=([
                'gambar'=>$gambar,
            ]);
            $kt->update($data);
        }
        alert()->success('Sukses','Data berhasil di edit');
        return redirect('struktur_karang');
    }
    public function deletekt($id){
        $jabatan = Jabatan::find($id);
        $data = kt_structure::find($id);
        $gambar=$data->gambar;
        Storage::delete('public/'.$gambar);
        $data -> delete();
        return redirect('struktur_karang');
    }
    public function cari(Request $request)
    {
        $keyword = $request->cari;
        $data = kt_structure::where('nama', 'LIKE', '%' . $keyword .'%')
        ->paginate(8);
        return view('admindesa.struktur_karang', compact('data'));
    }
}
