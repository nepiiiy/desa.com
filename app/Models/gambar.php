<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gambar extends Model
{
    use HasFactory;

    protected $fillable=[
        'gambar',
        'gallery_id',
    ];

    public function data(){
        return $this->belongsTo(gallery::class);
    }
}
