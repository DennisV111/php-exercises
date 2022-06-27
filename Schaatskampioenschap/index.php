<?php

require 'classes/Kampioenschap.php';
require 'classes/Schaatser.php';
require 'classes/Rit.php';

$kampioenschap = new Kampioenschap();

$schaatser1 = new Schaatser("Tomi");
$rit1a = new Rit("500",334343);
$rit1b = new Rit("5000",994343);

$schaatser2 = new Schaatser("Dennis");
$rit2a = new Rit("500",354343);
$rit2b = new Rit("5000",984343);

$schaatser1->addRit($rit1a);
$schaatser1->addRit($rit1b);
$schaatser2->addRit($rit2a);
$schaatser2->addRit($rit2b);

$kampioenschap->addSchaatser($schaatser1);
$kampioenschap->addSchaatser($schaatser2);

$uitslag = $kampioenschap->calcUitslag();

require 'index.view.php';

?>