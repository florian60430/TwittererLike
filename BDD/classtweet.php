<?php
    class tweet 
    {
        private $_idtweet;
        private $_tweetcontenu;
        private $_date;
        private $_idUser;
    
    
        function __construct($bdd) {
            $this->_bdd = $bdd;
        }
    


        public function init(){
            $rawData = $this->_bdd->prepare("SELECT * from 'tweet' WHERE id_tweet = ".$this->_idtweet ); //Requete qui affiche les dernier tweet
            $rawData->execute(array($this->_tweetcontenu, $this->_date));
            $userExist = $rawData->rowCount();
            if($userExist == 1){ //Test si la requête renvoie un résultat
                $userData = $rawData->fetch();
                $this->_idUser = $userData['id_user'];
                $this->_tweetcontenu = $userData['tweetcontenu'];
                $this->_date = $userData['date'];
                $this->_idtweet = $userData['id_tweet'];
         
            }
        }
        
       
/* --------------
        Method Get
    --------------*/
    
    public function GetIdUser() {
    
        return $this->_idUser;
    }
    
    public function GetTweetcontenu() {
    
        return $this->__tweetcontenu;
    }
    
    public function GetDate() {
    
        return $this->_date;
    }
    
    public function GetIdtweet() {
    
        return $this->_idtweet;
    }
    
    
     /* --------------
        Method Set
    --------------*/
    
    public function setIdUser($newIdUser) 
    {
        $this->_idUser = $newIdUser;
    }
    
    public function setTweetContenu($newTweetcontenu) 
    {
        $this->_contenu = $newTweetcontenu;
    }
    
    public function setDate($newDate) 
    {
        $this->_date = $newDate;
    }
    
    public function setIdtweet($newIdtweet) 
    {
        $this->_idtweet= $newIdtweet;
    }


    }
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    }



?>