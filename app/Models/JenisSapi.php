<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisSapi extends Model
{
    //
    protected $fillable = [
        'nama_jenis'
    ];

    public function resolveRouteBinding($id)
    {
        return $this->where('id', $id)->first();
    }
}
