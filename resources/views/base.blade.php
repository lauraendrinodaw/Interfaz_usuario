<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>HOME</title>
        <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
</head>
    
<body>
    <div id="contenedor">
        <div id="fondo">
        </div>
        <div id="aside">
            @yield('contenido')
        </div>
    </div>
</body>
</html>