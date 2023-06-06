<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retroalimentaciones extends Model
{
    use HasFactory;
    protected $fillable = [
        'retroalimentacion',
        'id_juegos',
    ];
}
