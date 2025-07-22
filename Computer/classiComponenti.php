<?php

/* Creare una classe Computer con Dependency Injection e Object Composition, composto da

RAM (8GB,16GB,32GB,64GB)
Scheda Video (Nvidia 5678, ATI 6789, Integrata)
Processore (Intel, AMD, Apple Silicon) */

///RAM

abstract class Ram{
    abstract public function details();

}

class Ram8GB extends Ram{
    
    public function details(){
        return " ram da 8gb";
    }

}

class Ram16GB extends Ram{
    
    public function details(){
        return " ram da 16gb";
    }

}
class Ram32GB extends Ram{
    
    public function details(){
        return " ram da 32gb";
    }

}
class Ram64GB extends Ram{
    
    public function details(){
      return " ram da 64gb";
    }

}

/////SCHEDA VIDEO

abstract class SchedaVideo{
    abstract public function details();

}

class Nvidia extends SchedaVideo{
    public function details(){
        return " Nvidia 5678 ";
    }
}
class ATI extends SchedaVideo{
    public function details(){
        return " ATI 6789 ";
    }
}
class Integrata extends SchedaVideo{
    public function details(){
        return " Integrata";
    }
}

//processore

abstract class Processore {

    abstract function details();

}

class Intel extends Processore{
    public function details(){
        return " processore Intel";
    }
}
class AMD extends Processore{
    public function details(){
        return" processore AMD";
    }
}
class Apple extends Processore{
    public function details(){
        return " processore Apple silicon";
    }
}