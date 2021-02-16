<?php

/*------------------------------
AFFICHE LA TL DE L'UTILISATEUR
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
        echo "<div class='tweet' name='tweet".$i."'><div class='user' name='user'> <a href='IHM/page_profil_user.php'>" . $tabOjbetUser[$i]->getPseudo() . "</a> a dit : <p><div class ='text' name='text'>" . $tabOjbetTweet[$i]->getContenu() . " </div></p><p> Date du post : " . $tabOjbetTweet[$i]->getDate() . "</p><br>";
?>
        </div>
            <div class='bouton' name='bouton'>
                <form method="POST" action="">
                    <input type='submit' class="btn" id=<?php echo "btn" . $i; ?> name=<?php echo $i; ?> value='Like'> <?php echo " <span id='liked" . $i . "'>" . $tabOjbetTweet[$i]->getNumberLikes() . " likes "  ?>
                </form>
                <button type='submit' class="btn-commenter" id=<?php echo "commenter".$i; ?> name=<?php echo "btn-commenter".$i; ?> >Commenter</button>
                <button type='submit' class="btn-retweeter" id=<?php echo "retweeter".$i; ?> name=<?php echo "btn-retweeter".$i; ?> >Retweeter</button>
            </div>
        </div>
    <?php
        $i++;
    }
}

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
        echo "<div class='tweet' name='tweet'><div class='user' name='user'>" . $tabOjbetUser[$i]->getPseudo() . " a dit : <p><div class ='text' name='text'>" . $tabOjbetTweet[$i]->getContenu() . " </div></p><p> Date du post : " . $tabOjbetTweet[$i]->getDate() . "</p><br>";
    ?>
        </div>
        <div class='bouton' name='bouton'>
            <form method='POST' action=''>
                <input type='submit' id=<?php echo "btn" . $i; ?> name=<?php echo $i; ?> value='Like' <?php echo " <span id='liked" . $i . "'>" . $tabOjbetTweet[$i]->getNumberLikes() . " likes" ?> 
            </form>
        </div>
        </div>
<?php
        $i++;
    }
}

function AfficheTweet($bdd, $ObjetUser)
{
    $data = $bdd->query("SELECT `id_tweet` FROM `tweet` WHERE `id_user` = 5 ");
    if ($data->rowCount() == 0)
    {
        echo "Aucun twat.";
    }
    $tabId = $data->fetch();
    $OjbetTweet = new tweet($bdd);
    $OjbetTweet->init($tabId['id_tweet']);
    $OjbetUser = $OjbetTweet->getUser(); 

    if (isset($_POST["liker"]))
    {
        $OjbetTweet->like($ObjetUser);
    }
    echo "<div class='tweet' name='tweet'><div class='user' name='user'> <a href='IHM/page_profil_user.php'>" . $OjbetUser->getPseudo() . "</a> a dit : <p><div class ='text' name='text'>" . $OjbetTweet->getContenu() . " </div></p><p> Date du post : " . $OjbetTweet->getDate() . "</p><br>";
    ?>  
        <div>
            <div class='bouton' name='bouton'>
                <form method='POST' action=''>
                    <input type='submit' id="btn" name="liker" value='Like'>  
                    <span id='liked'> 
                        <?php  echo $OjbetTweet->getNumberLikes(). " likes" ?> 
                </form>
            </div>
        </div>
    <?php
}
