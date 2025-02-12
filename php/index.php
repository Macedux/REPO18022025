<?php
$servername = "db";  // Nombre del servicio en Docker Compose
$username = "usuario1";
$password = "contrasenyaUsuario1";
$dbname = "personas";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Ejecutar consulta
$sql = "SELECT id, nombre, apellido, telefono FROM personas";
$result = $conn->query($sql);

// Mostrar los resultados
if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Teléfono</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["nombre"]. "</td><td>" . $row["apellido"]. "</td><td>" . $row["telefono"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}

// Cerrar conexión
$conn->close();
?>