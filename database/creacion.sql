-- Active: 1750671265368@@127.0.0.1@3306@seneca
create DATABASE seneca
character set latin1
collate latin1_spanish_ci;

use seneca;
-- crea un usuario llamado messi que puede conectar desde cualquier direccion ip
create user 'messi'@'%' identified by '1234';

-- Le damos permisos para realizar cualquier sentencia en la base de datos seneca

grant all PRIVILEGES on seneca.* to 'messi'@'%';




-- hacemos una tabla

create table alumnos(
    id int  unsigned AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(30) not null,
    apellido1 VARCHAR(30)not NULL,
    apellido2 VARCHAR(30),
    fecha_nac DATE,
    email VARCHAR(100)
      
);


