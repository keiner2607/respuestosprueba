<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Cambio</title>
    <link rel="stylesheet" href="../css/editarproduc.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <img id="product-image" src="image.png" alt="Producto">
            <h2 id="product-title">GABRIEL</h2>
            <p id="product-description">Amortiguador Spark GT Delantero Izquierdo</p>
            <p id="product-price">$183.813</p>
        </div>
        <form id="update-form">
            <label for="new-image">Nueva Imagen (URL):</label>
            <input type="text" id="new-image" placeholder="Ingresa URL de la imagen">
            
            <label for="new-title">Nuevo Título:</label>
            <input type="text" id="new-title" placeholder="Ingresa nuevo título">
            
            <label for="new-description">Nueva Descripción:</label>
            <input type="text" id="new-description" placeholder="Ingresa nueva descripción">
            
            <label for="new-price">Nuevo Precio:</label>
            <input type="text" id="new-price" placeholder="Ingresa nuevo precio">
            
            <button type="button" id="update-button">Actualizar</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
