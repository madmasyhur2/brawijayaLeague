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
        'home_tim',
        'logo_home_tim',
        'away_tim',
        'logo_away_tim',
        'matchday',
        'tanggal',
        'jam',
    ];


    public function tim()
    {
        return $this->hasMany(Tim::class);
    }
}
