<?php 
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "grit";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){
    die("failed to connect");
}

if(isset($_POST['submit'])){
 $name =$_POST['name'];
 $code =$_POST['code'];

 $sql = "INSERT INTO people(name, code) VALUES('$name', '$code')";
 $result = mysqli_query($con , $sql);
 if($result){
  echo "data inserted successfully";
 }
 else{
  die(mysqli_error($con));
 }

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
 <form method="POST">
  <label for="name">Name 
 </label>
 <input type="text" name="name"><br>
 <label for="name">Code 
 </label>
 <input type="text" name="code"><br>
 <input type="submit" name="submit">
 </form>
 
</body>
</html>