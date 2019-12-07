<h1>Listado de Usuarios</h1>
<br/>
<a href="{{action('UsuariosController@getApellido_usuario')}}">Ir a apellidos</a>
<hr>
<br/>
<ul>
@foreach($var_usuarios as $usuario)
    <li>{{$usuario}}</li>
@endforeach
</ul>
<br/>
<h1>Formulario de Usuarios</h1>
<form action="{{ url('/recibir')}}" method="POST">
    <p>
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre">
    </p>
    
    <p>
    <label for="apellido">Apellido</label>
    <input type="text" name="apellido">
    </p>

    <input type="submit" value="Enviar">
</form>