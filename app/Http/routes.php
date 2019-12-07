<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludoo', function () {
    return view('saludo/saludo');
});

Route::post('/post', function () {
    return 'PAGINA ENVIADA POR POST';
});

//RUTA RESTFULL de PHP (se crean automaticamente las url con los nombres en minuscula de las funciones de la clase)
//LA RUTA QUEDA COMO EL NOMBRE DEL CONTROLADOR EN MINUSCULA usuarios/apellido_usuario , usuarios/edad
Route::controller('usuarios', 'UsuariosController');



//METODO ANTIGUO
//Retornar la vista con un Controlador 'UsuariosController.php'
//Route::resource('/usuarios','UsuariosController@getIndex');
//Route::resource('/apellidos','UsuariosController@getApellido_usuario');

Route::get('/edad/{edad?}', [
                        'middleware' => 'VerificarEdad',
                        'uses' => 'UsuariosController@anyEdad'
]);


Route::post('/recibir', 'UsuariosController@recibirDatosFormulario');

