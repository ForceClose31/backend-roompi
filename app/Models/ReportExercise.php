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

    public function bagian()
    {
        return $this->belongsTo(Bagian::class, 'bagian_id');
    }

    public function subBagian()
    {
        return $this->belongsTo(SubBagian::class, 'sub_bagian_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
