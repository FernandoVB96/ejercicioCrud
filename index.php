<?php
    include("CRUD/connection.php");
    $con = connection();
    $sql = "SELECT * FROM alumnos";
    $query = mysqli_query($con, $sql);
    $alumnos = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Crud</title>
</head>
<body>
<h1>Lista de Alumnos</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Edad</th>
        <th>Acciones</th>
    </tr>

    <?php foreach ($alumnos as $alumno): ?>
    <tr>
        <td><?= $alumno['idAlumnos'] ?></td>
        <td><?= $alumno['nombreAlumnos'] ?></td>
        <td><?= $alumno['edad'] ?></td>
        <td>
            <a href="updateForm/updateFrom.php?id=<?= $alumno['idAlumnos'] ?>">Editar</a>
            <a href="CRUD/delete_alumno.php?id=<?= $alumno['idAlumnos'] ?>">Eliminar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<h2>Agregar nuevo alumno</h2>
<form action="CRUD/insert_alumno.php" method="POST">
    <label for="nombreAlumnos">Nombre:</label>
    <input type="text" name="nombreAlumnos" required>
    <label for="edad">Edad:</label>
    <input type="number" name="edad" required>
    <button type="submit" name="add">Agregar</button>
</form>
</body>
</html>
