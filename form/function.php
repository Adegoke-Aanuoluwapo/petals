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

     //  function concat($str1, $str2){
     //                          return $str1 . $str2;
     //  }
     //  $greeting = concat("Welcome ", "Admin");


     //  echo $greeting;
     //  
     ?>
     // <?php
          //  $counter = 1;
          //  function increase($value){
          //       $value+= 1;
          //       echo $value. '<br>';
          //  }
          //  increase($counter);
          //  echo $counter . "<br>";

          //  
          ?>
     // <?php
          // $gain = 1;
          // function increment(&$value){
          //      $value += 1;
          //      echo $value . "<br>";


          // }
          // increment($gain);

          // echo $gain . "<br>";


          // 
          ?>
     <!-- <?php
          function concat($str1, $str2, $delimiter)
          {
               return $str1 . $delimiter . $str2;
          }
          $message = concat('Hi', 'there!', ' ');

          echo $message
          ?> -->
     <h1><?php
          function find($needle, $heystack)
          {
               return strpos($heystack, $needle);
          }
          echo find('awesome', 'PHP is awesome')
          ?></h1>

</body>

</html>