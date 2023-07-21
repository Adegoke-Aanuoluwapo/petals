<?php

require_once "Book.php";

class DigitalBook extends Book
{
 
    public $title;
    public $author;
    public $price;
    
    public $fileSize;
    

    public function __construct(string $title, string $author, int $price, int $fileSize = 0 ){
     $this->title = $title;
     $this->author = $author;
     $this->price = $price;

     $this->fileSize = $fileSize;
    
    }

    public function getTitle(): string
    {
       return $this->title;
    }
     public function getAuthor(): string
    {
       return $this->author;
    }
     public function getPrice(): int
    {
       return $this->price;
    }
   
  
      public function getFileSize(): int
    {
       return $this->fileSize;
    }
      public function print(): string
    {
     return "{$this->title}, {$this->author}, FileSize: {$this->fileSize}";
    }
}