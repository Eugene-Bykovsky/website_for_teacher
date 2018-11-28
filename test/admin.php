<?php

session_start();

$dispatch = $_REQUEST['dispatch'];

if (!isset($dispatch)) {
    header('Location: admin.php?dispatch=admin');exit;
}

require_once 'db.php';
require_once 'classes/Author.php';
require_once 'classes/Article.php';

$pathAdmin = "controllers/admin/$dispatch.php";

if ($_SESSION['role'] == 1)
    if (file_exists($pathAdmin)) {
        require_once $pathAdmin;
    } else {
        require_once 'controllers/admin/404.php';
    }
else {
    require_once 'templates/admin/header.php';
    require_once 'templates/admin/not_authorized.php';
    require_once 'templates/admin/footer.php';
}






