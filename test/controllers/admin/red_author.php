<?php

$author_id = $_REQUEST['id'];
$author = new Author($author_id);
if ($_GET['update'] == 'author') {
    $title_first = 'Администраторская панель';
    $title_second = 'Редактирование автора ' . '<br>' . $author->getFullName();    
} else {
    $title_first = 'Администраторская панель';
    $title_second = 'Удаление автора ' . '<br>' . $author->getFullName();    
}

require_once 'templates/admin/header.php';

require_once 'templates/admin/red_author.php';

require_once 'templates/admin/footer.php';