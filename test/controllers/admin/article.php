<?php

$article_id = $_REQUEST['id'];
$article = getArticle($article_id);
$title_first = $article['title'];

require_once 'templates/admin/header.php';

if (is_array($article)) { 
    require_once 'templates/admin/article.php';
} else { 
    require_once 'controllers/index/404.php';
} 

require_once 'templates/admin/footer.php';


