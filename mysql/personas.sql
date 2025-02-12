-- Crear base de datos si no existe
CREATE DATABASE IF NOT EXISTS personas;

-- Usar la base de datos
USE personas;

-- Crear la tabla de personas
CREATE TABLE IF NOT EXISTS personas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    telefono VARCHAR(15) NOT NULL
);

-- Insertar algunos datos de ejemplo
INSERT INTO personas (nombre, apellido, telefono) VALUES ('Juan', 'Pérez', '123456789');
INSERT INTO personas (nombre, apellido, telefono) VALUES ('Ana', 'García', '987654321');