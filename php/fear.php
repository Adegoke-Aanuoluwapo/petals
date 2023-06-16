<?php 
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "grit";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){
    die("failed to connect");
}

if(isset($_POST['submit'])){
 $fear = $_POST['fear'];
 

 $sql = "INSERT INTO fears(fear) VALUES('$fear')";
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
 <title>Fear</title>
</head>
<body>
 <form method="POST">
  <label for="name">Fear
 </label>
 <input type="text" name="fear"><br>

 <input type="submit" name="submit">
 </form>
 
</body>
</html>