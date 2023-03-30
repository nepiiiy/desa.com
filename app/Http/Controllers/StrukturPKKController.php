<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use App\Models\pkk_structure;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class StrukturPKKController extends Controller
{
    public function strukturpkk()
    {
        $jabatan = Jabatan::all();
        $data = pkk_structure::where('user_id',Auth::user()->id)->paginate(8);
        // dd($data);
        return view('admindesa.struktur_pkk', compact('data', 'jabatan'));
    }
    public function tambahpkk(){
        $id = 5;
        $jabatan = Jabatan::find($id);
        $data = pkk_structure::all();
        return view('admindesa.tambah-pkk', compact('data', 'jabatan'));
    }
    public function insertpkk(Request $request){
        $request->validate([
            'gambar' => 'required|image|mimes:png,jpeg,jpg,webp|max:2048'
        ]);

        $nama = $request->nama;
        $gambar = Storage::disk('public')->put('gambarpkk', $request->file('gambar'));

        $data= pkk_structure::create([
            'id_jabatan' => $request->id_jabatan,
            'nama' => $nama,
            'gambar' => $gambar,
        ]);
        $data->user_id = Auth::user()->id;
        $data->save();
        alert()->success('Sukses','Data berhasil di tambahkan');
        return redirect('struktur_pkk');
    }
    public function tampilpkk($id){
        $data = pkk_structure::find($id);
        return view('admindesa.tampil-pkk', compact('data'));
    }
    public function updatepkk(Request $request, $id){
        $request->validate([
            'gambar' => 'required|image|mimes:png,jpeg,jpg,webp|max:2048',
        ],
        ['gambar.mimes'=>'format harus jpeg,png,jpg,webp']);
        $pkk = pkk_structure::find($id);
        if($request->hasFile('gambar')){
            $data = DB::table('pkk_structures')->where('id',$id)->get();
            foreach($data as $datas){
            $gam = $datas->gambar;
            Storage::delete('public/'.$gam);
            }

            $gambar = Storage::disk('public')->put('gambarpkk',$request->file('gambar'));
            $data=([
                'gambar'=>$gambar,
            ]);
            $pkk->update($data);
        }
        alert()->success('Sukses','Data berhasil di edit');
        return redirect('struktur_pkk');
    }
    public function deletekt($id){
        $jabatan = Jabatan::find($id);
        $data = pkk_structure::find($id);
        $gambar=$data->gambar;
        Storage::delete('public/'.$gambar);
        $data -> delete();
        return redirect('struktur_pkk');
    }
    public function search(Request $request)
    {
        $keyword = $request->search;
        $data = pkk_structure::where('nama', 'LIKE', '%' . $keyword .'%')
        ->paginate(8);
        return view('admindesa.struktur_pkk', compact('data'));
    }
}
