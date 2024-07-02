<?php

session_start();

require_once './conn.php';

if (isset($_SESSION['id'])) {
    $id_cliente = $_SESSION['id'];

    // Llamar al procedimiento almacenado para marcar al cliente como 'Inactivo'
    $sql = "CALL sp_logout_cliente($id_cliente)";
    $conn->query($sql);

    // Destruir la sesión
    session_destroy();
}

header("Location: ../index.html");

?>
