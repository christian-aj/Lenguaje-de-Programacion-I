<?php

include 'db.php';

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $document = $_POST['document'];
    $email = $_POST['email'];

    $query = "INSERT INTO persona(nombres, apellidos, documento, correo) VALUES ('$name', '$lastname', '$document', '$email')";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = "Persona agregada correctamente";
    $_SESSION['message_type'] = "success";

    header("Location: index.php");

}
