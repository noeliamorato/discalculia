<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Temas;

class TemasController extends Controller
{
    //se utiliza para obtener todos los registros de la tabla
    public function index()
    {
        return Temas::all();
    }
    //Esta función se utiliza para almacenar un nuevo dato en la base de datos
    public function store(Request $request)
    {
        $tema=new Temas();
        $tema->titulo=$request->titulo;
        $tema->descripcion=$request->descripcion;
        $tema->id_juegos=$request->id_juegos;
        $tema->save();
        return $tema;
    }

    //Esta función se utiliza para actualizar el dato existente en la base de datos
    public function update(Request $request, $id)
    {
        $tema=Temas::find($id);
        $tema->titulo=$request->titulo;
        $tema->descripcion=$request->descripcion;
        $tema->id_juegos=$request->id_juegos;
        $tema->save();
        return $tema;
    }

    //Esta función se utiliza para eliminar el dato de la base de datos
    public function destroy($id)
    {
        return Temas::destroy($id);
    }
}