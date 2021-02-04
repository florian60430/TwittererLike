<?php
    $ip = '192.168.64.56';
    $dbname = 'twater';
    $username = 'florian';
    $password = '60430';
    $bdd = new PDO('mysql:host='.$ip.'; dbname='.$dbname.'; charset=utf8', $username, $password);
?>