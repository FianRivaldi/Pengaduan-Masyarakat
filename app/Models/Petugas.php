<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Petugas extends Authenticatable
{
    use HasFactory;
    protected $table = 'petugas';
    // protected $primaryke
    protected $fillable = ['id_petugas', 'nama_petugas', 'username', 'password', 'jenis_kelamin', 'alamat', 'telp', 'level'];
}
