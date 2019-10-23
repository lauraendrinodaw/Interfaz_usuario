@extends('base')
@section('contenido')
 @isset($dato)
            <div id="contenido">
                         <h1>¡BIENVENIDO {{$dato}} !</h1> 
            </div>
@endisset
@stop
