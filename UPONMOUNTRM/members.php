<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "myshop";
// Create connection
$connection = new mysqli($servername, $username, $password, $database);

?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <table>
  <thead>
   <tr>
    <th>s/n</th>
    <th>FullNames</th>
    <th>Sex</th>
    <th>Position</th>
    <th>State</th>
   </tr>
  </thead>
 </table>
</body>
</html>