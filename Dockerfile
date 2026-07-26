# Imagen oficial de PHP con Apache
FROM php:8.3-apache

# Copiar todos los archivos del proyecto al servidor web
COPY . /var/www/html/

# Dar permisos de lectura
RUN chown -R www-data:www-data /var/www/html

# Exponer el puerto 80
EXPOSE 80