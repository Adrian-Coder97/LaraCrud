<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;;

class PagesController extends Controller
{
    public function inicio()
    {
        $notas = Nota::paginate(3); //guardar en la variable notas todo lo que viene de la tabla notas de la db 
        return view('welcome', compact('notas'));
    }

    public function detalle($id)
    {
        $nota = Nota::findOrFail($id);
        return view('notas.detalle', compact('nota'));
    }

    public function crear(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);
        //return $request->all(); 
        $notaNueva = new Nota;
        $notaNueva->nombre = $request->nombre;
        $notaNueva->descripcion = $request->descripcion;
        $notaNueva->save(); //guardar en la bd
        return back()->with('mensaje', 'Nota Agregada'); //regresar a welcome 
    }

    public function fotos()
    {
        return view("fotos");
    }

    public function blog()
    {
        return view("blog");
    }


    public function nosotros($nombre = null)
    {
        $equipo = ["Adrian", "Juanito", "Pedrito"];
        return view("nosotros", compact("equipo", "nombre"));
    }

    public function editar($id)
    {
        $nota = Nota::findOrFail($id);
        return view("notas.editar", compact('nota'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        $notaUpdate = Nota::findOrFail($id);
        $notaUpdate->nombre = $request->nombre;
        $notaUpdate->descripcion = $request->descripcion;
        $notaUpdate->save();
        return back()->with('mensaje', 'Nota actualizada');
    }

    public function eliminar($id)
    {
        $notaElim = Nota::findOrFail($id); // buscar en la bd el id que queremos 
        $notaElim->delete(); 
        return back()->with('mensaje', 'Nota eliminada');
    }
}
