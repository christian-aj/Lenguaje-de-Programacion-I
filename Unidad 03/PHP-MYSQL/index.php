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
    <title>Registro</title>
</head>
<body>

<h3>Registro de Alumnos</h3>

<form action="registrar.php" method="post">
    <input type="text" placeholder="Nombres" name="nombres"><br>
    <input type="text" placeholder="Apellidos" name="apellidos"><br>
    <input type="text" placeholder="Email" name="email"><br>
    <button type="submit" name="guardar">Guardar</button>
</form>

<table border="1">
    <thead>
    <th>ID</th>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>Correo</th>
    <th>Fecha</th>
    </thead>
    <tbody>

    <?php

    $query = "SELECT * FROM alumno";
    $resultado = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($resultado)) {

    ?>
    <tr>
        <th><?php echo $row['id']; ?></th>
        <th><?php echo $row['nombres']; ?></th>
        <th><?php echo $row['apellidos']; ?></th>
        <th><?php echo $row['correo']; ?></th>
        <th><?php echo $row['fecha']; ?></th>
    </tr>

    <?php } ?>
    </tbody>
</table>
</body>
</html>
