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
  <tbody>
   <tr>
    <td><?= $row['s/n'] ?></td>
    <td><?= $row['fullnames'] ?></td>
    <td><?= $row['sex'] ?></td>
    <td><?= $row['position'] ?></td>
    <td><?= $row['state'] ?></td>
   </tr>
  </tbody>
 </table>
</body>

</html>