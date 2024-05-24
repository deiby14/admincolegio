
<?php require_once 'conexion.php';


 ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Escuelas</title>  
    <link rel="stylesheet" href="./css/estilo.css">
    <link rel="stylesheet" href="./css/estiloboton.css">
    
 
</head>
<body>
    <h1>Lista de Escuelas</h1>
    <a class='boton2' href="crear.php">Añadir nueva escuela</a> <!-- Enlace para crear nueva escuela -->
    <table>
        <thead>
            <tr>
                <th>Id alumno</th>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Sexo</th>
                <th>Edad</th>
                <th>Acciones</th>

                 <!-- Columna  de editar y eliminar -->
            </tr>
        </thead>
        <tbody>
            <?php
            // Consulta con while (foreach no funciona)
            $stmt = $conexion->query("SELECT * FROM alumnos");
            while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $fila['id_alumno'] . "</td>";
                echo "<td>" . $fila['dni'] . "</td>";
                echo "<td>" . $fila['nombre_alumno'] . "</td>";
                echo "<td>" . $fila['apellido_alumno'] . "</td>";
                echo "<td>" . $fila['sexo'] . "</td>";
                echo "<td>" . $fila['edad'] . "</td>";
                echo "<td>";
                echo "<a class='boton'href='formeditar.php?ID=" . $fila['id_alumno'] . "'>Editar</a> | ";
                echo "<a class='boton1'  href='./acciones/eliminaralumn.php?ID=" . $fila['id_alumno'] . "'>Borrar</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</body>
</html>


