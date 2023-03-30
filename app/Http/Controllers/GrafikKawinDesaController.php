<?php

namespace App\Http\Controllers;

use App\Models\resident;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GrafikKawinDesaController extends Controller
{
    public function grafikperkawinan($id){
        $status = resident::where('user_id',$id)->count();
        $sudah = resident::where('status', 'Sudah')->where('user_id',$id)->count();
        $belum = resident::where('status', 'Belum')->where('user_id',$id)->count();
        $data_user = User::where('id',$id)->get();
        return view('desa.grafikperkawinan', compact('status', 'sudah', 'belum','data_user'));

}
    public function kekawin(Request $request)
    {
        $searchTerm = $request->id;
    return Redirect('grafikkawin/'.$searchTerm);
    }
}
