<?php
// Incluir archivo de configuración de la base de datos
include_once 'config.php';

$sql = "SELECT id_producto, nombre, precio FROM PRODUCTOS";
$result = $conn->query($sql);

$productos = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $productos[] = $row;
    }
}

header('Content-Type: application/json');
echo json_encode($productos);

$conn->close();
?>
