<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pertandingan extends Model
{
    use HasFactory;

    protected $table = 'pertandingans';
    protected $primaryKey = 'id';
    protected $fillable = [
        'home_id',
        'away_id',
        'matchday',
        'tanggal',
    ];


    public function tim()
    {
        return $this->belongsTo(Tim::class);
    }
}
