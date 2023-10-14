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
        <code>La Rosaleda prepara sus mejores galas para la fase final de la Kings League y la Queens League con el último baile en la copa. Después de un miércoles descomunal con partidazos y cuatro clasificados más, los seis elegidos chocarán en Málaga con una hoja de ruta marcada para este sábado 14.</code>
        <br><br>
        <img src="https://phantom-marca.unidadeditorial.es/75fa35168bcc0cc28569d70d96f98c4f/resize/828/f/jpg/assets/multimedia/imagenes/2023/10/09/16968688832821.jpg" alt="" width="100%">
        <div class="salto"></div>
    @endforeach
</body>
</html>
