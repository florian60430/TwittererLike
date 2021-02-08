<?php
include "structure/entete.html";
include "BDD/classtweet.php";
include "METIER/function.php";

/*---------------------------- 
   INSTANTIATION OBJET USER
---------------------------*/

$user = new user($bdd);
$user->initId($_SESSION["userId"]);

?>
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

<script>
 
$(document).ready(function(){
 
    $("#submit").click(function(e){
        e.preventDefault();
 
        $.post(
            'traitement.php', // Un script PHP que l'on va créer juste après
            {
                username : $("#username").val(),  // Nous récupérons la valeur de nos input que l'on fait passer à connexion.php
                password : $("#password").val()
            },
         );
    });
});
 
</script>