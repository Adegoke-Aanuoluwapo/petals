<?php
include 'connect.php'
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>crud operation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container ">
    <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add user</a></button>
  </div>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">sn</th>
        <th scope="col">Full Names</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Sex</th>
        <th scope="col">Status</th>
        <th scope="col">State</th>
        <th scope="col">Operation</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM members ";
      $result = mysqli_query($con, $sql);
      if ($result) {

        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          $fullname = $row['fullname'];
          $phone = $row['phone'];
          $email = $row['email'];
          $sex = $row['sex'];
          $status = $row['status'];
          $state = $row['state'];
          echo '<tr>
   <th scope="row">' . $id . '</th>
   <td>' . $fullname . '</td>
    <td>' . $phone . '</td>
     <td>' . $email . '</td>
      <td>' . $sex . '</td>
         <td>' . $status . '</td>
            <td>' . $state . '</td>
            <td>
        <button class="btn btn-primary"><a href="update.php" class="text-light">Update</a></button>
          <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>

      </td>

   </tr>';
        }
      }


      ?>


    </tbody>
  </table>
</body>

</html>