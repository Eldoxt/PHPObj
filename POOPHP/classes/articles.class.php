<?php

class articles{

    public $ID;
    public $TITRE;
    public $TEXTE;
    public $DATE;
    public $PUBLIE;

    function getID(){
        return $this->ID;
    }

    function setID($ID){
        $this->ID=$ID;
    }

    function getTITRE(){
        return $this->TITRE;
    }

    function setTITRE($TITRE){
        $this->TITRE=$TITRE;
    }
    function getTEXTE(){
        return $this->TEXTE;
    }

    function setTEXTE($TEXTE){
        $this->TEXTE=$TEXTE;
    }
    function getDATE(){
        return $this->DATE;
    }

    function setDATE($DATE){
        $this->DATE=$DATE;
    }
    function getPUBLIE(){
        return $this->PUBLIE;
    }

    function setPUBLIE($PUBLIE){
        $this->PUBLIE=$PUBLIE;
    }


    
    public function hydrate($donnees){


        if (isset($donnees['ID'])){
            $this->ID = $donnees['ID'];
    
        }
        else{
            $this->ID = '';
        }
    
    
        if (isset($donnees['TITRE'])){
            $this->TITRE = $donnees['TITRE'];
    
        }
        else{
            $this->TITRE = '';
        }
    
    
        if (isset($donnees['TEXTE'])){
            $this->TEXTE = $donnees['TEXTE'];
    
        }
        else{
            $this->TEXTE = '';
        }
    
    
        if (isset($donnees['DATE'])){
            $this->DATE = $donnees['DATE'];
    
        }
        else{
            $this->DATE = '';
        }
    
    
        if (isset($donnees['PUBLIE'])){
            $this->PUBLIE = $donnees['PUBLIE'];
    
        }
        else{
            $this->PUBLIE = 0;
        }

    }
}