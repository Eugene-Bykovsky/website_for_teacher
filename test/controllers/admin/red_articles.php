<?php

$title_first = 'Администраторская панель';
$title_second = 'Редактирование статей';
$articles = Article::getAll($sort, $type);

require_once 'templates/admin/header.php';

require_once 'templates/admin/red_articles.php';

require_once 'templates/admin/footer.php';