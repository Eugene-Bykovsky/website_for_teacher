<?
$title_first = $title_second = 'Авторы';
require 'templates/index/header.php';
?>

<div class="container">

<? 
$authors = Author::getAll();
foreach ($authors as $author) {
    require 'templates/index/authors_block.php';
} 
?>
</div>

<? require 'templates/index/footer.php'?>