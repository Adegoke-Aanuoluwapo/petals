<?php
require_once 'Book.php';
$physicalBook = new Book('A Random Book', 'Jane Doe', 30000, 'physical');
$digitalBook = new Book('A Random Book', 'Jane Doe', 30000, 'digital');
var_dump($physicalBook). '<br>';
print $physicalBook->title . '<br>';

print $physicalBook->print(). '<br> ';
print $digitalBook->print();