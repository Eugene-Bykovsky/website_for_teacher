<? if (isset($_SESSION['user_id'])) { ?>
    <div class="container">
        <div class="col-12">
            <img width="150" height="150" src="images/articles/<?= $article->getImage() ?>">
            <p class="date"><?= $article->getDate() ?></p>
            <p class="text_article"><?= $article->getBigText() ?></p>
            <div class="article_bottom">
                <a class="button" href="?dispatch=articles">Вернуться ко всем статьям</a>
            </div>
        </div>
    </div>
<? } else { ?>
    <div class="container">
    Авторизуйтесь, чтобы просмотреть полный текст статьи.
    <div>
<? } ?>