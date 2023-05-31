<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hasil_pertandingan extends Model
{
    use HasFactory;

    protected $table = 'hasil_pertandingans';

    protected $fillable = [
        'logo_tim_a',
        'nama_tim_a',
        'skor_a',
        'logo_tim_b',
        'nama_tim_b',
        'skor_b',
        'matchday'
    ];
}
