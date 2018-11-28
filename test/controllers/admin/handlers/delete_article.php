<?php

$article_id = $_REQUEST['id'];
$result = Article::delete($article_id);

if ($result) {
    require_once 'templates/admin/forms/answer.php';
} else {
    echo mysqli_error($mysqli);
}