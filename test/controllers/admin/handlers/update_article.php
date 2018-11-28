<?php

$article_id = $_REQUEST['id'];
$article = new Article($article_id);

$title = $_REQUEST['title'];
$text = $_REQUEST['text'];
$bigtext = $_REQUEST['bigtext'];
$type = $_REQUEST['type'];

$result = Article::update($title, $text, $bigtext, $type, $article_id);

if ($result) {
    require_once 'templates/admin/forms/answer.php';
} else {
    echo mysqli_error($mysqli);
} 
 