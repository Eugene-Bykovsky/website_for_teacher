<?php

$sort = $_REQUEST['sort'];
$type = $_REQUEST['type'];

if (empty($sort) & empty($type)) { 
    $articles = Article::getAll($sort = 2, $type = 1);
} else { 
    $articles = Article::getAll($sort, $type);
}

$title_first = $title_second = 'Статьи';

require_once 'templates/index/header.php';
require_once 'templates/index/form_sort.php';

foreach ($articles as $article) {
    require 'templates/index/article_block.php';
} 

require_once 'templates/index/footer.php';