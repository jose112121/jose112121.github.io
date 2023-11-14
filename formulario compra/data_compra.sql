-- Crear la base de datos si no existe
CREATE DATABASE IF NOT EXISTS nombre_basedatos;

-- Usar la base de datos
USE nombre_basedatos;

-- Crear la tabla para almacenar la información de compra
CREATE TABLE IF NOT EXISTS tabla_productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    nombre VARCHAR(50),
    apellido VARCHAR(50),
    telefono VARCHAR(15),
    correo VARCHAR(100),
    direccion VARCHAR(100),
    fecha_webinar DATE,
    fecha_compra TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES tabla_usuarios(id) -- Asegúrate de que el campo usuario_id sea una clave foránea que haga referencia a la tabla de usuarios
);
