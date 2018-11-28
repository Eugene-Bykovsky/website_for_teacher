<div class="container">
    <div class="col-12">
        <img width="175" height="175" src="images/authors/<?= $author->getImage() ?>">
        <p class="date"><?= $author->getDateOfBirth() ?></p>
        <p class="text_author"><?= $author->getAboutAuthor() ?></p>
        <a class="button" href="?dispatch=authors">К списку авторов </a>
    </div>
</div>