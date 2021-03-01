<?php

session_start();

include "./structure/entete.secondary.html";
include "../IHM/header.php";
include "../BDD/classtweet.php";
include "../METIER/function.php";
include "../BDD/classUser.php";

/*---------------------------- 
   INSTANTIATION OBJET USER
---------------------------*/

$user = new user($bdd);
$user->initId($_SESSION["userId"]);

?>

<a href="../">annuler</a>

<!-------------
  AFFICHAGE TL
-------------->
<section class="posterTwat">
    <form action="../" method="POST">
        <textarea class="form-control" name="twatContent" id="exampleFormControlTextarea1" rows="3" placeholder="What's happening ?"></textarea>
        <button type="submit" name="InputTweet" class="btn btn-primary">Twatter</button>
    </form>
</section>