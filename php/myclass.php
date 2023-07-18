<?php
class Myclass
{
 public readonly string $username;
 public function __construct(string $username)
 {
  $this->username = $username;
 }
}

$user = new Myclass('joe', 'secure');
echo ($user);