# Renombrar una Tabla

ALTER TABLE usuarios RENAME TO usuarios_renombrada;

# Cambiar el nombre de una columna

ALTER TABLE usuarios_renombrada CHANGE apellido apellidos varchar(100) null;

# Modificar columna sin cambiar nombre

ALTER TABLE  usuarios_renombrada MODIFY apellido char(50) not null;

# Añadir columna a una Tabla

ALTER TABLE usuarios_renombrada ADD website varchar(100) null;

# Añadir restricción a columna

ALTER TABLE usuarios_renombrada ADD CONSTRAINT uq_email unique(email);

# Borrar una columna

ALTER TABLE usuarios_renombrada DROP website;