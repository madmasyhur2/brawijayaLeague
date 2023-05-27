<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class klasemen extends Model
{
    use HasFactory;

    protected $fillable = [
        'pos',
        'nama_tim',
        'game',
        'poin',
        'menang',
        'seri',
        'kalah',
        'gd',
    ];
}
