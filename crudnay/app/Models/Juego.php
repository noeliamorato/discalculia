<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    protected $fillable = [
        'nombre_juego',
        'descripcion',
        'nivel_dificultad',
        'imagen',
        'puntuacion',
        
    ];



    //relacion de uno a muchos inversa juegos - user
    /* public function user(){
        return $this -> belongsTo(User::class);
    }

    //relacion de uno a muchos inversa juegos - temas
    public function tema(){
        return $this -> belongsTo(Tema::class);
    } */

}
