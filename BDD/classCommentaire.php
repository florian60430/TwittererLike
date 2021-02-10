<?php

    class commentaire{
        private $_idCommentaire;
        private $_contenu;
        private $_user;
        private $_tweet;
        private $_bdd;
        private $_nbLikes;

        public function __construct($bdd)
        {
            $this->_bdd = $bdd;
        }

        /*----------------
            Method Get
        ----------------*/

        public function getIdCommentaire(){
            return $this->_idCommentaire;
        }

        public function getContenu(){
            return $this->_contenu;
        }

        public function getUser(){
            return $this->_user;
        }

        public function getNumberLikes(){
            return $this->_nbLikes;
        }

        public function getTweet(){
            return $this->_tweet;
        }

        /*----------------
            Method Set
        -----------------*/

        public function setIdCommentaire($newIdCommentaire){
            $this->_idCommentaire = $newIdCommentaire;
        }

        public function setContenu($newContenu){
            $this->_contenu = $newContenu;
        }

        public function setUser($newUser){
            $this->_user = $newUser;
        }

        public function setTweet($newTweet){
            $this->_tweet = $newTweet;
        }
        
        /* -----------------
            Methode Init
        -------------------*/

        public function init($idCommentaire){
            $rawData = $this->_bdd->query("SELECT * from `commentaire` WHERE `id_commentaire` = ".$idCommentaire.""); //Requete qui affiche les dernier tweet
            $commentaireExist = $rawData->rowCount();
            if($commentaireExist == 1){ //Test si la requête renvoie un résultat
                $commentaireData = $rawData->fetch();
                $this->_user = new user($this->_bdd);
                $this->_user->initId($commentaireData['id_user']);

                $this->_tweet = new tweet($this->_bdd);
                $this->_tweet->init($commentaireData['id_tweet']);

                $this->_contenu = $commentaireData['contenu'];
                $this->_date = $commentaireData['date'];
                $this->_idCommentaire = $commentaireData['id_commentaire'];

                $requeteCount = $this->_bdd->query("SELECT COUNT(*) FROM `like` WHERE `id_commentaire` = ".$this->_idCommentaire);
                $nbLikes = $requeteCount->fetch();
                $this->_nbLikes = $nbLikes["COUNT(*)"];

                return true;
            } else {
                return false;
            }
        }

        
        /*---------------------
           Methode Commenter
        ----------------------*/

        public function commenter(){
            if($this->_contenu != NULL && $this->_user->getIdUser() != NULL && $this->_tweet->getIdtweet() != NULL){
               $this->_bdd->query("INSERT INTO `commentaire`(`id_commentaire`, `contenu`, `id_user`, `id_tweet`, `date`) VALUES (NULL,'".$this->_contenu."','".$this->_user->getIdUser()."', '".$this->_tweet->getIdtweet()."',CURRENT_TIMESTAMP)");
                return true;
            } else {
                return false;
            }
        }

        /*------------------
            Methode Like
        -------------------*/

        public function like($ObjetStranger){
            $rawData = $this->_bdd->query("SELECT COUNT(*) from `like` WHERE `id_commentaire` = ".$this->_idCommentaire." AND `id_user` = " .$ObjetStranger->getIdUser());
            $likeExist = $rawData->fetch();
            if($likeExist["COUNT(*)"] >= 1){
                $this->_bdd->query("DELETE FROM `like` WHERE `id_commentaire` = ".$this->_idCommentaire." AND `id_user` = " .$ObjetStranger->getIdUser());
                $this->_nbLikes -= 1;
            }else{
                $this->_bdd->query("INSERT INTO `like` (`id_like`,`id_user`,`id_tweet`,`id_commentaire`) VALUES (NULL, '".$ObjetStranger->getIdUser()."', NULL, '".$this->_idCommentaire."')");
                $this->_nbLikes++;
            }
        }
    }

?>