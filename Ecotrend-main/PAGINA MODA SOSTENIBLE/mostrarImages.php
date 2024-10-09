<?php
$conn = new mysqli('sql.freedb.tech', 'freedb_juanitar', '57ZErrg?8UJ*xAf', 'freedb_images');

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT image_url FROM ropa";
$result = $conn->query($sql);

if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="gallery-item">';
            echo '<img src="' . $row["image_url"] . '" alt="Imagen de prenda">';
            echo '</div>';
        }
    } else {
        echo "<p>No se han subido imágenes aún.</p>";
    }
} else {
    echo "Error en la consulta: " . $conn->error;
}

$conn->close();
