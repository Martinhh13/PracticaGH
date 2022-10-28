<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validarusuario;


class controladorvi extends Controller
{
    public function procesarUsuario(validarusuario $req){

        return redirect('formulario')->with('Se inicio sesion');
        //return $req->all();
        //return $req->url();
        //return $req->ip();

    }

    public function verformulario(){
        return view('formulario');
    }

    public function vertabla(){
        return view('tabla');
    }
}
