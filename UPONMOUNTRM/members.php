<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>members</title>
</head>

<body>
 <div class="container my-5">
  <h2>Members Profile</h2>
  <a class="btn btn-primary" href="addmembers.php" role="button">New Members</a>
 </div>
 <table>
  <thead>
   <tr>
    <th>ID</th>
    <th>FullNames</th>
    <th>Sex</th>
    <th>Position</th>
    <th>State</th>
   </tr>
  </thead>
  <tbody>
   <?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $database = "myshop";
   // Create connection
   $connection = new mysqli($servername, $username, $password, $database);
   // Check connection

   if ($connection->connect_error) {
    die("Connection failed: " . $connection_error);
   }
   //read all row from database
   $sql = "SELECT * FROM clients";
   $result = $connection->query($sql);
   $row;
   if (!$result) {
    die("Invalid query: " . $connection->error);
   }
   while ($row = $result->fetch_assoc()) {

   ?>
    <tr>
     <td><?= $row['id'] ?></td>
     <td><?= $row['fullnames'] ?></td>
     <td><?= $row['sex'] ?></td>
     <td><?= $row['position'] ?></td>
     <td><?= $row['state'] ?></td>
     <a class="btn btn-primary btn-sm" href="edit.php?id=<?= $row['id'] ?>">Edit</a>
     <a class="btn btn-danger btn-sm" href="delete.php?id=<?= $row['id'] ?>">Delete</a>
     </td>
    </tr>
   <?php } ?>
  </tbody>
 </table>
</body>

</html>