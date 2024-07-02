<?php
print_r($_POST);

session_start();

if (isset($_POST['n_tarjeta']) && isset($_POST['nip'])) {
    require_once './conn.php';
    $n_tarjeta = $_POST['n_tarjeta'];
    $nip = $_POST['nip'];

    // Llamamos al Procedimiento almacenado que obtiene los datos del cliente
    $sql = "CALL sp_get_cliente_info('$n_tarjeta', '$nip')";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if ($row['estado'] == 'Activo') {
            $_SESSION['error'] = "El usuario ya inició sesión";
            header("Location: ../view/bienvenida/index.php");
            exit();
        }

        $_SESSION['id'] = $row['id_tarjeta'];
        $_SESSION['n_tarjeta'] = $row['n_tarjeta'];
        $_SESSION['saldo'] = $row['saldo'];
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['ap_paterno'] = $row['ap_paterno'];
        $_SESSION['ap_materno'] = $row['ap_materno'];
        $_SESSION['id_cliente'] = $row['id_cliente'];

        // Llamar al procedimiento almacenado para poner al cliente "Activo"
        $sql = "CALL sp_login_cliente(" . $_SESSION['id_cliente'] . ")";
        $reult = $conn->query($sql);

        header("Location: ../view/bienvenida/index.php");
    } else {
        $_SESSION['error'] = "El número de tarjeta o el NIP son incorrectos";
        header("Location: ../index.html");
    }
} else {
    $_SESSION['error'] = "Complete todos los campos";
    header("Location: ../index.html");
}
?>
