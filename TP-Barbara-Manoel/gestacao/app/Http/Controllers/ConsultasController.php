<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consulta;
use App\User;


class ConsultasController extends Controller
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
        $consulta = Consulta::orderBy('id')->get();
        return view('consultas.index')->with('consulta', $consulta);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('consultas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Consulta::create( $request->all() );
        $request->session()->flash('mensagem', 'Consulta inserida com sucesso!');
        return redirect('/consultas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Consulta $consulta)
    {
        return view('consultas.show')->with('consulta', $consulta);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Consulta $consulta)
    {
        return view('consultas.edit')->with('consulta', $consulta);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consulta $consulta)
    {
        $consulta->data = $request->data;
        $consulta->horario = $request->horario;
        $consulta->medico = $request->medico;
        $consulta->local = $request->local;
        $consulta->pesomae = $request->pesomae;
        $consulta->pesobebe = $request->pesobebe;
        $consulta->resumo = $request->resumo;
        $consulta->save();
        return redirect('/consultas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consulta $consulta)
    {
        $consulta->delete();
        return redirect('/consultas');
    }
}
