@extends('base')
@section('contenido')
            <div id="contenido">
                <h1>INICIO</h1>
               @isset($dato)<h3>{{$dato}}</h3>@endisset
                <form action="{{ url('gologin') }}" method="get">
                    <button class="botonLog" type="submit">LOGIN</button>
                </form>
            </div>

@stop