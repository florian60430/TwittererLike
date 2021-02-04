<?php
<<<<<<< HEAD
=======
<<<<<<< HEAD



?>
=======
>>>>>>> 56f174aa1c14c50157bb9152954ce91d9244cfdd
    include('../BDD/classtweet.php');
    include('../BDD/bdd.php');

    $userLogged = new user($bdd);
    $userLogged->setIdUser(1);
    $userLogged->initId();

    if(isset($_POST['submitTweet'])){
        $newTweet = new tweet($bdd);
        $newTweet->setContenu($_POST['textTweet']);
        $newTweet->setUser($userLogged);
        $newTweet->create();
    }

    $rawId = $bdd->query("SELECT `id_tweet` FROM `tweet` ORDER BY `date` DESC");
    $i = 0;
    while($pureId = $rawId->fetch()){
        ${"tweet".$i} = new tweet($bdd);
        ${"tweet".$i}->setIdTweet($pureId['id_tweet']);
        ${"tweet".$i}->init();
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
    <input type="text" name="textTweet">
    <input type="submit" name="submitTweet" value="Tweeter">
</form>
>>>>>>> 73bad8f74af0f0ee61d0e56f897db2d0bb118696
