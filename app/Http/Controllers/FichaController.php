<?php

namespace App\Http\Controllers;

use App\Ficha;
use App\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FichaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['fichas']=Ficha::paginate();

        $ficha=DB::table('fichas')
        ->join('pacientes','pacientes.id','=','fichas.paciente_id')
        ->select('pacientes.nombre')
        ->get();
    
        return view('fichas.index',$datos);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fichas/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ficha = new Ficha() ;

        $ficha -> medico = $request -> medico;
        $ficha -> tratamiento = $request -> tratamiento;
        $ficha -> medicamento = $request -> medicamento;
        $ficha -> diagnostico = $request -> diagnostico;
        $ficha -> antMorbido = $request -> antMorbido;
        $ficha -> paciente_id = $request -> paciente;
       
        $ficha -> save();

        return redirect('fichas');
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
        $ficha=Ficha::findOrFail($id);
        return view('fichas.edit',compact('ficha'));
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
        $datosFicha=request()->except(['_token','_method','agregar']);
        Ficha::where('id','=',$id)->update($datosFicha);
        
        $ficha=Ficha::findOrFail($id);
        //return view('fichas.edit',compact('ficha'));
        return redirect('fichas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ficha::destroy($id);
        return redirect('fichas');
    }
}
