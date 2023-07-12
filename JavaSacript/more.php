<?php 
include("dbh.php");
include("load-comments.php")

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
 <script>

  $(document).ready(function(){
   var commentCount = 2;
   $("button").click(function(){
    commentCount = commentCount + 2;
    $("#comments").load("load-comments.php");
    commentNewCount: commentCount;
   })
  })
 </script>
 
 <div id="demo">
  
 </div>
 <button>Show More Comment</button>
</body>
</html>