<?php
include "IHM/structure/entete.html";
include "BDD/classtweet.php";
include "METIER/function.php";

/*---------------------------- 
   INSTANTIATION OBJET USER
---------------------------*/

$user = new user($bdd);
$user->initId($_SESSION["userId"]);

?>
<div class="left">
  <a href="page_profil.php">Mon profil</a>
</div>
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
  $tweet = new tweet($bdd);
  $tweet->setContenu($_POST['InputTweet']);
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


<div> <a href="IHM/deconnexion.php">Deconnexion</a> </div>
<?php include "structure/footer.html"; ?>