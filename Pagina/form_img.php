<?php
$conn = new mysqli("localhost", "root", "", "prueba");

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT * FROM productos ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='product'>";
        echo "<h2>" . $row["nombre"] . "</h2>";
        echo "<p>Precio: $" . $row["precio"] . "</p>";
        echo "<img src='C:\wamp64\www\imgs/" . $row["imagen"] . "' alt='Imagen del producto'>";
        echo "</div>";
    }
} else {
    echo "No se encontraron resultados.";
}

$conn->close();
?>
