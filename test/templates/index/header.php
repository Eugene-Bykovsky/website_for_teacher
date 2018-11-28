<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= $title_first ?></title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <div class="wrap">
        <header>
            <div class="container">
                <div class="main-title">
                    <? if ($_SESSION['role'] == 1) { ?>
                        <div class="col-5"> 
                            <h1>Сайт учителя русского языка и литературы</h1>
                        </div>
                        <div class="col-1"> 
                            <a href="admin.php">Ссылка на администраторскую панель</a> 
                        </div>
                    <?  } else { ?>
                        <div class="main-title">
                            <h1>Сайт учителя русского языка и литературы</h1>
                        </div>
                    <?  } ?>
                </div>
                <div class="main-menu">
                    <? if ($dispatch != 'index') { ?>
                        <div class="col-3"><a class="mm" href="?dispatch=index">Главная</a></div>
                    <? } else { ?>
                        <div class="col-3">Главная</div>
                    <? } ?>
                        <div class="col-3">
                            <ul class="ddmenu">
                            <? if ($dispatch != 'articles') { ?>
                                <li><a class="mm"  href="?dispatch=articles">Статьи</a>
                            <? } else { ?>
                                <li>Статьи
                            <? } ?>    
                                </li>
                            </ul>
                        </div>
                    <? if ($dispatch != 'contacts') { ?>
                        <div class="col-3"><a class="mm" href="?dispatch=contacts">Контакты</a></div>
                    <? } else { ?> 
                        <div class="col-3">Контакты</div>
                    <? } ?>
                    <? if ($dispatch != 'authors') { ?>
                        <div class="col-3"><a class="mm" href="?dispatch=authors">Авторы</a></div>
                    <? } else { ?> 
                        <div class="col-3">Авторы</div>
                    <? } ?>
                        <div class="col-3">
                            <? if (isset($_SESSION['login'])) { ?>
                                <? echo 'Привет, ' . $_SESSION['login'] ?>
                                <div>
                                    <a href="../../controllers/index/unauth.php">Выйти из аккаунта</a>
                                </div>
                            <? } else { ?> 
                                Привет, Гость !!!
                            <? } ?>
                        </div >
                </div>
            </div>
        </header>
        <main>
            <div class="title_second"><h2><?= $title_second ?></h2></div>
