<html>

<head>

<link rel="stylesheet" href="testcoeur.scss">
</head>


<body>

<form action="" method="POST">
    <input type="text" name="text" value="bjr">
    <input type="submit" name="like" value="j'aime">
</form>

<form action="" method="POST">
    <input type="text" name="text" value="bjr">
    <input type="submit" name="DISlike" value="j'aime po">
</form>



<?php

if(isset($_POST["like"]))
{
    echo $_POST["like"];
}

if(isset($_POST["DISlike"]))
{
    echo $_POST["DISlike"];
}
?>



</body>
</html>