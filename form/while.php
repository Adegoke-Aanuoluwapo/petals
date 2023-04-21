<?php  // $i = 0;
   // do {
   //  echo $i  . '<br>';
   //  $i++;
   // } while ($i <= 20);

   // for ($i =0; $i <10; $i++){
   //  if ($i ===8){
   //  break;
   //  }
   //  echo "$i\n";
   // }
   // $j = 0;
   // do{
   //  if ($j ===7){
   //  break;
   //  }
   //  echo "$j\n";
   //  $j++;
   // }while($j <= 10);
   // $i = 0;
   // $j = 0;

   // for ($i = 1; $i < 5; $i++) {
   //  for ($j = 1; $j < 5; $j++) {
   //   $times = $i * $j;
   //   echo $times;
   //  }
   //  echo '<br>';
   // }
   ?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>


<?php
$i = 0;
$j = 0;
for ($i = 0; $i < 7; $i++){
 for ($j = 0; $j < 5; $j++){
  if ($i === 5){
   break ;
  }
  echo "($i, $j)\n";
 }
}

?>
<h2><?php 
for($c = 0; $c < 10; $c++){
   if($c % 2 === 0){
      continue;
   }
   echo "$c\n";
}

?></h2>
<h1><?php ?></h1>
 </html>