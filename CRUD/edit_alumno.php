<?php
    include("connection.php");
    $con = connection();
    $id = $_GET['id'];
    $nombre = $_POST['nombreAlumnos'];
    $edad = $_POST['edad'];
    $sql = "UPDATE alumnos SET nombreAlumnos='$nombre', edad='$edad' WHERE idAlumnos='$id'";
    $query = mysqli_query($con, $sql);

    if ($query) {
        header("Location: ../index.php");
        }
    
?>


