<?php

require_once __DIR__ . "./classes/User.php";

$ciccio = new User("Ciccio","Pasticcio", "12-12-2002");

echo $ciccio->getNome(),$ciccio->getCognome(),$ciccio->getdataDiNascita();