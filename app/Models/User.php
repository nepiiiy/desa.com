<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

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

}