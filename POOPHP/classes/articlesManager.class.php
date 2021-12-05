<?php

class articlesManager{

    public $bdd;
    public $_result;
    public $_message;
    public $_articles;
    public $_getLastInsertId;

    public function __construct(PDO $bdd){

        $this->setBdd($bdd);

    }

    function getBdd() {
        return $this->bdd;
    }
    
    function get_result(){
        return $this->_result;
    }
    
    function get_message(){
        return $this->_message;
    }
    
    function get_articles(){
        return $this->_articles;
    }
    
    function get_getLastInsertId(){
        return $this->_getLastInsertId;
    }
    
    function setBdd($bdd){
        $this->bdd = $bdd;    
    }
    
    function set_result($_result){
        $this->_result = $_result;    
    }
    
    function set_message($_message){
        $this->_message = $_message;    
    }
    
    function set_articles($_articles){
        $this->_articles = $_articles;    
    }
    
    function set_getLastInsertId($_getLastInsertId){
        $this->_getLastInsertId = $_getLastInsertId;    
    }




    public function getArticlesById($ID){

        $sql = 'SELECT * FROM articles WHERE ID = :ID';
        $req = $this->bdd->prepare($sql);

        $req->bindvalue(':ID',$ID, PDO::PARAM_INT);
        $req->execute();

        $donnees = $req->fetch(PDO::FETCH_ASSOC);
        $articles = new articles();
        $articles->hydrate($donnees);

        return $articles;

    }

    public function getListArticles(){

        $listArticles = [];

        $sql = 'SELECT * FROM articles';
        $req = $this->bdd->prepare($sql);
        $req->execute();

        while($donnees = $req->fetch(PDO::FETCH_ASSOC)){

            $articles = new articles();
            $articles->hydrate($donnees);
            $listArticles[] = $articles;
        }
        return $listArticles;
    }


}