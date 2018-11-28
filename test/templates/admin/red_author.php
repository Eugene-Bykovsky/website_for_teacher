<?php

if ($_REQUEST['update']) {
    if ($_GET['update'] == 'author') {
        require_once 'forms/update_author.php';
    } else if ($_POST['update'] == 'author'){
        require_once 'controllers/admin/handlers/update_author.php';exit;
    }
} else if ($_REQUEST['delete']) {
    if ($_GET['delete'] == 'author') {
        require_once 'forms/delete_author.php';
    } else if ($_POST['delete'] == 'author') {
        require_once 'controllers/admin/handlers/delete_author.php';exit;
    }
} else {
    require_once 'controllers/admin/404.php';
}