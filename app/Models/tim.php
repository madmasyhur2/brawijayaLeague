<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class tim extends Model
{
    // use HasFactory;
    protected $table = 'tims';

    protected $fillable = [
        'logo_tim',
        'nama_tim',
        'menang',
        'seri',
        'kalah',
        'gol',
        'kebobolan',
    ];

    public function getGame()
    {
        return($this->menang + $this->seri + $this->kalah);
    }

    public function getGD()
    {
        return($this->gol - $this->kebobolan);
    }

    public function getPoin()
    {
        return($this->menang * 3 + $this->seri * 1 + $this->kalah * 0);
    }

    public function pertandingan()
    {
        return $this->hasMany(pertandingan::class, 'tim_id', 'id');
    }

    public function hasil_pertandingan()
    {
        return $this->belongsTo(hasil_pertandingan::class, 'tim_id', 'id');
    }
}
