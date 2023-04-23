<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>
 <!-- <?php
      echo "You are Welcome";

      function welcome()
      {
       echo "You are welcome";
      }
      welcome();

      function welcome_user($username)
      {
       return 'Welcome ' . $username . "!";
      }

      echo welcome_user("Ojindo");
      ?> -->
 <?php function welcom_user($username)
 { ?>
  <span>welcome<?= $username ?></span>

 <?php }
 echo welcom_user(" Olugunade");

 function concat($str1, $str2){
                         return $str1 . $str2;
 }
 $greeting = concat("Welcome ", "Admin");


 echo $greeting;
 ?>
 <?php 
 $counter = 1;
 function increase($value){
      $value+= 1;
      echo $value. '<br>';
 }
 increase($counter);
 echo $counter . "<br>";

 ?>

</body>

</html>