<?php

$author_id = $_REQUEST['id'];
$author = new Author ($author_id);
$title_first = $author->getFullName();

require_once 'templates/admin/header.php';

require_once 'templates/admin/author.php';

require_once 'templates/admin/footer.php';

