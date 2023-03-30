<?php

namespace App\Http\Controllers;

use App\Models\resident;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GrafikPendidikanDesaController extends Controller
{
    public function grafikpendidikan($id){
        $pendidikan = resident::where('user_id',$id)->count();
        $sd = resident::where('pendidikan', 'SD')->where('user_id',$id)->count();
        $smp = resident::where('pendidikan', 'SMP')->where('user_id',$id)->count();
        $sma = resident::where('pendidikan', 'SMA/SMK')->where('user_id',$id)->count();
        $d3 = resident::where('pendidikan', 'D3')->where('user_id',$id)->count();
        $d4 = resident::where('pendidikan', 'Sarjana/D4')->where('user_id',$id)->count();
        $s2 = resident::where('pendidikan', 'S2')->where('user_id',$id)->count();
        $data_user = User::where('id',$id)->get();

        return view('desa.grafikpendidikan', compact('pendidikan', 'sd', 'smp', 'sma', 'd3', 'd4', 's2','data_user'));

}
        public function kepdd(Request $request)
        {
            $searchTerm = $request->id;
            return Redirect('grafikpdd/'.$searchTerm);
        }
}
