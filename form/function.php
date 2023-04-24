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
     <h1><?php
          // function create_anchor($text, 
          // $href= '#',
          // $title='',
          // $target='_self'){
          //      $href=$href ? sprintf('href="%s"', $href): '';
          //      $title = $title ? sprintf('title="%s"', $title) : '';
          //      $target= $target ? sprintf('target="%s"', $target) : '';

          //      return "<a href $title $target>$text</a>";
          // }

          // $link = create_anchor("PHP Tutorial", 'https://www.phptutorial.net/',  $target = '_blank');

          // echo $link
          // 
          ?></h1>
     <h1><?php
          $message = "talk and do ";

          function talk()
          {
               global $message;
               echo $message;
          }
          talk() . "<br>";
          echo $message;
          ?></h1>
     <h2><?php
          function get_counter()
          {
               static $counter = 1;
               return $counter++;
          }
          echo get_counter() . '<br>';
          echo get_counter() . '<br>';
          echo get_counter() . '<br>';
          echo get_counter() . '<br>';
          echo get_counter() . '<br>';
          ?></h2>
          <h1><?php
          
          ?></h1>

</body>

</html>