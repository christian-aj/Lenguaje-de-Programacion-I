<?php

include 'db.php';
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Alumnos</title>
</head>
<body>

<h3>Registrar</h3>

<form action="registrar.php" method="post">
    <input type="text" name="nombre" placeholder="Nombres">
    <input type="text" name="apellido" placeholder="Apellidos">
    <input type="text" name="documento" placeholder="Documento">
    <input type="text" name="email" placeholder="Email">
    <button type="submit" name="enviar">Enviar</button>
</form>

<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Documento</th>
        <th>Email</th>
        <th>Fecha</th>
    </tr>
    </thead>
    <tbody>

    <?php

    $query = "SELECT * FROM alumno";
    $resultado = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($resultado)) {
    ?>

        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nombres']; ?></td>
            <td><?php echo $row['apellidos']; ?></td>
            <td><?php echo $row['documento']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['fecha']; ?></td>
        </tr>

    <?php

    }
    ?>

    </tbody>
</table>
</body>
</html>
