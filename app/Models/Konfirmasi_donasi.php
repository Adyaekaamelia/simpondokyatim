<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konfirmasi_donasi extends Model
{
    use HasFactory;

    public function trans_donasi()
    {

        return $this->belongsTo('App\Models\Trans_donasi', 'trans_id');
    }
}
