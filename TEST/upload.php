<?php
require('class_upload.php') ?>


<form method="post" action="" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Envoyer l'image" name="submit">
</form>
<?php

$photoprofil = new img(1);

if (isset($_POST["submit"])) {
    $photoprofil->upload($_FILES["fileToUpload"]);
}

$photoprofil->afficher();
?>