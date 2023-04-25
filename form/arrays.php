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
 echo count($scores) .'<br>';

 // $html['title'] = 'PHP Associative Arrays';
 // $html['description'] = 'Learn how to use associative arays in PHP';
 // print_r($html) .'<br>';
 

 $colors = ['red', 'green', 'blue'];
 foreach($colors as $color){
  echo $color .'<br>';
 }
 echo '<pre>';
 echo $color;
 echo '<pre>';
 $capitals = [
  'Japan' => 'Tokyo',
  'France' => 'Paris',
  'Germany' => 'Berlin',
  'United Kingdom' => 'London',
  'United State' => 'Washington'
 ];
 foreach($capitals as $country=> $capital){
  echo "The capital of {$country} is {$capital}" .'<br>';
 };
echo '<pre>';
print_r ($capitals);
echo '<pre>';
 ?></h1>
</body>
</html>