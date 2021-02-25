<?php
include '../BDD/classUser.php';
include '../IHM/header.php';

?> <h2> Selection par identifiant et Password </h2>
<?php 
$user = new user($bdd);
$user->connexion("valou123", "123")."<br>";

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

// TEST Inscription
echo "<h2> TEST Inscription </h2><br>";
$user3 = new user($bdd);
$return = $user3->inscription("bernard93GangBang", "bernardLeTrimar93", "mdpsecure123", "2000-01-01"."<br><br>");



if ($return = 1) {
    echo "Inscription OK";
} else {
    echo "Inscription NOK";
}


// TEST Connexion
echo "<h2> TEST Connexion </h2><br><br>";
$returnCo = $user3->connexion("bernard93GangBang", "mdpsecure123");

if ($retourCo = 1) {
    echo "Connexion OK";
} else {
    echo "Connexion NOK";
}


// TEST Modif
 // Probléme modif 
echo "<h2> TEST Modif </h2><br><br>";
$user4 = new user($bdd);

echo $user4->setIdUser(30)."<br>";
echo $user4->setIdentifiant("MonNouveauIdentifiant")."<br>";
echo $user4->setPseudo("MonNouveauPseudo")."<br>";
echo $user4->setBirthdate("2000-25-01")."<br>";
echo $user4->setPassword("MonNouveauMDP")."<br>";
echo $user4->setBio("MaNouvelleBio")."<br><br>";

$returnModif = $user4->modif();

if ($returnModif = 1) {
    echo "Modif OK<br><br>";
} else {
    echo "Modif NOK<br><br>";
}
?>