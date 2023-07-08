<?php

class User{

 public $name;
 public $email;
 public $password;

 function set_name($name){
  $this->name = $name;
 }
 function get_name(){
  return $this->name;
 }
}

$user1 = new User();
$user2 = new User();

$user1->set_name("Brad");
$user2->set_name("ajike");


echo $user1->name;
echo $user2->name;


?>