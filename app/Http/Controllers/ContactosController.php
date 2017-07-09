<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacto;

class ContactosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
      $lista=Contacto::all();
      return view('contactos',['contactos'=>$lista]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contactos_crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contacto = new Contacto;
        $contacto->nombre   = $request->nombre;
        $contacto->apellido = $request->apellido;
        $contacto->telefono = $request->telefono;
        $contacto->email    = $request->email;
        if($contacto->save())
          return true;
        else
          return false;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     //recuperar
    public function show($id)
    {
        $contacto = Contacto::findOrFail($id);//busca por clave primaria y si falla no sale error
        if($contacto)
          return $contacto;
        else
          return false;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
      $contacto = Contacto::findOrFail($id);//busca por clave primaria y si falla no sale error
      if($contacto){
        $contacto->nombre   = $request->nombre;
        $contacto->apellido = $request->apellido;
        $contacto->telefono = $request->telefono;
        $contacto->email    = $request->email;
        if($contacto->save())
          return 'Se actualizo';
        else
          return 'No se pudo actualizar';
      }else
        return false;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contacto = Contacto::findOrFail($id);
        if($contacto){
          $contacto->delete();
          return true;
        }else
          return false;
    }
}
