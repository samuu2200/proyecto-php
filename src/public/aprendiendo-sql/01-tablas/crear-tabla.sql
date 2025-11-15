/* 
Crear Tabla

Tipo de datos
int (nº cifras) Entero
integer (nº cifras) Entero (max 4294967295)
varchar (nº caracteres) String (max 255)
char (nº caracteres) String
float (nº cifras, nº decimales) Decimal / coma flotante
date, time, timestamp

// Strings más grandes
TEXT 65.535 caracteres
MEDIUMTEXT 16.000.000 caracteres
LONGTEXT 4.000.000.000 caracteres

// Enteros más grandes
MEDIUMINT
BIGINT
 */

CREATE TABLE usuarios (
    id         int(11) auto_increment not null,
    nombre     varchar(100) not null,
    apellidos  varchar(255) default 'hola que tal',
    email      varchar(100) not null,
    password   varchar(255),
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
);