<?php 

class user {

    private $_bdd;
    private $_idUser;
    private $_identifiant;
    private $_pseudo;
    private $_birthdate;
    private $_password;
    private $_bio;
    
    function __construct($bdd) {
        $this->_bdd = $bdd;
    }
    
    /* --------------
        Method Get
    --------------*/
    
    public function GetIdUser() {
    
        return $this->_idUser;
    }
    
    public function GetIdentifiant() {
    
        return $this->_identifiant;
    }
    
    public function GetPseudo() {
    
        return $this->_pseudo;
    }
    
    public function GetBirthdate() {
    
        return $this->_birthdate;
    }
    
    public function GetPassword() {
    
        return $this->_password;
    }

    public function GetBio() {
    
        return $this->_bio;
    }
    
    /* --------------
        Method Set
    --------------*/
    
    public function setIdUser($newIdUser) 
    {
        $this->_idUser = $newIdUser;
    }
    
    public function setIdentifiant($newIdentifiant) 
    {
        $this->_nom = $newIdentifiant;
    }
    
    public function setPseudo($newPseudo) 
    {
        $this->_prenom = $newPseudo;
    }
    
    public function setBirthdate($newBirthdate) 
    {
        $this->_email = $newBirthdate;
    }
    
    public function setPassword($newPassword) 
    {
        $this->_password = $newPassword;
    }
    
    public function setBio($newBio) 
    {
        $this->_bio = $newBio;
    }

    /* --------------------------
        Methode init & create
    ----------------------------*/

    public function init(){
        $rawData = $this->_bdd->prepare("SELECT * FROM user WHERE identifiant = ? AND password = ?"); //Requete qui sélectionne l'utilisateur par son identifiant et son mot de passe
        $rawData->execute(array($this->_identifiant, $this->_password));
        $userExist = $rawData->rowCount();
        if($userExist == 1){ //Test si la requête renvoie un résultat
            $userData = $rawData->fetch();
            $this->_idUser = $userData['id_user'];
            $this->_identifiant = $userData['identifiant'];
            $this->_pseudo = $userData['pseudo'];
            $this->_birthdate = $userData['birthdate'];
            $this->_password = $userData['password'];      
            $this->_bio = $userData['bio'];      
            return "Succes";
        } else {
            return "Introuvable";
        }
    }

    public function create(){
        if($this->_identifiant != NULL && $this->_pseudo != NULL && $this->_password != NULL && $this->_birthdate != NULL && $this->_bio != NULL){
            $requeteCreation = $this->_bdd->query("INSERT INTO `user`(`id_user`, `identifiant`, `pseudo`, `password`, `birthdate`, `bio`) VALUES (NULL,'".$this->_identifiant."','".$this->_pseudo."','".$this->_password."','".$this->_birthdate."','".$this->_bio."')");
            return "Succes";
        } else {
            return "Champs incomplets";
        }
    }

    /*------------------
        Methode modif
    -------------------*/

    public function modif(){
        if($this->_identifiant != NULL && $this->_pseudo != NULL && $this->_password != NULL && $this->_birthdate != NULL && $this->_bio != NULL){
            $requeteModif = $this->_bdd->query("UPDATE `user` SET `identifiant`='".$this->_identifiant."',`pseudo`='".$this->_pseudo."',`password`='".$this->_password."',`birthdate`='".$this->_birthdate."',`bio`='".$this->_bio."' WHERE 'id_user' = '".$this->_idUser."'");
            return "Succes";
        } else {
            return "Champs incomplets";
        }
    }
}

 