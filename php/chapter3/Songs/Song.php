<?php


class Song
{
  public $name;
  public int $numberofPlays;
  /**
   *  
   */
  private int|float $rating;

  public function __construct(string $name, int $numberofPlays)
  {
    $this->name = $name; 
    $this->numberofPlays = $numberofPlays; 
  }


  public function setRating(int|float $rating):void{
    $rating = max(0, $rating);
    $this->rating = min(5, $rating);


  }

  public function getRating():int|float
}