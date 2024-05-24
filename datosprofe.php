
<?php require_once 'conexion.php';


 ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Escuelas</title>  
    <link rel="stylesheet" type="text/css" href="./css/estilo.css">
    <link rel="stylesheet" href="./css/estiloboton.css">
 
</head>
<body>
    <h1>Lista de Profesores</h1>
    <a class='boton2' href="crear.php">Añadir nuevo profesor</a> <!-- Enlace para crear nueva escuela -->
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Fecha de contrato</th>
                <th>sexo</th>
                <th>Asignatura</th>
                <th>Acciones</th><!-- Columna  de editar y eliminar -->
            </tr>
        </thead>
        <tbody>
            <?php
            // Consulta con while (foreach no funciona)
            $stmt = $conexion->query("SELECT * FROM profesor
            ");
            while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $fila['id_profesor'] . "</td>";
                echo "<td>" . $fila['nombre'] . "</td>";
                echo "<td>" . $fila['apellido'] . "</td>";
                echo "<td>" . $fila['telefono'] . "</td>";
                echo "<td>" . $fila['fecha_contrato'] . "</td>";
                echo "<td>" . $fila['sexo'] . "</td>";
                echo "<td>" . $fila['asignatura'] . "</td>";
                echo "<td>";
                echo "<a class='boton' href='formeditar.php?ID=" . $fila['id_profesor'] . "'>Editar</a> | ";
                echo "<a class='boton1' href='./acciones/eliminarprofe.php?ID=" . $fila['id_profesor'] . "'>Borrar</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</body>
</html>


