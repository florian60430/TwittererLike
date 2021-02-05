<?php
include '../BDD/classUser.php';
include '../BDD/config.php';

?> <h2> Selection par identifiant et Password </h2>
<?php 
$user = new user($bdd);
$user->initLogin("valou123", "123")."<br>";

echo $user->getIdUser()."<br>";
echo $user->getIdentifiant()."<br>";
echo $user->getPseudo()."<br>";
echo $user->getBirthdate()."<br>";
echo $user->getPassword()."<br>";
echo $user->getBio()."<br><br>";

echo $user->setIdUser(27)."<br>";
echo $user->setIdentifiant("bernard1234")."<br>";
echo $user->setPseudo("bernard")."<br>";
echo $user->setBirthdate("2000-01-01")."<br>";
echo $user->setPassword("mdpsecure123")."<br>";
echo $user->setBio("nouvelleBio")."<br>";


?> <h2> Selection par Id_user</h2>

<?php 

$user2 = new user($bdd);
$user2->initId(4)."<br>";

echo $user2->getIdUser()."<br>";
echo $user2->getIdentifiant()."<br>";
echo $user2->getPseudo()."<br>";
echo $user2->getBirthdate()."<br>";
echo $user2->getPassword()."<br>";
echo $user2->getBio()."<br><br>";

echo $user->setIdUser(28)."<br>";
echo $user->setIdentifiant("newidentifiant")."<br>";
echo $user->setPseudo("newpseudo")."<br>";
echo $user->setBirthdate("2000-25-01")."<br>";
echo $user->setPassword("newMDP")."<br>";
echo $user->setBio("nouvelleBio")."<br>";

