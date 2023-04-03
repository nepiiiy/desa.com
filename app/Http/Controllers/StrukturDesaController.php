<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\lembaga_structure;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Routing\Matcher\RedirectableUrlMatcher;

class StrukturDesaController extends Controller
{
  

    public function strukturdesa()
    {
        // $data = lembaga_structure::first();
        $data = lembaga_structure::where('user_id',Auth::user()->id)->first();
        // dd($data);
        return view('admindesa.struktur_desa', compact('data'));
    }
    public function updatestrukturdesa(Request $request)
    {
        $data = lembaga_structure::where('user_id',Auth::user()->id)->first();
        $request->validate([
            'gambar'=>'required|image|mimes:jpeg,jpg,png|max:2048',
        ],[
            'gambar.required'=>'Gambar tidak boleh kosong',
            'gambar.image'=>'Yang di inputkan harus gambar',
            'gambar.mimes'=>'File harus berekstensi JPEG, JPG, PNG',
            'gambar.max'=>'Ukuran gambar tidak lebih dari 2 mb',
        ]);
        if($request->hasFile('gambar')){
            Storage::delete('public/'.$data->gambar);
            $gambar = Storage::disk('public')->put('strukturdesa', $request->file('gambar'));
            $data->update([
                'gambar'=>$gambar,
            ]);
        }
        // Storage::delete('public/'.$data->gambar);
        // $gambar = Storage::disk('public')->put('strukturdesa', $request->file('gambar'));
        alert()->success('Sukses','Data berhasil di edit');
        return redirect()->back();
    }
}