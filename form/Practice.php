<?php

$email = null;
var_dump($email);
$name = "Edward";
var_dump($name);
echo $name;
$email = null;
$result = ($email === null);
var_dump($result);

$home = 'phptutorial.net';
$result2 = ($home === null);

$amount = 100;
$is_user_logged_in = true;


?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>
 <h1>
  <?php var_dump($result2) . '<br>';
  echo (int)12.8 . '<br>';
  echo "$" . $amount . '<br>';
  echo $is_user_logged_in;
  $qty = 20;
  if ($qty == '20') {
   echo 'Equal';
  }
  $total = 100;
  $qty = 20;
  $total = $total + $qty;

  echo $total;
  $x = 20;
  $y = 10;
  $add = $x + $y;
  $prod = $x * $y;
  $sub = $x - $y;
  $div = ($x / $y);
  echo $add . '<br>';
  echo $prod . '<br>';
  echo $sub . '<br>';
  echo ($div) . '<br>';
  echo gettype($add) . '<br>';
  echo gettype($prod) . '<br>';
  echo gettype($sub) . '<br>';
  echo gettype($div) . '<br>';
  $strand = 'PHP' . ' is ' . ' awesome';
  echo $strand . '<br>';
  echo 4 + 5 * 3;
  $greeting = 'Hello';
  $name = 'John';
  $greeting = $greeting . ' ' . $name;
  echo $greeting
  ?>

 </h1>
 <h2>
  <?php $priority = 5;
  echo $priority;
  $is_admin = true;
  $can_approve = true;
  if ($is_admin) {
   echo 'Welcome, admin';
   if ($can_approve) {
    echo 'Please approve the pending';
   }
  }
  ?>
 </h2>
</body>

</html>