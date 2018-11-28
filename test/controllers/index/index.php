<?php

$title_first = 'Сайт учителя русского языка и литературы';
$title_second = 'Главная страница';

require_once 'templates/index/header.php';

if (!isset($_SESSION['login'])) { 
    require_once 'templates/index/authorization_form.php';
} else {
    echo '';
}

require_once 'templates/index/index.php';

require_once 'templates/index/footer.php';

