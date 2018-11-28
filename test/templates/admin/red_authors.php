<div class="container">
    <div class="col-12">
        <div class="redaction">
            <table class="all_authors">
                <tr class="head_table_authors">
                    <td>Аватарка</td>
                    <td>Имя</td>
                    <td>Фамилия</td>
                    <td>Дата рождения</td>
                    <td>Информация</td>
                    <td>Действие</td>
                </tr>
                <? foreach ($authors as $author) { ?>
                <tr>
                    <td><img width="150" height="150" src="images/authors/<?= $author->getImage() ?>"></td>
                    <td><?= $author->getName(); ?></td>
                    <td><?= $author->getLastName(); ?></td>
                    <td><?= $author->getDateOfBirth(); ?></td>
                    <td><?= $author->getAboutAuthor(); ?></td>
                    <td>
                        <form action="admin.php" method="GET">
                            <input type="hidden" name="dispatch" value="red_author">
                            <input type="hidden" name="id" value="<?= $author->getAuthorId() ?>">
                            <input type="hidden" name="update" value="author">
                            <button type="submit">Изменить автора</button>
                        </form>
                        <br>
                        <form action="admin.php" method="GET">
                            <input type="hidden" name="dispatch" value="red_author">
                            <input type="hidden" name="id" value="<?= $author->getAuthorId() ?>">
                            <input type="hidden" name="delete" value="author">
                            <button type="submit">Удалить автора</button>
                        </form>
                            <br>
                    </td>
                </tr>
            <? } ?>
            </table>
            <br>
            <form action="admin.php" enctype="multipart/form-data" method="POST">
                <table class="createAuthor">
                    <tr class="head_table_authors">
                        <td colspan="8">Создать нового автора</td>
                    </tr>
                    <tr>
                        <td>Картинка</td>
                        <td>Имя</td>
                        <td>Фамилия</td>
                        <td>День Рождения</td>
                        <td>Информация об авторе</td>
                        <td>Логин</td>
                        <td>Пароль</td>
                        <td>Действие</td>
                    </tr>
                    <tr>
                        <td><input name="uploadfile" type="file"></td>
                        <td><input size="15" type="varchar(255)" name="name" required></td>
                        <td><input size="15" type="varchar(255)" name="last_name" required></td>
                        <td><input type="date" name="date_of_birth"></td>
                        <td><textarea type="text" name="about_author" required></textarea></td>
                        <td><input size="12" type="varchar(255)" name="loginn" required></td>
                        <td><input size="12" type="varchar(255)" name="pass" required></td>
                        <td>
                            <input type="hidden" name="dispatch" value="red_author">
                            <input type="hidden" name="create" value="author">
                            <button type="submit">Создать</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="article_bottom">
                <a class="button" href="?dispatch=admin">Назад в меню</a>
        </div>
    </div>
</div>