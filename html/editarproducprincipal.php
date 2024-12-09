<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Cambio</title>
    <link rel="stylesheet" href="../css/editarproducprincipal.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <img id="product-image" src="image.png" alt="Caja y Transmisión">
            <h2 id="product-title">Caja y Transmisión</h2>
        </div>
        <form id="update-form">
            <label for="new-image">Nueva Imagen (URL):</label>
            <input type="text" id="new-image" placeholder="Ingresa URL de la imagen">
            
            <label for="new-title">Nuevo Título:</label>
            <input type="text" id="new-title" placeholder="Ingresa nuevo título">
            
            <button type="button" id="update-button">Actualizar</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
