<?php
require'classPost.php';

/* Importando la classe appena creata, realizzare un nuovo file index.php in cui inserire un oggetto Post (definire la classe dentro index.php) con i seguenti attributi:

Post

--Titolo
--Categoria
--Tag

$newPost = new Post(?, ?, ?);

var_dump($newPost);
E iniettare la dipendenza Categoria all’interno dell’attributo Categoria. */

class Post {
    private $title;
    private $category;
    private $tag;

    public function __construct (string $title, Category $category, string $tag){
        $this->title=$title;
        $this->category=$category;
        $this->tag=$tag;

    }
    public function getTitle(){
        return $this->title;

    }
    public function setTitle($value){
        return $this->title=$value;

    }

    public function getCategory(){
        return $this->category;
    }
    public function setCategory($value){
        return $this->category=$value;
    }

     public function getTag(){
        return $this->tag;

    }
    public function setTag($value){
        return $this->tag=$value;

    }

    public function getInfo(){

        echo "il post ". $this->getTitle() ." appartiene alla categoria " .$this->category->getMyCategory() ."  ed ha il tag " .$this->getTag() . "\n";
    }
}

//utilizzo 
$newPost1= new Post ("TRUMP", new News("politica americana"), "politica");
$newPost1->getInfo();

$newPost2= new Post("Italia ai mondiali", new Sport("nazionale italiana"), "calcio");
$newPost2->getInfo();
