<?php

session_start();

if (!isset($_SESSION['id'])) {
    header("Location: ../../index.html");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="../../Assets/css/styles_retiro.css">
    <link rel="stylesheet" href="../../Assets/css/styles_retiro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Vista 4</title>
</head>

<body>
    <header>
        <!--Here is navbar's house -->
    </header>
    <main>
    <!-- -->
        <h1 class="text-center p-3">Retirar</h1>
        <p>Bienvenido usuario ^_^. ¿Cuánto dinero te gustaría retirar?</p>
        <div class="container-fluid row">
            <div class="col-4 p-4 text-center">
                <div class="btn btn-primary"><a href="update.php?monto=50">$50</a></div>
                <br>
                <br>
                <div class="btn btn-primary"><a href="update.php?monto=500">$500</a></div>
            </div>
            <div class="col-4 p-4 text-center">
                <div class="btn btn-primary"><a href="update.php?monto=100">$100</a></div>
                <br>
                <br>
                <div class="btn btn-primary"><a href="update.php?monto=1000">$1000</a></div>
            </div>
            <div class="col-4 p-4 text-center">
                <div class="btn btn-primary"><a href="update.php?monto=200">$200</a></div>
                <br>
                <br>
                <div class="btn btn-primary"><a href="update.php?monto=2000">$2000</a></div>
            </div>
            <div class="text-center p-4">
                <p>O sino, por favor ... </p>
                <input type="number" class="text-center" placeholder="Ingrese la cantidad">
                <div class="btn btn-info boton_solicitar">Solicitar</div>
                <a href="../bienvenida/index.php" class="btn btn-danger">Salir</a>
            </div>
        </div>
    </main>
    <footer>
        <!-- Here is footer's house -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>