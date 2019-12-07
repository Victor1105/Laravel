<h1>Apellido de los usuarios</h1>
<br/>
<a href="{{ action('UsuariosController@getIndex')}} ">Ir a Nombre</a>

<hr>
<br/>
<ul>
@foreach ($apellidos as $apellido)
 <li>{{$apellido}}</li>   
@endforeach
</ul>