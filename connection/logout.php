<?php

session_start();

require_once './conn.php';

if (isset($_SESSION['id'])) {
    $id_cliente = $_SESSION['id_cliente'];

    // Preparar la declaración utilizando el procedimiento almacenado
    $stmt = $conn->prepare("CALL sp_set_cliente_inactivo(?)");

    // Vincular el parámetro a la declaración preparada
    $stmt->bind_param("i", $id_cliente);

    // Ejecutar la declaración
    $stmt->execute();

    // Cerrar la declaración
    $stmt->close();

    // Destruir la sesión
    session_destroy();
}

header("Location: ../index.html");

?>
