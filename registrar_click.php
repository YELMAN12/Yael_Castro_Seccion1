<?php
// registrar_visita.php - Simple y al grano

// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_clics";

if ($_SERVER["REQUEST_METHOD"] !== "POST" || !isset($_POST["registrar_visita"])) {
    // Si no se cumple, significa que no vino del formulario esperado
    header("Location: index.html?status=error");
    exit();
}

// Conectar a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Si hay error de conexión
if ($conn->connect_error) {

die("Error de conexión: " . $conexion->connect_error);

}

// Insertar el clic
$sql = "INSERT INTO clicks (fecha_hora_click) VALUES (NOW())";

if ($conn->query($sql) === TRUE) {
    header("Location: index.html?status=success");
} else {
    header("Location: index.html?status=error");
}

$conn->close(); // Cerrar la conexión
exit(); // Siempre salir después de una redirección
?>