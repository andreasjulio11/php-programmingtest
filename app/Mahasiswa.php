<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //
    protected $fillable=['nama', 'npm', 'email', 'jurusan', 'alamat', 'nomor'];
}
