<?php

namespace App\Http\Controllers;

use App\soporte;
use Illuminate\Http\Request;
use Session;

class SoporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soport = soporte::paginate(3);
        return view('soporte.index',compact('soport'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('soporte.create');
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
            'Nombre_Usuario' => 'required',
            'Anexo' => 'required',
            'Motivo_Soporte'=> 'required',
            'Fecha_Solicitud'=>'required',
            'Usuario_soporte'=>'required',
            'Estado'=>'required',
            'Informacion_Adicional'=>'required',
        ]);

        soporte::create($request->all());
        /*envia un mensaje al usuario*/    
        Session::flash('message','Ticket creado Correctamente');
        return redirect()->route('soporte.index');/*nos redirecciona*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\soporte  $soporte
     * @return \Illuminate\Http\Response
     */
    public function show(soporte $soporte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\soporte  $soporte
     * @return \Illuminate\Http\Response
     */
    public function edit(soporte $soporte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\soporte  $soporte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, soporte $soporte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\soporte  $soporte
     * @return \Illuminate\Http\Response
     */
    public function destroy(soporte $soporte)
    {
        //
    }
}
