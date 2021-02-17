<?php
include '../BDD/classUser.php';
include '../BDD/classtweet.php';
include '../IHM/header.php';

$tweet = new tweet($bdd);
$tweet->init(1) . "<br>";
echo "DATE TWEET:  <br>" . $tweet->getDate() . "<br><br>";
$Date = $tweet->getDate();

 
 setlocale(LC_TIME, 'fr');
  
 //$dtt = $tweet->query('SELECT * FROM heure ORDER BY datetimet DESC');
 //$dtt = $dtt->fetch()['datetimet'];
 //var_dump($dtt);
  
 //$var = ucfirst(strftime('%A, le %d ',strtotime($dtt)));
 //$var .= ucfirst(strftime('%B %Y',strtotime($dtt)));
// var_dump($var);

?>