<?php

if (!isset($_POST['enviar'])) {
    header('Location: ejercicio.php');
} else {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $select = $_POST['calcular'];


    switch ($select) {
        case 1:
            $resultado = $number1+$number2;
            echo "El resultado es " . $resultado;
            break;
    }
}