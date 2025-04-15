CREATE DATABASE IF NOT EXISTS appinventarios;

USE appinventarios;

CREATE TABLE almacenes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    ubicacion VARCHAR(255) 
);

CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    nombre VARCHAR(100) NOT NULL,
    creador VARCHAR(100),
    precio DECIMAL(10,2) NOT NULL,
    codigo VARCHAR(50) NOT NULL UNIQUE,
    descripcion TEXT
);

CREATE TABLE inventario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    almacen_id INT NOT NULL,
    producto_id INT NOT NULL,
    cantidad INT DEFAULT 0,
    FOREIGN KEY (almacen_id) REFERENCES almacenes(id),
    FOREIGN KEY (producto_id) REFERENCES productos(id),
    UNIQUE (almacen_id, producto_id)
);

CREATE TABLE transferencias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    almacen_origen INT,
    almacen_destino INT,
    producto_id INT,
    cantidad INT,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (almacen_origen) REFERENCES almacenes(id),
    FOREIGN KEY (almacen_destino) REFERENCES almacenes(id),
    FOREIGN KEY (producto_id) REFERENCES productos(id)
);


INSERT INTO `productos` (`id`, `nombre`, `codigo`, `descripcion`, `creador`, `precio`) VALUES
(1, 'Aceite WD40', '1334417', 'Aceite industrial para tratar piezas corroídas', 'Carbone INC', 7.45),
(2, 'Arandela Plana Inox 2', '1312618', 'Herramienta de sujetacion de cadenas', 'Dewallt LLC', 0.55),
(3, 'Válvula de succión', '3602658', 'Válvula para batir mezcla en tanque de procesamiento', 'Krones Inc', 478.16),
(4, 'Vasos desechables 8 Onz', '1332671', 'Vasos para café de 8 onz con orejera', 'Fastenal Corp', 0.85),
(3602660, 'tshirt azul claro dama TM', '2100557', 'Galapago S.A', '1.35', 0.00);


INSERT INTO `inventario` (`id`, `almacen_id`, `producto_id`, `cantidad`) VALUES
(1, 3, 1, 25),
(2, 2, 1, 17),
(3, 1, 1, 11),
(4, 2, 3, 2),
(5, 3, 2, 14),
(6, 2, 2, 17),
(7, 1, 4, 11),
(8, 2, 4, 7);


INSERT INTO `almacenes` (`id`, `nombre`, `ubicacion`) VALUES
(1, 'sla107', 'default'),
(2, 'sla55', 'default'),
(3, 'sla50', '3-0 A-2');