<?php
include '../BDD/classUser.php';
include '../IHM/header.php';
include '../METIER/function.php';

?> <h2> Selection par identifiant et Password </h2>
<?php





if (isset($_POST["follow"])) { // Traitement follow
    $user = new user($bdd);
    $user->initId(2);
    $userUN = $user->getIdUser();

    $user2 = new user($bdd);
    $user2->initId(4);
    $userDEUX = $user2->getIdUser();
   



    $return = follow($userUN, $userDEUX, $bdd); // Fonction follow dans METIER/function.php
    if ($return == NULL) {
        echo "Error";
    } else {
        echo "OK";
    }
}


// Formulaire follow
?>
<form method="POST" action=""> 
    <input type="submit" name="follow" value="follow">
</form>