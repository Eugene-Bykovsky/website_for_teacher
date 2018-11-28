<?php

if ($_REQUEST['update']) {
    if ($_GET['update'] == 'art') {
        require_once 'forms/update_article.php';
    } else {
        require_once 'controllers/admin/handlers/update_article.php';exit;
    }
} else if ($_REQUEST['delete']) {
    if ($_GET['delete'] == 'art') {
        require_once 'forms/delete_article.php';
    } else {
        require_once 'controllers/admin/handlers/delete_article.php';exit;
    }
} else if ($_POST['create'] == 'art')  {
    require_once 'controllers/admin/handlers/create_article.php';exit;
} else {
    require_once 'controllers/admin/404.php';
}
