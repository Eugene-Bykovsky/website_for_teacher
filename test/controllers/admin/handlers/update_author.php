<?php

$author_id = $_REQUEST['id'];
$author = new Author($author_id);

$name = $_REQUEST['name'];
$lastname = $_REQUEST['last_name'];
$birth = $_REQUEST['date_of_birth'];
$about = $_REQUEST['about_author'];
$loginn = $_REQUEST['loginn'];
$pass = $_REQUEST['pass'];


$result = Author::update($name, $lastname, $birth, $about, $loginn, $pass, $author_id);

if ($result) {
    require_once 'templates/admin/forms/answer.php';
} else {
    echo mysqli_error($mysqli);
} 

 