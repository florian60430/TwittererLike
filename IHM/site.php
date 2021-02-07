<?php
include "structure/entete.html";
include "BDD/classtweet.php";
include "METIER/functionCopy.php"; ?>

<div>
    <input id="tweet" type="text" name="InputTweet" size="50px" placeholder="What's happening ?">
    <button name="btnSubmit" id="submit">Envoyer</button>
</div>

<!-------------
  AFFICHAGE TL
-------------->

<div class="mainStream" id="stream">
    <?php 
    $user = new user($bdd);
    $user->initId($_SESSION["userId"]);

    AfficheTimeLine($bdd, $user); ?>
</div>


<div> <a href="IHM/deconnexion.php">Deconnexion</a> </div>
<?php include "structure/footer.html"; ?>