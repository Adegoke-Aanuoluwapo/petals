<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>My Shop</title>
 <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
 <div class="container my-5">
  <h2>List of clients </h2>
  <a class="btn btn-primary" href="/myshop/create.php" role="button">New Clients</a><br>
  <table class="table">
   <thead>
    <tr>
     <th>ID</th>
     <th>Name</th>
     <th>Email</th>
     <th>Phone</th>
     <th>Address</th>
     <th>Created At</th>
     <th>Action</th>
    </tr>
   </thead>
   <tbody>
    <?php 
    
    
    ?>
    <tr>
     <td>10</td>
     <td>Bill Gates</td>
     <td>bill.gates@gmail.com</td>
     <td>+11113334445</td>
     <td>New York, USA</td>
     <td>18/05/2023</td>
     <td>
      <a class="btn btn-primary btn-sm" href="/myshop/edit.php">Edit</a>
      <a class="btn btn-danger btn-sm" href="/myshop/delete.php">Delete</a>
     </td>

    </tr>
   </tbody>
  </table>
 </div>
</body>

</html>