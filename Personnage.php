<?php 

Class Personnage {

    private $vie = 80;
    private $atk = 20;
    private $nom;

    public function __construct ($nom){
        $this->nom = $nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function setVie($vie){
        $this->vie = $vie;
    }

    public function setAtk($atk){
        $this->atk = $atk;
    }

    public function getNom(){
        echo $this->nom;
    }

    public function getVie(){
        echo $this->vie;
    }

    public function getAtk(){
        echo $this->atk;
    }


    public function regenerer($vie = null) {
        if (is_null($vie)){
            $this->vie = 100;
        } else {
            $this->vie += $vie;
        } 
    }

    public function mort(){
        return $this->vie <= 0;
    }

    private function stopNeg(){
        if ($this->vie < 0){
            $this->vie = 0;
        }
    }
    

    public function attaque($cible){
        $cible->vie -= $this->atk;
        $cible->stopNeg();
    }

}


?>