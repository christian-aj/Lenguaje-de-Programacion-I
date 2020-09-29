<?php

$name = "Christian";
//echo "hola mundo \t";

$year = array(10,2,5,"true",false);

//echo var_dump($year);

$lastname = "Arevalo";

$a = 20;
$b = 50;
$c = $a - $b;

$age = $_POST['age'];

//echo $name . " " . $lastname;
//echo $c;
?>

<form action="" method="post">

    <input type="text" placeholder="Enter Age" name="age">
    <button type="submit">enviar</button>

    <?php

    if ($age >= 18) {
        echo "<h2>Eres mayor de edad</h2>";
    } else {
        echo "todavia eres un chibolo";
    }
    ?>

</form>
<h1>Hola <?php echo $name?></h1>