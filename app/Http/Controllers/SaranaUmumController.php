<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\public_facility;
use Illuminate\Http\Request;

class SaranaUmumController extends Controller
{
    public function sarana()
    {
        $data=public_facility::first();
        return view('admindesa.sarana_umum', compact('data'));
    }
    public function updatesarana(Request $request, $id)
    {

        $data=public_facility::find($id);
        $request->validate([
            'rw' => 'required',
            'rt' => 'required',
            'paud' => 'required',
            'tk' => 'required',
            'sd' => 'required',
            'smp' => 'required',
            'sma' => 'required',
            'rumah' => 'required',
            'puskesmas' => 'required',
            'kesehatan' => 'required',
            'kesehatan' => 'required',
            'kb' => 'required',
            'dokter' => 'required',
            'bidan' => 'required',
        ],[
            'rw.required' => 'Rw tidak boleh kosong',
            'rt.required' => 'Rt tidak boleh kosong',
            'paud.required' => 'Paud tidak boleh kosong',
            'tk.required' => 'Tk tidak boleh kosong',
            'sd.required' => 'Sd tidak boleh kosong',
            'smp.required' => 'Smp tidak boleh kosong',
            'sma.required' => 'Sma tidak boleh kosong',
            'rumah.required' => 'Rumah tidak boleh kosong',
            'puskesmas.required' => 'Puskesmas tidak boleh kosong',
            'kesehatan.required' => 'Kesehatan tidak boleh kosong',
            'posyandu.required' => 'Posyandu tidak boleh kosong',
            'kb.required' => 'Kb tidak boleh kosong',
            'dokter.required' => 'Dokter tidak boleh kosong',
            'bidan.required' => 'Bidan tidak boleh kosong'
        ]);
        $data->update([
            'rw'=>$request->rw,
            'rt'=>$request->rt,
            'paud'=>$request->paud,
            'tk'=>$request->tk,
            'sd'=>$request->sd,
            'smp'=>$request->smp,
            'sma'=>$request->sma,
            'rumah'=>$request->rumah,
            'puskesmas'=>$request->puskesmas,
            'kesehatan'=>$request->kesehatan,
            'posyandu'=>$request->posyandu,
            'kb'=>$request->kb,
            'dokter'=>$request->dokter,
            'bidan'=>$request->bidan,
        ]);
        alert()->success('Sukses','Data berhasil di edit');
        return redirect()->back();
    }
}
