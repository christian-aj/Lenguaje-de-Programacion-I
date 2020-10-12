<?php

$text;

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$user = $_POST['user'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];

if ($name == "" || $lastname == "" || $email == "" || $user == "" || $password == "" || $repassword == "") {
    $text = "debe llenar los datos";
} else {
    $text = "datos guardados";
}


?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 02</title>
</head>
<body>
<form method="post">
    <fieldset>
        <legend>Usuario</legend>
        <input type="text" name="name" placeholder="Nombres">
        <input type="text" name="lastname" placeholder="Apellidos">
        <input type="email" name="email" placeholder="E-mail">
        <input type="text" name="user" placeholder="Usuario">
        <input type="password" name="password" placeholder="Contraseña">
        <input type="password" name="repassword" placeholder="Confirmar contraseña">
        <button type="submit">Guardar</button>
        <p name="text"><?php echo $text ?></p>
    </fieldset>
</form>
</body>
</html>

<style>
    * {
        font-family: Helvetica, sans-serif;
        font-size: 1rem;
    }
</style>