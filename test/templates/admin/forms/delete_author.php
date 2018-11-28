<div class="container">
    <div class="col-12">
        <div class="redaction">
            <form action="admin.php" method="POST">
                <table class="del">
                    <tr>
                        <td>Подтверждение</td>
                    </tr>
                    <tr>
                        <td>
                            <img width="175" height="175" src="images/authors/<?= $author->getImage() ?>">
                        </td>
                    </tr>
                    <tr>
                        <td> Вы действительно хотите удалить автора "<?= $author->getName() ?>"? </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="hidden" name="dispatch" value="red_author">
                            <input type="hidden" name="id" value="<?= $_REQUEST['id']; ?>">
                            <input type="hidden" name="delete" value="author">
                            <button type="submit">Удалить</button>
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