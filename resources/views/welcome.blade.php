<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <a href="/contacto">Contacto</a><br>
    <a href="{{ route('contacto') }}">Contacto (Ruta con nombre)</a>
    <h2>Usuario leido desde base de datos: {{ $user->name }}</h2>
</body>
</html>