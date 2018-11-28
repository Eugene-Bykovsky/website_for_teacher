<?php

function my_dump($object) {
    echo '<pre>';
    var_dump($object);
    echo '</pre>';
}
 
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'test';

$mysqli = mysqli_connect($host, $user, $password, $database);

