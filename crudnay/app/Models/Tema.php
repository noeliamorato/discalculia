<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descripcion',
        'id_juegos'
    ];
    

    /* //relacion de uno a muchos temas - juegos
    public function juego(){
        return $this -> hasMany(Juego::class);
    } */
}
