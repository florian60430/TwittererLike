<?php

/*------------------------------
AFFICHE LA TL DE L'UTILISATEUR
-------------------------------*/

function AfficheTimeLine($bdd, $ObjetUser)
{

    $data = $bdd->query("SELECT `id_tweet` FROM `tweet` WHERE `id_tweetARepondre` IS NULL ORDER BY `date` DESC");
    $i = 0;
    
    while ($tabId = $data->fetch()) 
    {
        
        $tabOjbetTweet[$i] = new tweet($bdd);
        $tabOjbetTweet[$i]->init($tabId['id_tweet']);
        $tabOjbetUser[$i] =  $tabOjbetTweet[$i]->getUser();

        if (isset($_POST[$i])) 
        {
            $tabOjbetTweet[$i]->like($ObjetUser);
            
        }
        echo "<div class='content' name='content'><div class='user' name='user'> <a href='IHM/page_profil_user.php'>".$tabOjbetUser[$i]->getPseudo(). "</a> a dit : <p><div class ='text' name='text'>" . $tabOjbetTweet[$i]->getContenu() . " </div></p><p> Date du post : " . $tabOjbetTweet[$i]->getDate() . "</p><br>";
        ?>
          
       </div><div class='bouton' name='bouton'>
       <form method='POST' action=''>
            <input type='submit' class="btn" id=<?php echo "btn".$i; ?> name=<?php echo $i; ?> value='Like'> <?php echo " <span id='liked". $i ."'>" . $tabOjbetTweet[$i]->getNumberLikes() . " likes "  ?>
            <input type='submit' class="btn" id=<?php echo "btn".$i; ?> name=<?php echo $i; ?> value='Commenter'>
            <input type='submit' class="btn" id=<?php echo "btn".$i; ?> name=<?php echo $i; ?> value='Retweeter'>
            
        </form>
       </div>
    </div>
<?php

        $i++;
    }

    echo "<script type='text/javascript' src='METIER/main.js'></script>";

}

function AffichePopUpLike() 
{
    
}
function AfficheTimeLineProfil($bdd, $ObjetUser)
{

    $data = $bdd->query("SELECT `id_tweet` FROM `tweet` WHERE `id_user` = ".$ObjetUser->getIdUser()." ORDER BY `date` DESC ");
    if ($data->rowcount() == 0){
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
        echo "<div class='content' name='content'><div class='user' name='user'>".$tabOjbetUser[$i]->getPseudo() . " a dit : <p><div class ='text' name='text'>" . $tabOjbetTweet[$i]->getContenu() . " </div></p><p> Date du post : " . $tabOjbetTweet[$i]->getDate() . "</p><br>";
         ?>
       </div><div class='bouton' name='bouton'>
       <form method='POST' action=''>
            <input type='submit' id=<?php echo "btn".$i; ?> name=<?php echo $i; ?> value='Like' <?php echo " <span id='liked". $i ."'>" . $tabOjbetTweet[$i]->getNumberLikes() . " likes" ?>
        </form>
       </div>
    </div>
<?php
        $i++;
    }
}
?>