<?php

namespace App\Http\Controllers;

use App\Models\desa_new;
use App\Models\desa_profile;
use App\Models\User;
use Illuminate\Http\Request;

class DashDesaController extends Controller
{
    
    // public function btntentang(Request $request)
    // {   
    //     // $diti = User::where('status', 'aktif')->where('role', 'admindesa')->get();
    //     $searchTerm = $request->id;

    //     return Redirect('tampiltentang/'.$searchTerm);
    // }
    
    // public function tampiltentang($id)
    // {
    //     $data = User::where('user_id',$id);
    //     $data_user = User::where('id',$id)->get();
    //     $profile = desa_profile::where('user_id',$id)->get();
        
    //     return view('desa.tentangdesa',['data_user'=>$data_user,'profil'=>$profile]);

    // }

}