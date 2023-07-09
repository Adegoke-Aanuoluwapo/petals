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
$user3 = new User();
$user4 = new User();

$user1->set_name("Brad");
$user2->set_name("ajike");

echo $user1->get_name()." <br>";
echo $user2->get_name()



?>