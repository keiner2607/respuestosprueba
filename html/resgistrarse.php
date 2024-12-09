<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../css/registrarse.css">
</head>
<body>
    <div class="form-container">
        <h2>Registro</h2>
        <form id="register-form">
            <label for="name">Nombre Completo:</label>
            <input type="text" id="name" placeholder="Ingresa tu nombre completo" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" placeholder="Ingresa tu email" required>
            
            <label for="username">Usuario:</label>
            <input type="text" id="username" placeholder="Crea un usuario" required>
            
            <label for="password">Contraseña:</label>
            <input type="password" id="password" placeholder="Crea una contraseña" required>
            
            <button type="submit">Registrarse</button>
        </form>
        <p>¿Ya tienes una cuenta? <a href="login.html">Inicia sesión aquí</a></p>
    </div>
</body>
</html>
