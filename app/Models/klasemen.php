<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class klasemen extends Model
{
    use HasFactory;

    protected $table = 'klasemens';
    protected $fillable = [
        'logo_tim',
        'nama_tim',
        'game',
        'menang',
        'seri',
        'kalah',
        'gol',
        'kebobolan',
    ];
}
