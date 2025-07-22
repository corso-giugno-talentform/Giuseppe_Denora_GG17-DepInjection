<?php
require'classRobot.php';

class Robot{

    public $name;
    public $mani;
    public $piedi;
    public $testa;

    public function __construct(string $name, ArtiSuperiori $mani,ArtiInferiori $piedi,Testa $testa){
        $this->name=$name;
        $this->mani=$mani;
        $this->piedi=$piedi;
        $this->testa=$testa;
    }

     public function usaLaParteSuperiore(){  
        echo "il robot con nome: ". $this->name ." ha attivo lo stato:". $this->mani->muoviLeBraccia() ."\n";
     }

     public function usaLaParteInferiore(){
        echo "il robot con nome: ". $this->name ." ha attivo lo stato:". $this->piedi->muoviLeGambe()."\n";
     }
     public function usaLaTesta(){
        echo "il robot con nome: ". $this->name ." ha attivo lo stato:". $this->testa->muoviLaTesta()."\n";
     }
}




$tesla1=new Robot('topolino ', new Afferra(), new Cammina() ,new RuotaDx()); 


$tesla2=new Robot("pluto" , new Spingi(), new Corri(), new RuotaDx());
$tesla3=new Robot("paperino" , new Afferra(), new Salta(), new RuotaDx());
$tesla4=new Robot("qui" , new Spingi(), new Cammina(), new RuotaSx());
$tesla5=new Robot("quo" , new Afferra(), new Corri(), new RuotaDx());

$robots=[$tesla1,$tesla2,$tesla3,$tesla4,$tesla5];

foreach ($robots as $robot){
    $robot->usaLaParteSuperiore();
$robot->usaLaParteInferiore(); 
$robot->usaLaTesta();
echo "********************* \n";
;}
