<?php

include 'db.php';


if (isset($_POST['guardar'])) {

    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];

    $query = "INSERT INTO alumno (nombres, apellidos, correo) VALUES ('$nombres', '$apellidos', '$email')";

    $resultado = mysqli_query($conn, $query);

    if (!$resultado) {
        die("Query failed");
    }

    header('Location:index.php');

} else {
    header("Location:index.php");
}