-- Crear la base de datos
CREATE DATABASE Adopciones;
USE Adopciones;

-- Tabla de Refugios
CREATE TABLE Refugios (
    refugio_id VARCHAR(20) PRIMARY KEY, 
    nombre VARCHAR(100) NOT NULL,
    ubicacion VARCHAR(200),
    telefono VARCHAR(20),
    contacto VARCHAR(100)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabla de Mascotas
CREATE TABLE Mascotas (
    mascota_id VARCHAR(20) PRIMARY KEY, 
    nombre VARCHAR(100) NOT NULL,
    edad INT,
    raza VARCHAR(50),
    personalidad VARCHAR(200),
    foto VARCHAR(255),
    estado VARCHAR(50), -- Estado: Disponible, Adoptada, En proceso
    detalles VARCHAR(500),
    refugio_id VARCHAR(20),
    FOREIGN KEY (refugio_id) REFERENCES Refugios(refugio_id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabla de Solicitudes
CREATE TABLE Solicitudes (
    solicitud_id VARCHAR(20) PRIMARY KEY, 
    usuario_cedula INT NOT NULL, 
    mascota_id VARCHAR(20), 
    fecha_solicitud DATETIME DEFAULT CURRENT_TIMESTAMP,
    estado VARCHAR(50), -- Estado: Pendiente, Aprobada, Rechazada
    FOREIGN KEY (mascota_id) REFERENCES Mascotas(mascota_id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabla de Cuestionarios
CREATE TABLE Cuestionarios (
    cuestionario_id VARCHAR(20) PRIMARY KEY,
    usuario_cedula INT NOT NULL, 
    mascota_id VARCHAR(20), 
    pregunta1 VARCHAR(255),
    pregunta2 VARCHAR(255),
    pregunta3 VARCHAR(255),
    pregunta4 VARCHAR(255),
    pregunta5 VARCHAR(255),
    pregunta6 VARCHAR(255),
    resultado VARCHAR(50), 
    FOREIGN KEY (mascota_id) REFERENCES Mascotas(mascota_id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabla de Seguimientos
CREATE TABLE Seguimientos (
    seguimiento_id VARCHAR(20) PRIMARY KEY, 
    mascota_id VARCHAR(20), 
    usuario_cedula INT NOT NULL, 
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
    estado VARCHAR(50), 
    observaciones VARCHAR(500),
    FOREIGN KEY (mascota_id) REFERENCES Mascotas(mascota_id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabla de Usuarios (para el manejo de inicio de sesión y registro)
CREATE TABLE Usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL, 
    cedula INT NOT NULL UNIQUE, -- Cédula de identificación (si aplica)
    fecha_registro DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
