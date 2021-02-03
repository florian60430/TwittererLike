<?php
    class tweet 
    {
        private $_idtweet;
        private $_contenu;
        private $_date;
        private $_user;
        private $_nbLikes;
    
    
        function __construct($bdd) {
            $this->_bdd = $bdd;
        }
       
        /*----------------
            Method Get
        ----------------*/
        
        public function GetIdUser() {
        
            return $this->_user;
        }
        
        public function GetContenu() {
        
            return $this->__contenu;
        }
        
        public function GetDate() {
        
            return $this->_date;
        }
        
        public function GetIdtweet() {
        
            return $this->_idtweet;
        }
        
        public function GetNumberLikes(){
            return $this->_nbLikes;
        }
        
        /*----------------
            Method Set
        -----------------*/
        
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
            $rawData = $this->_bdd->prepare("SELECT * from 'tweet' WHERE id_tweet = ".$this->_idtweet ); //Requete qui affiche les dernier tweet
            $rawData->execute(array($this->_contenu, $this->_date));
            $tweetExist = $rawData->rowCount();
            if($tweetExist == 1){ //Test si la requête renvoie un résultat
                $userData = $rawData->fetch();
                $this->_user->SetIdUser($userData['id_user']);
                $this->_contenu = $userData['contenu'];
                $this->_date = $userData['date'];
                $this->_idtweet = $userData['id_tweet'];

                $requeteCount = $this->_bdd->query("SELECT COUNT(*) FROM like WHERE 'id_tweet' = ".$this->_idtweet);
                $nbLikes = $requeteCount->fetch();
                $this->_nbLikes = $nbLikes;

                return true;
            } else {
                return false;
            }
        }

        public function create(){
            if($this->_contenu != NULL && $this->_idUser != NULL){
                $requeteCreation = $this->_bdd->query("INSERT INTO `tweet`(`id_tweet`, `contenu`, `id_user`, `date`) VALUES (NULL,'".$this->_contenu."','".$this->_user->GetIdUser()."',CURRENT_TIMESTAMP)");
                return true;
            } else {
                return false;
            }
        }

        /*-----------------
            Methode Like
        -------------------*/

        public function like($stranger){
            $this->_bdd->query("INSERT INTO 'like' ('id_like','id_user','id_tweet') VALUES (NULL, '".$stranger->GetIdUser()."','".$this->_idtweet."')");
        }
    }
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    



?>