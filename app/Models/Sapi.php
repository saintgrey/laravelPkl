<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sapi extends Model
{
    //
    protected $fillable = [
        'id_jenis_sapi', 'id_user', 'umur','jumlah','deskripsi','foto'
    ];
}
