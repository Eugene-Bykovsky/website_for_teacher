 <div class="container">
    <div class="col-12">
        <div class="redaction">
            <form action="admin.php" method="POST">
                <table class="all_articles">
                    <tr class="head_table_arts">
                        <td>Название статьи</td>
                        <td>Дата публикации</td>
                        <td>Аннотация</td>
                        <td>Основной текст</td>
                        <td>Тип статьи</td>
                        <td>Действие</td>
                    </tr>
                    <tr>
                        <td><input type="varchar(255)" name="title" value=" <?= $article->getTitle() ?>"></td>
                        <td><input type="date" name="date" value=" <?= $article->getDate() ?>"></td>
                        <td><textarea required name="text"><?= $article->getText() ?></textarea></td>
                        <td><textarea required name="bigtext"><?= $article->getBigText() ?></textarea></td>
                        <td>
                            <select type="varchar(255)" name="type">
                                <option><?= $article->getType() ?></option>    
                                <option>Блог</option>
                                <option>Новости</option>
                            </select><br><br>
                        </td>
                        <td>
                            <input type="hidden" name="dispatch" value="red_article">
                            <input type="hidden" name="id" value="<?= $_REQUEST['id']; ?>">
                            <input type="hidden" name="update" value="art">
                            <button type="submit">Изменить статью</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="article_bottom">
            <a class="button" href="?dispatch=red_articles">Назад</a>
        </div>
    </div>
</div>   