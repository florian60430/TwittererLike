<?php
    
    class tweet 
    {
        private $_idtweet;
        private $_contenu;
        private $_date;
        private $_user;
        private $_nbLikes;
        private $_bdd;
        private $_nbCommentaires;
        private $_tweetARepondre;
    
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

        public function getNumberCommentaires(){
            return $this->_nbCommentaires;
        }

        public function getTweetARepondre(){
            return $this->_tweetARepondre;
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
        
        public function setTweetARepondre($newTweetARepondre) 
        {
            return $this->_tweetARepondre = $newTweetARepondre;
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
        
        public function init($idTweet){
            
            $rawData = $this->_bdd->prepare("SELECT * from `tweet` WHERE `id_tweet` = ?"); //Requete qui affiche les dernier tweet
            $rawData->execute(array($idTweet));
            $tweetExist = $rawData->rowCount();
            if($tweetExist == 1){ //Test si la requête renvoie un résultat
                $userData = $rawData->fetch();
                $this->_user = new user($this->_bdd);
                $this->_user->initId($userData['id_user']);

                $this->_tweetARepondre = new tweet($this->_bdd);
                $this->_tweetARepondre->init($userData['id_tweetARepondre']);

                $this->_contenu = $userData['contenu'];
                $this->_date = $userData['date'];
                $this->_idtweet = $userData['id_tweet'];

                $requeteCount = $this->_bdd->query("SELECT COUNT(*) FROM `like` WHERE `id_tweet` = ".$this->_idtweet);
                $nbLikes = $requeteCount->fetch();
                $this->_nbLikes = $nbLikes["COUNT(*)"];

                $requeteCountCom = $this->_bdd->query("SELECT COUNT(*) FROM `tweet` WHERE `id_tweetARepondre` = ".$this->_idtweet);
                $nbCommentaires = $requeteCountCom->fetch();
                $this->_nbCommentaires = $nbCommentaires["COUNT(*)"];



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
               $this->_bdd->query("INSERT INTO `tweet`(`id_tweet`, `contenu`, `id_user`, `date`, `id_tweetARepondre`) VALUES (NULL,'".$this->_contenu."','".$this->_user->getIdUser()."',CURRENT_TIMESTAMP,NULL)");
                return true;
            } else {
                return false;
            }
        }
        
        public function commenter(){
            if($this->_contenu != NULL && $this->_user->getIdUser() != NULL && $this->_tweetARepondre->getIdtweet() != NULL){
               $this->_bdd->query("INSERT INTO `tweet`(`id_tweet`, `contenu`, `id_user`, `date`, `id_tweetARepondre`) VALUES (NULL,'".$this->_contenu."','".$this->_user->getIdUser()."',CURRENT_TIMESTAMP, '".$this->_tweetARepondre->getIdtweet()."')");
                return true;
            } else {
                return false;
            }
        }

        /*------------------
            Methode Like
        -------------------*/

        public function like($ObjetStranger){
            $rawData = $this->_bdd->query("SELECT COUNT(*) from `like` WHERE `id_tweet` = ".$this->_idtweet." AND `id_user` = " .$ObjetStranger->getIdUser());
            $likeExist = $rawData->fetch();
            if($likeExist["COUNT(*)"] >= 1){
                $this->_bdd->query("DELETE FROM `like` WHERE `id_tweet` = ".$this->_idtweet." AND `id_user` = " .$ObjetStranger->getIdUser());
                $this->_nbLikes -= 1;
            }else{
                $this->_bdd->query("INSERT INTO `like` (`id_like`,`id_user`,`id_tweet`) VALUES (NULL, '".$ObjetStranger->getIdUser()."','".$this->_idtweet."')");
                $this->_nbLikes++;
            }
        }

        /*------------------
            Methode Likers
        -------------------*/

        public function likers($id_tweet){

            $rawData = $this->_bdd->query("SELECT `identifiant` FROM `like`,`user` WHERE user.id_user = like.id_user AND " .$id_tweet);

        }
    }
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    



?>