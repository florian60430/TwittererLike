<?php session_start();

include "IHM/header.php";
include "BDD/classUser.php";

/*--------------
   CONNEXION 
-------------*/

if (!empty($_POST['ID_1']) && !empty($_POST['MDP_1']))

{
    $user = new user($bdd);
    $verifUser = $user->connexion($_POST['ID_1'],$_POST['MDP_1']);

    if($verifUser == true)
    {
        $_SESSION["isconnect"] = true; 
    }
}
/*----------------
   INSCRIPTION
--------------*/


if (!empty($_POST['new_ID']) && !empty($_POST['new_pseudo']) && !empty($_POST['new_MDP']) && !empty($_POST['new_BD']))

{

    $user = new user($bdd);
    $verifUser = $user->inscription($_POST['new_ID'],$_POST['new_pseudo'],$_POST['new_MDP'],$_POST['new_BD']);

    if($verifUser == false)
    {
        echo "erreur lors de l'inscription";
    }
    else
    {
        $_SESSION["isconnect"] = true;
    }
}


    /*-----------------
      USER CONNECTED 
    -----------------*/

if (isset($_SESSION['isconnect'])) {
    include "IHM/site.php";
}

    /*-----------------
      USER UNCONNECTED
    -----------------*/

else {
    include "IHM/page_connexion.php";
}

?>