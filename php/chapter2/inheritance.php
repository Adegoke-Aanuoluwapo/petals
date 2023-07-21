<?php

require_once 'PhysicalBook.php';
require_once 'DigitalBook.php';
$physicalBook = new PhysicalBook('A Random Book', 'Jane Doe', 3000, 300);
$digitalBook = new DigitalBook('A Random Book', 'Jane Doe', 30000, 1048);
var_dump($physicalBook). '<br>';
print $physicalBook->title . '<br>';

print $physicalBook->getPriceAsCurrency(). '<br> ';
print $digitalBook->print();