<?php

/*------------------------------
AFFICHE LA TL DE GENERAL
-------------------------------*/

function AfficheTimeLine($bdd, $ObjetUser)
{

    $data = $bdd->query("SELECT `id_tweet` FROM `tweet` WHERE `id_tweetARepondre` IS NULL ORDER BY `date` DESC");
    $i = 0;

    while ($tabId = $data->fetch()) {

        $tabOjbetTweet[$i] = new tweet($bdd);
        $tabOjbetTweet[$i]->init($tabId['id_tweet']);
        $tabOjbetUser[$i] =  $tabOjbetTweet[$i]->getUser();

        if (isset($_POST[$i])) {
            $tabOjbetTweet[$i]->like($ObjetUser);
        }
        // $tabOjbetTweet[0]->CalculDate();


?> <div class="tweet-container"> <?php

                                    /* ZONE CLIQUABLE DU TWEET */
                                    echo "<a  class='tweet-click' href='/TwittererLike/IHM/cibleTweet.php?idTweet=" . $tabOjbetTweet[$i]->getIdtweet() . "&amp;idUser=" . $tabOjbetUser[$i]->getIdUser() . "'>"; ?>
            <div name="cadre" class="cadre" id="cadre">
                <span class="points"> . . . </span>

                <!-- NOM D UTILISATEUR -->
                <span class='username'> <?php echo $tabOjbetUser[$i]->getPseudo() ?> </span>

                <!-- CONTENU DU TWEET -->
                <?php echo "<div class='tweet' name='tweet" . $i . "'>";

                echo $tabOjbetTweet[$i]->getContenu() ?>
                <!--<a href="assets/image/Baniere/tuning.jpg">
                <img src="assets/image/Baniere/tuning.jpg" class="picture">
            </a>
    -->
            </div>
            <!-- BOUTONS -->
            <form method="POST" action="">
                <div class="cadreBtn">

                    <!-- BTN LIKE -->
                    <span class="btn-like">
                        <input type='submit' class="btn" id=<?php echo "btn" . $i; ?> name=<?php echo $i; ?> value='Like'>
                    </span>

                    <!-- NOMBRE DE LIKE -->
                    <?php echo " <span id='liked" . $i . "'>"; ?>
                    <?php echo $tabOjbetTweet[$i]->getNumberLikes(); ?>
                    </span>

                    <!-- BTN RETWEET -->
                    <span class="btn-retweet">
                        <button type='submit' class="btn-retweeter" id=<?php echo "retweeter" . $i; ?> name=<?php echo "btn-retweeter" . $i; ?>>Retweeter</button>
                    </span>

                    <!-- NOMBRE DE RETWEET -->
                    <span class="number-retweet">
                        1359
                    </span>
                    <span class="date">
                        <?php echo "17/02/2021"; //echo $tabOjbetTweet[$i]->getDate(); 
                        ?>
                    </span>
                </div>
        </div>
        </a>
        </form>
        </div>
    <?php
        $i++;
    }

    echo "<script type='text/javascript' src='METIER/main.js'></script>";
}

function AffichePopUpLike()
{
}

/*------------------------------
AFFICHE LA TL DE L'UTILISATEUR
-------------------------------*/

function AfficheTimeLineProfil($bdd, $ObjetUser)
{

    $data = $bdd->query("SELECT `id_tweet` FROM `tweet` WHERE `id_user` = " . $ObjetUser->getIdUser() . " ORDER BY `date` DESC ");
    if ($data->rowcount() == 0) {
        echo "vous n'avez pas de twat.";
    }
    $i = 0;

    while ($tabId = $data->fetch()) {
        $tabOjbetTweet[$i] = new tweet($bdd);
        $tabOjbetTweet[$i]->init($tabId['id_tweet']);
        $tabOjbetUser[$i] =  $tabOjbetTweet[$i]->getUser();

        if (isset($_POST[$i])) {
            $tabOjbetTweet[$i]->like($ObjetUser);
        }
    ?> <div class="tweet-container"> <?php

                                        /* ZONE CLIQUABLE DU TWEET */
                                        echo "<a href='/TwittererLike/IHM/cibleTweet.php?idTweet=" . $tabOjbetTweet[$i]->getIdtweet() . "idUser=" . $tabOjbetUser[$i]->getIdUser() . "class='tweet-click'>"; ?>
            <div name="cadre" class="cadre" id="cadre">
                <a class="points"> . . . </a>

                <!-- NOM D UTILISATEUR -->
                <?php echo "<a class='username' href='/TwittererLike/IHM/page_profil_user.php?idUser=" . $tabOjbetUser[$i]->getIdUser() . "'>" . $tabOjbetUser[$i]->getPseudo() . "</a>"; ?>

                <!-- CONTENU DU TWEET -->
                </span>
                <?php echo "<div class='tweet' name='tweet" . $i . "'>";

                echo $tabOjbetTweet[$i]->getContenu() ?>
                <!--<a href="assets/image/Baniere/tuning.jpg">
                <img src="assets/image/Baniere/tuning.jpg" class="picture">
            </a>
    -->
            </div>
            <!-- BOUTONS -->
            <form method="POST" action="">
                <div class="cadreBtn">

                    <!-- BTN LIKE -->
                    <span class="btn-like">
                        <input type='submit' class="btn" id=<?php echo "btn" . $i; ?> name=<?php echo $i; ?> value='Like'>
                    </span>

                    <!-- NOMBRE DE LIKE -->
                    <?php echo " <span id='liked" . $i . "'>"; ?>
                    <?php echo $tabOjbetTweet[$i]->getNumberLikes(); ?>
                    </span>

                    <!-- BTN RETWEET -->
                    <span class="btn-retweet">
                        <button type='submit' class="btn-retweeter" id=<?php echo "retweeter" . $i; ?> name=<?php echo "btn-retweeter" . $i; ?>>Retweeter</button>
                    </span>

                    <!-- NOMBRE DE RETWEET -->
                    <span class="number-retweet">
                        1359
                    </span>
                    <span class="date">
                        <?php echo "17/02/2021"; //echo $tabOjbetTweet[$i]->getDate(); 
                        ?>
                    </span>
                </div>
        </div>
        </a>
        </form>
        </div>
    <?php
        $i++;
    }
}

