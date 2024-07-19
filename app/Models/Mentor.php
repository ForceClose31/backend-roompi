<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;

    protected $table = "mentor";

    protected $fillable = [
        'nama_lengkap',
        'gelar',
        'riwayat_pendidikan_terakhir',
        'user_id',
        'activity_id',
        'paket_id',
    ];
}
