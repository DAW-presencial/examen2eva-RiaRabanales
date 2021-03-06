<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tutor;

class TutoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tutores');
        //Devuelvo la única vista existente.
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'empresa'=>'required|min:2',
            //Por incluir alguna comprobación aparte del e-mail: quiero evitar las iniciales, así que se debe introducir un mínimo de 2 caracteres.
            'nombre'=>'required|min:2|max:16',
            'apellido1'=>'required|min:2',
            'numDocumento'=> 'required|unique:tutors',
            'telefono'=>'required|min:8',
            'email'=>'required|email:filter'
        ]);

        $tutor = new Tutor([
            'empresa' => $request->get('empresa'),
            'nombre' => $request->get('nombre'),
            'apellido1' => $request->get('apellido1'),
            'apellido2' => $request->get('apellido2'),
            'tipoDocumento' => $request->get('tipoDocumento'),
            'numDocumento' => $request->get('numDocumento'),
            'municipio' => $request->get('municipio'),
            'provincia' => $request->get('provincia'),
            'pais' => $request->get('pais'),
            'telefono' => $request->get('telefono'),
            'email' => $request->get('email'),
            'estado' => $request->get('estado')
        ]);
        $tutor->save();
        return redirect('/tutores/create')->with('success', 'Tutor guardado');
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
    public function edit($id)
    {
        $tutor = Tutor::find($id);
        //Si existiera la vista: return view('editTutor', compact('tutor'));
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
        /*
        Proceso: incluiría la misma validación que en update
        Luego: $tutor = Tutor::find($id);
        Luego los $request
        Finalmente: $tutor->save();
        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tutor = Tutor::find($id);
        $tutor->delete();

        return redirect('/tutores')->with('success', 'Tutor eliminado.');
    }
}
