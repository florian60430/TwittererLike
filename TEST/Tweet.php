<?php
include '../BDD/classUser.php';
include '../BDD/classtweet.php';
include '../BDD/config.php';



?> <h2> GET Tweet </h2>
<?php 
$tweet = new tweet($bdd);
$tweet->init(1)."<br>";

echo "ID TWEET:  <br>".$tweet->getIdtweet()."<br>";
echo "CONTENU TWEET: <br> ".$tweet->getContenu()."<br>";
echo "DATE TWEET:  <br>".$tweet->getDate()."<br>";
echo "PSEUDO USER:  <br>".$tweet->getUser()->getPseudo()."<br>";
echo "IDENTIFIANT USER: <br> ".$tweet->getUser()->getIdentifiant()."<br>";
echo "NUMBER LIKE:  <br>".$tweet->getNumberLikes()."<br>";
?>
<button type="button" class="btn btn-danger">LIKE</button>
<?php
echo"</br>";
echo" <h2> SET Tweet </h2>";


echo "ID TWEET:  <br>".$tweet->setIdtweet(36)."<br>";
echo "CONTENU TWEET:  <br>".$tweet->setContenu("Goudal la mandal")."<br>";
echo "DATE TWEET:  <br>".$tweet->setDate("2021-03-05")."<br>";
echo "USER TWEET:  <br>".$tweet->setUser(6)."<br>";






?>
