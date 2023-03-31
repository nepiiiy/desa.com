<?php

namespace App\Http\Controllers;

use App\Models\desa_profile;
use App\Models\tour;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PariwisataDesaController extends Controller
{
    public function pwdesa($id){
    // dd('asdas');
    $tour = tour::where('user_id',$id)->paginate(9);
    $data_user = User::where('id',$id)->get();
    $profile = desa_profile::where('user_id',$id)->get();
    return view('desa.pariwisatadesa',['data_user'=>$data_user,'tour'=>$tour, 'profil'=>$profile]);
     

}

public function kepw(Request $request)
{
    
    $searchTerm = $request->id;
    return Redirect('pariwisatadesa/'.$searchTerm);
}
public function lihatpar($id)
    {
         $data_user = User::where('id',$id)->get();
        $berita = tour::where('id',$id)->get();
        // $profile = desa_profile::where('user_id',$id)->get();
        // $berita = desa_new::find($id);

        return view('desa.lihatpar',['data_user'=>$data_user,'berita'=>$berita]);

    }
}
