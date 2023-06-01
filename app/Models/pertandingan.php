<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pertandingan extends Model
{
    use HasFactory;

    protected $table = 'pertandingans';
    protected $fillable = [
        'nama_tim_a',
        'nama_tim_b',
        'matchday',
        'tanggal',
        'jam',
    ];

    public function tim()
    {
        return $this->hasMany(Tim::class, 'pertandingan_id', 'id');
    }
}
