<?php

include "db.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM alumno WHERE id = $id";

    $resultado = mysqli_query($conn, $query);

    if (!$resultado) {
        die("Fallo la consulta");
    }

    header('Location:index.php');
}