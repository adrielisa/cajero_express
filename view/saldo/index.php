<?php

session_start();

if(!isset($_SESSION['id'])){
    header("Location: ../../index.html");
}

$saldo = $_SESSION['saldo'];

//Para juntar nombre y apellido
$nombre = $_SESSION['nombre'];
$ap_paterno = $_SESSION['ap_paterno'];
$nombre_completo = $nombre . " " . $ap_paterno;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="../../Assets/css/styles_saldo.css">
    <link rel="stylesheet" href="../../Assets/css/styles_saldo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <style>

    </style>
    <title>Bienvenida</title>
</head>
<body class="fondo">
    <header>
        <h1 class="titulo m-4">Bienvenido <?= $nombre_completo; ?></h1>
    </header>

    <h2 class="subtitulo text">Su saldo es: $ <?= $saldo; ?></h2>

    <div class="col-4 text-center p-4 ">
        <a href="../bienvenida/index.php" class="btn btn-danger">Regresar</a>
    </div>
        
</body>
</html>