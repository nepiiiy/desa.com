<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\desa_new;
use App\Models\desa_profile;
use App\Models\gallery;
use App\Models\User;
use Illuminate\Http\Request;

class GaleriDesaController extends Controller
{
public function kegaleri(Request $request)
{
    $searchTerm = $request->id;
        return Redirect('galeridesa/'.$searchTerm);
}
public function lihatgal($uid, $id)
{
    $data_user = User::where('id',$id)->get();
    $galeri = gallery::where('id',$uid)->get();
    $wpp = desa_profile::where('user_id',$id)->get();
    // dd($data_user);
    return view('desa.galeri',['data_user'=>$data_user,'galeri'=>$galeri, 'wpp'=>$wpp]);
}

 public function galeridesa($id)
 {
    $data_user = User::where('id',$id)->get();
    $galeri = gallery::where('user_id',$id)->paginate(4);
    // $berita->judul = Str::limit($berita->judul, 5);
    $profile = gallery::where('user_id',$id)->get();
    $bg = desa_profile::where('user_id',$id)->get();
    return view('desa.galeridesa2',['data_user'=>$data_user,'galeri'=>$galeri, 'profil'=>$profile, 'bg'=>$bg]);
    // ->orderBy('created_at', 'desc')

 }
}
