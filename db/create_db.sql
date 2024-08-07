
CREATE DATABASE cajero_express;

USE cajero_express;

CREATE TABLE tb_clientes(
    id_cliente INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(25),
    ap_paterno VARCHAR(25),
    ap_materno VARCHAR(25)
);

ALTER TABLE tb_clientes 
ADD COLUMN estado
ENUM ('Activo','inactivo') DEFAULT 'inactivo';

/*Creamos la nueva tabla */
CREATE TABLE tb_log_clientes(
    id_log_cliente INT PRIMARY KEY AUTO_INCREMENT,
    accion VARCHAR(10),
    id_cliente INT,
    nombre_completo VARCHAR(250),
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



CREATE TABLE tb_tarjetas(
    id_tarjeta INT PRIMARY KEY AUTO_INCREMENT,
    n_tarjeta  VARCHAR(16),
    nip VARCHAR(4),
    saldo DECIMAL(20,2),
    id_cliente INT NOT NULL,
    FOREIGN KEY(id_cliente) REFERENCES tb_clientes(id_cliente)


);

CREATE TABLE tb_tipo_movimientos(
    id_movimiento INT PRIMARY KEY AUTO_INCREMENT,
    tipo
);

CREATE TABLE tb_movimientos(
    id_movimiento INT PRIMARY KEY AUTO_INCREMENT,
    monto DECIMAL(7,2)
    fecha_movimiento TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    id_tarjeta INT,
    id_tipo_movimiento INT,
    FOREIGN KEY (id_tarjeta) REFERENCES tb_tarjetas(id_tarjeta),
    FOREIGN KEY (id_tipo_movimiento) REFERENCES tb_tipo_movimientos(id_tipo_movimiento)
);


