<?php

    class commentaire{
        private $_idCommentaire;
        private $_contenu;
        private $_user;
        private $_tweetARepondre;
        private $_commentaireARepondre;
        private $_bdd;
        private $_nbLikes;
        private $_nbCommentaires;

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

        public function getNumberCommentaires(){
            return $this->_nbCommentaires;
        }

        public function getTweetARepondre(){
            return $this->_tweetARepondre;
        }

        public function getCommentaireARepondre(){
            return $this->_commentaireARepondre;
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

        public function setTweetARepondre($newTweetARepondre){
            $this->_tweetARepondre = $newTweetARepondre;
        }

        public function setCommentaireARepondre($newCommentaireARepondre){
            $this->_commentaireARepondre = $newCommentaireARepondre;
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

                $this->_tweetARepondre = new tweet($this->_bdd);
                $this->_tweetARepondre->init($commentaireData['id_tweet']);

                $this->_commentaireARepondre = new commentaire($this->_bdd);
                $this->_commentaireARepondre->init($commentaireData['id_commente']);

                $this->_contenu = $commentaireData['contenu'];
                $this->_date = $commentaireData['date'];
                $this->_idCommentaire = $commentaireData['id_commentaire'];

                $requeteCount = $this->_bdd->query("SELECT COUNT(*) FROM `like` WHERE `id_commentaire` = ".$this->_idCommentaire);
                $nbLikes = $requeteCount->fetch();
                $this->_nbLikes = $nbLikes["COUNT(*)"];
                
                $requeteCountCom = $this->_bdd->query("SELECT COUNT(*) FROM `commentaire` WHERE `id_tweet` = ".$this->_idtweet);
                $nbCommentaires = $requeteCountCom->fetch();
                $this->_nbCommentaires = $nbCommentaires["COUNT(*)"];

                return true;
            } else {
                return false;
            }
        }

        /*---------------------
           Methode Commenter
        ----------------------*/

        public function commenterTweet(){
            if($this->_contenu != NULL && $this->_user->getIdUser() != NULL && $this->_tweetARepondre->getIdtweet() != NULL){
               $this->_bdd->query("INSERT INTO `commentaire`(`id_commentaire`, `contenu`, `id_user`, `id_tweet`, `id_commente`, `date`) VALUES (NULL,'".$this->_contenu."','".$this->_user->getIdUser()."', '".$this->_tweetARepondre->getIdtweet()."',NULL,CURRENT_TIMESTAMP)");
                return true;
            } else {
                return false;
            }
        }

        public function commenterCommentaire(){
            if($this->_contenu != NULL && $this->_user->getIdUser() != NULL && $this->_commentaireARepondre->getIdCommentaire() != NULL){
               $this->_bdd->query("INSERT INTO `commentaire`(`id_commentaire`, `contenu`, `id_user`, `id_tweet`, `id_commente`, `date`) VALUES (NULL,'".$this->_contenu."','".$this->_user->getIdUser()."', NULL,'".$this->_commentaireARepondre->getIdCommentaire()."',CURRENT_TIMESTAMP)");
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