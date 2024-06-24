<?php 

session_start();

if(!isset($_SESSION['id'])){
    header("Location: ../../index.html");
}

$nombre = $_SESSION['nombre'];
$ap_paterno = $_SESSION['ap_paterno'];

$nombre_completo = $nombre . " " . $ap_paterno;
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <!--Links-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="preload" href="../../Assets/css/styles_bienvenida.css">
    <link rel="stylesheet" href="../../Assets/css/styles_bienvenida.css">

    
    <title>Bienvenida</title>
</head>

<body class="fondo">
    <header>
        <h1 class="titulo m-4">Bienvenido a tu cajero de confianza <?= $nombre_completo; ?></h1>
    </header>
    <div class="container-fluid row">
        <div class="col-4 text-center p-4 ">
            <a href="../saldo/index.php" class="btn btn-primary">Ver saldo:</a>
        </div>
        <div class="col-4 text-center p-4">
            <a href="../retiro/index.php" class="btn btn-primary">Retirar</a>
        </div>
        <div class="col-4 text-center p-4">
            <a href="../../index.html" class="btn btn-danger">Salir</a>
        </div>
    </div>


</body>

</html>