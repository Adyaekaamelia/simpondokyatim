<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trans_donasi extends Model
{
    use HasFactory;

    public function konfirmasi_donasi()
    {

        return $this->hasMany('App\Models\Konfirmasi_donasi', 'trans_id');
    }
}
