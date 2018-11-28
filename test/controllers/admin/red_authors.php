<?php

$title_first = 'Администраторская панель';
$title_second = 'Редактирование авторов';
$authors = Author::getAll();

require_once 'templates/admin/header.php';

require_once 'templates/admin/red_authors.php';

require_once 'templates/admin/footer.php';