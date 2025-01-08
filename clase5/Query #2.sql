#BD: contacto2
USE contactos2;

#Registros de datos
# --------------------------

INSERT INTO contacto VALUES (1,'Sofia', '11', 111);

INSERT INTO contacto VALUES (2,'Beto', '22', 222);

INSERT INTO contacto (nombre, telef, ci)
VALUES ('Cesar', '33', 333);

SELECT * FROM contacto

#MODIFICAR registros: contacto
#--------------------------------

UPDATE contacto SET nombre='Betito'
WHERE idc=2;

#ELIMINAR registros: contacto
#---------------------------------

#Eliminar el registro con ID:2

DELETE FROM contacto WHERE idc=2; 



