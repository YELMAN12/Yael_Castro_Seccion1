<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_clics";

if ($_SERVER["REQUEST_METHOD"] !== "POST" || !isset($_POST["registrar_visita"])) {
    header("Location: index.html?status=error");
    exit();
}

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

die("Error de conexión: " . $conexion->connect_error);

}

$sql = "INSERT INTO clicks (fecha_hora_click) VALUES (NOW())";

if ($conn->query($sql) === TRUE) {
    header("Location: index.html?status=success");
} else {
    header("Location: index.html?status=error");
}

$conn->close();
exit();
?>
