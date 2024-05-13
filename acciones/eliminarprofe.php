<?php
require_once '../conexion.php';

// Verificar si se recibió el ID por GET y validar el ID
if (!isset($_GET['ID']) || !is_numeric($_GET['ID'])) {
    header('Location:../datosprofe.php');
    exit();
} else {
    // Obtener el ID del profesor a eliminar
    $ID = $_GET['ID'];
}

try {
    // Preparar la consulta para eliminar el registro
    $sql = "DELETE FROM profesor WHERE id_profesor = ?";
    $stmt = $conexion->prepare($sql);
    // Vincular el parámetro INT 
    $stmt->bindParam(1, $ID, PDO::PARAM_INT);
    // Ejecutar 
    $stmt->execute();
    
    echo "El registro se eliminó correctamente.";
    // Redirigir a la página donde se muestran los datos
    header('refresh:2; url=../datosprofe.php'); // Redirigir después de 2 segundos
    exit();
} catch (PDOException $e) {
    // Si ocurre un error, mostrar el mensaje de error
    echo "Error al intentar eliminar el registro: " . $e->getMessage();
}
