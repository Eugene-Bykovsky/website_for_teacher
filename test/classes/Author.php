<?php

class Author
{
    private $author_id;
    private $name;
    private $last_name;
    private $image;
    private $date_of_birth;
    private $about_author;
    private $role;
    
    //Создание автора
    public static function create($name, $lastname, $image, $birth, $about, $loginn, $pass)
    {
        global $mysqli;
        $query = "INSERT INTO authors SET 
                    name='$name',
                    last_name='$lastname',
                    image='$image',
                    date_of_birth='$birth',
                    about_author='$about',
                    loginn='$loginn',
                    pass='$pass',
                    role=2";
    
        $result = mysqli_query($mysqli, $query);
        return $result;
    }

    //Изменение автора
    public function update($name, $lastname, $birth, $about, $loginn, $pass, $author_id) 
    {
        global $mysqli;
        $query = "UPDATE authors SET 
                    name='$name',
                    last_name='$lastname',
                    image='images/authors/avatar2.jpg',
                    date_of_birth='$birth',
                    about_author='$about',
                    loginn='$loginn',
                    pass='$pass',
                    role=2
                    WHERE author_id=$author_id";
    
        $result = mysqli_query($mysqli, $query);
        return $result;
    }

    //Удаление автора
    public function delete($author_id) 
    {
        global $mysqli;
        $query = "DELETE FROM authors WHERE author_id=$author_id";
    
        $result = mysqli_query($mysqli, $query);
        return $result;
    }

    //Выбрать автора
    public function __construct($author_id)
    {
        global $mysqli;

        $query = "SELECT * FROM authors WHERE author_id=$author_id";
        $result = mysqli_query($mysqli, $query);
        $data = mysqli_fetch_assoc($result);

        $this->author_id = $data['author_id'];
        $this->name = $data['name'];
        $this->last_name = $data['last_name'];
        $this->image = $data['image'];
        $this->date_of_birth = $data['date_of_birth'];
        $this->about_author = $data['about_author'];
        $this->loginn = $data['loginn'];
        $this->pass = $data['pass'];
        $this->role = $data['role'];
    }

    //Перевод свойств из private->public для отображения на странице
    public function getName(){return $this->name;}
    public function getLastName(){return $this->last_name;}
    public function getFullName(){return $this->name . ' ' . $this->last_name;}
    public function getAuthorId(){return $this->author_id;}
    public function getImage(){return $this->image;}
    public function getDateOfBirth(){return $this->date_of_birth;}
    public function getAboutAuthor(){return $this->about_author;}
    public function getLoginn(){return $this->loginn;}
    public function getPass(){return $this->pass;}

    //Получить всех авторов
    public static function getAll()
    {
        global $mysqli;

        $query = "SELECT author_id FROM authors";
        $result = mysqli_query($mysqli, $query);
        $authors_data = mysqli_fetch_all($result, MYSQLI_ASSOC);

        $authors = [];
        foreach ($authors_data as $author_data) {
            $authors[] = new self($author_data['author_id']);
        }

        return $authors;
    }

    //Логические

    public function isAdmin()
    {
        if ($this->role == 1) {
            return true;
        } else {
            return false;
        }
    }

    public static function getLoginAndPass($login, $pass)
    {
        global $mysqli;

        $query = "SELECT loginn, pass FROM authors WHERE loginn='$login' &&  pass='$pass'";
        $result = mysqli_query($mysqli, $query);
        $logpass = mysqli_fetch_assoc($result);
    
        return $logpass;
    }

    public static function getRole($login, $pass) 
    {
        global $mysqli;
    
        $query = "SELECT role FROM authors WHERE loginn='$login' &&  pass='$pass'";
        $result = mysqli_query($mysqli, $query);
        $role = mysqli_fetch_array($result);
    
        return $role[0];
    }
}