<?php

$conn = mysqli_connect(
    'localhost',
    'root',
    'root',
    'crud_g2'
);

if (!$conn) {
    die('database error ' . mysqli_connect_error());
}