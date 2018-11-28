<?php

class Article 
{
    private $article_id;
    private $image;
    private $title;
    private $date;
    private $text;
    private $bigtext;
    private $type;

    //Создание статьи
    public static function create($image, $title, $text, $bigtext, $type)
    {
        global $mysqli;
        $query = "INSERT INTO articles SET 
                    image='$image', 
                    title='$title', 
                    date=NOW(), 
                    text='$text', 
                    bigtext='$bigtext', 
                    type='$type'";

        $result = mysqli_query($mysqli, $query);
        return $result;
    }

    //Изменение статьи
    public function update($title, $text, $bigtext, $type, $article_id) 
    {
        global $mysqli;
        $query = "UPDATE articles SET 
                    image='images/articles/article1.jpg', 
                    title='$title', 
                    date=NOW(), 
                    text='$text', 
                    bigtext='$bigtext', 
                    type='$type'
                    WHERE article_id=$article_id";
    
        $result = mysqli_query($mysqli, $query);
        return $result;
    }

    //Удаление статьи
    public function delete($article_id) 
    {
        global $mysqli;
        $query = "DELETE FROM articles WHERE article_id=$article_id";
    
        $result = mysqli_query($mysqli, $query);
        return $result;
    }

    //Выбрать статью
    public function __construct($article_id)
    {
        global $mysqli;

        $query = "SELECT * FROM articles WHERE article_id=$article_id";
        $result = mysqli_query($mysqli, $query);
        $data = mysqli_fetch_assoc($result);

        $this->article_id = $data['article_id'];
        $this->image = $data['image'];
        $this->title = $data['title'];
        $this->date = $data['date'];
        $this->text = $data['text'];
        $this->bigtext = $data['bigtext'];
        $this->type = $data['type'];
    }

    //Перевод свойств из private->public для отображения на странице
    public function getArticleId(){return $this->article_id;}
    public function getImage(){return $this->image;}
    public function getTitle(){return $this->title;}
    public function getDate(){return $this->date;}
    public function getText(){return $this->text;}
    public function getBigText(){return $this->bigtext;}
    public function getType(){return $this->type;}

    //Получить все статьи
    public static function getAll($sort, $type)
    {
        global $mysqli;

        $order = '';
        $where = '';
    
        switch ($sort) {
            case 1:
                $order = 'ORDER BY date DESC';
                break;
            case 2:
                $order = 'ORDER BY date ASC';
                break;
            case 3:
                $order = 'ORDER BY title ASC';
                break;
        }
    
        switch ($type) {
            case 1:
                $where = '';
                break;
            case 2:
                $where = "WHERE type = 'Новости'";
                break;
            case 3:
                $where = "WHERE type = 'Блог'";
                break;
        }
        
        
        $query = "SELECT article_id FROM articles $where $order"; 
        $result = mysqli_query($mysqli, $query);
        $articles_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        
        $articles = [];
        foreach ($articles_data as $article_data) {
            $articles[] = new self($article_data['article_id']);
        }

        return $articles;
    }
}
