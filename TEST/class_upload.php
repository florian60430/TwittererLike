<?php
class img
{
    private $_myid;
    public function __construct($myid)
    {
        $this->_myid = $myid;
    }
    public function upload($formfile){
        $target_dir = "./";
        $filename = basename($formfile["name"]);
        $target_file = $target_dir . $filename;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $check = getimagesize($formfile["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "Le fichier n'est pas une image.";
            $uploadOk = 0;
        }

        if ($formfile["size"] > 2000000) {
            echo "Le fichier est trop lourd (2Mo max).";
            $uploadOk = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Seul les fichiers JPG, JPEG, PNG et GIF sont autorisés.";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo " Upload impossible.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($formfile["tmp_name"], $target_dir . "photo_user" . $this->_myid . "." . "jpg")) {
                echo "Votre image " . $filename . " a été upload avec succès. <br>";
            } else {
                echo "Il y a eu une erreur lors de l'upload.";
            }
        }
    }
    public function afficher(){
        if (file_exists("img/photo_user".$this->_myid.".jpg")) {
            echo "<img src='./photo_user".$this->_myid.".jpg' />"; 
        } 
        else{
            echo "Aucune image trouvé !";
        }
    }
}
