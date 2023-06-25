<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tema;

class TemasController extends Controller
{
    //se utiliza para obtener todos los registros de la tabla
    public function index()
    {
        return Tema::all();
    }
    //Esta función se utiliza para almacenar un nuevo dato en la base de datos
    public function store(Request $request)
    {
        $tema=new Tema();
        $tema->titulo=$request->titulo;
        $tema->descripcion=$request->descripcion;
        $tema->id_juegos=$request->id_juegos;
        $tema->save();
        return $tema;
    }

    //Esta función se utiliza para actualizar el dato existente en la base de datos
    public function update(Request $request, $id)
    {
        $tema=Tema::find($id);
        $tema->titulo=$request->titulo;
        $tema->descripcion=$request->descripcion;
        $tema->id_juegos=$request->id_juegos;
        $tema->save();
        return $tema;
    }

    //Esta función se utiliza para eliminar el dato de la base de datos
    public function destroy($id)
    {
        return Tema::destroy($id);
    }
}
