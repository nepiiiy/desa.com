<?php

namespace App\Http\Controllers;

use App\Models\desa_profile;
use App\Models\public_facility;
use App\Models\User;
use Illuminate\Http\Request;

class SaranaDesaController extends Controller
{
    public function kesarana(Request $request)
    {
        // dd('asdas');
        $searchTerm = $request->id;
        return Redirect('saranadesa/'.$searchTerm);
    }
    public function sarana($id){
        $profile = desa_profile::where('user_id',$id)->get();
        $sarana = public_facility::where('user_id',$id)->get();
        $data_user = User::where('id',$id)->get();
        // dd($profile);
        return view('desa.saranaumum',['sarana'=>$sarana, 'data_user'=>$data_user, 'profil'=>$profile]);

}
}
