<?php 

class user {

    private $_idUser;
    private $_identifiant;
    private $_pseudo;
    private $_birthdate;
    private $_;
    private $_password;
    
    function __construct($bdd, $email, $mdp) {
    
        $data = $bdd->query("SELECT * from user where email = '".$email."' && mdp = '".$mdp."'");
        $tabData = $data->fetch();
        
        $this->_idUser = $tabData['id_user'];
        $this->_nom = $tabData['nom'];
        $this->_prenom = $tabData['prenom'];
        $this->_email = $tabData['email'];
        $this->_telephone = $tabData['telephone'];
        $this->mdp = $tabData['mdp'];
    }
    
    
    /* --------------
        Method Get
    --------------*/
    
    public function GetIdUser() {
    
        return $this->_idUser;
    }
    
    public function GetIdentifiant() {
    
        return $this->_nom;
    }
    
    public function GetPseudo() {
    
        return $this->_prenom;
    }
    
    public function GetBirthdate() {
    
        return $this->_email;
    }
    
    public function GetPassword() {
    
        return $this->_telephone;
    }
    
    public function GetMdp() {
    
        return $this->_mdp;
    }
    
    
    /* --------------
        Method Set
    --------------*/
    
    public function setIdUser($newIdUser) 
    {
        $this->_idUser = $newIdUser;
    }
    
    public function setNom($newNom) 
    {
        $this->_nom = $newNom;
    }
    
    public function setPrenom($newPrenom) 
    {
        $this->_prenom = $newPrenom;
    }
    
    public function setEmail($newEmail) 
    {
        $this->_email = $newEmail;
    }
    
    public function setTelephone($newTelephone) 
    {
        $this->_telephone = $newTelephone;
    }
    
    public function setMdp($newMdp) 
    {
        $this->_mdp = $newMdp;
    }
    
    
    }

} 