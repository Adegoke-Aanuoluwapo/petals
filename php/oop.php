<?php

class User{


 public $name;
 public $email;
 public $password;
 public function __construct($name, $email, $password){
  $this->name = $name;
  $this->email = $email;
  $this->password = $password;
 }

 function set_name($name){
  $this->name = $name;
 }
 function get_name(){
  return $this->name;
 }
}

$user1 = new User('Brad', 'brad@gmail.com', '34344');
$user2 = new User('Ejire', 'Ejire@gmail.com', '34443');


$user1->set_name("Brad");
$user2->set_name("ajike");

echo $user1->get_name()." <br>";
echo $user2->get_name()



?>