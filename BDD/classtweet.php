<?php
    
    class tweet 
    {
        private $_idtweet;
        private $_contenu;
        private $_date;
        private $_user;
        private $_nbLikes;
        private $_bdd;
    
        function __construct($bdd) {
            $this->_bdd = $bdd;
        }
       
        /*----------------
            Method Get
        ----------------*/
        
        public function getIdtweet() {
        
            return $this->_idtweet;
        }

        public function getContenu() {
        
            return $this->_contenu;
        }
        
        public function getDate() {
        
            return $this->_date;
        }
        
        public function getUser() {
        
            return $this->_user;
        }
        
        public function getNumberLikes(){
            return $this->_nbLikes;
        }
        
        /*----------------
            Method Set
        -----------------*/
        
        public function setIdTweet($newIdTweet)
        {
           return $this->_idtweet = $newIdTweet;
        }

        public function setUser($newUser) 
        {
            return $this->_user = $newUser;
        }
        
        public function setContenu($newContenu) 
        {
            return $this->_contenu = $newContenu;
        }
        
        public function setDate($newDate) 
        {
            return $this->_date = $newDate;
        }
        
        /* ---------------
            Methode Init
        ----------------*/
        
        public function init(){
            $rawData = $this->_bdd->prepare("SELECT * from `tweet` WHERE `id_tweet` = ?"); //Requete qui affiche les dernier tweet
            $rawData->execute(array($this->_idtweet));
            $tweetExist = $rawData->rowCount();
            if($tweetExist == 1){ //Test si la requête renvoie un résultat
                $userData = $rawData->fetch();
                $this->_user = new user($this->_bdd);
                $this->_user->initId($userData['id_user']);
                $this->_contenu = $userData['contenu'];
                $this->_date = $userData['date'];
                $this->_idtweet = $userData['id_tweet'];

                $requeteCount = $this->_bdd->query("SELECT COUNT(*) FROM `like` WHERE `id_tweet` = ".$this->_idtweet);
                $nbLikes = $requeteCount->fetch();
                $this->_nbLikes = $nbLikes[0];

                return true;
            } else {
                return false;
            }
        }

        /*---------------------
           Methode PosterTweet
        ----------------------*/

        public function posterTweet(){
            if($this->_contenu != NULL && $this->_user->getIdUser() != NULL){
                $requeteCreation = $this->_bdd->query("INSERT INTO `tweet`(`id_tweet`, `contenu`, `id_user`, `date`) VALUES (NULL,'".$this->_contenu."','".$this->_user->getIdUser()."',CURRENT_TIMESTAMP)");
                return true;
            } else {
                return false;
            }
        }

        /*------------------
            Methode Like
        -------------------*/

        public function like($stranger){
            $rawData = $this->_bdd->query("SELECT COUNT(*) from `like` WHERE `id_tweet` = ".$this->_idtweet." AND `id_user` = " .$stranger->getIdUser());
            $likeExist = $rawData->fetch();
            if($likeExist[0] >= 1){
                $this->_bdd->query("DELETE FROM `like` WHERE `id_tweet` = ".$this->_idtweet." AND `id_user` = " .$stranger->getIdUser());
            }else{
                $this->_bdd->query("INSERT INTO `like` (`id_like`,`id_user`,`id_tweet`) VALUES (NULL, '".$stranger->getIdUser()."','".$this->_idtweet."')");
            }
        }
    }
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    



?>