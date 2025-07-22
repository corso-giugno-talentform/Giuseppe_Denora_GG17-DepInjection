<?php
require 'classiComponenti.php';

class Computer {
    private $ram;
    private $schedaVideo;
    private $processore;

    public function __construct (Ram $ram, SchedaVideo $schedaVideo,Processore $processore ){

        $this->ram=$ram;
        $this->schedaVideo=$schedaVideo;
        $this->processore=$processore;
    }

    public function getRam(){
        return "la ram scelta è ".$this->ram->details();
    }
    public function getSchedaVideo(){
        return "la Scheda video  scelta è ".$this->schedaVideo->details();
    }
    public function getProcessore(){
        return "il processore  scelta è ".$this->processore->details();
    }

    public function mostraSpecifiche() {
    echo $this->getRam() . "\n";
    echo $this->getSchedaVideo() . "\n";
    echo $this->getProcessore() . "\n";
}
//metodi  ulteriori
   public function isApple() {
    return $this->processore instanceof Apple;
}
public function checkType(){
    if ($this->isApple()) {
    echo "sistema Apple \n";
} else {
    echo "sistema Non Apple \n";
}

}
   

public function isRam(){
    return ($this->ram instanceof Ram32GB || $this->ram instanceof Ram64GB);
}
public function checkPremium(){
    if($this->isRam()){
        echo "sistema con ram premium \n";
    }else{
        echo "sistema con ram basic \n";
    }
}


}

$computers=[
    new Computer (new Ram8GB(), new Nvidia(), new Intel()),
    new Computer (new Ram32GB(), new Ati(), new Amd()),
    new Computer (new Ram64GB(), new Integrata(), new Intel()),
    new Computer (new Ram64GB(), new Integrata(), new Apple()),
];

foreach($computers as $computer){
    $computer->mostraSpecifiche();
    $computer->checkType();
    $computer->checkPremium();
    echo "************** \n";
    

}

