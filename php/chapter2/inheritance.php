<?php

require_once 'PhysicalBook.php';
require_once 'DigitalBook.php';


$book = new Book("Ake Years of childhood", "Wole Soyinka", 500);
print $book->print();
// $physicalBook = new PhysicalBook('A Random Book', 'Jane Doe', 3000, 390 );
// $digitalBook = new DigitalBook("Ake Years of childhood", "Wole Soyinka", 4500, 2098);


// var_dump($physicalBook). '<br>';
// print $physicalBook->title . '<br>';

// print $physicalBook->print(). '<br> ';
// print $digitalBook->print();
