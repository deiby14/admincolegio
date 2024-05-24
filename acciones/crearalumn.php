<?php
require_once '../conexion.php';

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Limpiar y validar datos del formulario
    $dni = isset($_POST["dni"]) ? $_POST["dni"] : "";
    $nombre = isset($_POST["nombre_alumno"]) ? $_POST["nombre_alumno"] : "";
    $apellido = isset($_POST["apellido_alumno"]) ? $_POST["apellido_alumno"] : "";
    $sexo = isset($_POST["sexo"]) ? $_POST["sexo"] : "";
    $edad = isset($_POST["edad"]) ? $_POST["edad"] : "";

    // Insertar datos en la base de datos
    $stmt = $conexion->prepare("INSERT INTO alumnos (dni, nombre_alumno, apellido_alumno, sexo, edad) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$dni, $nombre, $apellido, $sexo, $edad]);

    // Redirigir a una página de éxito o a la misma página para evitar envíos duplicados
    header('Location: ../datosalumn.php');
    exit(); 
}
?>
