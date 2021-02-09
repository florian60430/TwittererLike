<div> 
    <a href="IHM/journal.html">
        <h3>Journal des DEV </h3> 
    </a>
<span>
    <a href="IHM/journalTest.html">
        <h3>Journal de TEST</h3> 
    </a>
</span>
</div>

<?php session_start();

include "IHM/header.php";
include "BDD/classUser.php";

/*--------------
   CONNEXION 
-------------*/

if (!empty($_POST['identifiantLogin']) && !empty($_POST['passwordLogin'])) {
    $user = new user($bdd);
    $verifUser = $user->connexion($_POST['identifiantLogin'], $_POST['passwordLogin']);

    if ($verifUser == true) {
        $_SESSION["isConnect"] = true;
        $_SESSION["userId"] = $user->getIdUser();
    }else{
        echo "Identifiant ou Mot de passe incorrecte."
    }
}
/*----------------
   INSCRIPTION
--------------*/


if (!empty($_POST['identifiant']) && !empty($_POST['pseudo']) && !empty($_POST['password']) && !empty($_POST['birthdate'])) {

    $user = new user($bdd);
    $verifUser = $user->inscription($_POST['identifiant'], $_POST['pseudo'], $_POST['password'], $_POST['birthdate']);

    if ($verifUser == true) {

        $user->connexion($_POST['identifiant'], $_POST['password']);
        $_SESSION["isConnect"] = true;
        $_SESSION["userId"] = $user->getIdUser();
    } else {
        echo "erreur lors de l'inscription.";
    }
}


/*-----------------
   USER CONNECTED 
-----------------*/

if (isset($_SESSION['isConnect'])) {
    include "IHM/site.php";
}

/*-----------------
   USER UNCONNECTED
-----------------*/ else {
    include "IHM/page_connexion.php";
}

?>