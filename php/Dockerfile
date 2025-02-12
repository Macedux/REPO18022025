FROM php:8.2-apache

# Instalar y habilitar la extensión mysqli
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copiar el contenido de la aplicación al contenedor
COPY . /var/www/html/mi_app_personas