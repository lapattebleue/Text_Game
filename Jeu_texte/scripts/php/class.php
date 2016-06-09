<?php

require _once("connect.php");

class Partie{
    
    private $id_partie,$date_partie;
    public $joueur,$score;
    
    private function __contruct($_id_score,$_date_partie,$_joueur,$_score){
        this->id_partie = $_id_score;
        this->date_partie = $_date_partie;
        this->joueur = $_joueur;
        this->score = $_score;
    }
    
    private function __desctruct(){
        this->"";
    }
    
    public function getId(){
        return $this->id_partie;
    }
    
    public function getDate(){
        return $this->date_partie;
    }
    
    public function getJoueur(){
        return $this->joueur;
    }
    
    public function getScore(){
        return $this->score;
    }
    
    private function setId($_id_partie){
        this->id_partie = $_id_partie;
    }
    
    private function setDate($_date_partie){
        this->date_partie = $_date_partie;
    }
    
    private function setJoueur($_joueur){
        this->joueur = $_joueur;
    }
    
    private function setScore($_score){
        this->score = $_score;
    }
    
    // CODE 
    
    public function calculerScore(){
        
        setScore($score_calcul);
    }
}

class Utilisateur{
    public $pseudo;
    private $email;
    
    private function __contruct($_pseudo,$_email){
        this->pseudo = $_pseudo;
        this->email = $_email;
    }
    
    private function __desctruct(){
        this->"";
    }
    
    public function getPseudo(){
        return $this->pseudo;
    }  
    
    public function getEmail(){
        return $this->email;
    }
    
    public function setPseudo($_nouveauPseudo){
        $this->pseudo = $_nouveauPseudo;
    }
    
    public function setPseudo($_nouveauEmail){
        $this->email = $_nouveauEmail;
    }
    
}

class Mot{
    public $mot,$valeur,$langue;
    
    private function __contruct($_mot,$_valeur,$_langue){
        this->mot = $_mot;
        this->valeur = $_valeur;
        this->langue = $_langue;
    }
    
    private function __desctruct(){
        this->"";
    }
    
    public function getMot(){
        return $this->mot;
    }
    
    public function getValeur(){
        return $this->valeur;
    }
    
    public function getLangue(){
        return $this->langue;
    }
    
    private function setMot($_mot){
        $this->mot = $_mot;
    }
    
    private function setValeur($_valeur){
        $this->valeur = $_valeur;
    }
    
    private function setLangue($_langue){
        $this->langue = $_langue;
    }
    
    private function createMots(){
        $req="select libelle,langue,valeur from mot";
        $query= Connexion::bdd->query($req);
        
        $result= $query->fetch_array();
        while ($result as $ligne){
            $ligne['1']=
            this->__construct();
        }
    }
    
}


?>