<?php 

session_start();

$dispatch = $_REQUEST['dispatch'];

if (!isset($dispatch)) {
    header('Location: index.php?dispatch=index');exit;
}

require_once 'db.php';
require_once 'classes/Author.php';
require_once 'classes/Article.php';

$path = "controllers/index/$dispatch.php";

if (file_exists($path)) { 
    require_once $path; 
} else { 
    require_once 'controllers/index/404.php';
}



