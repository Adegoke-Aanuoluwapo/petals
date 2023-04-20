<?php
$role = 'editor';
$message = '';
// if ('admin' === $role){
//  $message = 'Welcome, admin!';
// }elseif('editor'===$role){
//  $message= 'Welcome editor, you have some pending article to edit';
// }
// elseif('author'===$role){
//  $message= 'Welcome! Do you want to publish';
// }
// elseif('subscriber' ===$role){
//  $message = 'Welcome! check out some new articles';
// }
// else{
//  $message = 'Sorry! you are not authorize to access this page';
// }

switch ($role){
 case 'admin':
  $message ="welcome, admin";
 break;
 case 'editor':
  $message = "Welcome! You have some pending articles to edit";
 break;
 case 'author':
  $message = "Welcome! You have some articles to publish";
 break;
 case 'subscriber':
  $message = "Welcome! You have some articles to read";
 break;
 default:
 $message = "Sorry you are not permitted to this page"; 

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <h2><?php 
 echo $message;
 ?></h2>
</body>
</html>