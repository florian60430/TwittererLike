<?php include "entete.html";
include "../BDD/config.php";
include "../BDD/classUser.php";
include "../BDD/classtweet.php";
include "../METIER/functionDisplayTL.php" ?>

<div class="mainStream" id="stream"></div>
<div>
    <input id="tweet" type="text" name="InputTweet" size="50px" placeholder="What's happening ?">
    <button name="btnSubmit" id="submit">Envoyer</button>
</div>
<?php
$_SESSION['userLogged'] = 1;
afficherTweets($bdd, $_SESSION['userLogged']);
?>














<?php include "footer.html"; ?>