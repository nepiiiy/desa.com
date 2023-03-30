<?php

namespace App\Http\Controllers;

use App\Models\desa_profile;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class UMKMDesaController extends Controller
{
    public function keumkm(Request $request)
    {
        // dd('asdas');
        $searchTerm = $request->id;
        return Redirect('umkmdesa/'.$searchTerm);
    }
    public function umkmdesa($id){
        $data_user = User::where('id',$id)->get();
        $umkm = Product::where('user_id',$id)->get();
        $profile = desa_profile::where('user_id',$id)->get();
        // dd($umkm);
        return view('desa/umkmdesa', ['data_user'=>$data_user, 'umkm'=>$umkm, 'profil'=>$profile]);

}
}
