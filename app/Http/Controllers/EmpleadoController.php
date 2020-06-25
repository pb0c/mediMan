<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['empleados']=Empleado::paginate(5);
        return view('empleados.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('empleados/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado = new Empleado() ;

        $empleado -> rut = $request -> rut;
        $empleado -> nombre = $request -> nombre;
        $empleado -> apellidoP = $request -> apellidoP;
        $empleado -> apellidoM = $request -> apellidoM;
        $empleado -> telefono = $request -> telefono;
        $empleado -> rol = $request -> rol;
        $empleado -> usuario = $request -> usuario;
        $empleado -> password = $request -> password;
        $empleado -> save();

        return redirect('empleados');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$datos['empleados']=Empleado::paginate(5);
        //return view('verEmp',$datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado=Empleado::findOrFail($id);
        return view('empleados.edit',compact('empleado'));
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
        $datosEmpleado=request()->except(['_token','_method','pass','agregar']);
        Empleado::where('id','=',$id)->update($datosEmpleado);
        
        $empleado=Empleado::findOrFail($id);
        //return view('empleados.edit',compact('empleado'));
        return redirect('empleados');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Empleado::destroy($id);
        return redirect('empleados');
    }
}
