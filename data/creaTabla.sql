use bdunad47;

CREATE TABLE tabla47 (
  id_producto INT(13) PRIMARY KEY,
  nombre_producto VARCHAR(30) NOT NULL,
  marca_producto VARCHAR(30) NOT NULL,
  precio_producto INT(50) NOT NULL,
  cantidad_producto INT(13) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);