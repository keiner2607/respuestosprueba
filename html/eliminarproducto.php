<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Producto</title>
    <link rel="stylesheet" href="../css/eliminarproducto.css?v=1.0"> <!-- Asegúrate de vincular tu archivo CSS -->
</head>
<body>

<div class="form-container">
    <h2>Eliminar Producto</h2>
    <p>¿Estás seguro de que deseas eliminar el siguiente producto?</p>

    <div class="product-info">
        <p><strong>Nombre del Producto:</strong> Producto Ejemplo</p>
        <p><strong>Precio:</strong> $10,000</p>
        <p><strong>Descripción:</strong> Descripción del producto que deseas eliminar.</p>
    </div>

    <form action="#" method="POST"> <!-- Reemplaza "#" con la acción necesaria si vas a usar backend -->
        <button type="submit" class="btn-delete">Eliminar Producto</button>
        <button type="button" class="btn-cancel" onclick="window.location.href='index.html';">Cancelar</button>
    </form>
</div>

</body>
</html>
