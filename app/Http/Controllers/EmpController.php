<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;


class EmpleadoController extends Controller
{
   public function index()
   {
       return view('empleados.index');
   }
    
    
    public function create(Request $request)
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

        return redirect('empleados/create');   
    }

    public function store(Request $request)
    {
        # code...
    }

    public function show(Empleado $empleado)
    {
        # code...
    }

    public function update(Request $request, Empleado $empleados)
    {
        
        return null;
    }

    public function destroy($id)
    {
        //Empleado::destroy($id);

        return redirect('verEmp');
    }

    public function verE()
    {
        $datos['empleados']=Empleado::paginate(5);
        return view('verEmp',$datos);
    }
}
