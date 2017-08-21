<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bebe;

class BebesController extends Controller
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
      $bebes = Bebe::orderBy('id')->get();
      return view('bebes.index')->with('bebes', $bebes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('bebes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Bebe::create( $request->all() );
      return redirect('/bebes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Bebe $bebe)
    {
        return view('bebes.show')->with('bebe', $bebe);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bebe $bebe)
    {
        return view('bebes.edit')->with('bebe', $bebe);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bebe $bebe)
    {
        $bebe->nome = $request->nome;
        $bebe->sexo = $request->sexo;
        $bebe->nascimento = $request->nascimento;
        $bebe->save();
        return redirect('/bebes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bebe $bebe)
    {
        $bebe->delete();
        return redirect('/bebes');
    }
}
