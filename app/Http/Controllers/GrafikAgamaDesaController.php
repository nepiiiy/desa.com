<?php

namespace App\Http\Controllers;

use App\Models\resident;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GrafikAgamaDesaController extends Controller
{

    public function keagama(Request $request)
{
    // dd('asdas');
    $searchTerm = $request->id;
    return Redirect('agama/'.$searchTerm);
}

    public function grafikagama($id){
        $agama = resident::where('user_id',$id)->count();
        $islam = resident::where('agama', 'Islam')->where('user_id',$id)->count();
        $kristen = resident::where('agama', 'Kristen Protestan')->where('user_id',$id)->count();
        $katolik = resident::where('agama', 'Kristen Katolik')->where('user_id',$id)->count();
        $hindu = resident::where('agama', 'Hindu')->where('user_id',$id)->count();
        $budha = resident::where('agama', 'Budha')->where('user_id',$id)->count();
        $konghucu = resident::where('agama', 'Konghucu')->where('user_id',$id)->count();
        $data_user = User::where('id',$id)->get();

        return view('desa/grafikagama', compact('agama', 'islam', 'kristen', 'katolik', 'hindu', 'budha', 'konghucu','data_user'));

}
}
