<?php
require_once 'Book.php';
$physicalBook = new Book('A Random Book', 'Jane Doe', 30000);
$digitalBook = new Book('A Random Book', 'Jane Doe', 30000);
var_dump($physicalBook). '<br>';
print $physicalBook->title . '<br>';

print $physicalBook->getAuthor();