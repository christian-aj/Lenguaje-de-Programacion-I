<?php

$conn = mysqli_connect(
    'localhost',
    'root',
    'root',
    'bd_lp1'
);

if (!$conn) {
    die("Conection failed");
}
