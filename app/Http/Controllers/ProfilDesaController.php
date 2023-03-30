<?php

namespace App\Http\Controllers;

use App\Models\desa_profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfilDesaController extends Controller
{
    public function profildesa()
    {
        $data = desa_profile::where('user_id',Auth::user()->id)->first();
        return view('admindesa.profil_desa', compact('data'));
    }
    public function updateprofildesa(Request $request, $id)
    {
        // dd('aa');
        
        $data=desa_profile::find($id);
        $request->validate([
            'gambar1' => 'nullable|image|mimes:png,jpeg,jpg,jfif,webp|max:2048',
            'gambar2' => 'nullable|image|mimes:png,jpeg,jpg,jfif,webp|max:2048',
            'gambar3' => 'nullable|image|mimes:png,jpeg,jpg,jfif,webp|max:2048',
        ],
        [
        'gambar1.mimes'=>'Format gambar harus PNG, JPEG, JPG, JFIF, WEBP',
        'gambar2.mimes'=>'Format gambar harus PNG, JPEG, JPG, JFIF, WEBP',
        'gambar3.mimes'=>'Format gambar harus PNG, JPEG, JPG, JFIF, WEBP',
        'gambar1.image' => 'Yang di inputkan harus gambar',
        'gambar2.image' => 'Yang di inputkan harus gambar',
        'gambar3.image' => 'Yang di inputkan harus gambar',
        ]);

        $data->update([
            'sejarah'=>$request->sejarah,
            'visi'=>$request->visi,
            'misi'=>$request->misi,
        ]);

        if($request->hasFile('gambar1')){
            $gambar1 = Storage::disk('public')->put('gambarprof', $request->file('gambar1'));
            $data->update([
                'gambar1'=>$gambar1,
            ]);
        }
        if($request->hasFile('gambar2')){
            $gambar2 = Storage::disk('public')->put('gambarprof', $request->file('gambar2'));
            $data->update([
                'gambar2'=>$gambar2,
            ]);
        }
        if($request->hasFile('gambar3')){
            $gambar3 = Storage::disk('public')->put('gambarprof', $request->file('gambar3'));
            $data->update([
                'gambar3'=>$gambar3,
            ]);
        }
        alert()->success('Sukses','Data berhasil di edit');
        return redirect()->back();
    }
}
