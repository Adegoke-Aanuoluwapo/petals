<?php
$is_user_logged_in = false;
// if ($is_user_logged_in) {
//  $title = 'Logout';
// } else {
//  $title = 'Login';
// }
$title = $is_user_logged_in ? 'Logout' : 'Login';
$path = '/about';
$url = $path ?: '/';
$eligible = true;
$has_credit = false;

$message = $eligible

 ? ($has_credit
  ? 'Can use the credit'
  : 'Not enough credit')

 : 'Not eligible to buy';

$posts = ['First and Second Ternary post'];


?>


<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>
 <?php echo $title ?>
 <h1><?php
     echo $url;
     echo $message . '<br>';
     // if (!empty($posts)) {
     //  echo $posts[0];
     // }
     // else{
     //  echo 'No Post';
     // }
     echo !empty($posts) ? $posts[0] : 'No Post';
     ?></h1>
</body>

</html>