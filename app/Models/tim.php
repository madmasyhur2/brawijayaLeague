<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tim extends Model
{
    // use HasFactory;

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

    protected $table = 'tims';
}
