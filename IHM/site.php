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
<!--
<div id="poster">
  <form action="" method="POST">
    <input class="input_tweet" type="text" name="InputTweet" placeholder="What's happening ?">
    <button name="btnSubmit" class="btn_tweet">Envoyer</button>
  </form>
</div>
-->
<?php

/*-------------
  POSTER TWEET
--------------*/

if (isset($_POST['InputTweet'])) {

    $textTweet = htmlspecialchars($_POST["twatContent"]); // Empeche d'executé le code implanter dans le formulaire
    $content = addslashes($textTweet); // On peut mettre des guillet
    $tweet = new tweet($bdd);
    $tweet->setContenu($content);
    $tweet->setUser($user);
    $tweet->posterTweet();
}
?>

<!------------
  MENU HEADER
------------->
<?php include 'structure/menu.html'; ?>

<section class="timeLine" name="timeLine">
  <?php AfficheTimeLine($bdd, $user); ?>
  <a href="IHM/poster.php"><div class="poster"></div></a>
</section>



<?php include "IHM/structure/footer.html"; ?>