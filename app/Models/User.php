<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;

class User extends Authenticatable
{
    use HasFactory, Notifiable;


    protected $guarded = [];
    protected $hidden = [
        'password',
        'remember_token'
    ];
    // protected $filleble = ['gambar','logo'];
    public function berita()
    {
        return $this->belongsTo(desa_profile::class);
    }

    public function kecamatan()
    {
        return $this->belongsTo(District::class, 'district_id');
    }

    public function kabupaten()
    {
        return $this->belongsTo(Regency::class, 'regency_id');
    }

    public function provinsi()
    {
        return $this->belongsTo(Province::class, 'province_id');
    }

    

}