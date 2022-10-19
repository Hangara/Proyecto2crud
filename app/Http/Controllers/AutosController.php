<?php

namespace App\Http\Controllers;

use App\Models\Autos;
use Illuminate\Http\Request;

class AutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $autos= Autos::all();
        return view ('autos.autosIndex',compact('autos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('autos/autosCreate');
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
            'nombre'=>'required|max:255',
            'fecha'=>'required|date',
            'resguardador'=>'required|max:255',
            'modelo'=>'required|integer|min:4',
            'telefono'=>'required|max:20',
        ]);
        Autos::create($request->all());
        
        return redirect('/autos');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Autos  $autos
     * @return \Illuminate\Http\Response
     */
    public function show(Autos $auto)
    {
        return view('autos.autosShow',compact('auto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Autos  $autos
     * @return \Illuminate\Http\Response
     */
    public function edit(Autos $auto)
    {
        return view('autos.autosEdit',compact('auto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Autos  $autos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Autos $auto)
    {
        $request->validate([
            'nombre'=>'required|max:255',
            'fecha'=>'required|date',
            'resguardador'=>'required|max:255',
            'modelo'=>'required|integer|min:4',
            'telefono'=>'required|max:20',
        ]);   
        $auto->nombre=$request->nombre;
        $auto->fecha=$request->fecha;
        $auto->resguardador=$request->resguardador;
        $auto->modelo=$request->modelo;
        $auto->telefono=$request->telefono;
        $auto->save();

        //Autos::where('id',$auto->id)->update($request->expect('_token','_method'));
        return redirect('/autos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Autos  $autos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autos $auto)
    {   $auto->delete();
        return redirect('/autos');
    }
}
