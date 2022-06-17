<?php

namespace App\Http\Controllers;
use App\Models\Prospecto;
use App\Models\Hexpediente;
use App\Models\Expediente;
use App\Models\User;
use App\Models\Hermano;
use App\Models\Hijo;
use Illuminate\Http\Request;

class HijoController extends Controller
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
        return view('hijo.create');
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
        $registro= new Hexpediente;
        $update= Prospecto::find($request->id);
        $event= new Expediente;
        $hijo= new Hijo;
        $hijo->name=$request->name;
        $hijo->user_id=$request->user_id;
        $hijo->bien=0;
        $hijo->mal=0;
        $hijo->padre_id=Auth()->user()->id;
        $hijo->estado=$request->estado;
        $update->estado='No disponible';
        $registro->perfil_id=Auth()->user()->id;
        $registro->historial=$request->historial;
        $event->perfil_id=$request->user_id;
        $event->historial=$request->historial2;
        $event->save();
        $registro->save();
        $update->save();
        $hijo->save();
        return redirect('/hijo/create')->with('exito', 'Usuario agregado con éxito!');
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
