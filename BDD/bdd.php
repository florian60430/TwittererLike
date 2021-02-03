<?php
    $ip = 'localhost';
    $dbname = 'twater';
    $username = 'root';
    $password = '';
    $bdd = new PDO('mysql:host='.$ip.'; dbname='.$dbname.'; charset=utf8', $username, $password);
?>