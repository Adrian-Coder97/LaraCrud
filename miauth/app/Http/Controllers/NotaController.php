<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;

class NotaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return auth()->user(); //objeto con los datos del usuario
        $usuarioEmail = auth()->user()->email; //guardar el email del usuario y guardarlo en la variable $usuarioEmail
        $notas = Nota::where('usuario', $usuarioEmail)->paginate(5); //Guadar las notas de ese usuario en la var notas y paginarlas 
        return view('notas.lista', compact('notas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notas.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nota = new Nota();
        $nota->nombre = $request->nombre; //obtener el campo nombre del formlario 
        $nota->descripcion = $request->descripcion; //obtener el campo descripcion del formlario 
        $nota->usuario = auth()->user()->email; //guardar tambien el email asociado del usuario 
        $nota->save();//guardar en la bd 

        return back()->with('mensaje', 'Nota Agregada!');//regresar a la vista crearnota con el mensaje nota agregada 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $nota = Nota::findOrFail($id);
        return view("notas.editar",compact('nota')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
        $notaElim = Nota::findOrFail($id); // buscar en la bd el id que queremos 
        $notaElim->delete(); 
        return back()->with('mensaje', 'Nota eliminada');
    }
}
