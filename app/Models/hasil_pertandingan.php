<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hasil_pertandingan extends Model
{
    use HasFactory;

    protected $table = 'hasil_pertandingans';

    protected $fillable = [
        'skor_home',
        'skor_away',
        'matchday'
    ];

    public function tim()
    {
        return $this->belongsTo(Tim::class);
    }
}
