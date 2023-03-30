<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\lembaga_structure;
use Illuminate\Support\Facades\Auth;

class LembagaDesaController extends Controller
{
//     public function pemerintahdesa(){
//         $data = lembaga_structure::all()->first();
//         return view('desa/pemerintahdesa', compact('data'));

// }
public function kestdesa(Request $request)
    {
        $searchTerm = $request->id;
        return Redirect('stdesa/'.$searchTerm);
    }

    public function stdesa($id)
    {
        // $berita = desa_new::where('user_id',$id);
       
        $data_user = User::where('id',$id)->get();
        $gambar = lembaga_structure::where('user_id',$id)->get();
        return view('desa.pemerintahdesa',['data_user'=>$data_user,'gambar'=>$gambar]);
        // ->orderBy('created_at', 'desc')

    }
}
