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




echo $user1->email ."<br>";
echo $user2->name



?>