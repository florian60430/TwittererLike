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
    ----------------*/
    
    public function getIdUser() {
    
        return $this->_idUser;
    }
    
    public function getIdentifiant() {
    
        return $this->_identifiant;
    }
    
    public function getPseudo() {
    
        return $this->_pseudo;
    }
    
    public function getBirthdate() {
    
        return $this->_birthdate;
    }
    
    public function getPassword() {
    
        return $this->_password;
    }

    public function getBio() {
    
        return $this->_bio;
    }
    
    /* --------------
        Method Set
    --------------*/

    public function setIdUser($newIdUser) 
    {
        return $this->_idUser = $newIdUser;
    }
    
    public function setIdentifiant($newIdentifiant) 
    {
        return $this->_identifiant = $newIdentifiant;
    }
    
    public function setPseudo($newPseudo) 
    {
        return $this->_pseudo = $newPseudo;
    }
    
    public function setBirthdate($newBirthdate) 
    {
        return $this->_birthdate = $newBirthdate;
    }
    
    public function setPassword($newPassword) 
    {
        return $this->_password = $newPassword;
    }
    
    public function setBio($newBio) 
    {
        return $this->_bio = $newBio;
    }

    /* --------------------------
        Methode init & create
    ----------------------------*/

    public function connexion($identifiant, $password){
        $rawData = $this->_bdd->query("SELECT * FROM user WHERE identifiant = '".$identifiant."' AND password = '".$password."'"); //Requete qui sélectionne l'utilisateur par son identifiant et son mot de passe
        $userExist = $rawData->rowCount();
        if($userExist == 1){ //Test si la requête renvoie un résultat
            $userData = $rawData->fetch();
            $this->_idUser = $userData['id_user'];
            $this->_identifiant = $userData['identifiant'];
            $this->_pseudo = $userData['pseudo'];
            $this->_birthdate = $userData['birthdate'];
            $this->_password = $userData['password'];      
            $this->_bio = $userData['bio'];      
            return true;
        } else {
            return false;
        }
    }

    /*----------------------
     Methode Init par IdUser
    -----------------------*/

    public function initId($idUser){
        $rawData = $this->_bdd->query("SELECT * FROM user WHERE `id_user` = ".$idUser.""); //Requete qui sélectionne l'utilisateur par son identifiant et son mot de passe
        $userExist = $rawData->rowCount();
        if($userExist == 1){ //Test si la requête renvoie un résultat
            $userData = $rawData->fetch();
            $this->_idUser = $userData['id_user'];
            $this->_identifiant = $userData['identifiant'];
            $this->_pseudo = $userData['pseudo'];
            $this->_birthdate = $userData['birthdate'];
            $this->_password = $userData['password'];      
            $this->_bio = $userData['bio'];      
            return true;
        } else {
            return false;
        }
    }

    /*----------------------
      Methode inscription
    ----------------------*/

    public function inscription($identifiant, $pseudo, $password, $birthdate){
            
        $verifRequest = $this->_bdd->query("INSERT INTO `user`(`id_user`, `identifiant`, `pseudo`, `password`, `birthdate`, `bio`) VALUES (NULL,'".$identifiant."','".$pseudo."','".$password."','".$birthdate."', ' ')");
        // Manque sécurité, on peut aujouter 2x le meme user
        if ($verifRequest)
        {
            return true;
        
        } else {
        
            return false;
        }
    }

    /*------------------
        Methode modif
    -------------------*/

    public function modif(){
            // Probléme modif 
        $verifRequest = $this->_bdd->query("UPDATE `user` SET `identifiant`='".$this->_identifiant."',`pseudo`='".$this->_pseudo."',`password`='".$this->_password."',`birthdate`='".$this->_birthdate."',`bio`='".$this->_bio."' WHERE 'id_user' = '".$this->_idUser."'");
        if ($verifRequest)
        {     
            return true;
        
        } else {
            
            return false;
        }
    }
}

 