<?php

if (empty($_FILES)) {

} else {
    $fileName = $_FILES['uploadfile']['name'];
    $upload = 'images/authors/'.$name;
    move_uploaded_file($_FILES['uploadfile']['tmp_name'], $upload);
}

$name = $_REQUEST['name'];
$lastname = $_REQUEST['last_name'];
$image = $fileName;
$birth = $_REQUEST['date_of_birth'];
$about = $_REQUEST['about_author'];
$loginn = $_REQUEST['loginn'];
$pass = $_REQUEST['pass'];

$result = Author::create($name, $lastname, $fileName, $birth, $about, $loginn, $pass);

if ($result) {
    require_once 'templates/admin/forms/answer.php';
} else {
    echo mysqli_error($mysqli);
}

