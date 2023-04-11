<?php

namespace App\Http\Controllers;

use App\Models\desa_award;
use App\Models\desa_profile;
use App\Models\User;
use App\Models\desa_new;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class DashWebController extends Controller
{

    public function dashboardwebsite()
    {
        $diti = User::where('status', 'aktif')->where('role','admindesa')->orderBy('created_at', 'desc')->get();
        //$last_desa = User::latest()->first(); // mengambil data terakhir dari tabel User
        //$diti->push($last_desa); // menambahkan data terakhir ke dalam array $beritas
        $berita = desa_new::orderBy('created_at', 'desc')->take(9)->get();
        return view('website.dashweb', ['diti'=>$diti,'news'=>$berita]);
    }

   
    public function tampildesa($id)
    {
        // $berita = desa_new::where('user_id',$id);
        $berita = desa_new::where('user_id',$id)->orderBy('created_at', 'desc')->get();
        $penghargaan = desa_award::where('user_id',$id)->get();
        $gambar = desa_profile::where('user_id',$id)->get();
        $data_user = User::where('id',$id)->get();
        // dd($gambar);
        return view('desa.dashdesa',['news'=>$berita,'award'=>$penghargaan,'gambar'=>$gambar,'data_user'=>$data_user]);
        // ->orderBy('created_at', 'desc')

    }


    public function dashwebinput(Request $request)
    {   

        $searchTerm = $request->id;
        return Redirect('dashweb/'.$searchTerm);
    }

    



}
