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
        return Redirect('ppending/' . $searchTerm);
    }

    public function tampilpending($id)
    {

        // $berita = desa_new::where('user_id',$id);
        // ->orderBy('created_at', 'desc')

        $data = User::where('id', $id)->first();
        return view('pending', ['data' => $data]);

    }

    public function updatepending(Request $request, $id)
    {

        $data = User::findOrfail($id);
        $request->validate([
            'name' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'email' => 'required',
            'kode_pos' => 'required|min:5|max:8',
            'gambar' => 'nullable|mimetypes:application/pdf|max:10000',
            'logo' => 'nullable|image|mimes:jpeg,jpg,png',
        ], [
                'name.required' => 'Nama harus di isi',
                'provinsi.required' => 'Provinsi tidak boleh kosong',
                'kabupaten.required' => 'Kabupaten tidak boleh kosong',
                'kecamatan.required' => 'Kecamatan tidak boleh kosong',
                'email.required' => 'Email tidak boleh kosong',
                'kode_pos.required' => 'Kode Pos tidak boleh kosong',
                'kode_pos.min' => 'Kode pos minimal 5 angka',
                'kode_pos.max' => 'Kode pos minimal 8 angka',
                'gambar.mimetypes' => 'Persetujuan harus dalam bentuk pdf max 10000kb',
                'gambar.image' => 'Persetujuan harus berekstensi pdf',
                'logo.mimes' => 'Logo harus dalam bentuk JPEG, PNG, JPG',
                'logo.image' => 'Logo yang di inputkan harus gambar',
            ]);
        $data->update([
            'name' => $request->name,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'email' => $request->email,
            'kode_pos' => $request->kode_pos,

        ]);
        if ($request->hasFile('gambar')) {
            Storage::delete('public/' . $data->gambar);
            $persetujuan = Storage::disk('public')->put('gpersetujuan', $request->file('gambar'));
            $data->update([
                'gambar' => $persetujuan,
            ]);
        }
        if ($request->hasFile('logo')) {
            Storage::delete('public/' . $data->logo);
            $logo = Storage::disk('public')->put('glogo', $request->file('logo'));
            $data->update([
                'logo' => $logo,
            ]);
        }

        alert()->success('Sukses', 'Data berhasil di edit');
        return redirect()->route('pending', ['id' => $id])->with('success', 'Data berhasil diupdate');

    }

}