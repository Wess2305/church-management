<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jemaat extends Model
{
      protected $fillable = [
        'nama',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'no_hp',
        'email',
      ];
}
