<?php

namespace App\Http\Controllers;

use App\Models\desa_profile;
use App\Models\kt_structure;
use App\Models\User;
use Illuminate\Http\Request;

class KarangTarunaDesaController extends Controller
{
    public function karangtaruna(){
        return view('desa/karangtaruna');

}
public function kesttaruna(Request $request)
{
    // dd('asdas');
    $searchTerm = $request->id;
    return Redirect('sttaruna/'.$searchTerm);
}
public function sttaruna($id)
    {
        // $berita = desa_new::where('user_id',$id);
    
       
        $data_user = User::where('id',$id)->get();
        $kt_struktur = kt_structure::where('user_id',$id)->get();
        $profile = desa_profile::where('user_id',$id)->get();
        return view('desa.karangtaruna',['data_user'=>$data_user,'kt_struktur'=>$kt_struktur, 'profil'=>$profile]);
        // ->orderBy('created_at', 'desc')

    }
}
