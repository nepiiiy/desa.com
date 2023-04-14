<?php

namespace App\Http\Controllers;

use App\Models\desa_profile;
use App\Models\pkk_structure;
use App\Models\User;
use Illuminate\Http\Request;

class PKKDesaController extends Controller
{
    
    public function kepkk(Request $request)
{
    // dd('asdas');
    $searchTerm = $request->id;
    return Redirect('pkk/'.$searchTerm);
}
public function pkk($id)
    {
        // $berita = desa_new::where('user_id',$id);
    
       
        $data_user = User::where('id',$id)->get();
        $pkk = pkk_structure::where('user_id',$id)->paginate(8);
        $profile = desa_profile::where('user_id',$id)->get();
        return view('desa.pkk',['data_user'=>$data_user,'pkk'=>$pkk, 'profil'=>$profile]);
        // ->orderBy('created_at', 'desc')

    }
}
