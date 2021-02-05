<?php
    require('classUser.php');
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
        
        public function getUser() {
        
            return $this->_user;
        }
        
        public function getContenu() {
        
            return $this->_contenu;
        }
        
        public function getDate() {
        
            return $this->_date;
        }
        
        public function getIdtweet() {
        
            return $this->_idtweet;
        }
        
        public function getNumberLikes(){
            return $this->_nbLikes;
        }
        
        /*----------------
            Method Set
        -----------------*/
        
        public function setIdTweet($newIdTweet)
        {
            $this->_idtweet = $newIdTweet;
        }

        public function setUser($newUser) 
        {
            $this->_user = $newUser;
        }
        
        public function setContenu($newContenu) 
        {
            $this->_contenu = $newContenu;
        }
        
        public function setDate($newDate) 
        {
            $this->_date = $newDate;
        }
        
        /* --------------------------
            Methode init & create
        ----------------------------*/
        
        public function init(){
            $rawData = $this->_bdd->prepare("SELECT * from `tweet` WHERE `id_tweet` = ".$this->_idtweet ); //Requete qui affiche les dernier tweet
            $rawData->execute(array($this->_contenu, $this->_date));
            $tweetExist = $rawData->rowCount();
            if($tweetExist == 1){ //Test si la requête renvoie un résultat
                $userData = $rawData->fetch();
                $this->_user = new user($this->_bdd);
                $this->_user->setIdUser($userData['id_user']);
                $this->_user->initId();
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

        public function create(){
            if($this->_contenu != NULL && $this->_user->getIdUser() != NULL){
                $requeteCreation = $this->_bdd->query("INSERT INTO `tweet`(`id_tweet`, `contenu`, `id_user`, `date`) VALUES (NULL,'".$this->_contenu."','".$this->_user->getIdUser()."',CURRENT_TIMESTAMP)");
                return true;
            } else {
                return false;
            }
        }

        /*-----------------
            Methode Like
        -------------------*/

        public function like($stranger){
            $this->_bdd->query("INSERT INTO `like` (`id_like`,`id_user`,`id_tweet`) VALUES (NULL, '".$stranger->getIdUser()."','".$this->_idtweet."')");
        }
    }
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    



?>