<?php
//esercito tesla robot da implementare in indexTesla.php
abstract class ArtiSuperiori
{

    abstract public function muoviLeBraccia();
}
abstract class ArtiInferiori
{

    abstract public function muoviLeGambe();
}
abstract class Testa{
    abstract public function muoviLaTesta();
}


class Cammina extends ArtiInferiori{
    public function muoviLeGambe(){
       return "cammina";
    }
}

class Corri extends ArtiInferiori{
    public function muoviLeGambe(){
        return "corre";
    }
}
class Salta extends ArtiInferiori{
    public function muoviLeGambe(){
        return "Salta";
    }
}

class Afferra extends ArtiSuperiori{
    public function muoviLeBraccia()
    {
        return "afferra oggetto";
    }
}

class Spingi extends ArtiSuperiori{
    public function muoviLeBraccia(){
        return "spinge oggetto";
    }
}

class RuotaDx extends Testa{
    public function muoviLaTesta(){
        return "ruota la testa a destra";
    }
}

class RuotaSX extends Testa{
    public function muoviLaTesta(){
        return "ruota la testa a sinistra";
    }
}