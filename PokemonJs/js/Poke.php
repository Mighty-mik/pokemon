<?php

ini_set('display_errors', 'On');
error_reporting(-1);


class Pok {
    
    protected $name;
    protected $vie;
    protected $attaque;
    protected $xp;

    private $avatar;

    public function __construct($name = 'Pikachu', $vie ='life', $attaque = 'vive_attaque', $xp ='health', $avatar = 'img/placeholder.png')
    {
        $this->nom = $name;
        $this->vie = $vie;
        $this->attaque = $attaque;   
        $this->xp = $xp;   
        $this->avatar = $avatar;  
    }

    public function getName(){
        return $this->name;
    }


    public function setVie($vie){
        $this->vie = $vie;
    }

    public function getVie(){
        return $this->vie;
    }
    
    public function getAttaque(){
        return $this->attaque;
    }

    public function getXp(){
        return $this->xp;
    }

    public function getAvatar(){
        return $this->avatar;
    }


    public function mort(){
        if($this->vie <= 0) {
            echo $this->nom , ' Ko.<br>';
        }
        else {
            echo $this->nom , ' survivor.<br>';
        }
    }
}


