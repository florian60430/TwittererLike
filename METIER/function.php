<?php

/*------------------------------
AFFICHE LA TL DE L'UTILISATEUR
-------------------------------*/

function AfficheTimeLine($bdd, $ObjetUser)
{

    $data = $bdd->query("SELECT `id_tweet` FROM `tweet` ORDER BY `date` DESC");
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
        echo $tabOjbetUser[$i]->getPseudo() . " a dit " . $tabOjbetTweet[$i]->getContenu() . " a " . $tabOjbetTweet[$i]->getDate() . "<br>";
        echo "Ce tweet a <span id='liked".$i."'>" . $tabOjbetTweet[$i]->getNumberLikes() . "<span> likes" ?>
        <form method='POST' action=''>
            <input type='submit' id=<?php echo "btn".$i; ?> name=<?php echo $i; ?> value='Like'>
        </form>
<?php
        $i++;
    }
}
?>