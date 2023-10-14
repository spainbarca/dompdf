<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $titulo }}</title>
    <link rel="stylesheet" href="{{ public_path('css/pdf.css') }}">
</head>
<body>
    <div id="header">
        <img class="imgHeader" src="https://discord.onl/wp-content/uploads/2023/09/LKGS-La-Kings-League-SLS.jpg" alt="">
        <div class="infoHeader">
            <p ><b><u>Kings League Finals Malaga</u></b></p>
            <p>Disputar la Final Four de la Kings y Queens Cup en el estadio de La Rosaleda</p>
        </div>
    </div>
    <div id="footer">
        <p class="textFooter">kingsleague.pro</p>
    </div>

    <p class="bold">Fuente Montserrat</p>
    <p class="bold">{{ $contenido }}</p>

    <h1>Listado de Usuarios Faker</h1><hr>
    @foreach ($usuarios as $usuario)
        <h2 class="bold">{{ $usuario->name }}</h2>
        <p>{{ $usuario->email }}</p>
    @endforeach
</body>
</html>
