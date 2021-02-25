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
        
        if(preg_match('#^[a-zA-Z0-9]*$#', $_POST['identifiant']))
        {
          if(preg_match('#^[a-zA-Z0-9!:;,?()%@+-_*/=]*$#', $_POST['password'])) 
            {     
                $verifRequest = $this->_bdd->query("INSERT INTO `user`(`id_user`, `identifiant`, `pseudo`, `password`, `birthdate`, `bio`) VALUES (NULL,'".$identifiant."','".$pseudo."','".$password."','".$birthdate."', ' ')");
                    // Manque sécurité, on peut aujouter 2x le meme user
                if ($verifRequest)
                {
                 return true;
            
                } else {
                return false;
                }
            } 
          else { 
            echo "Le mot de passe n'est pas correct"; 
            return false;
          }  
        }else{
            echo "L'identifiant n'est pas correct \n"; 
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

    /*------------------
        Methode follow
    -------------------*/

    public function follow($id_stranger,$id_user){ // Probleme voir journal test ou trello
       
        $rawData = $this->_bdd->query("INSERT INTO `follow`(`id_follow`, `id_follower`, `id_followed`) VALUES (0,".$id_user.",".$id_stranger.")");

        if($rawData == NULL) 
        {
           
            return false;
           

        }else{
            
            return true;
            
        }

    }

    /*------------------
        Methode Voirfollow
    -------------------*/

    public function Abonnement($id_user){
       
        //Permet de voir qui on follow
        $rawData = $this->_bdd->query("SELECT `identifiant` FROM `user`, `follow` WHERE follow.id_followed = user.id_user AND follow.id_follower = ".$id_user.")");

        if($rawData == NULL)
        {
            return false;
            
        }else{

            return true;
        }
    }

    public function followers($id_user){
       
        //Permet de voir qui nous suit
        $rawData = $this->_bdd->query("SELECT `identifiant` FROM `user`, `follow` WHERE follow.id_follower = user.id_user AND follow.id_followed = ".$id_user.")");
        
        if($rawData == NULL)
        {
            return false;
            
        }else{

            return true;
        }
    }








}

 