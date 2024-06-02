<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meet extends Model
{
    use HasFactory;

    protected $table_name = "meet";

    protected $fillable = [
        'topik',
        'deskripsi',
        'jam_mulai',
        'jam_berakhir',
        'tanggal',
        'link',
        'materi',
        'total_remaja',
        'mentor_id',
    ];
}
