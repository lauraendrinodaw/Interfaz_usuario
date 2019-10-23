<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logController extends Controller
{
    function index(){
        return view('home');
    }
    
    function gologin(){
        return view('login');
    }
    function accept(Request $request){
        $datos = [];
        $correo = $request->input('correo');
        $clave = $request->input('clave');
        if($correo === 'laura@gmail.com' && $clave === '123'){
            $datos = ['dato' => 'LAURA'];
            return view('perfil')->with($datos);
        }else{
            $datos = ['dato' => 'Credenciales incorrectos'];
           return view('login')->with($datos);
        }
    }
    function perfil (){
        return view('perfil');
    }
    function gopass(){
        return view('forgpass');
    }
    function guardarcorreo(Request $request){
        $correo = $request->input('correo');
        $datos = ['dato' => 'Se ha enviado al correo '.$correo.' un mensaje para resstablecer tu contraseña'];
        return view('home')->with($datos);
    }
    
}
