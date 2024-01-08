<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;

    protected $table = 'pembeli';

    protected $fillable = [
        'nama_pembeli',
        'email',
        'password',
        'no_telepon',
        'alamat',
        'tgl_lahir',
        'jenis_kelamin',
        'foto_pembeli',
    ];
}
