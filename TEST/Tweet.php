<?php
include '../BDD/classtweet.php';
include '../BDD/config.php';



?> <h2> Tweet </h2>
<?php 
$tweet = new tweet($bdd);
$tweet->init()."<br>";

echo $tweet->getIdtweet(1)."<br>";
echo $tweet->getContenu()."<br>";
echo $tweet->getDate()."<br>";
echo $tweet->getUser(1)."<br>";
echo $tweet->getNumberLikes()."<br>";



echo $tweet->setIdtweet(36)."<br>";
echo $tweet->setContenu("Goudal la mandal")."<br>";
echo $tweet->setDate("2021-03-05")."<br>";
echo $tweet->setUser(6)."<br>";






?>
