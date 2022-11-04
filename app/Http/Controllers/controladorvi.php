<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validarusuario;


class controladorvi extends Controller
{
    public function procesarUsuario(validarusuario $req){

        return redirect('formulario')->with('enviado','Se inicio sesion');

    }

    public function verformulario(){
        return view('formulario');
    }

    public function vertabla(){
        return view('tabla');
    }
}
