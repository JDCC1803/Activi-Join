<?php

namespace App\Http\Controllers;
use App\Models\Activitie;
use App\Models\Hexpediente;
use App\Models\Prospecto;
use App\Models\Hermano;
use App\Models\Hijo;
use App\Models\Curso;
use App\Models\Expediente;
use Illuminate\Http\Request;

class CursoController extends Controller
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
        //
        return view('curso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $registro1= new Hexpediente;
        $registro2= new Expediente;
        $curso= new Curso;
        $name=Prospecto::where('user_id',$request->prospecto_id)->first()->name;
        

        $curso->prospecto_id=$request->prospecto_id;
        $curso->hermano_id=Auth()->user()->id;
        $curso->name=$name;
        $curso->tema=$request->tema;
        $curso->descripcion=$request->descripcion;
        $curso->carrera=$request->carrera;
        $curso->estado=$request->estado;
        $curso->finalizado=$request->finalizado;

        $registro1->perfil_id=Auth()->user()->id;
        $registro1->historial="Asignaste una actividad '".$request->tema."' a '".$name."'";

        $registro2->perfil_id=$request->prospecto_id;
        $registro2->historial=$request->historial2;
        
        $registro1->save();
        $registro2->save();
        $curso->save();
        return redirect('/curso/create')->with('exito', 'Actividad asignada con éxito!');;
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
