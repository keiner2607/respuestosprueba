<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Tienda del Repuesto</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <!-- Encabezado -->
    <header>
        <div class="header-bar">
        <span>Cobertura completa de domicilios</span>
        <a href="../html/carrito.php"><img src="../img/carritocompras.jpg" alt=""class="cart-icon"></a>
            
        </div>
        <nav>
            <div class="logo">
                <img src="../img/logo.png" alt="Logo">
                <h1>LA TIENDA DEL REPUESTO</h1>
            </div>
            <ul class="menu">
                <li><a href="#">Inicio</a></li>
                <li class="dropdown">
                    <a href="#">Portafolio</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">caja y transmision</a></li>
                        <li><a href="#">Suspension y direccion</a></li>
                        <li><a href="#">Sistema electrico</a></li>
                        <li><a href="#">Motor</a></li>
                        <li><a href="#">Sistema de freno</a></li>
                        <li><a href="#">/a></li>
                    </ul>
                </li>
                
                <li><a href="#">Puntos de Venta</a></li>
                <li><a href="#">Quiénes Somos</a></li>
            </ul>
        </nav>
    </header>

    <!-- Carrusel de imágenes -->
    <section class="carousel">
        <div class="carousel-container">
            <input type="radio" name="carousel" id="slide1" checked>
            <input type="radio" name="carousel" id="slide2">
            <input type="radio" name="carousel" id="slide3">

            <div class="carousel-item">
                <img src="../ig/motor.jpg" alt="Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="../im/frenohidraulico.png" alt="Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="../im/tornillos.png" alt="Imagen 3">
            </div>
        </div>

        <!-- Botones de navegación -->
        <label for="slide1" class="carousel-btn prev">❮</label>
        <label for="slide2" class="carousel-btn next">❯</label>
    </section>

    <!-- Sección "Somos tu mejor aliado" -->
    <section class="aliado">
        <div class="content">
            <h2>Somos tu mejor aliado</h2>
            <p>
                Somos un comercializador de repuestos de vehículos para el mercado colombiano con más de 22 años de experiencia. 
                Contamos con cinco puntos de venta en Medellín y uno en Bogotá. Creemos en las personas y por ello somos una gran 
                familia que está dispuesta a ofrecerle a los clientes el mejor servicio, con excelente actitud, profesionalismo, 
                y amplio conocimiento en marcas y repuestos para diferentes vehículos.
            </p>
            <a href="../html/productos.php" class="btn portafolio">Portafolio</a>
        </div>
        <div class="image">
            <img src="../img/nkrcamion.jpg" alt="Empleado">
        </div>
    </section>
    <section class="vehicle-categories">
        <div class="card">
            <img src="../img/onix.jpg" alt="Semipesados">
            <h3>Semipesados</h3>
            <p><strong>Hino:</strong> 300 – 500</p>
            <p><strong>Isuzu:</strong> NPR, NKR, NQR, NHR, FTR, FVR, FRR, NQR REWARD, NPR REWARD.</p>
        </div>
        <div class="card">
            <img src="../img/mazdacarro.jpg" alt="Automóviles">
            <h3>Automóviles</h3>
            <p><strong>Renault:</strong> Twingo, Clio, Stepway, Megane, Symbol, Kwid, Sandero/Logan.</p>
            <p><strong>Chevrolet:</strong> Optra, Spark GT, Sail, Aveo, Cruze, Onix.</p>
            <p><strong>Mazda:</strong> Mazda 2, Mazda 3, Mazda 6, Mazda Allegro, Mazda Milenio, CX3, CX5.</p>
            <p><strong>Hyundai:</strong> Atos, I10, I20, I25, I30, Verna, Accent, Getz.</p>
            <p><strong>Kia:</strong> Picanto, Rio, Cerato, Soul.</p>
            <p><strong>Suzuki:</strong> Alto, Swift.</p>
            <p>¡Y mucho más!</p>
        </div>
        <div class="card">
            <img src="../img/carrokia.jpg" alt="Camionetas">
            <h3>Camionetas</h3>
            <p><strong>Chevrolet:</strong> Tracker, Captiva, D-Max.</p>
            <p><strong>Renault:</strong> Koleos, Duster, Captur.</p>
            <p><strong>Kia:</strong> Carnival, Sorento, Sportage Revolution.</p>
            <p><strong>Suzuki:</strong> Vitara y Gran Vitara.</p>
            <p><strong>Hyundai:</strong> Tucson, Veracruz y Santa Fe.</p>
            <p>¡Y mucho más!</p>
        </div>
        <div class="card">
            <img src="../img/chevroletcarro.jpg" alt="Utilitarios">
            <h3>Utilitarios</h3>
            <p><strong>Chevrolet:</strong> N300, N200.</p>
            <p><strong>Renault:</strong> Kangoo, Master, Traffic.</p>
            <p><strong>Hyundai:</strong> Gran Starex.</p>
            <p>¡Y mucho más!</p>
        </div>
    </section>

    <script src="scripts.js"></script>
</body>
</html>