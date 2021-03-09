<?php

class tweet
{
    private $_idtweet;
    private $_contenu;
    private $_date;
    private $_user;
    private $_nbLikes;
    private $_nbRetweet;
    private $_bdd;
    private $_nbCommentaires;
    private $_tweetARepondre;

    function __construct($bdd)
    {
        $this->_bdd = $bdd;
    }

    /*----------------
            Method Get
        ----------------*/

    public function getIdtweet()
    {

        return $this->_idtweet;
    }

    public function getContenu()
    {

        return $this->_contenu;
    }

    public function getDate()
    {

        return $this->_date;
    }

    public function getUser()
    {

        return $this->_user;
    }

    public function getNumberLikes()
    {
        return $this->_nbLikes;
    }

    public function getNumberRetweet()
    {
        return $this->_nbRetweet;
    }

    public function getNumberCommentaires()
    {
        return $this->_nbCommentaires;
    }

    public function getTweetARepondre()
    {
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

    public function init($idTweet)
    {

        $rawData = $this->_bdd->prepare("SELECT * from `tweet` WHERE `id_tweet` = ?"); //Requete qui affiche les dernier tweet
        $rawData->execute(array($idTweet));
        $tweetExist = $rawData->rowCount();
        if ($tweetExist == 1) { //Test si la requête renvoie un résultat
            $userData = $rawData->fetch();
            $this->_user = new user($this->_bdd);
            $this->_user->initId($userData['id_user']);

            $this->_tweetARepondre = new tweet($this->_bdd);
            $this->_tweetARepondre->init($userData['id_tweetARepondre']);

            $this->_contenu = $userData['contenu'];
            $this->_date = $userData['date'];
            $this->_idtweet = $userData['id_tweet'];

            $requeteCount = $this->_bdd->query("SELECT COUNT(*) FROM `like` WHERE `id_tweet` = " . $this->_idtweet);//Nombre de like du tweet
            $nbLikes = $requeteCount->fetch();
            $this->_nbLikes = $nbLikes["COUNT(*)"];

            $requeteCount = $this->_bdd->query("SELECT COUNT(*) FROM `retweet` WHERE `id_tweet` = " . $this->_idtweet);// Nombre de Retweet du tweet
            $nbRetweet = $requeteCount->fetch();
            $this->_nbRetweet = $nbRetweet["COUNT(*)"];

            $requeteCountCom = $this->_bdd->query("SELECT COUNT(*) FROM `tweet` WHERE `id_tweetARepondre` = " . $this->_idtweet);
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

    public function posterTweet()
    {
        if ($this->_contenu != NULL && $this->_user->getIdUser() != NULL) {
            $this->_bdd->query("INSERT INTO `tweet`(`id_tweet`, `contenu`, `id_user`, `date`, `id_tweetARepondre`) VALUES (NULL,'" . $this->_contenu . "','" . $this->_user->getIdUser() . "',CURRENT_TIMESTAMP,NULL)");
            return true;
        } else {
            return false;
        }
    }

    public function commenter()
    {
        if ($this->_contenu != NULL && $this->_user->getIdUser() != NULL && $this->_tweetARepondre->getIdtweet() != NULL) {
            $this->_bdd->query("INSERT INTO `tweet`(`id_tweet`, `contenu`, `id_user`, `date`, `id_tweetARepondre`) VALUES (NULL,'" . $this->_contenu . "','" . $this->_user->getIdUser() . "',CURRENT_TIMESTAMP, '" . $this->_tweetARepondre->getIdtweet() . "')");
            return true;
        } else {
            return false;
        }
    }

    /*------------------
            Methode Like
        -------------------*/

    public function like($ObjetStranger)
    {
        $rawData = $this->_bdd->query("SELECT COUNT(*) from `like` WHERE `id_tweet` = " . $this->_idtweet . " AND `id_user` = " . $ObjetStranger->getIdUser());
        $likeExist = $rawData->fetch();
        if ($likeExist["COUNT(*)"] >= 1) {
            $this->_bdd->query("DELETE FROM `like` WHERE `id_tweet` = " . $this->_idtweet . " AND `id_user` = " . $ObjetStranger->getIdUser());
            $this->_nbLikes -= 1;
        } else {
            $this->_bdd->query("INSERT INTO `like` (`id_like`,`id_user`,`id_tweet`) VALUES (NULL, '" . $ObjetStranger->getIdUser() . "','" . $this->_idtweet . "')");
            $this->_nbLikes++;
        }
    }

    /*------------------
            Methode Retweet
        -------------------*/

    public function retweet($ObjetStranger)
     {
            $data = $this->_bdd->query("SELECT COUNT(*) from `retweet` WHERE `id_tweet` = " . $this->_idtweet . " AND `id_user` = " . $ObjetStranger->getIdUser());
            $retweetExist = $data->fetch();
            if ($retweetExist["COUNT(*)"] >= 1) {
                $this->_bdd->query("DELETE FROM `retweet` WHERE `id_tweet` = " . $this->_idtweet . " AND `id_user` = " . $ObjetStranger->getIdUser());
                $this->_nbRetweet -= 1;
            } else {
                $this->_bdd->query("INSERT INTO `retweet` (`id_retweet`,`id_user`,`id_tweet`) VALUES (NULL, '" . $ObjetStranger->getIdUser() . "','" . $this->_idtweet . "')");
                $this->_nbRetweet++;
            }
        }
    


    /*--------------------------------
            Methode voir afficheLiker
        -----------------------------*/

    public function afficheLiker()
    {

        $data = $this->_bdd->query("SELECT * FROM `user` INNER JOIN `like` ON user.id_user = like.id_user WHERE like.id_tweet = " . $this->_idtweet . "");
        // $rawData = $this->_bdd->query("SELECT `identifiant` FROM `like`,`user` WHERE user.id_user = like.id_user AND ".$this->_idtweet);

        while ($tabData = $data->fetch()) { ?>

            <form method="POST" action="">
                <div class='row likeur-content'>
                    <div class="col-6 oneLiker">
                        <?php echo "<a class='colorLiker' href='/TwittererLike/IHM/page_profil_user.php?idUser=" . $tabData['id_user'] . "'>";
                        echo "@" . $tabData['identifiant'] ?>
                        </a>
                    </div>
                    <div class="col-2 btnFolow">
                        <input type="submit" class="btn btn-primary" value="folow" name="folows">
                    </div>
                </div>
            </form>

<?php }
    }

    /*--------------------------------
            Methode voir afficheLiker
        -----------------------------*/

        public function afficheRetweeter()
        {
    
            $data = $this->_bdd->query("SELECT * FROM `user` INNER JOIN `retweet` ON user.id_user = retweet.id_user WHERE retweet.id_tweet = " . $this->_idtweet . "");
          
            while ($tabData = $data->fetch()) { ?>
    
                <form method="POST" action="">
                    <div class='row likeur-content'>
                        <div class="col-6 oneLiker">
                            <?php echo "<a class='colorLiker' href='/TwittererLike/IHM/page_profil_user.php?idUser=" . $tabData['id_user'] . "'>";
                            echo "@" . $tabData['identifiant'] ?>
                            </a>
                        </div>
                        <div class="col-2 btnFolow">
                            <input type="submit" class="btn btn-primary" value="folow" name="folows">
                        </div>
                    </div>
                </form>
    
    <?php }
        }

    /* ---------------
            Methode Date
        ----------------*/

    public function CalculDate()
    {

        $Recupdata = $this->_bdd->query("SELECT * FROM tweet WHERE id_tweet = 20");
        $tabData = $Recupdata->fetch();
        $date2 = $tabData['date'];
        $date = date('y-m-d');
        $rawData = $this->_bdd->query("SELECT DATEDIFF(" . $date . "," . $date2 . ")");
        $CalculDate = $rawData;
        $this->setDate($CalculDate);
    }
}
?>