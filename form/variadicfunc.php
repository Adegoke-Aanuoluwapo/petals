<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <?php
 function sum(){
  $numbers = func_get_args();
  $total = 0;
  for ($i =0; $i < count($numbers); $i++){
   $total += $numbers[$i];
  }
  return $total;

 }
 echo sum(39, 34, 20)
 
 ?>
</body>
</html>