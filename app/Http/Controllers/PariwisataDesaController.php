<?php

namespace App\Http\Controllers;

use App\Models\tour;
use App\Models\User;
use Illuminate\Http\Request;

class PariwisataDesaController extends Controller
{
    public function pwdesa($id){
    // dd('asdas');
    $tour = tour::where('user_id',$id)->get();
    $data_user = User::where('id',$id)->get();

    return view('detail', compact('tour','data_user'));
     

}

public function kepw(Request $request)
{
    
    $searchTerm = $request->id;
    return Redirect('pariwisatadesa/'.$searchTerm);
}
}
