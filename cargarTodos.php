<?php
include 'datosConexion.php';

$sql = "SELECT imags FROM albumes";
$result = $conn->query($sql);

$albumes = []; // Array para almacenar los resultados

if ($result->num_rows > 0) {
    // Recorrer todas las filas del resultado
    while ($row = $result->fetch_assoc()) {
        $albumes[] = $row['imags']; // Añadir cada campo 'imags' al array
    }

    // Convertir el array de imágenes a formato JSON
    echo json_encode($albumes);
} else {
    echo json_encode([]); // En caso de que no haya resultados
}

$conn->close();
?>