<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectarse a la base de datos (similar a tu archivo PHP original)
    $servername = "localhost";
    $username = "root";
    $password = "123";
    $dbname = "miBD";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Recibir datos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];

    // Consulta SQL para insertar datos
    $sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario insertado correctamente.";
    } else {
        echo "Error al insertar el usuario: " . $conn->error;
    }

    $conn->close();
}
?>