<?php
    include("../CRUD/connection.php");
    $con = connection();
    $id = $_GET['id'];
    $sql = "SELECT * FROM alumnos WHERE idAlumnos='$id'";
    $query = mysqli_query($con, $sql);
    $alumno = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alumno</title>
</head>
<body>
    <h1>Editar Alumno</h1>

    <form action="../CRUD/edit_alumno.php?id=<?= $alumno['idAlumnos'] ?>" method="POST">
        <label for="nombreAlumnos">Nombre:</label>
        <input type="text" name="nombreAlumnos" value="<?= $alumno['nombreAlumnos'] ?>" required>
        <label for="edad">Edad:</label>
        <input type="number" name="edad" value="<?= $alumno['edad'] ?>" required>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>

