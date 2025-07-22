<?php
abstract class Category {
    protected $nameCategory;

    public function __construct($nameCategory) {
        $this->nameCategory = $nameCategory;
    }

    abstract public function getMyCategory();
}

/* class News extends Category{

   public $nameCategory;
  
   public function __construct($nameCategory){
    $this->nameCategory=$nameCategory;
   }

    public function getMyCategory(){
        return $this->nameCategory;
       
        

    }

//metto il costruct nel abstract cosi non devo ripeterlo per i figli
//e nei figli implemento solo il getMyCategory

} */

class News extends Category {
    public function getMyCategory() {
        return $this->nameCategory;
    }
}

class Sport extends Category {
    public function getMyCategory() {
        return $this->nameCategory;
    }
}

class Gossip extends Category {
    public function getMyCategory() {
        return $this->nameCategory;
    }
}

class History extends Category {
    public function getMyCategory() {
        return $this->nameCategory;
    }
}