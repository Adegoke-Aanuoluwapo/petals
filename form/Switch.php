<?php
$role = 'subscriber';
$message = '';
if ('admin' === $role){
 $message = 'Welcome, admin!';
}elseif('editor'===$role){
 $message= 'Welcome editor, you have some pending article to edit';
}
elseif('author'===$role){
 $message= 'Welcome! Do you want to publish';
}
elseif('subscriber' ===$role){
 $message = 'Welcome! check out some new articles';
}
else{
 $message = 'Sorry! you are not authorize to access this page';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <h2><?php 
 echo $message;
 ?></h2>
</body>
</html>