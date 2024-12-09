<?php
$servername = "localhost";   // Usualmente 'localhost' en vez de 'Localhost'
$username = "root";          // Nombre de usuario de la base de datos
$password = "";              // Contraseña de la base de datos (vacío en localhost por defecto)
$dbname = "transmimotor_db"; // Nombre de la base de datos

try {
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Modo de error como excepciones
    echo "¡Conexión exitosa!";
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
?>
