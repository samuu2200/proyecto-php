# Imagen base oficial de PHP con Apache
FROM php:8.2-apache

# Instalación de extensiones (ejemplo: pdo_mysql)
RUN docker-php-ext-install pdo pdo_mysql

# Habilitar módulo de reescritura de Apache (útil para Laravel, etc.)
RUN a2enmod rewrite

# Copiar los archivos de tu carpeta local al contenedor
COPY ./public /var/www/html

# Asignar permisos correctos
RUN chown -R www-data:www-data /var/www/html