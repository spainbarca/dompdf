<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $titulo }}</title>
    <link rel="stylesheet" href="{{ public_path('css/pdf.css') }}">
</head>
<body>
    <h1>{{ $contenido }}</h1>
    <div>
        <img src="https://img.freepik.com/vector-gratis/fondo-blanco-gris-brillante-lineas-onduladas_1017-25101.jpg" alt="">
        <hr>
        <img src={{ public_path('img/kings-league.png') }} alt="">
        <h2 class="titulo">Kings League</h2>
        <p class="p">La Kings League, denominada oficialmente por motivos de patrocinio como Kings League InfoJobs, es una liga de fútbol 7 con sede en Barcelona, España, creada por el exfutbolista Gerard Piqué en 2022 en asociación con otras personalidades de internet y streamers.</p>
        <button>Vamos!!</button>
    </div>
</body>
</html>
