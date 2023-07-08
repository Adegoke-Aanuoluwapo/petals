<?php

class User{

 public $name;
 public $email;
 public $password;

 function set_name($name){
  $this->name = $name;
 }
}

$user1 = new User();

$user1->set_name("Brad");


echo $user1->name


?>