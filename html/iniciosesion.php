<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../css/iniciosesion.css">
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <h1>Bienvenido de Nuevo</h1>
            <p>Por favor, ingresa tus credenciales para acceder.</p>
            <form id="login-form">
                <div class="input-group">
                    <input type="text" id="username" placeholder="Usuario o Email" required>
                </div>
                <div class="input-group">
                    <input type="password" id="password" placeholder="Contraseña" required>
                </div>
                <button type="submit" class="login-btn">Entrar</button>
            </form>
            <p>¿No tienes cuenta? <a href="register.html">Regístrate aquí</a></p>
        </div>
    </div>
</body>
</html>
