<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tim extends Model
{
    // use HasFactory;
    protected $table = 'tims';

    protected $fillable = [
        'pos',
        'logo_tim',
        'nama_tim',
        'poin',
        'game',
        'menang',
        'seri',
        'kalah',
        'gol',
        'kebobolan',
        'gd',
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

}
