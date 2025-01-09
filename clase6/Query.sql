#BD: Instituto

CREATE DATABASE instituto;
USE DATABASE instituto;

#Tabla: cursos

CREATE TABLE cursos(
idc VARCHAR(3) PRIMARY KEY,
nombre VARCHAR(30) NOT NULL,
fini DATE,
precio INT
);

#tabla: alumnos

CREATE TABLE alumnos(
ida VARCHAR(3) PRIMARY KEY,
nombre VARCHAR(30) NOT NULL,
telef INT,
ci INT,
fnac DATE,
direc VARCHAR(50)
);

#tabla: inscripccion

CREATE TABLE inscripcion(
idi INT PRIMARY KEY AUTO_INCREMENT,
fecha DATE,
idcur VARCHAR(3) NOT NULL,
idalum VARCHAR(3) NOT NULL,
monto INT,

FOREIGN KEY (idcur) REFERENCES cursos(idc),
FOREIGN KEY (idalum) REFERENCES alumnos(ida)
);



