<div class="container">
    <div class="col-12">
        <div class="redaction">
            <p> 
            <? 
            if ($_REQUEST['update']) { 
                if ($_POST['update'] == 'art') {
                    echo 'Статья обновлена!';
                } else {
                    echo 'Информация об авторе изменена!';
                } 
            } else if ($_REQUEST['delete']) { 
                if ($_POST['delete'] == 'art') {
                    echo 'Статья удалена!';
                } else {
                    echo 'Автор удалён!';
                }
            } else {
                if ($_POST['create'] == 'art') {
                    echo 'Создана новая статья!';
                } else {
                    echo 'Добавлен новый автор!';
                }
            } 
            ?>
            </p>
        </div>
        <? if ($_POST['update'] == 'art' || $_POST['delete'] == 'art' || $_POST['create'] == 'art') { ?>
            <div class="bottom_link">
                <a class="button" href="?dispatch=red_articles">Вернуться назад</a>
            </div>
        <? } else { ?>
            <div class="bottom_link">
                <a class="button" href="?dispatch=red_ authors">Вернуться назад</a>
            </div>
        <? } ?>
        
    </div>
</div>
