<form class="sort" action="index.php" method="GET">
    Сортировка:
    <select name="sort">
        <option value="1" <?= ($sort == 1 ? 'selected' : '') ?>>Самые последние</option>    
        <option value="2" <?= ($sort == 2 ? 'selected' : '') ?>>По дате добавления</option>
        <option value="3" <?= ($sort == 3 ? 'selected' : '') ?>>По алфавиту</option>
    </select>
    Тип статей:
    <select name="type">
        <option value="1" <?= ($type == 1 ? 'selected' : '') ?>>Все статьи</option>
        <option value="2" <?= ($type == 2 ? 'selected' : '') ?>>Новости</option>
        <option value="3" <?= ($type == 3 ? 'selected' : '') ?>>Блог</option>
    </select>   
    <input type="hidden" name="dispatch" value="articles">
    <button type="submit">Сортировать</button>
</form>