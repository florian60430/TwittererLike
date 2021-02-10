<?php

include "BDD/classtweet.php";
include "METIER/function.php";

/*---------------------------- 
   INSTANTIATION OBJET USER
---------------------------*/

$user = new user($bdd);
$user->initId($_SESSION["userId"]);

?>

<!-------------------------
   FORMULAIRE POSTER TWEET
 ------------------------> 
<a href="IHM/deconnexion.php">Deconnexion</a>
<a href="IHM/page_profil.php">Mon profil</a>
<div>
  <form action="" method="POST">
    <input id="tweet" type="text" name="InputTweet" size="50px" placeholder="What's happening ?">
    <button name="btnSubmit" id="submit">Envoyer</button>
  </form>
</div>


<?php
/*-------------
  POSTER TWEET
--------------*/

if (isset($_POST['InputTweet'])) {

  $textTweet = htmlspecialchars($_POST["InputTweet"]);// Empeche d'executé le code implanter dans le formulaire
  $content = addslashes($textTweet); // On peut mettre des guillet
  $tweet = new tweet($bdd);
  $tweet->setContenu($content);
  $tweet->setUser($user);
  $tweet->posterTweet();
}
?>
<!-------------
  AFFICHAGE TL
-------------->

<div class="mainStream" id="stream">
  <?php AfficheTimeLine($bdd, $user); ?>
</div>

<?php include "IHM/structure/footer.html"; ?>