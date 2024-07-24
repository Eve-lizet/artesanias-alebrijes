<?php
include_once 'config.php';

// Iniciar la sesión para almacenar mensajes
session_start();


// Obtener datos del formulario
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$negocio = $_POST['negocio'];
$productos = $_POST['productos'];
$comentarios = $_POST['comentarios'];

// Preparar y vincular
$stmt = $conn->prepare("INSERT INTO proveedores (nombres, apellidos, telefono, correo, negocio, productos, comentarios) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $nombres, $apellidos, $telefono, $correo, $negocio, $productos, $comentarios);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo  "<script>alert('Proveedor registrado con éxito.'); location.href='visualizarproveedores.php';</script>";
    
} else {
    echo "Error: " . $stmt->error;
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
