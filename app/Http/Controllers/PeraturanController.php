<?php

namespace App\Http\Controllers;

use App\Models\desa_rule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class PeraturanController extends Controller
{
    public function peraturan()
    {
        // $data = desa_rule::latest()->paginate(3);
        $data = desa_rule::where('user_id',Auth::user()->id)->paginate(8);
        return view('admindesa.peraturan', compact('data'));
    }
    public function tambahperaturan(){
        return view('admindesa.tambah-peraturan');
    }

    public function insertperaturan(Request $request){
$request->validate([
    'nomor'=>'required',
    'tentang'=>'required',
    'peraturan'=>'required|mimetypes:application/pdf|max:10000',
],[
    'nomor.required'=>'Nomor & Tanggal Penetapan tidak boleh kosong',
    'tentang.required'=>'Tentang tidak boleh kosong',
    'peraturan.required'=>'Peraturan tidak boleh kosong',
    'peraturan.mimetypes'=>'File harus berekstensi PDF',
    'peraturan.max'=>'Ukuran file tidak lebih dari 10 MB',
]);

$peraturan = Storage::disk('public')->put('peraturan', $request->file('peraturan'));
$data = desa_rule::create([
            
        
    'nomor' => $request->nomor,
    'tentang' => $request->tentang,
    'peraturan' => $peraturan,
    
]);
        $data->user_id = Auth::user()->id;
        $data->save();
        alert()->success('Sukses','Peraturan berhasil di tambahakan');
        return redirect('peraturan');
    }
    public function tampilperaturan($id){
        $data = desa_rule::find($id);
        return view('admindesa.tampil-peraturan', compact('data'));
    }
    public function updateperaturan(Request $request, $id){
        $data = desa_rule::find($id);
        $request->validate([
            'nomor'=>'required',
            'tentang'=>'required',
            'peraturan'=>'nullable|mimetypes:application/pdf|max:10000',
        ],[
            'nomor.required'=>'Nomor & Tanggal Penetapan tidak boleh kosong',
            'tentang.required'=>'Tentang tidak boleh kosong',
            'peraturan.mimetypes'=>'File harus berekstensi PDF',
            'peraturan.max'=>'Ukuran file tidak lebih dari 10 MB',
        ]);
        $data -> update($request -> all());
        alert()->success('Sukses','Peraturan berhasil di edit');
        return redirect('peraturan');
    }
    public function deleteperaturan($id){
        $data = desa_rule::find($id);
        $data -> delete();
        return redirect('peraturan');
    }

}

