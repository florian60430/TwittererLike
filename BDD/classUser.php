<?php 

class user {

    private $_idUser;
    private $_identifiant;
    private $_pseudo;
    private $_birthdate;
    private $_password;
    
    function __construct($bdd, $identifiant, $password) {
    
        $data = $bdd->query("SELECT * from user where email = '".$identifiant."' && mdp = '".$password."'");
        $tabData = $data->fetch();
        
        $this->_idUser = $tabData['id_user'];
        $this->_identifiant = $tabData['identifiant'];
        $this->_pseudo = $tabData['pseudo'];
        $this->_birthdate = $tabData['birthdate'];
        $this->_password = $tabData['password'];
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
    
}

 