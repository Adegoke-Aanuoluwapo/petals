<?php


class Song
{
  public $name;
  public $numberofPlays;

  public function __construct(string $name, int $numberofPlays)
  {
    $this->name = $name; 
    $this->numberofPlays = $numberofPlays; 
  }
}