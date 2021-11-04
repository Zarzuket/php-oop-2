<?php

require __DIR__ . "./classes/User.php";
require __DIR__ . "./classes/Product.php";
require __DIR__ . "./classes/UserPremium.php";

$mario = new User("mario","rossi","12-2-1234",0);
echo($mario->setCassa(0));
$dav = new UserPremium("dav","bajo","17/7/92",0);
$tamburo = new Product("tamburo","20","sturmento musicale", 4);
echo ($tamburo->getNome());
echo ($tamburo->getPrezzo());
var_dump($dav->getPremium());
echo($dav->setCassa(100));
echo("la cassa di dav è:{$dav->getCassa()} <br>");
var_dump($dav->getPremium());
echo($dav->setCassa(0));
echo("la cassa di dav è (2):{$dav->getCassa()} <br>");
echo($dav->setCassa(100));
echo("la cassa di dav è (3):{$dav->getCassa()} <br>");
echo($dav->setCassa(0));


