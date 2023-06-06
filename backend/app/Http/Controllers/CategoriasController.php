<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;


class CategoriasController extends Controller
{
    //se utiliza para obtener todos los registros de la tabla
    public function index()
    {
        return Categorias::all();
    }
    //Esta función se utiliza para almacenar un nuevo dato en la base de datos
    public function store(Request $request)
    {
        $categ=new Categorias();
        $categ->nombre_categoria=$request->nombre_categoria;
        $categ->save();
        return $categ;
    }

    //Esta función se utiliza para actualizar el dato existente en la base de datos
    public function update(Request $request, $id)
    {
        $categ=new Categorias();
        $categ->nombre_categoria=$request->nombre_categoria;
        $categ->id_juegos=$request->id_juegos;
        $categ->save();
        return $categ;
    }

    //Esta función se utiliza para eliminar el dato de la base de datos
    public function destroy($id)
    {
        return Categorias::destroy($id);
    }
}