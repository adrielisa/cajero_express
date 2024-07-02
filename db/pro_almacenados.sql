
//Para iniciar sesión
DELIMITER //

CREATE PROCEDURE sp_get_tarjeta_info (
    IN p_n_tarjeta VARCHAR(16), 
    IN p_nip VARCHAR(4)
)
BEGIN
    SELECT 
        tb_tarjetas.id_tarjeta,
        tb_tarjetas.n_tarjeta,
        tb_tarjetas.nip,
        tb_tarjetas.saldo,
        tb_clientes.nombre,
        tb_clientes.ap_paterno,
        tb_clientes.ap_materno
    FROM tb_tarjetas
    INNER JOIN tb_clientes
    ON tb_tarjetas.id_cliente = tb_clientes.id_cliente
    WHERE tb_tarjetas.n_tarjeta = p_n_tarjeta AND tb_tarjetas.nip = p_nip;
END //

DELIMITER ;


//Para cerrar sesión
DELIMITER //

CREATE PROCEDURE sp_set_cliente_inactivo (
    IN p_id_cliente INT
)
BEGIN
    UPDATE tb_clientes
    SET estado = 'Inactivo'
    WHERE id_cliente = p_id_cliente;
END //



//Nuevo cierre de sesión
DELIMITER ;




CREATE PROCEDURE sp_set_cliente_inactivo (
    IN id_cliente INT
)
BEGIN
    UPDATE tb_clientes
    SET estado = 'Inactivo'
    WHERE id_cliente = id_cliente;
END 

