@extends('base')
@section('contenido')

        <div id="contenido">
            <h1>LOGIN</h1>
            @isset($dato)<h3> {{$dato}} </h3>@endisset
            <form action="{{ url('rutalogin') }}" method="post">
                @csrf
                <input type="email" name="correo" id="correo" class="form-control" placeholder="Introduce correo..." required>

                <input type="password" name="clave" id="clave" class="form-control" placeholder="Introduce contraseña..." required>
                <br><br>
                <button class="botonLog" type="submit">ENTRAR</button>
            </form>            <br>
            
            <form action="{{ url('goforgot') }}" method="get">
                <button class="botonLog" type="submit">Forgot password?</button>
            </form>
        </div>

@stop