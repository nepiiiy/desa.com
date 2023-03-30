<?php

namespace App\Http\Controllers;

use App\Models\resident;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class GrafikUsiaDesaController extends Controller
{
    public function kegu(Request $request)
    {
        $searchTerm = $request->id;
    return Redirect('grafikusia/'.$searchTerm);
    }
    public function grafikusia($id){
    
        $umur = resident::where('user_id',$id)->count();
        $data_user = User::where('id',$id)->get();


        $penduduk = resident::all()->where('user_id',$id);
        $balita = 0;
        $anak = 0;
        $remaja = 0;
        $dewasa = 0;
        $lansia = 0;

        foreach($penduduk as $pen){
            $usia = Carbon::parse($pen->tanggal)->age;

             if ($usia >= 0 && $usia <= 5){
                $balita += 1;
            } elseif ($usia >= 6 && $usia <= 15){
                $anak += 1;
            } elseif ($usia >=16 && $usia <= 25){
                $remaja += 1;
            } elseif ($usia >= 26 && $usia <= 45){
                $dewasa += 1;
            } elseif ($usia >= 46 && $usia <= 100){
                $lansia += 1;
            }
        }
        return view('desa.grafikusia', compact('umur', 'usia', 'balita', 'anak', 'remaja', 'dewasa', 'lansia','data_user'));

}
}
