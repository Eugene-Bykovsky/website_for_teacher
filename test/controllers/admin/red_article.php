<?php

if ($_GET['update'] == 'art') {
    $article_id = $_REQUEST['id'];
    $article = new Article($article_id);
    $title_first = 'Администраторская панель';
    $title_second = 'Редактирование статьи ' . '<br>' . '&laquo' . $article->getTitle() . '&raquo';    
} else if ($_GET['delete'] == 'art') {
    $article_id = $_REQUEST['id'];
    $article = new Article($article_id);
    $title_first = 'Администраторская панель';
    $title_second = 'Удаление статьи ' . '<br>' . '&laquo' . $article->getTitle() . '&raquo';    
} else if ($_POST['create'] == 'art_create') {
    $title_first = 'Администраторская панель';
    $title_second = 'Создание новой статьи';
}

require_once 'templates/admin/header.php';

require_once 'templates/admin/red_article.php';

require_once 'templates/admin/footer.php';