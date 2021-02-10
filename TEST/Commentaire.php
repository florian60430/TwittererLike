<?php
    include '../BDD/classUser.php';
    include '../BDD/classtweet.php';
    include '../BDD/classCommentaire.php';
    include '../IHM/header.php';

    $tweet = new tweet($bdd);
    $tweet->init(1);
    $tweet->getContenu();

?>