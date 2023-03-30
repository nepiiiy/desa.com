<?php

namespace App\Http\Controllers;

use App\Models\desa_profile;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TentangDesaController extends Controller
{
    public function tentangdesa(){
        // $data = desa_profile::all()->first();
        // $dat=User::all();
        // return view('desa.tentangdesa', compact('data', 'dat'));

        $search_id = session()->get('id');
    $data = User::findOrFail($search_id);
    
return view('desa.tentangdesa', compact('data'));
    }

    public function btntentang(Request $request)
    {   
        // $diti = User::where('status', 'aktif')->where('role', 'admindesa')->get();
        $searchTerm = $request->id;

        return Redirect('tampiltentang/'.$searchTerm);
    }
    
    public function tampiltentang($id)
    {
        $data_user = User::where('id',$id)->get();
        $profile = desa_profile::where('user_id',$id)->get();
        
        return view('desa.tentangdesa',['data_user'=>$data_user,'profil'=>$profile]);

    }
}
