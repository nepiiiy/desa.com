<?php

namespace App\Http\Controllers;

use App\Models\desa_profile;
use App\Models\desa_rule;
use App\Models\User;
use Illuminate\Http\Request;

class PeraturanDesaController extends Controller
{
    public function keperaturan(Request $request)
    {
        $searchTerm = $request->id;
        return Redirect('peraturandesa/'.$searchTerm);
    }
    public function peraturandesa($id){
        $data=desa_rule::where('user_id',$id)->paginate(10);
        $data_user = User::where('id',$id)->get();
        $profile = desa_profile::where('user_id',$id)->get();
        return view('desa.peraturandesa',['data'=>$data, 'data_user'=>$data_user, 'profil'=>$profile]);

}
}
