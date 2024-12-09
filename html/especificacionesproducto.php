<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descripción de Repuestos de Vehículos</title>
    <link rel="stylesheet" href="../css/especificacionesproducto.css?v=1.0">
</head>
<body>
    <div class="form-container">
        <h1>Descripción de Repuestos de Vehículos</h1>
        <form action="procesar-formulario.php" method="POST">
            <div class="form-row">
                <!-- Nombre del Repuesto -->
                <label for="nombre">Nombre del Repuesto:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-row">
                <!-- Número de pieza -->
                <label for="num_pieza">Número de Pieza:</label>
                <input type="text" id="num_pieza" name="num_pieza" required>
            </div>
            <div class="form-row">
                <!-- Compatibilidad -->
                <label for="compatibilidad">Compatibilidad (Modelos):</label>
                <textarea id="compatibilidad" name="compatibilidad" rows="3" required></textarea>
            </div>
            <div class="form-row">
                <!-- Materiales -->
                <label for="materiales">Materiales:</label>
                <input type="text" id="materiales" name="materiales" required>
            </div>
            <div class="form-row">
                <!-- Dimensiones -->
                <label for="dimensiones">Dimensiones (mm):</label>
                <input type="text" id="dimensiones" name="dimensiones" required>
            </div>
            <div class="form-row">
                <!-- Precio -->
                <label for="precio">Precio (USD):</label>
                <input type="number" id="precio" name="precio" step="0.01" required>
            </div>
            <div class="form-row">
                <!-- Certificaciones -->
                <label for="certificaciones">Certificaciones:</label>
                <input type="text" id="certificaciones" name="certificaciones">
            </div>
            <div class="form-row">
                <!-- Botón de envío -->
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>
</body>
</html>
