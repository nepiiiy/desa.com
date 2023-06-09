<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\desa_new;
use Illuminate\Support\Str;
use App\Models\desa_profile;
use Illuminate\Http\Request;

class BeritaDesaController extends Controller
{
    public function keberita(Request $request)
    {
        // dd('asdas');
        $searchTerm = $request->id;
        return Redirect('beritadesa/'.$searchTerm);
    }

    public function lihat($uid,$id)
    {
         $data_user = User::where('id',$uid)->get();
        $berita = desa_new::where('id',$uid)->get();
        $news = desa_new::where('user_id',$id)->orderBy('created_at', 'desc')->get();
        // $profile = desa_profile::where('user_id',$id)->get();
        // $berita = desa_new::find($id);

        return view('desa.lihatberita',['data_user'=>$data_user,'berita'=>$berita, 'news'=>$news]);

    }

    
    public function beritadesa($id)
    {
        // $berita = desa_new::where('user_id',$id);
    
       
        $data_user = User::where('id',$id)->get();
        $berita = desa_new::where('user_id',$id)->paginate(8);
        // $berita->judul = Str::limit($berita->judul, 5);
        $profile = desa_profile::where('user_id',$id)->get();
        return view('desa.beritadesa',['data_user'=>$data_user,'berita'=>$berita, 'profil'=>$profile]);
        // ->orderBy('created_at', 'desc')

    }

    
    // public function lihatberita($id)
    // {
    //     $data_user = User::where('id',$id)->get();
    //     $berita = desa_new::where('user_id',$id)->get();
    //     return view('desa.lihatberita',['data_user'=>$data_user,'berita'=>$berita]);
    // }

}
