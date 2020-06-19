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
    public function editPaciente(){
        return view('editPaciente');
    }
    public function editFicha(){
        return view('editFicha');
    }
    public function buscar(){
        return view('busqueda');
    }
    public function diaria()
    {
        return view('vistaDia');
    }

    public function agEmp(Request $request){
        $empleado = new Empleado() ;

        $empleado -> rut = $request -> rut;
        $empleado -> nombre = $request -> nombre;
        $empleado -> apellidoP = $request -> apP;
        $empleado -> apellidoM = $request -> apM;
        $empleado -> rol = $request -> rol;
        $empleado -> telefono = $request -> telefono;
        $empleado -> passwordempleado = $request -> password;
        $empleado -> save();

        return redirect('/home');
       
    }
    
}
