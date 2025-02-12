FROM mysql:latest

# Establece las variables de entorno
ENV MYSQL_ROOT_PASSWORD=contrasenyaRoot
ENV MYSQL_DATABASE=personas
ENV MYSQL_USER=usuario1
ENV MYSQL_PASSWORD=contrasenyaUsuario1

# Copia el archivo .sql que contiene la estructura de la base de datos
COPY personas.sql /docker-entrypoint-initdb.d/