<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PendingController extends Controller
{
    public function show(Request $request)
    {
        $searchTerm = $request->id;
        // dd($searchTerm);
        return Redirect('ppending/'.$searchTerm);
    }

    public function tampilpending($id)
    {

        // $berita = desa_new::where('user_id',$id);
        // ->orderBy('created_at', 'desc')

        $data = User::where('id',$id)->first();
        return view('pending',['data'=>$data]);

    }

    public function updatepending(Request $request, $id){

        $data = User::findOrfail($id);

        $data->update([
            'name' => $request->name,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'email' => $request->email,
            'kode_pos' => $request->kode_pos,

        ]);
        if($request->hasFile('logo')){
            $logo = Storage::disk('public')->put('glogo', $request->file('logo'));
            $data->update([
                'logo'=>$logo,
            ]);
        }

        if($request->hasFile('gambar')){
            $persetujuan = Storage::disk('public')->put('gpersetujuan', $request->file('gambar'));
            $data->update([
                'gambar'=>$persetujuan,
            ]);
        }

        $data->update();
        alert()->success('Sukses','Data berhasil di edit');
        return redirect()->route('pending', ['id' => $id])->with('success', 'Data berhasil diupdate');

    }

}

