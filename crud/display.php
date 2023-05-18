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
if($result){
 
 while($row = mysqli_fetch_assoc($result));
}


?>


   <!-- <tr>
    <th scope="row">1</th>
    <td>Mark</td>
    <td>Otto</td>
    <td>@mdo</td>
   </tr>
   <tr>
    <th scope="row">2</th>
    <td>Jacob</td>
    <td>Thornton</td>
    <td>@fat</td>
    <td>Thornton</td>
    <td>@fat</td>
   </tr>
   <tr>
    <th scope="row">3</th>
    <td colspan="2">Larry the Bird</td>
    <td>@twitter</td>
   </tr>
   <tr>
    <th scope="row">3</th>
    <td colspan="2">Larry the Bird</td>
    <td>@twitter</td>
   </tr>
   <tr>
    <th scope="row">3</th>
    <td colspan="2">Larry the Bird</td>
    <td>@twitter</td>
   </tr> -->
  </tbody>
 </table>
</body>

</html>