<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UsuariosController extends Controller
{
    //Acción que devuelva una vista
    // ** DEPUES DEL get VA CON MAYUSCULA!!!***************
    public function getIndex(){
        return view('usuarios.index_usuarios')
        //Devuelve un array
        ->with('var_usuarios',array('Estefani','Gretel','Nicol'));
    }

    public function getApellido_usuario(){
        return view('usuarios.apellido')
        ->with('apellidos',array('Vargas','Salazar','Monserrat'));
    }
    //any recibe GET|HEAD|POST|PUT|PATCH|DELETE
    public function anyEdad($edad){
        $edad_obtenida = $edad;
        return view('usuarios.edad')
        ->with('edad',array($edad_obtenida));
    }

    //recoger datos de un formulario

    public function recibirDatosFormulario(Request $request){
        $data = $request;
        return 'El nombre es: '.$request->input('nombre').' y el apellido es: '.$request->input('apellido');
    }

}
