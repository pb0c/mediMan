<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;


class LoginController extends Controller
{
    public function vista(){
        return view('home');
    }
}