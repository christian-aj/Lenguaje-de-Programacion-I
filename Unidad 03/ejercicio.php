<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicios de PHP</title>
</head>
<body>
<h1>Ejercicios de PHP</h1>

<form action="calcular.php" method="post">
    <input type="text" placeholder="Ingrese un número" name="number1">
    <input type="text" placeholder="Ingrese otro numero" name="number2">
    <select name="calcular">
        <option value="1">Sumar</option>
        <option value="2">Restar</option>
        <option value="3">Multiplicar</option>
        <option value="4">Dividir</option>
    </select>
    <button type="submit" name="enviar">Enviar</button>
</form>
</body>
</html>
