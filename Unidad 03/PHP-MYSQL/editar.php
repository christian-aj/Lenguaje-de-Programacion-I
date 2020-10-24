<?php

include 'db.php';

$nombres = "";
$apellidos = "";
$email = "";

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $query = "SELECT * FROM alumno WHERE id = $id";

    $resultado = mysqli_query($conn, $query);

    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_array($resultado);
        $nombres = $row['nombres'];
        $apellidos = $row['apellidos'];
        $email = $row['correo'];
    }
}

if (isset($_POST['editar'])) {
    $id = $_GET['id'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];

    $query = "UPDATE alumno set nombres = '$nombres', apellidos = '$apellidos', correo = '$email' WHERE id = $id";

    mysqli_query($conn, $query);

    header('Location:index.php');

}

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>
<body>
<h3>Editar Alumno</h3>
<form action="editar.php?id=<?php echo $_GET['id']; ?>" method="post">
    <input type="text" name="nombres" value="<?php echo $nombres ?>">
    <input type="text" name="apellidos" value="<?php echo $apellidos ?>"">
    <input type="text" name="email" value="<?php echo $email ?>"">
    <button type="submit" name="editar">Actualizar</button>
</form>
</body>
</html>
