<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <?php
 echo "You are Welcome";

 function welcome(){
  echo "You are welcome";
 }
 welcome();

 function welcome_user($username){
  return 'Welcome '. $username . "!";
 }

 echo welcome_user("Ojindo")
 ?>
</body>
</html>