@extends('base')
@section('contenido')
        <div id="contenido">
            <h3>Introduce tu e-mail para restaurar clave</h3>
            <form action="{{ url('guardarcorreo/') }}" method="post">
                @csrf
                <input type="email" name="correo" id="correo" class="form-control" placeholder="Introduce correo..." required>

                <br><br>
                <button class="botonLog" type="submit">ENVIAR</button>
            </form> 
            
        </div>

@stop