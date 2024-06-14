<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        a {
            color: white
        }

        body {
            background-image: url(Assets/img/fondo_cajero.jpg)  ;
        }

        .texto1{
            color: rgb(14, 91, 85);
            text-decoration: solid;
        }




        button {
            text-decoration: none;
        }
    </style>
    <title>Vista1</title>
</head>
<body class="fondo">
    <h1 class="text-center p-3">Bienvenido</h1>
    <div class="container-fluid row">
        <form action="view/bienvenida/index.php">
            <div class="mb-3 grab">
                <label for="num_tarjeta" class="texto1">Numero de tarjeta</label>
                <input type="number" class="form-control" id="num_tarjeta" required>
            </div>
            <div class="mb-3">
                <label for="pin" class="texto1">PIN</label>
                <input type="text" class="form-control" id="pin" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>