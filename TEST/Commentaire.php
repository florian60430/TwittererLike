<?php
    include '../BDD/classUser.php';
    include '../BDD/classtweet.php';
    include '../IHM/header.php';

    $user = new user($bdd);
    $user->initId(2);

    $tweet = new tweet($bdd);
    $tweet->init(1);

    $reponse = new tweet($bdd);
    $reponse->setContenu("REPONSE TEST");
    $reponse->setUser($user);
    $reponse->setTweetARepondre($tweet);
    $reponse->commenter();

    $tweet->init(1);
    echo $tweet->getContenu()."<br>";
    echo $tweet->getUser()->getPseudo()."<br>";
    echo "Reponse<br>";
    $reponse->init(1);
    echo $reponse->getContenu();
    echo $reponse->getUser()->getPseudo();


?>