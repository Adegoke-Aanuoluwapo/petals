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
}