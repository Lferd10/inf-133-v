#BD: Odontologo

CREATE DATABASE odontologo;
USE DATABASE odontologo;

#Tabla: clientes

CREATE TABLE clientes(
idc VARCHAR(5) PRIMARY KEY,
nombre VARCHAR(30) NOT NULL,
telef INT,
direc VARCHAR(20)
);

#tabla: servicio

CREATE TABLE servicio(
ids VARCHAR(5) PRIMARY KEY,
nombre VARCHAR(30) NOT NULL,
precio INT
);

#tabla: atencion

CREATE TABLE atencion(
ida INT PRIMARY KEY AUTO_INCREMENT,
fecha DATETIME,
idclie VARCHAR(5) NOT NULL,
idser VARCHAR(5) NOT NULL,
costo INT,
obs VARCHAR(255) NOT NULL,

FOREIGN KEY (idclie) REFERENCES clientes(idc),
FOREIGN KEY (idser) REFERENCES servicio(ids)
);



