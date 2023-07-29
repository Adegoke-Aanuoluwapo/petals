<?php


class Song
{
  public $name;
  public int $numberofPlays;

  public function __construct(string $name, int $numberofPlays)
  {
    $this->name = $name; 
    $this->numberofPlays = $numberofPlays; 
  }
}