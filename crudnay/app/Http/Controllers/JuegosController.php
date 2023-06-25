<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Juego;

class JuegosController extends Controller
{
    //se utiliza para obtener todos los registros de la tabla
    public function index()
    {
        return Juego::all();
    }

    //Esta función se utiliza para almacenar un nuevo dato en la base de datos
    public function store(Request $request)
    {
        $jueg=new Juego();
        $jueg->nombre_juego=$request->nombre_juego;
        $jueg->descripcion=$request->descripcion;
        $jueg->nivel_dificultad=$request->nivel_dificultad;
        $jueg->imagen=$request->imagen;
        $jueg->puntuacion=$request->puntuacion;
        $jueg->save();
        return $jueg;
    }

    //Esta función se utiliza para actualizar el dato existente en la base de datos
    public function update(Request $request, $id)
    {
        $jueg=Juego::find($id);
        $jueg->nombre_juego=$request->nombre_juego;
        $jueg->descripcion=$request->descripcion;
        $jueg->nivel_dificultad=$request->nivel_dificultad;
        $jueg->imagen=$request->imagen;
        $jueg->puntuacion=$request->puntuacion;

        $jueg->save();
        return $jueg;
    }

    //Esta función se utiliza para eliminar el dato de la base de datos
    public function destroy($id)
    {
        return Juego::destroy($id);
    }
    
}
