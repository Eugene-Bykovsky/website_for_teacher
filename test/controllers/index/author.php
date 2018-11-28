<?php

$author_id = $_REQUEST['id'];
$author = new Author ($author_id);
$title_first = $title_second = $author->getFullName();

if ($author->getAuthorId()) {
    require_once 'templates/index/header.php';
    require_once 'templates/index/author.php';
    require_once 'templates/index/footer.php';
} else {
    require_once 'controllers/index/404.php';
}




