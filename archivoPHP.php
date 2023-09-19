<?php
$servername = "localhost"; // Cambia esto si tu servidor MySQL no se encuentra en el mismo host
$username = "root";
$password = "123";
$dbname = "miBD";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL
$sql = "SELECT * FROM usuarios";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Comienza la tabla HTML
    echo "<table>";
    echo "<tr><th>Nombre</th><th>Email</th></tr>";

    // Recorre los resultados y muestra los datos en la tabla
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "</tr>";
    }

    // Cierra la tabla HTML
    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}

$conn->close();
?>

