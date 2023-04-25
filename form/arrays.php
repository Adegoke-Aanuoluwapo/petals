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
 print_array($scores);
 echo $scores[0];
 $scores[4] = 34;
 print_array($scores);
 echo count($scores);

 $html['title'] = 'PHP Associative Arrays';
 $html['description'] = 'Learn how to use associative arays in PHP';
 print_r($html)
 
 ?></h1>
</body>
</html>