<?php
    include '../BDD/classUser.php';
    include '../BDD/classtweet.php';
    include '../IHM/header.php';

    $userLogged = new user($bdd);
    $userLogged->initId(1);

    if(isset($_POST['submitTweet'])){
        $textTweet= htmlspecialchars($_POST["textTweet"]); // Empeche d'executé le code implanter dans le formulaire
        $newTweet = new tweet($bdd);
        $newTweet->setContenu($textTweet);
        $newTweet->setUser($userLogged);
        $newTweet->posterTweet();
    }

    $rawId = $bdd->query("SELECT `id_tweet` FROM `tweet` WHERE `id_tweetARepondre` = NULL ORDER BY `date` DESC");
    $i = 0;
    while($pureId = $rawId->fetch()){
        ${"tweet".$i} = new tweet($bdd);
        ${"tweet".$i}->init($pureId['id_tweet']);
        ${"userTweet".$i} = ${"tweet".$i}->getUser();
        if(isset($_POST['like'.$i])){
            ${"tweet".$i}->like($userLogged);
        }
        echo ${"userTweet".$i}->getPseudo()." a dit ".${"tweet".$i}->getContenu()." a ".${"tweet".$i}->getDate()."<br>";
        echo "Ce tweet a ".${"tweet".$i}->getNumberLikes()." likes<br>";
        echo "<form method='POST' action=''>
            <input type='hidden' name='idTweet' value='".${"tweet".$i}->getIdtweet()."'>
            <input type='submit' name='like".$i."' value='Like'>
        </form>";
        $i++;
    }

?>
<form method="POST" action="">
    <input type="text" name="textTweet" >
    <input type="submit" name="submitTweet" value="Tweeter">
</form>

