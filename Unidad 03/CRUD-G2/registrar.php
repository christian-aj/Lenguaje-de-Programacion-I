<?php

include 'db.php';

if (isset($_POST['enviar'])) {

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $documento = $_POST['documento'];
    $email = $_POST['email'];

    $query = "INSERT INTO alumno (nombres,apellidos,documento,email) VALUES ('$nombre', '$apellido','$documento','$email')";

    $resultado = mysqli_query($conn, $query);

    if (!$resultado) {
        die("Query fatal");
    }

    header('Location:index.php');



} else {
    header('Location:index.php');
}