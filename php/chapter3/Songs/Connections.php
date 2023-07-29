<?php


class Connection
{
  public int $count = 0;

  public function __construct()
  {
    $this->count++; 
  }
}