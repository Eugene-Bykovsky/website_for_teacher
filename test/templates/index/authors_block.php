<div class="col-12">
    <a href="?dispatch=author&id=<?= $author->getAuthorId() ?>"><img width="175" height="175" src="images/authors/<?= $author->getImage() ?>"></a>
    <p>
    <?= $author->getFullName() ?>
    </p>
    <p class="date"><?= $author->getDateOfBirth() ?></p>
</div>