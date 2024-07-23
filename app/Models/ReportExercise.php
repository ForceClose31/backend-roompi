<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportExercise extends Model
{
    use HasFactory;

    protected $table = "report_exercise";

    protected $fillable = [
        'remaja_id',
        'bagian_id',
        'sub_bagian_id',
        'activity_id',
        'category_id',
        'paket_id',
        'nilai',
        'completed',
    ];
}
