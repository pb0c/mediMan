<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;


class EmpleadoController extends Controller
{
    public function vista(){
        return view('agregarEmp');
    }
    public function dia(){
        return view('vistaDia');
    }
    public function nuevaF(){
        return view('agregarFicha');
    }
    public function nuevoP(){
        return view('agregarPaciente');
    }
    public function ver(){
        return view('verPaciente');
    }

    public function agEmp(Request $request){
        $empleado = new Empleado() ;

        $empleado -> rutempleado = $request -> rut;
        $empleado -> nombreempleado = $request -> nombre;
        $empleado -> apellidoempleado = $request -> apellido;
        $empleado -> rolempleado = $request -> rol;
        $empleado -> telefonoempleado = $request -> telefono;
        $empleado -> passwordempleado = $request -> password;
        $empleado -> save();

        return redirect('/create');
       
    }
    
}
