<?php

namespace App\Http\Controllers;

use App\Models\desa_award;
use App\Models\desa_new;
use App\Models\desa_profile;
use App\Models\User;
use Illuminate\Http\Request;

class PenghargaanDesaController extends Controller
{
    public function kepenghargaan(Request $request)
    {
        // dd('asdas');
        $searchTerm = $request->id;
        return Redirect('pengdesa/'.$searchTerm);
    }



    public function pengdesa($id)
    {
        // $berita = desa_new::where('user_id',$id);
    
       
        $data_user = User::where('id',$id)->get();
        $penghargaan = desa_award::where('user_id',$id)->paginate(8);
        $profile = desa_profile::where('user_id',$id)->get();
        return view('desa.penghargaandesa',['data_user'=>$data_user,'penghargaan'=>$penghargaan, 'profil'=>$profile]);
        // ->orderBy('created_at', 'desc')

    }

    public function lihatpeng($uid, $id)
    {
        $data_user = User::where('id',$uid)->get();
        $berita = desa_award::where('id',$uid)->get();
        $peng = desa_award::where('user_id',$id)->orderBy('created_at', 'desc')->get();
        return view('desa.lihatpenghargaan',['data_user'=>$data_user,'berita'=>$berita, 'peng'=>$peng]);
    }
}
