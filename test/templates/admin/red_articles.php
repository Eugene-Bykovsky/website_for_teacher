<div class="container">
    <div class="col-12">
        <div class="redaction">
            <table class="all_articles">
                <tr class="head_table_arts">
                    <td>Картинка</td>
                    <td>Название статьи</td>
                    <td>Дата публикации</td>
                    <td>Аннотация</td>
                    <td>Основной текст</td>
                    <td>Тип статьи</td>
                    <td>Действие</td>
                </tr>
                <? foreach ($articles as $article) { ?>
                <tr>
                    <td><img width="150" height="150" src="images/articles/<?= $article->getImage() ?>"></td>
                    <td><?= $article->getTitle(); ?></td>
                    <td><?= $article->getDate(); ?></td>
                    <td><?= $article->getText(); ?></td>
                    <td><?= $article->getBigText(); ?></td>
                    <td><?= $article->getType(); ?></td>
                    <td>
                        <form action="admin.php" method="GET">
                            <input type="hidden" name="dispatch" value="red_article">
                            <input type="hidden" name="id" value="<?= $article->getArticleId() ?>">
                            <input type="hidden" name="update" value="art">
                            <button type="submit">Изменить статью</button>
                        </form>
                        <br>
                        <form action="admin.php" method="GET">
                            <input type="hidden" name="dispatch" value="red_article">
                            <input type="hidden" name="id" value="<?= $article->getArticleId() ?>">
                            <input type="hidden" name="delete" value="art">
                            <button type="submit">Удалить статью</button>
                        </form>
                        <br>
                    </td>
                </tr>
            <? } ?>
            </table>
            <br>
            <form action="admin.php" enctype="multipart/form-data" method="POST">
                <table class="all_articles">
                    <tr class="head_table_arts">
                        <td colspan="6">Создать новую статью</td>
                    </tr>
                    <tr>
                        <td>Картинка</td>
                        <td>Название статьи</td>
                        <td>Аннотация</td>
                        <td>Основной текст</td>
                        <td>Тип статьи</td>
                        <td>Действие</td>
                    </tr>
                    <tr>
                        <td>
                            <input name="uploadfile" type="file">
                        </td>
                        <td><input type="varchar(255)" name="title" required></td>
                        <td><textarea required name="text"></textarea></td>
                        <td><textarea required name="bigtext"></textarea></td>
                        <td>
                            <select type="varchar(255)" name="type">
                                <option></option>    
                                <option value="Блог">Блог</option>
                                <option value="Новости">Новости</option>
                            </select>
                        </td>
                        <td>
                            <input type="hidden" name="dispatch" value="red_article">
                            <input type="hidden" name="create" value="art">
                            <button type="submit">Создать</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>    
        <div class="bottom_link">
            <a class="button" href="?dispatch=admin">Назад в меню</a>
        </div>
    </div>
</div>

