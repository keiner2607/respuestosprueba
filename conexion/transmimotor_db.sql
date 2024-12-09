CREATE DATABASE transmimotor_db;

use transmimotor_db;




-- Tabla Empleado
CREATE TABLE Empleado (
    idEmpleado INT PRIMARY KEY, 
    nombre VARCHAR(50) NOT NULL, 
    apellidos VARCHAR(50) NOT NULL, 
    cargo VARCHAR(50) NOT NULL, 
    fechanacimiento DATE NOT NULL, 
    telefono VARCHAR(10) NOT NULL
);

-- Tabla Cliente
CREATE TABLE Cliente (
    idCliente INT PRIMARY KEY, 
    nombre VARCHAR(50) NOT NULL, 
    apellidos VARCHAR(50) NOT NULL, 
    telefono VARCHAR(10) NOT NULL
);

-- Tabla Marca
CREATE TABLE Marca (
    idMarca INT PRIMARY KEY, 
    nombre VARCHAR(50) NOT NULL
);

-- Tabla Productos
CREATE TABLE Productos (
    idProductos INT PRIMARY KEY, 
    idMarca INT NOT NULL, 
    nombreproductos VARCHAR(50) NOT NULL, 
    valorunitario DECIMAL(10, 2) NOT NULL, 
    descripcion VARCHAR(100) NOT NULL, 
    existencias INT NOT NULL, 
    modelo VARCHAR(10) NOT NULL, 
    CONSTRAINT fk_productos_marca FOREIGN KEY (idMarca) REFERENCES Marca(idMarca)
);

-- Tabla Fotos
CREATE TABLE Fotos (
    idFotos INT PRIMARY KEY, 
    idProductos INT NOT NULL, 
    ruta VARCHAR(100) NOT NULL, 
    CONSTRAINT fk_fotos_productos FOREIGN KEY (idProductos) REFERENCES Productos(idProductos)
);

-- Tabla Proveedores
CREATE TABLE Proveedores (
    idProveedores INT PRIMARY KEY, 
    nombre VARCHAR(50) NOT NULL, 
    apellidos VARCHAR(50) NOT NULL, 
    telefono VARCHAR(10) NOT NULL, 
    direccion VARCHAR(100) NOT NULL, 
    correo VARCHAR(100) NOT NULL
);

-- Tabla Compra
CREATE TABLE Compra (
    idCompra INT PRIMARY KEY, 
    idProveedores INT NOT NULL, 
    idProductos INT NOT NULL, 
    fecha DATE NOT NULL, 
    valorpago DECIMAL(10, 2) NOT NULL, 
    CONSTRAINT fk_compra_proveedores FOREIGN KEY (idProveedores) REFERENCES Proveedores(idProveedores),
    CONSTRAINT fk_compra_productos FOREIGN KEY (idProductos) REFERENCES Productos(idProductos)
);

-- Tabla Ventas
CREATE TABLE Ventas (
    idVenta INT PRIMARY KEY, 
    idEmpleado INT NOT NULL, 
    idCliente INT NOT NULL, 
    fechaventa DATE NOT NULL, 
    formapago VARCHAR(2) NOT NULL, 
    CONSTRAINT fk_ventas_empleados FOREIGN KEY (idEmpleado) REFERENCES Empleado(idEmpleado),
    CONSTRAINT fk_ventas_cliente FOREIGN KEY (idCliente) REFERENCES Cliente(idCliente)
);

-- Tabla Factura
CREATE TABLE Factura (
    idFactura INT PRIMARY KEY, 
    idVenta INT NOT NULL, 
    idProductos INT NOT NULL, 
    cantidadproducto VARCHAR(100) NOT NULL, 
    valorunitario DECIMAL(10, 2) NOT NULL, 
    CONSTRAINT fk_factura_venta FOREIGN KEY (idVenta) REFERENCES Ventas(idVenta),
    CONSTRAINT fk_factura_producto FOREIGN KEY (idProductos) REFERENCES Productos(idProductos)
);


