<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <h1><?php
  $scores = [1, 2, 3, 5];
 // echo '<pre>';
 // print_r($scores);
 // echo '<pre>';

 function print_array($data){
  echo '<pre>';
  print_r($data);
  echo '</pre>';
 }
 print_array($scores)
 
 ?></h1>
</body>
</html>