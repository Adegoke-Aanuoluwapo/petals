<?php

require_once "Counter.php";
require_once "Connections.php";

$connnection1 = new Connection();


print $connnection1->count. '<br>';
//print Counter::$count;

$connnection2 = new Connection();

print $connnection2->count;
