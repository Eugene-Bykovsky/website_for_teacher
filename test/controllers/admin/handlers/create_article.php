<?php

if (empty($_FILES)) {

} else {
    $fileName = $_FILES['uploadfile']['name'];
    $upload = 'images/articles/'.$name;
    move_uploaded_file($_FILES['uploadfile']['tmp_name'], $upload);
}

$image = $fileName;
$title = $_REQUEST['title'];
$text = $_REQUEST['text'];
$bigtext = $_REQUEST['bigtext'];
$type = $_REQUEST['type'];

$result = Article::create($image, $title, $text, $bigtext, $type);

if ($result) {
    require_once 'templates/admin/forms/answer.php';
} else {
    echo mysqli_error($mysqli);
}