<?php

namespace App\Http\Controllers;

use App\Actividad;
use App\Deporte;
use App\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['pacientes']=Paciente::paginate(5);
        //$act['actividads']=Actividad::paginate();
        //$dep['deportes']=Deporte::paginate();
        /*$act=DB::table('actividads')
        
        ->select('actividads.actNombre')
        ->join('pacientes','pacientes.id','=','actividads.id')
        ->get();

        $dep=DB::table('deportes')
        
        ->select('deportes.depNombre')
        ->join('pacientes','pacientes.id','=','deportes.id')
        ->get();*/

        
        
        return view('pacientes.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('pacientes/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paciente = new Paciente() ;

        $paciente -> rut = $request -> rut;
        $paciente -> nombre = $request -> nombre;
        $paciente -> apellidoP = $request -> apellidoP;
        $paciente -> apellidoM = $request -> apellidoM;
        $paciente -> nacimiento = $request -> nacimiento;
        $paciente -> edad = $request -> edad;
        $paciente -> sexo = $request -> sexo;
        $paciente -> telefono = $request -> telefono;
        $paciente -> prevision = $request -> prevision;
        $paciente -> calle = $request -> calle;
        $paciente -> numero = $request -> numero;
        $paciente -> dpto = $request -> dpto;
        $paciente -> comuna = $request -> comuna;
        $paciente -> actividad_id = $request -> actividad;
        $paciente -> deporte_id = $request -> deporte;
        $paciente -> save();

        return redirect('pacientes');
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
        $paciente=Paciente::findOrFail($id);
        return view('pacientes.edit',compact('paciente'));
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
        $datosPaciente=request()->except(['_token','_method','pass','agregar']);
        Paciente::where('id','=',$id)->update($datosPaciente);
        
        $paciente=Paciente::findOrFail($id);
        //return view('pacientes.edit',compact('paciente'));
        return redirect('pacientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Paciente::destroy($id);
        return redirect('pacientes');
    }
}
