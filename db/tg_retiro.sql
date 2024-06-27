DELIMITER //

CREATE TRIGGER tg_retiro
BEFORE UPDATE tb_tarjetas
FOR EACH ROW
BEGIN

    DECLARE v_saldo DECIMAL(20,2);
    DECLARE v_monto DECIMAL(20,2);
    DECLARE retiro_id INT;

    --Consulra el id_tipo_movimiento
    SET v_saldo = OLD.saldo;
    SET v_monto = NEW.saldo - OLD.saldo;

    IF v_monto > 0 THEN

        SET v_monto = -v_monto; THEN
            IF v_saldo >= v_monto THEN
                INSERT INTO tb_movimiento (monto, id_tarjeta, id_tipo_movimiento)
                VALUE (v_monto, OLD.tarjeta_id, retiro_id)

                SET NEW.saldo = OLD.saldo - v_monto

                ELSE

                SIGNAL SQLSTATE "45000" SET MESSAGE_TEXT = 'Saldo insuficiente';
        END IF;
    END IF;

END
DELIMITER;
