<?php
  function inverse($x){
   if(!$x){
    throw new Exception('Division by zero');
   }
   return 1/$x;
  } 
  try{
   echo inverse(5);
   echo inverse(0);
  }catch(Exception $e){
   echo 'Caught Exception', $e->getMessage(), ' ';
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
     javascsript
    </title>
    </head>


    <body>

    </body>

</html>
    