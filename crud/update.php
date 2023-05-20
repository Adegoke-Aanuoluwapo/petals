<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "SELECT * FROM members where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$fullname = $row['fullname'];
$phone = $row['phone'];
$email = $row['email'];
$sex = $row['sex'];
$status = $row['status'];
$state = $row['state'];

if (isset($_POST['submit'])) {
 $fullname = $_POST['fullname'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $sex = $_POST['sex'];
 $status = $_POST['status'];
 $state = $_POST['state'];


 $sql = "UPDATE members set id='$id',fullname='$fullname', phone='$phone',email='$email',sex='$sex', status='$status', state='$state' where id=$id ";

 $result = mysqli_query($con, $sql);
 if ($result) {
  // echo "Data inserted successfully";
  header('location:display.php');
 } else {
  die(mysqli_error($con));
 }
}




?>




<!doctype html>
<html lang="en">

<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- Bootstrap CSS -->

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

 <title>crud operation</title>
</head>

<body>
 <div class="container my-5">
  <form method="post">
   <div class="mb-3">
    <label class="form-label">Full Names</label>
    <input type="text" class="form-control" name="fullname" placeholder="Enter your fullnames" autocomplete="off" value=<?php echo $fullname ?>>

   </div>
   <div class="mb-3">
    <label class="form-label">Phone</label>
    <input type="tel" class="form-control" name="phone" placeholder="Enter your phone number" autocomplete="off" value=<?php echo $phone ?>>
   </div>
   <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name="email" placeholder="Enter your email" autocomplete="off" value=<?php echo $email ?>>

    <div class="mb-3">
     <label class="form-label">Sex</label>
     <select name="sex" id="" class="form-control">

      <option <?php $status == 'male' ? 'selected' : ''; ?> value="male">Male</option>
      <option <?php $status == 'female' ? 'selected' : '' ;?> value="female">Female</option>
     </select>

    </div>
    <div class="mb-3">
     <label class="form-label">Status</label>
     <select name="status" id="" class="form-control">

      <option <?php $status == 'member' ? 'selected' : ''; ?> value="member">Member</option>
      <option <?php $status == 'worker' ? 'selected' : ''; ?> value="worker">Worker</option>

     </select>


    </div>
    <div class="mb-3">
     <label for="exampleInputPassword1" class="form-label">State</label>
     <select name="state" id="" class="form-control">

      <option <?= $state == 'abuja' ? 'selected' : '' ?> value="abuja">Abuja</option>
      <option <?= $state == 'lagos' ? 'selected' : '' ?> value="lagos">Lagos</option>
      <option <?= $state == 'ondo' ? 'selected' : '' ?> value="ondo">Ondo</option>
     </select>

    </div>

   </div>

   <button type="submit" class="btn btn-primary" name="submit">Update</button>
  </form>
 </div>
 <table class="table">
  <thead>
   <tr>
    <th>sn</th>
    <th>Full Names</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Sex</th>
    <th>Status</th>
    <th>State</th>
   </tr>
  </thead>
  <tbody>
   <tr>
    <?php
    $i = 1;
    $sql = $con->query("SELECT * FROM members");
    while ($rows = $sql->fetch_assoc()) {
    ?>
     <th scope="row"><?= $i++ ?> </th>
     <td><?= $rows['fullname'] ?></td>
     <td><?= $rows['phone'] ?></td>
     <td><?= $rows['email'] ?></td>
     <td><?= $rows['sex'] ?></td>
     <td><?= $rows['status'] ?></td>
     <td><?= $rows['state'] ?></td>
   </tr>
  <?php } ?>


  </tbody>
 </table>


</body>

</html>