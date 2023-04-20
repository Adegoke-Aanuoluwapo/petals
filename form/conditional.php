<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>
 <?php $is_admin = true; ?>
 <?php if ($is_admin) : ?>
  <a href="#">Edit</a>
 <?php endif; ?>
 <a href="#">View</a>

 <?php
 $checked = 'on';
 if ($checked = 'off') {
  echo 'The checkbox has not been checked';
 }
 ?>
 <h1><?php $is_authenticated = false;
     if ($is_authenticated) {
      echo "Welcome";
     } else {
      echo 'You are not authorized to access this page';
     }


     ?></h1>
 <?php $is_authenticated = true; ?>
 <?php if ($is_authenticated) : ?>
  <a href="#">Logout</a>
 <?php else : ?>
  <a href="#">Login</a>
 <?php endif ?>

 <?php
 $x = 10;
 $y = 20;

 if ($x > $y) {
  $message = 'x is greater than y';
 } elseif ($x < $y) {
  $message = ' x is less than y';
 } else {
  $message = 'x is equal to y';
 }


 ?>
 <h2><?php
     echo $message;

     $a = 14;
     $b = 40;
     if ($a > $b):
        $messarge = 'a is greater than b';
     elseif($a < $b):
        $messarge = 'a is less than b';
     else:
        $messarge = 'a is equal to b';
     endif;
     ?></h2>
     <h1><?php 
     echo $messarge
     
     ?></h1>
</body>

</html>