# SQL
# Crear Base de Datos: contactos2

CREATE DATABASE contactos2;

# usar BD: contactos2
USE contactos2;

#Crear la tabla: contacto

CREATE TABLE contacto(
	idc INT PRIMARY KEY AUTO_INCREMENT,
	nombre VARCHAR(30),
	telef VARCHAR(30),
	ci INT
);




