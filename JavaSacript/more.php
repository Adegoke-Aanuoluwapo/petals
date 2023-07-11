<?php 
include("dbh.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
</head>
<body>
 
 <div id="demo">
  <?php
  $sql = "SELECT * FROM comments";
  $result = mysqli_query($conn,$sql); 
  if(mysqli_num_rows($result) >0){
    while($row = mysqli_fetch_assoc($result))
    {
     
     echo "<p>";
     echo $row['author'];
        echo "<br>";
     echo $row['message'];
     echo "</p>";
        

    }
  }
  ?>
 </div>
</body>
</html>