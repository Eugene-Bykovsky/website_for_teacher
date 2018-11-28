<div class="container">
    <div class="col-12">
        <a href="?dispatch=article&id=<?= $article->getArticleId() ?>"><img width="150" height="150" src="images/articles/<?= $article->getImage() ?>"></a>
        <h4><?= $article->getTitle() ?></h4>
        <p class="date"><?= $article->getDate() ?></p>
        <p><?= $article->getText() ?></p>
        <p><a href="?dispatch=article&id=<?= $article->getArticleId()?>">Читать далее</a></p>
    </div>
</div>
