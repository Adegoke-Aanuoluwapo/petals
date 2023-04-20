<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>
 <?php $is_admin = true; ?>
 <?php if ($is_admin) : ?>
  <a href="#">Edit</a>
 <?php endif; ?>
 <a href="#">View</a>

 <?php 
 $checked = 'on';
 if($checked = 'off'){
  echo 'The checkbox has not been checked';
 }
 ?>
 <h1><?php $is_authenticated = false;
 if($is_authenticated){
  echo "Welcome";
 }else{
  echo 'You are not authorized to access this page';
 }
 
 
 ?></h1>
</body>

</html>