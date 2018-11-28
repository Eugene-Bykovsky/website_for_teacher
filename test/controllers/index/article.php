<?php

$article_id = $_REQUEST['id'];
$article = new Article($article_id);
$title_first = $title_second = $article->getTitle();

if ($article->getArticleId()) { 
    require_once 'templates/index/header.php';
    require_once 'templates/index/article.php';
    require_once 'templates/index/footer.php';
} else { 
    require_once 'controllers/index/404.php';
} 




