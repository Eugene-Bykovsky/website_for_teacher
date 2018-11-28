<div class="container">
    <div class="col-12">
        <div class="redaction">
            <form action="admin.php" method="POST">
                <table class="all_authors">
                    <tr class="head_table_arts">
                        <td>Имя</td>
                        <td>Фамилия</td>
                        <td>День Рождения</td>
                        <td>Информация об авторе</td>
                        <td>Логин</td>
                        <td>Пароль</td>
                        <td>Действие</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="varchar(255)" name="name" value="<?= $author->getName() ?>" required>
                        </td>
                        <td>
                            <input type="varchar(255)" name="last_name" value="<?= $author->getLastName() ?>" required>
                        </td>
                        <td>
                            <input type="date" name="date_of_birth" value="<?= $author->getDateOfBirth() ?>">
                        </td>
                        <td>
                            <textarea type="text"  name="about_author" required><?= $author->getAboutAuthor() ?></textarea>
                        </td>
                        <td>
                            <input type="varchar(255)" name="loginn" value="<?= $author->getLoginn() ?>" required>
                        </td>
                        <td>
                            <input type="varchar(255)" name="pass" value="<?= $author->getPass() ?>" required>
                        </td>
                        <td>
                            <input type="hidden" name="dispatch" value="red_author">
                            <input type="hidden" name="id" value="<?= $_REQUEST['id']; ?>">
                            <input type="hidden" name="update" value="author">
                            <button type="submit">Изменить автора</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="article_bottom">
            <a class="button" href="?dispatch=red_authors">Назад</a>
        </div>
    </div>
</div> 
