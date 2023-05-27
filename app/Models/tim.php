<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tim extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo_tim',
        'nama_tim',
        'pos',
        'poin',
        'menang',
        'seri',
        'kalah',
        'gol',
        'kebobolan',
    ];
}
