<?php

namespace App\Http\Controllers;

use Closure;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('dashboardadmindesa ');
        }else{
            return view('login');
        }
    }



    public function store(Request $request)
    {
        
        
        
        
        
        
        $credentials = $request->only('email', 'password');
        $credentials['status'] = 'pending';
    if (Auth::attempt($credentials)) {
        // Jika login berhasi
        $user_id = Auth::id();
        $request->session()->put('id', $user_id);
        
        return redirect()->intended(route('kepending',['id' => Auth()->user()->id]));
    }

    // Jika email tidak ditemukan atau akun telah dihapus
    if (!User::where('email', $request->email)->first()) {
        return redirect()->back()->withInput()->withErrors(['email' => 'Akun Anda tidak ditemukan atau telah dihapus.']);
    }

    // Jika password salah
        
    $credentials = $request->only('email', 'password');
    
    
    
    if (Auth::attempt($credentials)) {
        // Jika login berhasil
        if (auth()->user()->role == 'admindesa') {
          
            return redirect()->intended('dashboardadmindesa');
        } else {
           
            return redirect()->intended('dataadmin');
        }
    }

    // Jika email tidak ditemukan atau akun telah dihapus
    if (!User::where('email', $request->email)->first()) {
        return redirect()->back()->withInput()->withErrors(['email' => 'Akun Anda tidak ditemukan atau telah dihapus.']);
    }

    // Jika password salah
    return redirect()->back()->withInput()->withErrors(['password' => 'Password Anda salah.']);
    }



    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}