<?php

use App\Actividad;
use App\Deporte;
use App\Empleado;
use App\Ficha;
use App\Paciente;
use Illuminate\Database\Seeder;

class MedimanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Actividad::truncate();
        $actividad = new Actividad();
        $actividad -> actNombre = "Dueño/a de casa";
        $actividad -> save();

        $actividad = new Actividad();
        $actividad -> actNombre = "Estudiante";
        $actividad -> save();

        
        $deporte = new Deporte();
        $deporte -> depNombre = "Fútbol";
        $deporte -> save();

        $deporte = new Deporte();
        $deporte -> depNombre = "Tenis";
        $deporte -> save();

        $deporte = new Deporte();
        $deporte -> depNombre = "Surf";
        $deporte -> save();

        
        $paciente = new Paciente() ;
        $paciente -> rut = "17435701-3";
        $paciente -> nombre = "Paulina";
        $paciente -> apellidoP = "Bordones";
        $paciente -> apellidoM = "Collado";
        $paciente -> nacimiento = "1989-09-22";
        $paciente -> edad = 30;
        $paciente -> sexo = 0;
        $paciente -> telefono = "912341234";
        $paciente -> prevision = "Fonasa";
        $paciente -> calle = "Hernán Cortés";
        $paciente -> numero = "3030";
        $paciente -> dpto = "";
        $paciente -> comuna = "Calama";
        $paciente -> actividad_id = 2;
        $paciente -> deporte_id = null;
        $paciente -> save();

        $paciente = new Paciente() ;
        $paciente -> rut = "17012921-0";
        $paciente -> nombre = "Sergio";
        $paciente -> apellidoP = "González";
        $paciente -> apellidoM = "Barraza";
        $paciente -> nacimiento = "1989-03-17";
        $paciente -> edad = 31;
        $paciente -> sexo = 1;
        $paciente -> telefono = "912341234";
        $paciente -> prevision = "Fonasa";
        $paciente -> calle = "Pucón";
        $paciente -> numero = "3030";
        $paciente -> dpto = "";
        $paciente -> comuna = "Calama";
        $paciente -> actividad_id = 1;
        $paciente -> deporte_id = 3;
        $paciente -> save();

        
        $empleado = new Empleado();
        $empleado -> rut = "8073219-8";
        $empleado -> nombre = "Rene";
        $empleado -> apellidoP = "Baltazar";
        $empleado -> apellidoM = "Paucay";
        $empleado -> telefono = "920202020";
        $empleado -> rol = "Administrador";
        $empleado -> usuario = "ren219";
        $empleado -> password = "admin";
        $empleado -> save();

        $empleado = new Empleado();
        $empleado -> rut = "18579999-9";
        $empleado -> nombre = "Diego";
        $empleado -> apellidoP = "Supanta";
        $empleado -> apellidoM = "Baltazar";
        $empleado -> telefono = "920202021";
        $empleado -> rol = "Kinesiologo";
        $empleado -> usuario = "die999";
        $empleado -> password = "kine";
        $empleado -> save();

        
        $ficha = new Ficha();
        $ficha -> medico = "Francisco Muñoz";
        $ficha -> tratamiento = "Fisioterapia";
        $ficha -> medicamento = "Paracetamol";
        $ficha -> diagnostico = "Desgarro femoral";
        $ficha -> antMorbido = "Sin antecedentes mórbidos previos.";
        $ficha -> paciente_id = 1;
        $ficha -> save();
    }
}
