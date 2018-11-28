<?php
session_start();

require_once '../../db.php';
require_once '../../classes/Author.php';

$login = $_REQUEST['login'];
$pass = $_REQUEST['pass'];
$logpass = Author::getLoginAndPass($login, $pass);
$role = Author::getRole($login, $pass);

if (isset($logpass)) {
    $_SESSION['user_id'] = rand(1, 100);
    $_SESSION['login'] = $login;
    if ($role) {
        $_SESSION['role'] = $role; 
    }
    header('Location: ../../index.php');
} else {
    header('Location: ../../index.php');
}