/*-----------------------
AFFICHE UN SEUL TWEET
----------------------*/

function AfficheTweet($ObjetUser, $ObjetTweet)

{
    if (isset($_POST["liker"])) {
        $ObjetTweet->like($ObjetUser);
    } ?>


    <div class="tweet-container">
        <div name="oneCadre" class="oneCadre" id="cadre">
            <span class="points"> . . . </span>

            <!-- NOM D UTILISATEUR -->
            <span class='oneUsername'> <?php echo $ObjetUser->getPseudo() ?> </span>

            <!-- IDENTIFIANT -->
            <?Php echo "<a href='/TwittererLike/IHM/page_profil_user.php?idUser=" . $ObjetUser->getIdUser() . "'>" ?>
            <span class='oneIdentifiant'> <?php echo "@" . $ObjetUser->getIdentifiant() ?> </span>
            </a>

            <!-- CONTENU DU TWEET -->
            <div class='tweet' name='tweet'>
                <div class="oneCircle"></div>
                <?php echo $ObjetTweet->getContenu() ?>
                <img src="../assets/image/Baniere/tuning.jpg" class="picture">

                <!-- DATE DU TWEET -->
                <div class="oneDate">
                    <?php echo "2:01 PM · 2 mars 2021 "; //echo $tabOjbetTweet[$i]->getDate();  
                    ?>
                </div>
            </div>

            <div class="cadreBtn">

                <!-- NOMBRE DE LIKE -->
                <span id='liked'>
                    <?php echo "<span class='nbLike'>" . $ObjetTweet->getNumberLikes() . "</span>"; ?> <span class="labelLike" id="labelLike">J'aime</span>
                </span>

                <!-- NOMBRE DE RETWEET -->
                <span class="number-retweet">
                    <b>1359</b> <span class="labelRetweet">Retweet</span>
                </span>
            </div>

            <!-- BOUTONS -->
            <form method="POST" action="">
                <div class="cadreBtn">
                    <!-- BTN LIKE -->
                    <span class="btn-like">
                        <input type='submit' id="btn" name="liker" value="Like">
                    </span>

                    <!-- BTN RETWEET -->
                    <span class="btn-retweet">
                        <button type='submit' class="btn-retweeter" id="retweeter" name="btn-retweeter">Retweeter</button>
                    </span>
                </div>
            </form>
        </div>
    </div>
    <script type='text/javascript' src='../METIER/main.js'></script>
    <?php
}

/*------------------------------
    AFFICHE COMMENTAIRE
-------------------------------*/
function AfficheCommentaire($bdd, $OjbetTweet, $ObjetUser)
{
    $data = $bdd->query("SELECT `id_tweet`,`contenu` FROM `tweet` WHERE `id_tweetARepondre` = " .   $OjbetTweet->getIdtweet());
    $i = 0;

    while ($tabId = $data->fetch()) {

        $tabOjbetTweet[$i] = new tweet($bdd);
        $tabOjbetTweet[$i]->init($tabId['id_tweet']);
        $tabOjbetUser[$i] =  $tabOjbetTweet[$i]->getUser();

        if (isset($_POST[$i])) {
            $tabOjbetTweet[$i]->like($ObjetUser);
        }

    ?> <div class="tweet-container">
            <?php

            /* ZONE CLIQUABLE DU TWEET */
            echo "<a  class='tweet-click' href='/TwittererLike/IHM/cibleTweet.php?idTweet=" . $tabOjbetTweet[$i]->getIdtweet() . "&amp;idUser=" . $tabOjbetUser[$i]->getIdUser() . "'>"; ?>
            <div name="reponseCadre" class="reponseCadre" id="cadre">
                <span class="points"> . . . </span>

                <!-- NOM D UTILISATEUR -->
                <span class='username'> <?php echo $tabOjbetUser[$i]->getPseudo() ?> </span>

                <!-- CONTENU DU TWEET -->
                <?php echo "<div class='tweet' name='tweet" . $i . "'>";

                echo $tabOjbetTweet[$i]->getContenu() ?>
            </div>
            <!-- BOUTONS -->
            <form method="POST" action="">
                <div class="cadreBtn">

                    <!-- BTN LIKE -->
                    <span class="btn-like">
                        <input type='submit' class="btn" id=<?php echo "btn" . $i; ?> name=<?php echo $i; ?> value='Like'>
                    </span>

                    <!-- NOMBRE DE LIKE -->
                    <?php echo " <span id='liked" . $i . "'>"; ?>
                    <?php echo $tabOjbetTweet[$i]->getNumberLikes(); ?>
                    </span>

                    <!-- BTN RETWEET -->
                    <span class="btn-retweet">
                        <button type='submit' class="btn-retweeter" id=<?php echo "retweeter" . $i; ?> name=<?php echo "btn-retweeter" . $i; ?>>Retweeter</button>
                    </span>

                    <!-- NOMBRE DE RETWEET -->
                    <span class="number-retweet">
                        1359
                    </span>
                    <span class="date">
                        <?php echo "17/02/2021"; //echo $tabOjbetTweet[$i]->getDate(); 
                        ?>
                    </span>
                </div>
            </form>
            </a>
        </div>
<?php
        $i++;
    }
}



?>