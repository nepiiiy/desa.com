<?php

namespace App\Http\Controllers;

use App\Models\resident;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GrafikKelaminDesaController extends Controller
{
    public function grafikkelamin($id){
        $jk = resident::where('user_id',$id)->count();
        $perempuan = resident::where('jk', 'Perempuan')->where('user_id',$id)->count();
        $laki = resident::where('jk', 'Laki-Laki')->where('user_id',$id)->count();
        $data_user = User::where('id',$id)->get();

        return view('desa.grafikkelamin', compact('jk', 'perempuan', 'laki','data_user'));

}
public function kejk(Request $request)
{
    $searchTerm = $request->id;
    return Redirect('grafikkelamin/'.$searchTerm);
}
}
