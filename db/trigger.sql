/*Triggers para que se modifique cada vez que inserto,
actualizo o elimino algo de mi tabla tb_tarjetas */

/*Si se inserta algo (aún no hay depósitos a la tarjeta directamante) */


/*Si se  actualiza mi saldo*/
/*CREATE TRIGGER after_update_saldo  
AFTER UPDATE ON 

/*Si se elimina algo */



/*Trigger para tener registradas las operaciones realizadas*/
/*CREATE TRIGGER after_update_saldo
AFTER UPDATE ON tb_tarjetas
FOR EACH ROW
BEGIN
    INSERT INTO tb_movimientos (id_tarjeta, id_tipo_movimiento, monto)
    VALUES (NEW.id, 'Actualización del saldo', NEW.saldo - OLD.saldo)
END;

/*Trigger para registrar retiros*/
/*CREATE TRIGGER after_movimiento
AFTER UPDATE ON tb_tarjetas
FOR EACH ROW
BEGIN
    IF NEW.saldo < OLD.saldo THEN
        INSERT INTO tb_movimientos (id_tarjeta, cantidad)
        VALUES (NEW.id, OLD.saldo - NEW.saldo);
    END IF;
END;

/*Trigger para actualizar el saldo una   */
*/ 



/*Comando para usar la base de datos que antes habíamos creado */
USE cajero_express_sm35;

//Trigger de login

DELIMITER //
CREATE TRIGGER tb_login_cliente 
AFTER 
UPDATE 
    ON tb_clientes FOR EACH ROW BEGIN IF NEW.estado = 'Activo'
    AND OLD.estado <> 'Activo' THEN
INSERT INTO 
    tb_log_clientes (accion, id_cliente, nombre)
VALUES 
    (
        'LOGIN',
        NEW.id_cliente,
        CONCAT(
            NEW.nombre,
            ' ',
            NEW.ap_paterno,
            ' ',
            NEW.ap_materno
        )
    );

END IF;
END;

//Trigger de logout
DELIMITER //
CREATE TRIGGER tb_logout_cliente 
AFTER 
UPDATE 
    ON tb_clientes FOR EACH ROW BEGIN IF NEW.estado = 'Inactivo'
    AND OLD.estado <> 'Inactivo' THEN
INSERT INTO 
    tb_log_clientes (accion, id_cliente, nombre)
VALUES 
    (
        'LOGOUT',
        NEW.id_cliente,
        CONCAT(
            OLD.nombre,
            ' ',
            OLD.ap_paterno,
            ' ',
            OLD.ap_materno
        )
    );

END IF;

END;




//Trigger de tg_log_clientes_insert
DELIMITER //
CREATE TRIGGER tg_log_clientes_insert
AFTER INSERT ON tb_clientes 
FOR EACH ROW 
BEGIN
    INSERT INTO tb_log_clientes (accion, id_cliente, nombre_completo)
VALUES
    (
        'insert',
        NEW.id_cliente,
        CONCAT(
            NEW.nombre,
            ' ',
            NEW.ap_paterno,
            ' ',
            NEW.ap_materno
        )
    );
END;



/* Este trigger es un mecanismo que nos crea un "historial"  */
// DELIMITER //
CREATE TRIGGER tg_log_clientes_update
AFTER
UPDATE
    ON tb_clientes FOR EACH ROW BEGIN
INSERT INTO 
    tb_log_clientes (accion, id_cliente, nombre_completo)
VALUES
    (
        'UPDATE',
        OLD.id_cliente,
        CONCAT(
            'viejo: ', OLD.nombre, ' nuevo :',NEW.nombre,
            ' ',
            'viejo: ', OLD.ap_paterno,' nuevo: ', NEW.ap_paterno,
            ' ',
            'viejo: ', OLD.ap_materno,' nuevo: ', NEW.ap_materno
        )
    );

END;

// DELIMITER //
CREATE TRIGGER tg_log_clientes_deleate
BEFORE
DELETE ON tb_clientes
FOR EACH ROW BEGIN
INSERT INTO 
    tb_log_clientes (accion, id_cliente, nombre_completo)
VALUES 
    (
        'DELETE'
        OLD.id_cliente,
        CONCAT(
            OLD.nombre,
            ' ',
            OLD.ap_paterno,
            ' ',
            OLD.ap_materno
        )
    );

END;
//
----
//
