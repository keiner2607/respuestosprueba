<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Tienda del Repuesto</title>
    <link rel="stylesheet" href="../css/productos.css">
</head>
<body>
    <!-- Encabezado -->
    <header>
        <div class="header-bar">
            <span>Cobertura completa de domicilios </span>
            <img src="../img/carritocompras.jpg" alt="" class="cart-icon">
        </div>
        <nav>
            <div class="logo">
                <img src="img/logo.png" alt="Logo">
                <h1>LA TIENDA DEL REPUESTO</h1>
            </div>
            <ul class="menu">
                <li><a href="#">Inicio</a></li>
                <li class="dropdown">
                    <a href="#">Portafolio</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Caja y Transmisión</a></li>
                        <li><a href="#">Suspensión y Dirección</a></li>
                        <li><a href="#">Puntas y ejes homocinéticos</a></li>
                        <li><a href="#">Motor</a></li>
                        <li><a href="#">Iluminación Automotriz</a></li>
                        <li><a href="#">Accesorios</a></li>
                        <li><a href="#">Sistema de frenos</a></li>
                    </ul>
                </li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Puntos de Venta</a></li>
                <li><a href="#">Quiénes Somos</a></li>
            </ul>
        </nav>
    </header>

    <!-- Productos -->
    <section class="product-section">
        <div class="container">
            <h2>Contamos con más de <span>10,000</span> referencias en autopartes para el mercado colombiano.</h2>
            <div class="product-grid">
                <!-- Caja 1 -->
                <div class="product-card">
                    <a href="../html/produccaja.php"><img src="../img/transmision.jpg" alt=""></a>
                    
                    <h3>Caja y Transmisión</h3>
                    <div class="button-group">
                        <a href="../html/editarproducprincipal.php"><button class="btn edit">Editar</button></a>
                        <a href="../html/eliminarproducto.php"><button class="btn delete">Eliminar</button></a>
                        
                        
                    </div>
                </div>
                <!-- Caja 2 -->
                <div class="product-card">
                    <a href="../html/producsuspension.php"><img src="../img/suspencionydirreccion.png" alt=""></a>
                   
                    <h3>Suspensión y Dirección</h3>
                    <div class="button-group">
                        <a href="../html/producsuspenson.php"><button class="btn edit">Editar</button></a>
                        
                        <a href="../html/eliminarproducto.php"><button class="btn delete">Eliminar</button></a>
                    </div>
                </div>
                <!-- Caja 3 -->
                <div class="product-card">
                    <a href="../html/producsistemaelectrico.php"><img src="../img/sistemaselectrico.png" alt="Puntas y ejes homocinéticos"></a>
                    
                    <h3>Sistema electrico</h3>
                    <div class="button-group">
                        <button class="btn edit">Editar</button>
                    <a href="../html/eliminarproducto.php"><button class="btn delete">Eliminar</button></a>
                    </div>
                </div>
                <!-- Caja 4 -->
                <div class="product-card">
                    <a href="../html/productmotor.php"> <img src="../img/motor.jpg" alt="Motor"></a>
                   
                    <h3>Motor</h3>
                    <div class="button-group">
                        <button class="btn edit">Editar</button>
                        <a href="../html/eliminarproducto.php"><button class="btn delete">Eliminar</button></a>
                    </div>
                </div>
                <!-- Caja 5 -->
                <div class="product-card">
                    <a href="../html/producfreno.php"><img src="../img/frenohidraulico.png" alt="Iluminación Automotriz"></a>
                    
                    <h3>Sistema de freno</h3>
                    <div class="button-group">
                        <button class="btn edit">Editar</button>
                        <a href="../html/eliminarproducto.php"><button class="btn delete">Eliminar</button></a>
                    </div>
                </div>
                <!-- Caja 6 -->
                <div class="product-card">
                    <img src="../img/sistemasdecombustible.png" alt="Accesorios">
                    <h3>Accesorios</h3>
                    <div class="button-group">
                        <button class="btn edit">Editar</button>
                        <a href="../html/eliminarproducto.php"><button class="btn delete">Eliminar</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>


